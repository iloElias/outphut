<?php

namespace Ilias\Outphut\View;

use Ilias\Outphut\Abstract\Content;
use Ilias\Outphut\Enum\Brightness;
use Ilias\Outphut\Enum\Color;
use Ilias\Outphut\Enum\FlexDirection;
use Ilias\Outphut\Enum\JustifyContent;
use Ilias\Outphut\Model\Border;
use Ilias\Outphut\Model\Color as ColorModel;
use Ilias\Outphut\Model\Size;
use Ilias\Outphut\Model\Style;

class Scaffold extends Content
{
  protected string $content;
  protected string|null $backgroundColor = null;
  protected string|null $backgroundBrightness = null;
  protected Size|null $size = null;
  protected FlexDirection|null $flexDirection = null;
  protected JustifyContent|null $justifyContent = null;
  protected Border|null $border = null;

  public function __construct(
    Content $content,
    Color $background = null,
    Brightness $backgroundBrightness = null,
    Size $containerSize = null,
    FlexDirection $flexDirection = null,
    JustifyContent $justifyContent = null,
    Border $border = null
  ) {
    $contentRawText = preg_replace('/[\x00-\x1F\x7F-\x9F]/', '', $content->getContent());
    $lines = [];
    
    if (!empty($background)) {
      $fromColor = ColorModel::fromColor($background)[1];
      $this->backgroundColor = "\e[{$fromColor}m";
    }
    if (!empty($backgroundBrightness)) {
      $fromBrightness = ColorModel::fromColor($backgroundBrightness)[0];
      $this->backgroundBrightness = "\e[{$fromBrightness}m";
    }

    if (!empty($containerSize)) {
      $caseNullSize = preg_replace('/[\x00-\x1F\x7F-\x9F](?!\n)/', '', $content->getContent());
      $this->size = $containerSize ?? new Size($caseNullSize, 1);
    }
    if (!empty($border)) {
      $this->border = $border ?? new Border(1);
    }

    for ($i = 0; $i < $border->topBorderSize; $i++) {
      $line = str_repeat(" ", $border->leftBorderSize + $this->size->width + $border->rightBorderSize);
      $lines[] = "{$this->backgroundColor}{$this->backgroundBrightness}{$line}" . Style::CLEAR;
    }

    for ($i = 0; $i < $border->bottomBorderSize; $i++) {
      $line = str_repeat(" ", $border->leftBorderSize) . $content->getContent() . "{$this->backgroundColor}{$this->backgroundBrightness}" . str_repeat(" ", $border->rightBorderSize);
      $lines[] = "{$this->backgroundColor}{$this->backgroundBrightness}{$line}" . Style::CLEAR;
    }

    for ($i = 0; $i < $border->bottomBorderSize; $i++) {
      $line = str_repeat(" ", $border->leftBorderSize + $this->size->width + $border->rightBorderSize);
      $lines[] = "{$this->backgroundColor}{$this->backgroundBrightness}{$line}" . Style::CLEAR;
    }

    $this->content = implode("\n", $lines);
  }

  public function getContent(): string
  {
    return (string) $this->content;
  }
}
