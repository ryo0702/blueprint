<ul class="slider mt-xl" data-slick='{"infinite":true,"autoplay":true,"autoplaySpeed": 0,"slidesToShow":3,"slidesToScroll":1,"speed":8000,"centerMode":true,"cssEase":"linear"}'>
  <?php
  for ($i=0; $i <= 8; $i++) {
    echo '<li>
      <div class="thumbnail thumbnail-silver">
        <img src="'.get_template_directory_uri().'/images/sample/sample-japanese-business01.png" alt="">
      </div>
    </li>';
  }
  ?>
</ul>