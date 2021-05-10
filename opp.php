<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>
<?php
class vidu2 {
  public $name;
  public $color;
    //hàm __construct
  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new vidu2("Apple");
echo $apple->get_name();
?>
<?php
class vidu3 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  // hàm destruct hàm cuối cùng của lệnh
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new vidu3("Apple");
?>
<?php
class vidu4 {
  //public thuộc tính có thể truy cập mọi nơi 
  public $name;
  //protected thuộc tính hoặc phương thức có thể được truy cập trong lớp và bởi các lớp dẫn xuất từ ​​lớp đó
  protected $color;
  // thuộc tính hoặc phương thức CHỈ có thể được truy cập trong lớp
  private $weight;
}

$mango = new vidu4();
$mango->name = 'Mango';
$mango->color = 'Yellow'; 
$mango->weight = '300';
?>
<?php
class vidu5 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}
//thừa kế class
//Strawberry là lớp thừa kế
class Strawberry extends vidu5 {
  public function message() {
    echo "Am I a fruit or a berry? ";
    
    $this -> intro();
  }
}

$strawberry = new Strawberry("Strawberry", "red"); 
$strawberry->message(); 
?>