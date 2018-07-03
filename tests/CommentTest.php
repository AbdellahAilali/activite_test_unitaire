<?php

use PHPUnit\Framework\TestCase;
use Acme\Comment;

class CommentTest extends TestCase
{

    public function testGetTitle()
    {
        $test = new Comment();

        $this->assertSame("NC", $test->getTitle());

    }

    public function testGetDescription()
    {
        $test = new Comment();

        $this->assertSame("NC", $test->getDescription());

    }

    public function testSetTitle()
    {
        $titre = new Comment();

        $value = "OK";

        $titre->setTitle($value);

        $this->assertEquals($value, $titre->getTitle());

    }

    public function testSetDescription()
    {
        $description = new Comment();

        $value = "NNNN";

        $description->setDescription($value);

        $this->assertEquals($value, $description->getDescription());
    }

     public function testFormatTitle()
    {
        $titleFormat =  new Comment();

        $titleFormat->setTitle("le chateau ambulant");

        $titleFormat->formatTitle();

        $valueFormat = $titleFormat->getTitle();

        $this->assertEquals( "LE CHATEAU AMBULANT" ,$valueFormat);
    }

    public function testTruncateDescriptionDefaultValue()
    {
        $nbCaractere = new Comment();

        $nbCaractere ->setDescription("bonjour je suis Cartman, je vous emmerde et je rentre à ma maison");

        $nbCaractere->truncateDescription();

        $valueNbCaractere = $nbCaractere->getDescription();

        $this->assertEquals("bonjour je", $valueNbCaractere );
    }

    public function testTruncateDescription()
    {
        $nbCaractere =  new Comment();

        $nbCaractere ->setDescription("test de description pour ");

        $nbCaractere->truncateDescription(10);

        $valueNbCaractere =$nbCaractere->getDescription();

        $this->assertEquals("test de de", $valueNbCaractere);
    }


}
