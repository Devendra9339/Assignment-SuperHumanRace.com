
<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("superHumanRace", "com");
function merge_two_array($a, $b)
{
$index = array();
 $index[] = $a; 
 if(is_scalar($b))
{
$index[] = $b;
}
else
{
foreach($b as $i=> $j)
{
$index[] = $j;
}
}
return $index;
}
echo '<pre>'; 
print_r(array_map('merge_two_array',$array2, $array1));
echo '</pre>';
?>