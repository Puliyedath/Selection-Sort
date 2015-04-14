<?php

    function selection_sort($array,$index){
        for($i = 0 ; $i < count($array) ; $i++){
            $min = mod($array[$i],$index);
            $minIndex = $i;
            for($k=$i; $k < count($array) ; $k++){
                $val = mod($array[$k],$index);
                if ($val < $min){
                    $minIndex = $k;
                    $min = mod($array[$k],$index);
                }
            }
            //swap min with the ith index
            $temp = $array[$minIndex];
            $array[$minIndex] = $array[$i];
            $array[$i] = $temp;
        }

        return $array;
    }

    function checkprevIndex($minIndex, $index){
        $minVal = mod($array[$minIndex]);
        $index = mod($array[$index]);
    }

    function radix_sort($array,$start,$digits){
        if ($start > $digits){
            return $array;
        }

        $array = selection_sort($array,$start++);
        var_dump($array);
        echo "<br>";

        return radix_sort($array,$start);

    }

    function mod($number, $times){
        //HINT 3 = ⌊4321/100⌋ mod 10 = 43 mod 10   i.e. rightshift then chop off least significant digit.
        $times--;
        return ($number /pow(10,$times)) % 10;
    }


    //radix sort with LSD
    $output = radix_sort(array(141,211,456,777,100),1,3);

?>
