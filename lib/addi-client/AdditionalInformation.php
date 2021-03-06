<?php
/**
 * @file
 * AdditionalInformation class.
 */

class AdditionalInformation {

  public $thumbnailUrl;
  public $detailUrl;

  /**
   * Construct the class with the provided data.
   */
  public function __construct($thumbnail_url, $detail_url) {
    $this->thumbnailUrl = $thumbnail_url;
    $this->detailUrl = $detail_url;
  }

}
