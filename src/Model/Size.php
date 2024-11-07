<?php

namespace Ilias\Outphut\Model;

use Ilias\Outphut\Abstract\Size as AbstractSize;

class Size extends AbstractSize
{
  public readonly float $width;
  public readonly float $height;
  public float $minWidth;
  public float $minHeight;
  public float $maxWidth;
  public float $maxHeight;

  public function __construct(
    float $width,
    float $height,
    float $minWidth = null,
    float $minHeight = null,
    float $maxWidth = null,
    float $maxHeight = null,
  ) {
    $this->width = $this::adjustWidth($width);
    $this->height = $height;
    
    $this->minWidth = $this::adjustWidth($minWidth ?? 0);
    $this->minHeight = $minHeight ?? 0;
    $this->maxWidth = $this::adjustWidth($maxWidth ?? 0);
    $this->maxHeight = $maxHeight ?? 10;
  }
}
