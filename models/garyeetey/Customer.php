<?php
namespace garyeetey;

class Customer{
    public static function getTitle(string $sex) : string {
        switch($sex){
            case "male":
                return "Mr.";
            case "female":
                return "Ms./Mrs.";
            default:
                return "";
        }
    }
}

?>