<?php
/**
 * Tests for Upgradeable
 */

use PHPUnit\Framework\TestCase;
use Upgradeable\Upgradeable;

class UpgradeableTest extends TestCase {
    private Upgradeable $instance;

    protected function setUp(): void {
        $this->instance = new Upgradeable(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Upgradeable::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
