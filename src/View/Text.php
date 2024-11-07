<?php

namespace Ilias\Outphut\View;

use Ilias\Outphut\Abstract\Content;
use Ilias\Outphut\Enum\Brightness;
use Ilias\Outphut\Enum\Color;
use Ilias\Outphut\Enum\TextStyle;
use Ilias\Outphut\Model\Color as ColorModel;
use Ilias\Outphut\Model\Style;

class Text extends Content
{
  protected string $text = "";
  protected string|null $color = null;
  protected string|null $colorBrightness = null;
  protected string|null $backgroundColor = null;
  protected string|null $backgroundBrightness = null;
  protected string|null $styles = null;

  /**
   * Base for the styled text
   * @param string|Text[]|Text $text 
   * @param string $separator
   * @param Color|null $color
   * @param Color|null $background
   * @param TextStyle[] $styles
   */
  public function __construct(string|array|Text $text, string $separator = "", Color $color = null, Color $background = null, array $styles = [], Brightness $colorBrightness = null, Brightness $backgroundBrightness = null)
  {
    if (!empty($color)) {
      $fromColor = ColorModel::fromColor($color)[0];
      $this->color = "\e[{$fromColor}m";
    }
    if (!empty($background)) {
      $fromColor = ColorModel::fromColor($background)[1];
      $this->backgroundColor = "\e[{$fromColor}m";
    }
    if (!empty($styles)) {
      $fromStyle = [];
      foreach ($styles as $style) {
        $fromStyle[] = "\e[{$style->value}m";
      }
      $this->styles = implode("", $fromStyle);
    }
    if (!empty($colorBrightness)) {
      $fromBrightness = ColorModel::fromColor($colorBrightness)[0];
      $this->colorBrightness = "\e[{$fromBrightness}m";
    }
    if (!empty($backgroundBrightness)) {
      $fromBrightness = ColorModel::fromColor($backgroundBrightness)[1];
      $this->backgroundBrightness = "\e[{$fromBrightness}m";
    }
    $this->text = implode("{$this->backgroundColor}{$this->backgroundBrightness}{$this->color}{$this->colorBrightness}{$this->styles}" . Style::CLEAR . "{$separator}", $this->prepareText($text));
  }

  public function prepareText(string|array|Text $text): array
  {
    $textArray = [];
    if (is_string($text)) {
      $textArray = [$text];
    } elseif (is_array($text)) {
      $returnedArray = [];
      foreach ($text as $value) {
        $returnedArray = [...$returnedArray, ...$this->prepareText($value)];
      }
      $textArray = $returnedArray;
    } elseif ($text instanceof Text) {
      $textArray = [$text->getText()];
    }
    return $textArray;
  }

  public function getContent(): string
  {
    return "{$this->getText()}" . Style::CLEAR;
  }

  public function getText(): string
  {
    return "{$this->backgroundColor}{$this->backgroundBrightness}{$this->color}{$this->colorBrightness}{$this->styles}{$this->text}";
  }
}
