const {__, _x, _n, _nx}  = wp.i18n;
const {getEntityRecords} = wp.data.select('core');

const getPosts = () => {
    const selections = [{
        label: __('Select a Post', 'wpa'),
        value: 0
    }];
    wp.apiFetch({path: "/wp/v2/posts"}).then(posts => {
        posts.forEach(post => {
            selections.push({
                label: post.title.rendered,
                value: post.id
            });
        });
    });
    return selections;
}

const getCategories = () => {
    const categories = getEntityRecords('taxonomy', 'category');
    const selections = [{
        label: __('Select a Category', 'wpa'),
        value: 0,
    }];
    if (categories != null) {
        categories.forEach(cat => {
            selections.push({
                label: `${cat.name} (${cat.count})`,
                value: cat.id,
            });
        });
    }
    return selections;
}

const getCategoriesTree = (limit, taxonomy) => {
    const categories = getEntityRecords('taxonomy', taxonomy, {per_page: limit});
    const selections = [];
    if (categories != null) {
        categories.forEach(cat => {
            selections.push({
                name  : `${cat.name} (${cat.count})`,
                id    : cat.id,
                parent: cat.parent,
            });
        });
    }
    return selections;
}

(function ($, blocks, editor, element, components) {

    const el            = element.createElement;
    const useBlockProps = editor.useBlockProps;

    const {BlockControls, InspectorControls, AlignmentToolbar} = editor;
    const {PanelBody, Placeholder, Spinner}                    = components;

    if (window.wpa_blocks){
        wpa_blocks.forEach(block => {

            const initFields = (props) => {
                const {attributes, setAttributes} = props;

                wp.ajax.post(block.action, {data: attributes.data}).done(function (response) {
                    const field = document.getElementById(block.action);
                    if (field !== null && response) {
                        field.innerHTML = response;
                        $(field).find('.wpa-fields').wpa_reload_script();
                        $(field).on('change', function () {
                            setAttributes({data: $(field).serializeObjectWPA()});
                            $(field).unbind();
                        });
                    }
                }).fail(function (response) {
                    console.log(response);
                })
            }

            const Edit = (props) => {
                const {attributes, setAttributes} = props;

                initFields(props);

                return el('div', useBlockProps(),
                    el(InspectorControls, {key: 'inspector'},
                        el(PanelBody, {
                                title      : __('Settings', 'wpa'),
                                initialOpen: true,
                                onToggle   : function (opened) {
                                    if (opened) {
                                        initFields(props);
                                    }
                                },
                            },
                            el('form', {id: block.action},
                                el(Placeholder, {className: 'wpa-placeholder'},
                                    el(Spinner)
                                )
                            ),
                        ),
                    ),
                    el(BlockControls, {key: 'controls'},
                        el(AlignmentToolbar, {
                            value   : attributes.alignment,
                            onChange: (value) => {
                                setAttributes({alignment: value === undefined ? 'left' : value});
                            },
                        })
                    ),
                    el(wp.serverSideRender, {
                        block                   : 'wpa/' + block.id,
                        httpMethod              : 'POST',
                        attributes              : attributes,
                        EmptyResponsePlaceholder: () => el(Placeholder,
                            {className: 'wpa-placeholder'},
                            __('Empty Response', 'wpa')
                        ),
                        ErrorResponsePlaceholder: () => el(Placeholder,
                            {className: 'wpa-placeholder'},
                            __('Error Response', 'wpa')
                        ),
                    })
                );
            }

            blocks.registerBlockType('wpa/' + block.id, {edit: Edit});
        });
    }

})(window.jQuery, window.wp.blocks, window.wp.blockEditor, window.wp.element, window.wp.components);