<?php

namespace Ilias\Outphut\Model;

class Border
{
  public readonly int $topBorderSize;
  public readonly int $rightBorderSize;  
  public readonly int $bottomBorderSize;
  public readonly int $leftBorderSize;

  public function __construct(int $borderSize = null, int $borderVerticalSize = null, int $borderBottomSize = null, int $borderLeftSize = null) {
    if (!empty($borderSize)) {
      $this->topBorderSize = $borderSize;
      $this->rightBorderSize = $borderSize;
      $this->bottomBorderSize = $borderSize;
      $this->leftBorderSize = $borderSize;
    }
    if (!empty($borderVerticalSize)) {
      $this->rightBorderSize = $borderVerticalSize;
      $this->leftBorderSize = $borderVerticalSize;
    }
    if (!empty($borderBottomSize)) {
      $this->bottomBorderSize = $borderBottomSize;
    }
    if (!empty($borderLeftSize)) {
      $this->leftBorderSize = $borderLeftSize;
    }
  }
}
