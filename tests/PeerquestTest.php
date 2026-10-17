<?php
/**
 * Tests for PeerQuest
 */

use PHPUnit\Framework\TestCase;
use Peerquest\Peerquest;

class PeerquestTest extends TestCase {
    private Peerquest $instance;

    protected function setUp(): void {
        $this->instance = new Peerquest(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peerquest::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
