<?php

class Counter{
    public static $count = 0;

    public static function increament(){
        self::$count++;
    }
}

Counter::increament();
Counter::increament();
Counter::increament();

echo "Count: ". Counter::$count;