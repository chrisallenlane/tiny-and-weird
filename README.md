Tiny and Weird
==============
Chris Lane  
chris@chris-allen-lane.com  
http://chris-allen-lane.com  
http://twitter.com/#!/chrisallenlane  

About
-----
`Tiny and Weird` is a PHP script that minifies and obfuscates a PHP file. It does this by renaming classes, class methods, class members, and variables to have succinct and nondescript names. It also vacuums away comments and unnecessary whitespace. In doing so, it outputs a PHP file that is significantly harder to read, understand, and reverse-engineer.

Features
--------
`Tiny and Weird` is intelligent enough to obfuscate Object-Oriented code without breaking it. This distinguishes it from other lightweight obfuscators, which frequently become confused when switching from an external to a `$this` context when parsing OOP. It is likewise capable of obfuscating files that contain multiple class definitions, and mixtures of both OOP and procedural programming.

Usage
-----
There are two ways to use this script:

### From the command line ###
You may obfuscate a file from the command line by running:

```bash
./minify.php /file/to/minify.php
```
(Make sure to set execute permissions on `minify.php` with `chmod +x minify.php`, etc.)

You'll likely want to redirect the output of the above into another file, as in:

```bash
./minify.php /file/to/minify.php > ./minified.php
```

After generating a minified file, I'd recommend parsing it with the PHP Linter via:
```bash
php -l ./minified.php
```

### From within another PHP application ###
The heart of `minify.php` is the `TinyAndWeird` class in `tiny-and-weird.php`. It may embedded within another application thusly:

```php

# require the class file
require './tiny-and-weird.php';

# set minifier options
$options = array(
    # set to true if whitespace should be removed from minified file, false otherwise
    'remove_whitespace' => true,

    # you may specify method names (etc) that should remain unchanged during 
    # minification. This can be helpful if the minified class must conform
    # to an API specification, for example.
    'tokens_to_ignore'  => array(
        'alpha', 'bravo', 'charlie'
    )

    # you may also ignore tokens whose text matches one of a given number
    # of regular expressions
    'patterns_to_ignore'  => array(
        '/^dont_obfuscate_me/',
        '/^me_either/',
    )
);

$minifier = new TinyAndWeird($options);
echo $minifier->minify('/path/of/file/to/minify.php');
```

See `minify.php` and `tiny-and-weird.php` for further examples in the comments.

Why Minify PHP?
---------------
PHP is not commonly minified, because it is not sent over the Internet from server to client. In some edge-cases, though, you may want to minify it regardless. I created `Tiny and Weird` when I was writing a trojan (that I wanted to be both small and unreadable) for a white-hat security project. 

Security
--------
Please make sure that you understand the difference between "obfuscation" and "encryption" before distributing obfuscated code. Know that obfuscation cannot _prevent_ reverse-engineering - it simply makes it harder to do.

Known Issues
------------
While not a "bug", be aware that `Tiny and Weird` does not remap string literals that are being used as indices in associative arrays.

Also, be warned that I hacked out this script in only a few hours, and that rigorous unit tests have yet to be written. (You may run `rake test` to run the tests that _have been_ written, however.) I urge you to run all generated minified code through the unit tests you use on your unminified code before deploying into production.

Be further warned that the obfuscation process will break large projects (wherein known function names, etc, must be relied on for inter-object communication), and thus `Tiny and Weird` is best suited for use on small projects only.

License
-------
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

