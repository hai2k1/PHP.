<?php
//vòng lặp white
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>
<?php
//vòng lặp do white
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
<?php
//vòng lặp for
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>
<?php
//vòng lặ forreach
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
<?php
//tiếp tục vòng lặp
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>
<?php
$x = 0;
//Ngắt  vòng lặp
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>