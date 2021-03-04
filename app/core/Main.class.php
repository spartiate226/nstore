<?php
class Main{

    function func($methode,$var){
        if(method_exists($this,$methode)){
            $methode($var);
        }
    }
    function variable(){

    }
}
