<?php

namespace Ilias\Outphut\Model;

use Ilias\Outphut\Abstract\Content;
use Ilias\Outphut\Enum\Color;
use Ilias\Outphut\Enum\FlexDirection;
use Ilias\Outphut\Enum\JustifyContent;

class Scaffold extends Content
{
  protected Content $content;

  public function __construct(Content $content, Color $background, FlexDirection $flexDirection = null, JustifyContent $flexContent = null, Border $borderSize = null,)
  {
    $this->content = $content;
  }

  public function getContent(): string
  {
    return (string)$this->content;
  }
}
