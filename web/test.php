<?php
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];
$phone_numbers["Eric"] = "415-874-7659";
print_r($phone_numbers);



$filename = "image.png";
$extension = substr($filename, strlen($filename) - 3);
echo "The extension of the file is $extension";

$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]";

$odd_numbers = [1,3,5,7,9];
for ($i = 0; $i < count($odd_numbers); $i=$i+1) {
    $odd_number = $odd_numbers[$i];
    echo $odd_number . "\n";
}
?>