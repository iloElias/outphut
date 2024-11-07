<?php

namespace Ilias\Outphut\Abstract;

use Ilias\Outphut\Core\Outphut;

abstract class Size
{
  public static function adjustWidth(float $value): float {
    return round($value * 2, 0, PHP_ROUND_HALF_UP);
  }
}
