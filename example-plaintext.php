<?php

/**
 * This is a comment block. This comment, along with all other comments, will
 * be stripped out when passed through the minifier.
 */
class SuperLongClassNamedFoo{
    private $array                         = array('really_long_one', 'really_long_two');
    private $alpha                         = 'alpha';
    private $super_long_property_named_foo = 'foo';
    private $dont_obfuscate_by_pattern_one = 'one';

    public function long_method_name(){
        echo "\$this->super_long_property_named_foo == {$this->super_long_property_named_foo}\n";
        echo "{$this->dont_obfuscate_by_pattern_one}";
    }
}

class SuperLongClassNamedBar{
    private $array                         = array('really_long_one', 'really_long_two');
    private $bravo                         = 'bravo';
    private $super_long_property_named_bar = 'bar';
    private $dont_obfuscate_by_pattern_two = 'two';

    public function long_method_name(){
        echo "\$this->super_long_property_named_bar == {$this->super_long_property_named_bar}\n";
        echo "{$this->dont_obfuscate_by_pattern_two}";
    }
}

class SuperLongClassNamedBaz{
    private $array                           = array('really_long_one', 'really_long_two');
    private $charlie                         = 'charlie';
    private $super_long_property_named_baz   = 'baz';
    private $dont_obfuscate_by_pattern_three = 'three';

    public function long_method_name(){
        echo "\$this->super_long_property_named_baz == {$this->super_long_property_named_baz}\n";
        echo "{$this->dont_obfuscate_by_pattern_three}";
    }
}

# instantiate some objects
$foo_object = new SuperLongClassNamedFoo();
$bar_object = new SuperLongClassNamedBar();
$baz_object = new SuperLongClassNamedBaz();

# invoke their methods
$foo_object->long_method_name();
$bar_object->long_method_name();
$baz_object->long_method_name();
