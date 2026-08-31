<html>
    <head>
        <title>Date and Time Functions</title>
</head>
<body>
    <h2>Date and Time Functions</h2>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
echo "Today is " . date("d"). "<br>";
echo "Today is " . date("j"). "<br>";
echo "Today is " . date("m"). "<br>";
echo "Today is " . date("Y"). "<br>";
echo "Today is " . date("F"). "<br>";
echo date('l, F j, Y')."<br><br>";
?>

&copy; 2010-<?php echo date("Y") ."<br><br>";?>

<?php
echo "The time is " . date("H:i:s") . "<br>";
echo "The time is " . date("h:i:s a")."<br><br>";
?>

<?php
date_default_timezone_set("Asia/Kolkata");
echo "The current date and time is " . date("Y-m-d H:i:s")."<br><br>";
?>

<?php
echo date_default_timezone_get()."<br><br>";
?>

<?php
// Set the default timezone to use
date_default_timezone_set("UTC");

$d = mktime(0, 0, 0,   8, 8, 2026);
echo "August 8, 2026 was on a " . date("l", $d)."<br><br>";
?>

<?php
echo "Now: " . time()."<br><br>";
?>

<?php
// Get the current Unix timestamp
$t= time();

// Format timestamp
$curDate = date('Y-m-d H:i:s', $t); 

echo $curDate."<br><br>";
?>

<?php
$d = strtotime("10:30pm August 29 2026");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("now");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 days");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 weeks");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("last Sunday");
echo "Date is " . date("Y-m-d H:i:s", $d)."<br>";
?>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+4 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?> 

</body>
</html>