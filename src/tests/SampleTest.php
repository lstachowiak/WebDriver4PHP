<?php

class SampleTest extends WebTest {

	public function testOne() {
		$this->webdriver->get("http://google.com");
		$element = $this->webdriver->findElementBy(LocatorStrategy::name, "q");
		$element->sendKeys(array("selenium google code"));
		$element->submit();
	}

}
