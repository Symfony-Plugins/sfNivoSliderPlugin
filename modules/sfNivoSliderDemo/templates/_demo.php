<?php if(count($images)): ?>

<link rel="stylesheet" href="/sfNivoSliderPlugin/css/nivo-default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/sfNivoSliderPlugin/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="/sfNivoSliderPlugin/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/sfNivoSliderPlugin/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider({
      effect: 'fold'
    });
  });
</script>

<div id="wrapper">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php foreach ($images as $image): ?>
      <?php echo link_to(image_tag('/uploads/nivo_slider/573x300/'.$image['file'],
        array('title' => $image['description'])),
        '/uploads/nivo_slider/573x300/'.$image['file']) ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php endif; ?>
