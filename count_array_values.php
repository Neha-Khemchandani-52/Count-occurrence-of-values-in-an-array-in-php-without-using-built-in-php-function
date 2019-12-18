<?php  ## Openening PHP tag
/***
** Description : Count occurrence of each value present in a given input array without using php built-in function
** Added By : Neha Khemchandani
** Date Added : 18th Dcember,2019
***/

$inpuArray = array(3,5,5,8,7,15,3,5,2,15,5,12,25,50,5,50,25,8,8,50);
$output_array = array();

foreach ($inpuArray as $value) 
{
    if (isset($output_array[$value]))
    {
        ++$output_array[$value];
    }
    else
    {
        $output_array[$value] = 1;
    }
}

echo "<pre>";
print_r($output_array);
## Closing php tag 
?> 
