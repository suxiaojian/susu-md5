<?php

use PHPUnit\Framework\TestCase;
use Susu\Md5\Md5hash;

class Md5Test extends TestCase
{
    protected $hash;

    public function setUp()
    {
        $this->hash = new Md5hash();
    }

    public function testMd5HashMake()
    {
        $pwd = md5('pwd');
        $pwd2 = $this->hash->make('pwd');

        $this->assertEquals($pwd,$pwd2);
    }

    public function testMd5HashMakeWithSalt()
    {
        $pwd = md5('pwdsusu');
        $pwd2 = $this->hash->make('pwd',['salt'=>'susu']);

        $this->assertEquals($pwd,$pwd2);
    }

    public function testMd5HashCheck()
    {
        $pwd = md5('pwd');
        $pwd2 = $this->hash->check('pwd',$pwd);

       $this->assertTrue($pwd2);
    }

}
// 命令行 执行测试   vendor/bin/phpunit