<?php

namespace PHPUnitPro\tests;

require __DIR__ . "/../../vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use PHPUnitPro\User;
class UserTest extends TestCase
{
    public function test_returns_users_full_name()
    {
        $user = new User();
        $user->first_name = "Okan";
        $user->surname = "Altun";
        $this->assertEquals("Okan Altun", $user->getFullName());
    }
    public function test_full_name_is_null()
    {
        $user = new User();
        $this->assertEquals('', $user->getFullName());
    }
}
