<main class="contents">
<?php
$arr_config_page_data = $arr_section_type = null;
$arr_config_page_data = get_post_meta(get_the_ID(),'config-page',true);
if(is_array(@$arr_config_page_data['sort'])){
  foreach (@$arr_config_page_data['sort'] as $section_sort) {
    $section_view = $section_view_inner = $section_key = $section_number = $section_key_number = $arr_section_data = null;
    echo '<div class="section-wrap">';
    if (strpos($section_sort['section-type'], '-') !== false) {
      $arr_section_type = explode('-', $section_sort['section-type']);
      if(file_exists(get_template_directory().'/views/parts/section/'.$arr_section_type[0].'.php')){
        $section_key = $arr_section_type[0];
        $section_number = $arr_section_type[1];
        $section_key_number = $section_key.'-'.$section_number;
        $arr_section_data = $arr_config_page_data['contents-'.$section_key];
        include get_template_directory().'/views/parts/section/'.$section_key.'.php';
      }
    }
    echo '</div>';
  }
}
?>
  <section class="bgc-tertiary">
    <div class="container">
      <div class="title-group">
        <h2 class="title">事業内容のご紹介</h2>
        <div class="title-eng">OUR SERVICE</div>
      </div>
      <div class="row row-4column">
        <div class="col position-relative">
          <div class="badge badge-circle">1</div>
          <div class="thumbnail thumbnail-silver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">会社概要</a></h3>
            <p class="mt-xs text-s">当社の事業内容・会社概要のご説明</p>
          </div>
        </div>
        <div class="col position-relative">
          <div class="badge badge-circle">2</div>
          <div class="thumbnail thumbnail-silver ">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">採用情報</a></h3>
            <p class="mt-xs text-s">新卒採用・中途採用 ご応募受付中</p>
          </div>
        </div>
        <div class="col position-relative">
          <div class="badge badge-circle">3</div>
          <div class="thumbnail thumbnail-silver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">IR情報</a></h3>
            <p class="mt-xs text-s">株主の皆様へ、事業内容・状況のご説明</p>
          </div>
        </div>
        <div class="col position-relative">
          <div class="badge badge-circle">4</div>
          <div class="thumbnail thumbnail-silver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">IR情報</a></h3>
            <p class="mt-xs text-s">株主の皆様へ、事業内容・状況のご説明</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="heroimage hero-h50vh">
    <div class="bgi" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png');">
    </div>
  </div>

  <section>
    <div class="container">
      <div class="title-group">
        <h2 class="title">当社について</h2>
        <div class="title-eng">ABOUT US</div>
      </div>
      <div class="row row-3column">
        <div class="col">
          <div class="thumbnail thumbnail-silver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">会社概要</a></h3>
            <p class="mt-xs text-s">当社の事業内容・会社概要のご説明</p>
          </div>
        </div>
        <div class="col">
          <div class="thumbnail thumbnail-silver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">採用情報</a></h3>
            <p class="mt-xs text-s">新卒採用・中途採用 ご応募受付中</p>
          </div>
        </div>
        <div class="col">
          <div class="thumbnail thumbnail-silver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-japanese-business01.png" alt="">
          </div>
          <div class="texts mt-m">
            <h3><a href="" class="text-m-plus">IR情報</a></h3>
            <p class="mt-xs text-s">株主の皆様へ、事業内容・状況のご説明</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-news">
    <div class="container">
      <div class="title-group">
        <h2 class="title">ニュース</h2>
        <div class="title-eng">NEWS RELEASE</div>
      </div>
      <div class="news-list">
        <ul>
          <?php
          for ($i=1; $i <= 5; $i++) { 
            echo '<li class="item">
            <a href="">
              <div class="item-category">新着情報</div>
              <div class="item-date">2021.01.01</div>
              <div class="item-titles">
                <div class="item-title">サンプルニュースタイトルが入ります</div>
                <div class="item-description">サンプルニュースタイトルが入ります。サンプルニュースタイトルが入ります。</div>
              </div>
              <div class="item-link"><span class="material-symbols-outlined">arrow_circle_right</span></div>
            </a>
          </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="bgc-tertiary">
    <div class="container">
      <div class="title-group">
        <h2 class="title">関連企業・団体</h2>
        <div class="title-eng">NEWS RELEASE</div>
      </div>
      <div class="row row-4column">
        <div class="col">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-banner.png" alt="" /></a>
          <div class="mt-xs tac text-s"><a href="">一般社団法人 架空団体三歩琉協会</a></div>
        </div>
        <div class="col">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-banner.png" alt="" /></a>
          <div class="mt-xs tac text-s"><a href="">一般社団法人 架空団体三歩琉協会</a></div>
        </div>
        <div class="col">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-banner.png" alt="" /></a>
          <div class="mt-xs tac text-s"><a href="">一般社団法人 架空団体三歩琉協会</a></div>
        </div>
        <div class="col">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/sample/sample-banner.png" alt="" /></a>
          <div class="mt-xs tac text-s"><a href="">一般社団法人 架空団体三歩琉協会</a></div>
        </div>
      </div>
    </div>
  </section>
  
</main>