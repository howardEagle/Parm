<?php

require dirname(__FILE__) . '/test.inc.php';

class AAAGeneratorTest extends PHPUnit_Framework_TestCase
{
	function testGenerationSuccessful()
	{
		$this->assertFileExists(dirname(__FILE__).'/dao/namespaced/PeopleDaoObject.php');
		$this->assertFileExists(dirname(__FILE__).'/dao/namespaced/PeopleDaoFactory.php');
		$this->assertFileExists(dirname(__FILE__).'/dao/namespaced/ZipcodesDaoObject.php');
		$this->assertFileExists(dirname(__FILE__).'/dao/namespaced/ZipcodesDaoFactory.php');
		
		$this->assertFileExists(dirname(__FILE__).'/dao/global/CityDaoObject.php');
		$this->assertFileExists(dirname(__FILE__).'/dao/global/CityDaoFactory.php');
		$this->assertFileExists(dirname(__FILE__).'/dao/global/CountryDaoObject.php');
		$this->assertFileExists(dirname(__FILE__).'/dao/global/CountryDaoFactory.php');
	}
}
?>