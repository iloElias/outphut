<?php

namespace Ilias\Outphut\Enum;

enum TextStyle: string
{
  case BOLD = "1";
  case FAINT = "2";
  case ITALIC = "3";
  case UNDERLINE = "4";
  case INVERT = "7";
  case HIDDEN = "8";
  case CROSSED = "9";
  case DOUBLE_UNDERLINE = "21";
}
