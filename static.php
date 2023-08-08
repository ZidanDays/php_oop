<?php

    class contohStatic{
        public static $angka = 5;
        
        public static function halo(){
            return "ini adalah angka ";
        }
    }

    echo contohStatic::$angka;