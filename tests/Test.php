<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    function testA()
    {
        // 假设这里有一个函数或方法需要测试
        // $result = someFunctionOrMethod();

        // 使用断言来验证结果
        // $this->assertEquals(expectedValue, $result);

        // 示例：如果只是想让测试通过而不做实际验证，可以添加一个总是为真的断言
        $this->assertTrue(true);
    }

    function testB()
    {
        $a = 1;
        $b = 2;
        $c = $a + $b;
        $this->assertLessThan($c, $a);
    }

    function testC(){
        $a = "a";
        $b = ["a","b","c"];
        $this->assertContains($a, $b);

        $str1 = "hello";
        $str2 = "hello world!";
        $this->assertStringContainsString($str1,$str2);
    }
}