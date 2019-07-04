<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase {
    function testCreateUser () {
        $user = new User();

        $user->create([
            'name' => 'Gabriel',
            'age' => 23,
            'email' => 'gabriel@email.com'
        ]);

        $this->assertEquals('Gabriel', $user->name);
        $this->assertEquals(23, $user->age);
        $this->assertEquals('gabriel@email.com', $user->email);
    }
}