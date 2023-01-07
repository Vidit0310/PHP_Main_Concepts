<?php
$arr = array(
    array(
        array(1, 2, 3, 4)
    ),
    array(
        array(5, 6, 7, 8)
    ),
    array(
        array(9, 0, 1, 2)
    )
);
for ($i = 0; $i < count($arr); $i++)
{
    for ($j = 0; $j < count($arr[$i]); $j++) 
    {
        for ($k = 0; $k < count($arr[$i][$j]); $k++) 
        {
            echo $arr[$i][$j][$k];
            echo "&nbsp&nbsp&nbsp";
        }
    }
    echo "<br>";
}
