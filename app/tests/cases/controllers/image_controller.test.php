<?php 
/* SVN FILE: $Id$ */
/* ImageController Test cases generated on: 2009-11-11 14:15:32 : 1257941732*/
App::import('Controller', 'Image');

class TestImage extends ImageController {
	var $autoRender = false;
}

class ImageControllerTest extends CakeTestCase {
	var $Image = null;

	function startTest() {
		$this->Image = new TestImage();
		$this->Image->constructClasses();
	}

	function testImageControllerInstance() {
		$this->assertTrue(is_a($this->Image, 'ImageController'));
	}

	function endTest() {
		unset($this->Image);
	}
}
?>