<?php
/* SVN FILE: $Id: item_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 22:25:10 +0200 (ה', 19 מרץ 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class ItemFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'Item'
 * @access public
 */
	var $name = 'Item';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'syfile_id' => array('type' => 'integer', 'null' => false),
		'published' => array('type' => 'boolean', 'null' => false),
		'name' => array('type' => 'string', 'null' => false)
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('syfile_id' => 1, 'published' => 0, 'name' => 'Item 1'),
		array('syfile_id' => 2, 'published' => 0, 'name' => 'Item 2'),
		array('syfile_id' => 3, 'published' => 0, 'name' => 'Item 3'),
		array('syfile_id' => 4, 'published' => 0, 'name' => 'Item 4'),
		array('syfile_id' => 5, 'published' => 0, 'name' => 'Item 5'),
		array('syfile_id' => 6, 'published' => 0, 'name' => 'Item 6')
	);
}
?>
