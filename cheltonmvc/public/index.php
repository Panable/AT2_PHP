<?php
// Include Composer's autoloader
require '../../vendor/autoload.php';

// Import the LoremIpsum class
use joshtronic\LoremIpsum;
use App\Models\Menu;

$hi = new Menu();

// Create an instance of the LoremIpsum class
$loremIpsum = new LoremIpsum();

// Generate lorem ipsum text
$text = $loremIpsum->words(500); // Generate 5 words of lorem ipsum
echo $text;
