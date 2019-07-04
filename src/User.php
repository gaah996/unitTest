<?php

namespace App;

class User {
    public $name, $age, $email;

    function create($params) {
        foreach ($params as $key => $value) {
            $this->$key = $value;
        }
    }
}