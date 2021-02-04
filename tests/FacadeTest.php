<?php

use NobiDev\LibraryStarter\Constant;
use NobiDev\LibraryStarter\Facade;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 */
class FacadeTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    public function testFacade(): void
    {
        self::assertEquals(self::getMethod('getFacadeAccessor')->invoke(null), Constant::getName());
    }

    /**
     * @param string $name
     * @return ReflectionMethod
     * @throws ReflectionException
     */
    protected static function getMethod(string $name): ReflectionMethod
    {
        $class = new ReflectionClass(Facade::class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }
}