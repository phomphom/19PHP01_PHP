<?php
$s = 150;
$j = 0;
for ($i=1; $i<= 36 ; $i++) { 
	if ($i % 3 == 0 ) {	
		$s = ($s - (3 + $j)) + $s * 0.007;
		$j++;
	}	
	else{
		$s = $s + $s * 0.007;
	}
}
echo "$s";
?>