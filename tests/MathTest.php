<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble()
    {
        $nb = \Abdela\Math::double(2);
        $this->assertEquals(4, $nb);
    }

    public function testTableau()
    {
        $tab = \Abdela\Math::tableau();

        $this->assertContains("key1", $tab);

    }

    public function testTab()
    {
        $tab = \Abdela\Math::tableau();

        $this->assertArrayNotHasKey("key", $tab);

    }

}