<?php

$unsorted = array(2,1,4,9,0,3,5,8,7,6);
$sorting;

echo json_encode($unsorted);

    do{
        $sorting = false;

        for ($x = 0; $x < sizeof($unsorted)-1; $x++){

            if($unsorted[$x] > $unsorted[$x+1]){

                $temp = $unsorted[$x];
                $unsorted[$x] = $unsorted[$x+1];
                $unsorted[$x+1] = $temp;
                $sorting = true;
                echo json_encode($unsorted);
            }
        }     
    }while($sorting);
?>























?>
