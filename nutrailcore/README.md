# Nutrail Core

A Simple and Lightweight WordPress Framework.

```text
Node: 16.13.0
NPM:  8.19.3
PHP:  8.0.0
```

```text
git submodule add https://github.com/ryo0702/nutrailcore.git
```

### Variable scss

```scss
:root {
  // font family
  --font-body              : "Noto Sans JP", sans-serif;

  // Line height
  --line-height-base       : 1.5;
  --line-height-sm         : 1.25;
  --line-height-lg         : 2;

  // Box shadow
  --boxshadow              : 0 .5rem 1rem rgba(0, 0, 0, .15);
  --boxshadow-sm           : 0 .125rem .25rem rgba(0, 0, 0, .075);
  --boxshadow-lg           : 0 1rem 3rem rgba(0, 0, 0, .175);
  --boxshadow-inset        : inset 0 1px 2px rgba(0, 0, 0, .075);

  // Font size
  --font-size-base         : 14px;
  --font-size-small        : 10px;
  --font-size-h1           : calc(var(--font-size-base) * 2.5);
  --font-size-h2           : calc(var(--font-size-base) * 2);
  --font-size-h3           : calc(var(--font-size-base) * 1.75);
  --font-size-h4           : calc(var(--font-size-base) * 1.5);
  --font-size-h5           : calc(var(--font-size-base) * 1.25);
  --font-size-h6           : var(--font-size-base);

  // color
  --color-primary          : #2677E5;
  --color-primary-darken   : #1f62be;
  --color-secondary        : #6c757d;
  --color-secondary-darken : #586066;
  --color-danger           : #da0000;
  --color-danger-darken    : #bb0000;
  --color-warning          : #FF8900;
  --color-warning-darken   : #bb6400;
  --color-success          : #16b145;
  --color-success-darken   : #198639;
  --color-info             : #12C6F0;
  --color-info-darken      : #0d9ab9;

  --color-dark             : #000;
  --color-dark-lighten     : #525252;
  --color-dark-darken      : #131313;
  --color-light            : #fff;
  --color-light-darken     : #dadada;
  --color-light-lighten    : #fcfcfc;

  --color-black            : #000;
  --color-white            : #fff;

  --color-body             : #fff;
  --color-text             : #000;

  // gutter
  --gutter-y               : 15px;
  --gutter-x               : 15px;

  // Container
  --container              : 1042px;
  --container-s            : 800px;
  --container-xs           : 600px;
  --container-space        : 20px;

  // Navbar
  --navbar-h               : 80px;
  --navbar-logo-h          : 50px;
  --navbar-bgc             : #FFF;
  --navbar-fc              : #000;
  --navbar-fc-hover        : #000;
  --navbar-acc             : #000;
  --navbar-acc-hover       : #ff0000;
}

$font-size     : (1, 2, 3, 4, 5, 6) !default;

$spacing       : (auto, 0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 70, 80, 90, 100) !default;
$units         : (
  "p":"padding",
  "m":"margin"
) !default;

$aspect-ratios : (
  "1x1": 100%,
  "3x4": calc(4 / 3 * 100%),
  "4x3": calc(3 / 4 * 100%),
  "16x9": calc(9 / 16 * 100%),
  "21x9": calc(9 / 21 * 100%)
);

$theme-colors  : (
  "primary",
  "secondary",
  "success",
  "info",
  "warning",
  "danger",
  "light",
  "dark"
) !default;

$breakpoints   : (
  "sm": "screen and (min-width: 0px)",
  "md": "screen and (min-width: 768px)",
  "lg": "screen and (min-width: 992px)",
  "xl": "screen and (min-width: 1200px)",
) !default;
```

### Modal

```html
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#static-modal">
    Launch modal
</button>

<!-- Modal -->
<div class="modal fade" id="static-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Modal title</h1>
                <button type="button" class="btn-close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
```

### Slider

#### https://swiperjs.com

```html
<!-- Slider main container -->
<div class="swiper-carousel swiper" data-slider="{'slidesPerView': 3, 'spaceBetween': 30}">

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="swiper-slide">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="swiper-slide">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="swiper-slide">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
    </div>

    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
```

### Ratio

```html
.ratio .ratio-${aspect-ratios}
```

### Box shadow

```html
.boxshadow
.boxshadow-sm
.boxshadow-lg
.boxshadow-inset
```

### Text

```html
.fs-${font-size}
.fs-${breakpoint}-${font-size}

.text-line-${font-size}

.text-nowrap

.text-left
.text-right
.text-center
.text-justify

.fw-bold
.fw-bolder
.fw-semibold
.fw-normal
.fw-light
```

