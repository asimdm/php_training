<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br>"."<br>";

echo "The time is " . date("h:i:sa");
echo "<br>"."<br>";

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
echo "<br>"."<br>";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>"."<br>";

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>"."<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("next thursday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo "<br>"."<br>";

$d= mktime(0,0,0,1,1,2023);
$count=0;
$startdate = strtotime("Sunday",$d);
$enddate = mktime(0,0,0,12,31,2023);
while ($startdate <= $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
  $count = $count+1;
}
echo "<br>".$count;
echo "<br>"."<br>";


?>