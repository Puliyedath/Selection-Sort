<?php
    function insertionSort($input, $start, $end){
        if ($end == count($input) - 1){
            $j = count($input) - 1;
        }
        if ($end === $start + 1){
            $output = array();
            if ($input[$start] > $input[$end]){
                $output[] = $input[$end];
                $output[] = $input[$start];
            }
            else{
                 $output[] = $input[$start];
                 $output[] = $input[$end];
            }

            return $output;
        }

        $insertionVal = $input[$end];
        $end = $end - 1 ;
        $result = insertionSort($input, 0 , $end);

        //push the $input[j] to the array returned
        $result[] = $insertionVal;
        for($k=count($result) - 2 ; $k >=0 ; $k--){
            if ($result[$k] > $result[$k+1]){
                $temp = $result[$k];
                $result[$k] = $result[$k+1];
                $result[$k+1] = $temp;
            }
        }


        return $result;
    }

    $input = array(7,10,5,-5,31,2);
    var_dump($input);
    echo "<br>";
    var_dump(insertionSort($input,0,5));
?>

