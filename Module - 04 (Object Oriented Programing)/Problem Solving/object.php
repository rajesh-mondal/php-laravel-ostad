<?php
class User {
    public $name;
    public $username;
    public $followerCount;
}

$rajeshobject = new User();
$rajeshobject->name = "Rajesh";
$rajeshobject->username = "@rajesh";
$rajeshobject->followerCount = 1000;
print_r( $rajeshobject );