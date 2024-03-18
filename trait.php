<?php
trait Main{
    public function info(){
        echo "This is main class ";
    }
}
trait Main2{
    public function info2(){
        echo "This is main class2 ";
    }
}
trait Main3{
    public function info3(){
        echo "This is main class3 ";
    }
}
class Child{
    use Main,Main2,Main3 ;
    public function save(){
        echo "This is child class";
    }
} $m = new Child();
$m->info();
echo "<br>";
$m->info3();
?>