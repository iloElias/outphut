<?php

namespace Ilias\Outphut\Abstract;

abstract class Content
{
  public abstract function getContent(): string;
  public function __toString(): string
  {
    return $this->getContent();
  }
}
