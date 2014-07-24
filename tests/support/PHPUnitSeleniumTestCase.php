<?php

class PHPUnitSeleniumTestCase extends PHPUnit_Extensions_Selenium2TestCase {

    protected $captureScreenshotOnFailure = FALSE;

    protected function setUp()
    {
        parent::setUp();

        // Selenium server config
        $this->setHost(Config::SELENIUM_HOST);
        $this->setPort(Config::SELENIUM_PORT);

        // Which browser to use
        $this->setBrowser(Config::BROWSER);

        // Set browser to url, which we are going to test
        $this->setBrowserUrl(Config::BASE_URL);
    }

    protected function tearDown()
    {
        $status = $this->getStatus();

        if ($status == \PHPUnit_Runner_BaseTestRunner::STATUS_ERROR || $status == \PHPUnit_Runner_BaseTestRunner::STATUS_FAILURE)
        {
            $file_name = __DIR__ . "/" .Config::SCREENSHOT_DIR . get_class($this) . '_' . $this->getName() . '_' . date('Y-m-d_H:i:s') . '.png';
            file_put_contents($file_name, $this->currentScreenshot());
        }
    }
}

