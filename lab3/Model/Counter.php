<?php

    class Counter{

        static function check_cookie(){
            if(!isset($_COOKIE["remember_me"])){
                setcookie("remember_me",rand(1,9999999));
                $counts = (int)file("counts.txt")[0];
                $counts++;
                $fp = fopen("counts.txt", "w");
                fwrite($fp, $counts);
                fclose($fp);
            }
            
        }
    }

?>