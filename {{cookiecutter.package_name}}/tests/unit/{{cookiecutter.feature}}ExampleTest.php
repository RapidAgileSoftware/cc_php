<?php

namespace {{cookiecutter.namespace_prefix}}\{{cookiecutter.feature}}\Tests;

use {{cookiecutter.namespace_prefix}}\{{cookiecutter.feature}}\{{cookiecutter.feature}}Example as Example;

class {{cookiecutter.feature}}ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testSomeFeature()
    {
        $this->assertTrue(class_exists(Example::class));
    }

    public function testCanAdd()
    {
        $stack = new Example(2);
        $stack->add(3);
        $stack->add(3);
    }

    /**
     * @expectedExceptionMessage Stack Overflows
     */
    public function testIfWePushMoreThanMaxItThrowsError()
    {
        $stack = new Example(2);
        $stack->add(2);
        $stack->add(3);
        $stack->add(4);
    }
}
