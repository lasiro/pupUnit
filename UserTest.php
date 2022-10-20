<?php
require 'vendor/autoload.php';
use App\User;
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase{
    public function test_user(){
        $user = new User('log','log@gmail.com','admin');
        $this->assertEquals('log@ogmail.com',$user->getEmail());
       
}

}