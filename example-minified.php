<?php


class a{
    private $b                         = array('really_long_one', 'really_long_two');
    private $alpha                         = 'alpha';
    private $c = 'foo';
    private $dont_obfuscate_by_pattern_one = 'one';

    public function d(){
        echo "\$this->super_long_property_named_foo == {$this->c}\n";
        echo "{$this->dont_obfuscate_by_pattern_one}";
    }
}

class e{
    private $b                         = array('really_long_one', 'really_long_two');
    private $bravo                         = 'bravo';
    private $f = 'bar';
    private $dont_obfuscate_by_pattern_two = 'two';

    public function d(){
        echo "\$this->super_long_property_named_bar == {$this->f}\n";
        echo "{$this->dont_obfuscate_by_pattern_two}";
    }
}

class g{
    private $b                           = array('really_long_one', 'really_long_two');
    private $charlie                         = 'charlie';
    private $h   = 'baz';
    private $dont_obfuscate_by_pattern_three = 'three';

    public function d(){
        echo "\$this->super_long_property_named_baz == {$this->h}\n";
        echo "{$this->dont_obfuscate_by_pattern_three}";
    }
}

$i = new a();
$j = new e();
$k = new g();

$i->d();
$j->d();
$k->d();
