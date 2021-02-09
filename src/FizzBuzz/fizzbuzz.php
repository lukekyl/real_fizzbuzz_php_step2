<?php

/*
 * This file is part of the PHP-CLI package.
 *
 * (c) Kyle Luke <luke.kylew@gmail.com>
 *     <https://github.com/lukekyl>
 *
 * Licensed under MIT license.
 */

 namespace FizzBuzz;

 class App2
 {
     
    public function stepTwo($num) {
        
        if(is_int ($num)) {

        for($i=1;$i<=$num;$i++) {
            $answer = '';
            // variable below splits current $i into an array
            $splitnum = str_split(strval($i));

            // if 3 is included in our split array, print lucky
            if (in_array(3, $splitnum)) {
                $answer = 'lucky';
            }
            elseif ($i % 15 == 0) {
                $answer = 'FizzBuzz';
            }
            elseif ($i % 3 == 0) {
                $answer = 'Fizz';
            }
            elseif ($i % 5 == 0) {
                $answer = 'Buzz';
            }
            elseif (!$answer) {
                $answer = $i;
            }
            

        echo $answer . "\n";
        }

        } else {
            echo "Please use integer as input." . "\n";
        }
    }

 }