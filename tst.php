<?php


class a{
    private $b = array('really_long_one', 'really_long_two');
    private $c = 'foo';


    public function d(){
        echo "\$this->super_long_property_named_foo == {$this->c}\n";
    }
}

class e{
    private $f = 'bar';

    public function d(){
        echo "\$this->super_long_property_named_bar == {$this->f}\n";
    }
}

class g{
    private $h = 'baz';

    public function d(){
        echo "\$this->super_long_property_named_baz == {$this->h}\n";
    }
}

$i = new a();
$j = new e();
$k = new g();

$i->d();
$j->d();
$k->d();
