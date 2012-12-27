#!/usr/bin/env php
<?php

# include the minifier
include './tiny-and-weird.php';

# minify and echo the contents of the file specified from $argv[1]
$minifier = new TinyAndWeird();
echo $minifier->minify($argv[1]);
