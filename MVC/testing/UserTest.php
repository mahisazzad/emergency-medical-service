<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    //protected function getUserModel(){}

    protected $user;

    public function setUp(): void
    {
        //the line below can be used to check whether setUp runs before each test block.
        //var_dump('1');

        $this->user = new \App\Models\User;

        //the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
        //$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);

    }

    public function testEmailAddressCanBeSet()
    {
        $user = new \App\Models\User;

        $user->setEmail('mahi@gmail.com');

        $this->assertEquals($user->getEmail(), 'mahi@gmail.com');
    }

    public function testPasswordsCanBeSet()
    {
        $user = new \App\Models\User;

        $user->setPassword('asd123');

        $this->assertEquals($user->getPassword(), 'asd123');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user1 = new \App\Models\User;

        $user1->setEmail('mahi@gmail.com');
        $user1->setPassword('asd123');

        $emailVariables = $user1->getEmailVariables();

        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertArrayHasKey('password', $emailVariables);

        $this->assertEquals($emailVariables['email'], 'mahi@gmail.com');
        $this->assertEquals($emailVariables['password'], 'asd123');
    }
}