### Width

```html
.w-auto
.w-100
.vw-100
```

### Height

```html
.h-auto
.h-100
.hw-100
```

### Color

```html
.text-${theme-colors}
.bg-${theme-colors}
```

### Button

```html
.btn .btn-${theme-colors}
.btn .btn-outline-${theme-colors}
.btn-close
```
```

### Display

```html
.d-none
.d-${breakpoint}-none

.d-block
.d-${breakpoint}-block

.d-inline-block
.d-${breakpoint}-inline-block

.d-flex
.d-${breakpoint}-flex

.d-inline-flex
.d-${breakpoint}-inline-flex
```

### Flexbox

```html
.flex-wrap
.flex-nowrap

.flex-column
.flex-${breakpoint}-column

.flex-row
.flex-${breakpoint}-row


.justify-content-start
.justify-content-${breakpoint}-start

.justify-content-end
.justify-content-${breakpoint}-end

.justify-content-center
.justify-content-${breakpoint}-center

.justify-content-between
.justify-content-${breakpoint}-between


.align-items-start
.align-items-${breakpoint}-start

.align-items-end
.align-items-${breakpoint}-end

.align-items-center
.align-items-${breakpoint}-center

.align-items-baseline
.align-items-${breakpoint}-baseline

.align-items-start
.align-items-${breakpoint}-start


.align-self-start
.align-self-${breakpoint}-start

.align-self-end
.align-self-${breakpoint}-end

.align-self-center
.align-self-${breakpoint}-center

.align-self-baseline
.align-self-${breakpoint}-baseline

.align-self-start
.align-self-${breakpoint}-start
```

### Columns

```html
<div class="container">
    <div class="row cols-2 cols-md-3">
        <div class="col">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
    </div>
</div>
```

```html
<div class="container">
    <div class="row">
        <div class="col-6 col-md-4">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6 col-md-4">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6 col-md-4">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6 col-md-4">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6 col-md-4">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6 col-md-4">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
    </div>
</div>
```

### Gutters

```html
$value = 1 -> 12;

.g-${value}
.g-${breakpoint}-${value}

.gx-${value}
.gx-${breakpoint}-${value}

.gy-${value}
.gy-${breakpoint}-${value}

<div class="container">
    <div class="row gx-3 gx-md-6 gy-3 gy-md-12">
        <div class="col-6">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div class="col-6">
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
    </div>
</div>
```

### Flex gap

```html
$value = 1 -> 12;

.flex-gap-${value}
.flex-${breakpoint}-gap-${value}

.flex-column-gap-${value}
.flex-${breakpoint}-column-gap-${value}

.flex-row-gap-${value}
.flex-${breakpoint}-row-gap-${value}

<div class="container">
    <div class="d-flex flex-column-gap-3 flex-md-column-gap-6 flex-row-gap-3 flex-md-row-gap-12">
        <div>
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div>
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div>
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
        <div>
            <img src="https://via.placeholder.com/600?text=600x600" alt="">
        </div>
    </div>
</div>
```

### Flex order

```html
$value = 1 -> 6;

.order-${value}
.order-${breakpoint}-${value}

<div class="container">
    <div class="d-flex flex-column">
        <div class="order-1 order-md-2">
            <img src="https://via.placeholder.com/600?text=Order 01" alt="">
        </div>
        <div class="order-2 order-md-1">
            <img src="https://via.placeholder.com/600?text=Order 02" alt="">
        </div>
    </div>
</div>
```

### Padding

```html
.p-${spacing}
.p-${breakpoint}-${spacing}

.pl-${spacing}
.pl-${breakpoint}-${spacing}

.pr-${spacing}
.pr-${breakpoint}-${spacing}

.pt-${spacing}
.pt-${breakpoint}-${spacing}

.pb-${spacing}
.pb-${breakpoint}-${spacing}

.px-${spacing}
.px-${breakpoint}-${spacing}

.py-${spacing}
.py-${breakpoint}-${spacing}
```

### Margin

```html
.m-${spacing}
.m-${breakpoint}-${spacing}

.ml-${spacing}
.ml-${breakpoint}-${spacing}

.mr-${spacing}
.mr-${breakpoint}-${spacing}

.mt-${spacing}
.mt-${breakpoint}-${spacing}

.mb-${spacing}
.mb-${breakpoint}-${spacing}

.mx-${spacing}
.mx-${breakpoint}-${spacing}

.my-${spacing}
.my-${breakpoint}-${spacing}
```