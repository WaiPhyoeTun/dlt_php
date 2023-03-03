<?php

//1 Jan 1970

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
echo $getdate;
echo '<br/>';
var_dump($getdate);
echo "<br/>";

echo "This is seconds = ". $getdate["seconds"] ."<br/>";
echo "This is minutes = ". $getdate["minutes"] ."<br/>";
echo "This is hours 24hour format = ". $getdate["hours"] ."<br/>";
echo "This is hours am/pm format = ". $getdate["hours"]-12 ."<br/>";


echo "This is weekday = ". $getdate["weekday"] ."<br/>"; //Friday
echo "This is wday = ". $getdate["wday"] ."<br/>";//5 //day of the week 0 = sunday 1=monday ,...
echo "This is yday = ". $getdate["yday"] ."<br/>"; //61 //day of  the year

echo "This is mon = ". $getdate["mon"] ."<br/>"; //3 //month
echo "This is mday = ". $getdate["mday"] ."<br/>"; //3 // day of the month
echo "This is month = ". $getdate["month"] ."<br/>"; //March

echo "This is year = ". $getdate["year"] ."<br/>"; //2023


echo "This is 0 = ". $getdate["0"] ."<br/>"; //1677841626 // add result of milisecond


$time = time();
echo 'This is time timestamp = '. $time .'<br/>'; //1677841626

//Date/Time Format
//date(format,timestamp);

$date = date('a',$time);
echo "This is format a = ". $date ."<br/>"; //am / pm

$date = date('A',$time);
echo "This is format A = ". $date ."<br/>"; //AM / PM

$date = date('d',$time);
echo "This is format d = ". $date ."<br/>"; //03 //day leading zero
$date = date('D',$time);
echo "This is format D = ". $date ."<br/>"; //Fri //Sun / Mon,...

$date = date('F',$time);
echo "This is format F = ". $date ."<br/>"; // March //January / December

$date = date('g',$time);
echo "This is format g = ". $date ."<br/>"; //5 //hour by number(by 12 hr format , no leading zero )
$date = date('g',$time);
echo "This is format g = ". $date ."<br/>"; //17 //hour by number(by 24 hr format , no leading zero )

$date = date('h',$time);
echo "This is format h = ". $date ."<br/>"; //05 //hour by number(by 12 hr format , leading zero )
$date = date('H',$time);
echo "This is format H = ". $date ."<br/>"; //17 //hour by number(by 24 hr format ,  leading zero )

$date = date('i',$time);
echo "This is format i = ". $date ."<br/>"; //minute  59 

$date = date('j',$time);
echo "This is format j = ". $date ."<br/>"; //3 day of month no leading zero

$date = date('l',$time);
echo "This is format l = ". $date ."<br/>"; //Friday
$date = date('g',$time);
echo "This is format g = ". $date ."<br/>"; //0 //Leap Year(1 = true,0=false)

$date = date('m',$time);
echo "This is format m = ". $date ."<br/>"; //03 day of month leading zero
$date = date('M',$time);
echo "This is format M = ". $date ."<br/>"; //Mar(Jan / Dec)

$date = date('n',$time);
echo "This is format n = ". $date ."<br/>"; //3 day of month no leading zero

$date = date('r',$time);
echo "This is format r = ". $date ."<br/>"; // Fri, 03 Mar 2023 18:10:34 +0630

$date = date('s',$time);
echo "This is format s = ". $date ."<br/>"; // 29

$date = date('U',$time);
echo "This is format U = ". $date ."<br/>"; // 1677843977

$date = date('y',$time);
echo "This is format y = ". $date ."<br/>"; //23 
$date = date('Y',$time);
echo "This is format s = ". $date ."<br/>"; // 2023
$date = date('z',$time);
echo "This is format z = ". $date ."<br/>"; //61 




// https://www.php.net/manual/en/timezones.asia.php

?>