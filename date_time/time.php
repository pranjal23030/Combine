<?php
date_default_timezone_set('Asia/kathmandu');
echo date("h:i:s")."<br>";
echo date(" M d, Y h:i:s A")."<br>";
echo date("h:i a")."<br>";
?>

<br>
<!--Time Stamp-->
<?php
$timestamp = time();
echo ($timestamp);
?>

<br>
<br>

<?php
$timestamp = 1646023018;
echo (date("F d, Y h:i:s", $timestamp ));
?>

<br>
<br>
<!--Time Stamp creator-->
<?php
//mktime (hour,minute,second,month,day,year)
echo date('l'. mktime(10,32,0,28,11,2022));
?>