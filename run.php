<?php

require_once('vendor/autoload.php');

use markeze\parser\Parser;

$parser = new Parser();

print_r($parser->process('https://getcomposer.org/doc/articles/versions.md', 'a'));