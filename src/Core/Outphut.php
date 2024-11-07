<?php

namespace Ilias\Outphut\Core;

class Outphut
{
  private static function getTerminalWidth(): int
  {
    return (int)exec('tput cols');
  }
}
