<h1>sfNivoSliderPlugin DEMO</h1>

<?php if(count($images)): ?>

<div id="wrapper">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php foreach ($images as $image): ?>
      <?php echo link_to(image_tag($image,
        array('title' => 'displaying image: ' . $image)),
        $image) ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php endif; ?>
