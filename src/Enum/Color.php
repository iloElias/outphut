<?php

namespace Ilias\Outphut\Enum;
  
enum Color: string
{
  case TRANSPARENT = "\e,\e";
  case BLACK = "30,40";
  case RED = "31,41";
  case GREEN = "32,42";
  case YELLOW = "33,43";
  case BLUE = "34,44";
  case MAGENTA = "35,45";
  case CYAN = "36,46";
  case WHITE = "37,47";
  case BRIGHT_BLACK = "90,100";
  case BRIGHT_RED = "91,101";
  case BRIGHT_GREEN = "92,102";
  case BRIGHT_YELLOW = "93,103";
  case BRIGHT_BLUE = "94,104";
  case BRIGHT_MAGENTA = "95,105";
  case BRIGHT_CYAN = "96,106";
  case BRIGHT_WHITE = "97,107";
}
