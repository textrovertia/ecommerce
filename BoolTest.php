<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class KaseboTest extends TestCase{
    public function testDirectory()
    {
        define('ROOT_PATH', dirname(__DIR__) . '/./');
        $this->assertDirectoryExists(ROOT_PATH, 'login');
        $this->assertDirectoryExists(ROOT_PATH, 'admin');
    }
}