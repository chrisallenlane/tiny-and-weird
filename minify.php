#!/usr/bin/env php
<?php

# include the minifier
include './tiny-and-weird.php';

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

# minify and echo the contents of the file specified from $argv[1]
$minifier = new TinyAndWeird($options);
echo $minifier->minify($argv[1]);
