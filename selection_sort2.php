<?php
    function swap($input, $minIndex, $index){
        $temp = $input[$minIndex] ;
        $input[$minIndex] = $input[$index];
        $input[$index] = $temp;
        var_dump(implode($input,"\n"));
        echo "<br>";
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
        $maxIndex = $k;
        for($j=$k; $j< count($input); $j++){
            if ($input[$j] < $input[$minIndex]){
                $minIndex = $j;
            }
            if ($input[$j] > $input[$maxIndex]){
                $maxIndex = $j;
            }
        }
        $input = swap($input, $minIndex, $k);
        $input = swap($input, $maxIndex, count($input) - $k);
    }

    echo "<br>";
    var_dump(implode($input,"\n"));
?>
