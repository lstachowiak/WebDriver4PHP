<?php
echo getcwd();
set_include_path('./library/' . PATH_SEPARATOR 
				. get_include_path());

require_once ("webdriver4php/src/WebDriver.php");
require_once ("webdriver4php/src/LocatorStrategy.php");
require_once ("webdriver4php/src/WebTest.php");
