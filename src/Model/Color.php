<?php

namespace Ilias\Outphut\Model;

use Ilias\Outphut\Enum\Brightness;
use Ilias\Outphut\Enum\Color as ColorEnum;

class Color
{
  public readonly string $text;
  public readonly string $background;

  public function __construct(string $text, string $background) {
    $this->text = $this->getValue($text);
    $this->background = $this->getValue($background);
  }

  private function getValue(mixed $value): string
  {
    if (is_string($value)) {
      return $value;
    }
    if (enum_exists(get_class($value))) {
      return $value->value;
    }
    return (string)$value;
  }

  public static function fromColor(ColorEnum|Brightness $color): array
  {
    return explode(",", $color->value);
  }

  public function __toString()
  {
    return "{$this->text},{$this->background}";
  }
}
