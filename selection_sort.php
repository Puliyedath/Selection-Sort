<?php
    function swap($input, $minIndex, $index){
        $temp = $input[$minIndex] ;
        $input[$minIndex] = $input[$index];
        $input[$index] = $temp;
        return $input;

    }

    $input = array();
    for($i=0;$i < 100; $i++){
        $temp = rand(0,10000);
        array_push($input, $temp);
    }

    var_dump(implode($input,"\n"));
    echo "<br>";

    //selection sort
    for($k = 0 ; $k < count($input) ; $k++){
        $minIndex = $k;
        for($j=$k; $j< count($input); $j++){
            if ($input[$j] < $input[$minIndex]){
                $minIndex = $j;
            }
        }
        $input = swap($input, $minIndex, $k);
    }

    echo "<br>";
    var_dump(implode($input,"\n"));
?>
