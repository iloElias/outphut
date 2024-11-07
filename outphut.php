<?php

use Ilias\Outphut\Enum\Color;
use Ilias\Outphut\Model\Scaffold;
use Ilias\Outphut\Model\Text;

require_once "./vendor/autoload.php";

$hello = new Text("Hello", "", Color::BLACK);
$world = new Text("World", "", Color::WHITE);

$text = new Text([$hello, $world], " ", Color::WHITE, Color::WHITE);

$message = new Text(["Message: ", $text, "!"], "", Color::WHITE, Color::GREEN);

$container = new Scaffold($message , Color::BLACK);

echo "{$container}\n";