<?php

namespace Ilias\Outphut\Enum;

enum Brightness: string
{
  case EXTREMELY_LOW = "0,100";
  case VERY_LOW = "1,101";
  case LOW = "2,102";
  case MEDIUM_LOW = "3,103";
  case MEDIUM = "4,104";
  case MEDIUM_HIGH = "5,105";
  case HIGH = "6,106";
  case VERY_HIGH = "7,107";
}
