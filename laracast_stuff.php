<?php
// Classes & Objects
class Team {

    Protected $name;
    protected $members = [];

    public function __construct($name, $members = []){
        $this->name = $name;
        $this->members = $members;

    }

    public static function start(...$params){
        return new static(...$params);
    }

    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function add($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }

    public function manager(){

    }
}

class Member {
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function LastViewed(){

    }
}



$acne = Team::start("Acne", [
    new Member("John Doe"),
    new Member("jane Doe")
]);

$laracasts = new Team("Laracasts");
$laracasts->add("Bob");


var_dump($acne->members());
echo "<br>";
var_dump($laracasts->members());
echo "<br><br>";


// Inheritance
// 1
class CoffeeMaker {
    public function brew(){
        var_dump("Brewing the coffee");
    }
}

class SpecialtyCoffeeMaker extends CoffeeMaker{
    public function brewLatte(){
        var_dump("Brewing a Latte");
    }

}
(new SpecialtyCoffeeMaker())->brewLatte();
echo "<br><br>";


// 2
class Collection {
    protected array $items;

    public function __construct(array $items){
        $this->items = $items;
    }

    // [100, 200, 300]
    public function sum($key){
        /*return array_sum(array_map(function ($items) use ($key) {
            return $items->$key;
        }, $this->items));*/
        return array_sum(array_column($this->items, $key));

    }
}

class VideosCollection extends Collection{
    public function length(){
        return $this->sum("length");
    }
}

class video {
    public $title;
    public $length;

    public function __construct($title, $length){
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video("video 1", 100),
    new Video("video 2", 200),
    new video("video 3", 300)
]);

var_dump($videos);
echo "<br><br>";
echo $videos->length();

?>