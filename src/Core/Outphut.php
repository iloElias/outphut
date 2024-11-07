<?php

namespace Ilias\Outphut\Core;

class Outphut
{
  public static function getTerminalWidth(): int
  {
    return (int)exec('tput cols');
  }
}
