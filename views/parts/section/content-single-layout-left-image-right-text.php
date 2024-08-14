<section>
<div class="container">
  <div class="row row-4-3column gutter-l">
    <div class="col">
      <?php
      if(!empty($sectionData['section-content']['image']['url'])){
        echo '<div class="thumbnail thumbnail-silver">
          <img src="'.$sectionData['section-content']['image']['url'].'" alt="'.@$sectionData['section-content']['image']['alt'].'">
        </div>';
      }
      if(!empty($sectionData['section-content']['caption'])){
        echo '<p class="tac text-s mt-xs">'.nl2br(@$sectionData['section-content']['caption']).'</p>';
      }
      ?>
    </div>
    <div class="col position-relative">
      <?php if(!empty($sectionData['section-content']['title-sub'])){
        echo '<div class="text-xxl text-bg-title-right fc-tertiary tar">'.nl2br(@$sectionData['section-content']['title-sub']).'</div>';
      }
      ?>
      <?php if(!empty($sectionData['section-content']['title'])){
        echo '<h2 class="text-xl tar">'.nl2br($sectionData['section-content']['title']).'</h2>';
      }
      if(!empty($sectionData['section-content']['text'])){
        echo '<p class="mt-l text-m-plus tar">'.nl2br($sectionData['section-content']['text']).'</p>';
      }
      if(!empty($sectionData['section-content']['btn']['url'])){
        $target = null;
        if(!empty($sectionData['section-content']['target'])){
          $target = ' target="'.$sectionData['section-content']['target'].'"';
        }
        echo '<div class="mt-l tar"><a href="'.$sectionData['section-content']['btn']['url'].'" class="button button-ghost button-radius button-material-symbols-right"'.@$target.'>'.$sectionData['section-content']['btn']['text'].'<span class="material-symbols-outlined">chevron_right</span></a></div>';
      }
      ?>
    </div>
  </div>
</div>
</section>