<?php 
$names=['ahmed','mohamed','essam']; // indexed array
// echo $names[1];
$person=['name'=>'ahmed','phone'=>'0123456789','age'=>30]; // associative
// echo $person['age'];
// echo '<pre>';
// print_r($names);
// print_r($person);

// var_dump($person);

// echo '</pre>';

foreach($names as $name){
    echo $name;
    echo '<br>';
}

?>
