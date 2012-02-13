<?php

/**
 * nivo slider demo components.
 *
 * @package    nivo slider
 * @subpackage modules
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */
class sfNivoSliderDemoComponents extends sfComponents
{
  /**
   * Executes demo component. Displays nivo slider.
   *
   * @param sfWebRequest $request
   */
  public function executeDemo(sfWebRequest $request)
  {
    $this->images = array(
      'http://icanhascheezburger.files.wordpress.com/2007/02/1161206380502.jpg',
      'http://icanhascheezburger.files.wordpress.com/2007/03/babushkacat.jpg',
      'http://icanhascheezburger.files.wordpress.com/2007/01/mapquest.jpg',
      'http://icanhascheezburger.files.wordpress.com/2007/03/wiikitty.jpg',
    );

    $this->getResponse()->addStylesheet('/sfNivoSliderPlugin/css/nivo-default.css', '', array('media' => 'screen'));
    $this->getResponse()->addStylesheet('/sfNivoSliderPlugin/css/nivo-slider.css', '', array('media' => 'screen'));
    $this->getResponse()->addJavascript('/sfNivoSliderPlugin/js/jquery-1.7.1.min.js');
    $this->getResponse()->addJavascript('/sfNivoSliderPlugin/js/jquery.nivo.slider.pack.js');
    $this->getResponse()->addJavascript('/sfNivoSliderPlugin/js/demo.js');
  }
}
