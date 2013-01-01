#!/usr/bin/env php
<?php

# include the minifier
include './tiny-and-weird.php';

<<<<<<< HEAD
$options = array(
    'remove_whitespace' => false,
    'tokens_to_ignore' => array('long_method_name', 'super_long_property_named_foo'),
);
=======
# set some minifier options
$options = array(
    'remove_whitespace' => false,
    'tokens_to_ignore'  => array(
        'alpha', 'bravo', 'charie',
    ),
    'patterns_to_ignore' => array(
        '/^dont_obfuscate/',
    ),
);

>>>>>>> ref
# minify and echo the contents of the file specified from $argv[1]
$minifier = new TinyAndWeird($options);
echo $minifier->minify($argv[1]);
