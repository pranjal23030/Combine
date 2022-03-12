<!--©-->
<?php
//$timestamp = 1363014673 ;
//echo (date("Y ", $timestamp ));
//?><!--PHP Exercises - Deerwalk-->
<!--  -->

<?php
//date_default_timezone_set('Australia/Melbourne');
//$date_time = "The current date and time in Australia/Melbourne is: ". date('Y/m/d h:i:s a', time());
//echo $date_time;
//?>


<?php
//echo mktime(02, 00, 00, 05, 12, 2014);
//?>

<?php
//echo date ("Y/m/d") . "<br>";
//echo date ("y.m.d") . "<br>";
//echo date ("d-m-y");
//?><!-- -->

<?php
$birth_date = mktime(0,0,0,04,9,2022);
$today = time();
$coming_date = ($birth_date - $today);
$days = (int) ($coming_date/86400);
echo "Your birthday is after $days days. ";
?>