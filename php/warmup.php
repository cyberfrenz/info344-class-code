<?php 
#1.
$random = rand(1, 100);
echo "your new random value is $random\n";

#2.
$month = array_fill(0, 1, "start");

for ($x = 1; $x <= 12; $x++) {
	$blah = jdmonthname(($x*30), 1);
	$month[($x-1)]= $blah;
} 

array_multisort($month);
for ($x = 0; $x <=12; $x++) {
	echo ("$month[$x] \n");
}

?>
