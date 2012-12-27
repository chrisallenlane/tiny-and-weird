#!/usr/bin/env php
<?php

# promote compatibility between php 4 and 5
if (!defined('T_ML_COMMENT')) { define('T_ML_COMMENT', T_COMMENT); }
else { define('T_DOC_COMMENT', T_ML_COMMENT); }

# include the minifier
include './tiny-and-weird.php';

# minify and echo the contents of the file specified from $argv[1]
$minifier = new TinyAndWeird();
echo $minifier->minify($argv[1]);
