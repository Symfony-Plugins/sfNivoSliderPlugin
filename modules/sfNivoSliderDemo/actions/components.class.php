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
    $this->images = Doctrine::getTable('NivoImage')
      ->getActiveImagesQuery()
      ->fetchArray();
  }
}
