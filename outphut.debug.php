<?php

use Ilias\Outphut\Enum\Color;
use Ilias\Outphut\Enum\TextStyle;
use Ilias\Outphut\Model\Text;

require_once "./vendor/autoload.php";

function debugText()
{
  $textBold = new Text("Bold Text", "", null, null, [TextStyle::BOLD]);
  $textFaint = new Text("Faint Text", "", null, null, [TextStyle::FAINT]);
  $textItalic = new Text("Italic Text", "", null, null, [TextStyle::ITALIC]);
  $textUnderline = new Text("Underline Text", "", null, null, [TextStyle::UNDERLINE]);

  $textColorTransparent = new Text("Text Color Transparent", "", Color::TRANSPARENT, Color::TRANSPARENT);
  $textColorBlack = new Text("Text Color Black", "", Color::BLACK);
  $textColorRed = new Text("Text Color Red", "", Color::RED);
  $textColorGreen = new Text("Text Color Green", "", Color::GREEN);
  $textColorYellow = new Text("Text Color Yellow", "", Color::YELLOW);
  $textColorBlue = new Text("Text Color Blue", "", Color::BLUE);
  $textColorMagenta = new Text("Text Color Magenta", "", Color::MAGENTA);
  $textColorCyan = new Text("Text Color Cyan", "", Color::CYAN);
  $textColorWhite = new Text("Text Color White", "", Color::WHITE);
  $textColorBrightBlack = new Text("Text Color Bright Black", "", Color::BRIGHT_BLACK);
  $textColorBrightRed = new Text("Text Color Bright Red", "", Color::BRIGHT_RED);
  $textColorBrightGreen = new Text("Text Color Bright Green", "", Color::BRIGHT_GREEN);
  $textColorBrightYellow = new Text("Text Color Bright Yellow", "", Color::BRIGHT_YELLOW);
  $textColorBrightBlue = new Text("Text Color Bright Blue", "", Color::BRIGHT_BLUE);
  $textColorBrightMagenta = new Text("Text Color Bright Magenta", "", Color::BRIGHT_MAGENTA);
  $textColorBrightCyan = new Text("Text Color Bright Cyan", "", Color::BRIGHT_CYAN);
  $textColorBrightWhite = new Text("Text Color Bright White", "", Color::BRIGHT_WHITE);
  $backgroundColorTransparent = new Text("Background Color Transparent ", "", null, Color::TRANSPARENT);
  $backgroundColorBlack = new Text("Background Color Black ", "", null, Color::BLACK);
  $backgroundColorRed = new Text("Background Color Red ", "", null, Color::RED);
  $backgroundColorGreen = new Text("Background Color Green ", "", null, Color::GREEN);
  $backgroundColorYellow = new Text("Background Color Yellow ", "", null, Color::YELLOW);
  $backgroundColorBlue = new Text("Background Color Blue ", "", null, Color::BLUE);
  $backgroundColorMagenta = new Text("Background Color Magenta ", "", null, Color::MAGENTA);
  $backgroundColorCyan = new Text("Background Color Cyan ", "", null, Color::CYAN);
  $backgroundColorWhite = new Text("Background Color White ", "", null, Color::WHITE);
  $backgroundColorBrightBlack = new Text(" Background Color Bright Black", "", null, Color::BRIGHT_BLACK);
  $backgroundColorBrightRed = new Text(" Background Color Bright Red", "", null, Color::BRIGHT_RED);
  $backgroundColorBrightGreen = new Text(" Background Color Bright Green", "", null, Color::BRIGHT_GREEN);
  $backgroundColorBrightYellow = new Text(" Background Color Bright Yellow", "", null, Color::BRIGHT_YELLOW);
  $backgroundColorBrightBlue = new Text(" Background Color Bright Blue", "", null, Color::BRIGHT_BLUE);
  $backgroundColorBrightMagenta = new Text(" Background Color Bright Magenta", "", null, Color::BRIGHT_MAGENTA);
  $backgroundColorBrightCyan = new Text(" Background Color Bright Cyan", "", null, Color::BRIGHT_CYAN);
  $backgroundColorBrightWhite = new Text(" Background Color Bright White", "", null, Color::BRIGHT_WHITE);

  echo $textBold . PHP_EOL;
  echo $textFaint . PHP_EOL;
  echo $textItalic . PHP_EOL;
  echo $textUnderline . PHP_EOL;

  echo new Text([$textColorTransparent, $backgroundColorTransparent], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorBlack, $textColorBrightBlack], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorRed, $textColorBrightRed], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorGreen, $textColorBrightGreen], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorYellow, $textColorBrightYellow], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorBlue, $textColorBrightBlue], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorMagenta, $textColorBrightMagenta], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorCyan, $textColorBrightCyan], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$textColorWhite, $textColorBrightWhite], " ", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorBlack, $backgroundColorBrightBlack], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorRed, $backgroundColorBrightRed], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorGreen, $backgroundColorBrightGreen], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorYellow, $backgroundColorBrightYellow], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorBlue, $backgroundColorBrightBlue], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorMagenta, $backgroundColorBrightMagenta], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorCyan, $backgroundColorBrightCyan], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
  echo new Text([$backgroundColorWhite, $backgroundColorBrightWhite], "", Color::TRANSPARENT, Color::TRANSPARENT) . PHP_EOL;
}

function debugScaffold()
{
  $smallText = new Text("Small Example");
  $mediumText = new Text("Medium Example Text");
  $bigText = new Text("Big Example Text for Scaffolding");
}
