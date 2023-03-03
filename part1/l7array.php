<?php

// Arrays
// (i)Index Array(Manual Array)
// (ii)Associated Array 
// (iii)Multidimensional Array 

$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
echo $names;
echo '<br/>';
echo count($names);
echo '<br/>';
print_r($names,false);

echo "<br/>";
$colors = ["red","green","blue","white",'black','pink'];
echo $colors;
echo '<br/>';
echo count($colors);
echo '<br/>';
echo "<pre>".print_r($colors,'true')."</pre>";
var_dump($colors);

$colors[6] = 'grey';
$colors[7] = 'stone';
$colors[8] = 'skyblue';

$colors[0] = 'violet';

echo '<pre>'.print_r($colors,'true').'</pre>';

echo "My fav color is".$colors[3];

echo '<hr/>';
//----------------------------------------

//(ii)Associate Array

$news = array("pone"=>'this is post one','ptwo'=>'this is post two','pthree'=>'this is three');
var_dump($news);
echo "<br/>";

$medias = ["pMone"=>'this is post one',
'ptwo'=>'this is post two',
'pthree'=>'this is three'];
var_dump($medias);
echo '<br/>';

$medias["pfour"] = 'this is post four';
$medias['pfive'] = ' this is post five';

echo '<prev>'.print_r($medias).'</prev>';
echo 'i like this post, so psot title is '.$medias['pthree'];

echo "<br/>";
echo "<hr/>";

//------------------------------------------

//(iii)Multidimensional Array - Arrays containing one or more arrays

// $paints = array(
//     array("red","green",'blue',"white","dark"),
//     array("pen","pencil","ruler"),
//     array("paper","plastic")
// );

$paints = [
    ["red","green",'blue',"white","dark"],
    ["pen","pencil","ruler"],
    ["paper","plastic"]
];

var_dump($paints);
echo "<br/>";
echo "<br/>";

echo $paints[0][0]; //red
echo '<br/>';
echo $paints[1][1]; //pencil
echo "<br/>";
echo $paints[2][1]; //plastic
echo "<br/>";

$persons = array(
    array('name'=>"Aung Aung","age"=>'20'),
    array('name'=>'Su Su','age'=>'30'),
    array('name'=>'Yin Yin','age'=>'25')

);
var_dump($persons);
echo "<br/>";
echo "<br/>";
echo $persons[0]['name']; //Aung Aung
echo '<br/>';
echo $persons[1]['age']; //30
echo '<br/>';
echo $persons[2]['name']; //Yin Yin
echo '<br/>';
echo $persons[2]['age'];//25
echo '<br/>';




//3AR

?>

