<?php


class ExampleWebapp extends PHPUnitSeleniumTestCase {


    public function testIndexPageHasCorrectTitle()
    {
        $this->url("/index.html");

        $this->assertEquals("Php Selenium Testsuite - Example app", $this->title());
    }


    public function testIndexPageHasSignUpHeader()
    {
        $this->url("/index.html");

        $this->assertRegExp("/sign up/i", $this->byCssSelector('h1')->text());
    }


    public function testIndexPageHasSignUpForm()
    {
        $this->url("/index.html");

        $form = $this->byTag('form');

        $this->assertContains('/signup.html', $form->attribute('action'));
    }


    public function testSignUpFormSubmitsToSignup()
    {
        $this->url("/index.html");

        $this->byId('email')->value('you@example.com');
        $this->clickOnElement("submit");

        $this->assertEquals('Thanks', $this->byTag('h1')->text());
    }


    /**
     * This test will always fail, but it generates screenshot
     * of current browser view to folder reports/failures, when
     * the test failed.
     */
    public function testFailAndTakeScreenshot()
    {
        $this->url("/signup.html");

        $this->fail("Failed on purpose. Check out folder reports/failures.");
    }
}

