<?php

namespace Ilias\Outphut\Model;

use Ilias\Outphut\Abstract\Size;

class Border extends Size
{
  public readonly float $topBorderSize;
  public readonly float $rightBorderSize;  
  public readonly float $bottomBorderSize;
  public readonly float $leftBorderSize;

  public function __construct(float $borderSize = null, float $borderVerticalSize = null, float $borderBottomSize = null, float $borderLeftSize = null) {
    if (!empty($borderSize)) {
      $this->topBorderSize = $borderSize;
      $this->rightBorderSize = $this->adjustWidth($borderSize);
      $this->bottomBorderSize = $borderSize;
      $this->leftBorderSize = $this->adjustWidth($borderSize);
    }
    if (!empty($borderVerticalSize)) {
      $this->topBorderSize = $borderVerticalSize;
      $this->bottomBorderSize = $borderVerticalSize;
    }
    if (!empty($borderBottomSize)) {
      $this->bottomBorderSize = $borderBottomSize;
    }
    if (!empty($borderLeftSize)) {
      $this->leftBorderSize = $this->adjustWidth($borderLeftSize);
    }
  }
}
