<?php
/* SVN FILE: $Id: uuid_tree_fixture.php 8283 2009-08-03 20:49:17Z gwoo $ */
/**
 * UUID Tree behavior fixture.
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
 * @since         CakePHP(tm) v 1.2.0.7984
 * @version       $Revision: 8283 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-08-03 23:49:17 +0300 (ב', 03 אוג 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * UuidTreeFixture class
 *
 * @uses          CakeTestFixture
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class UuidTreeFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'UuidTree'
 * @access public
 */
	var $name = 'UuidTree';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id'	=> array('type' => 'string', 'length' => 36, 'key' => 'primary'),
		'name'	=> array('type' => 'string','null' => false),
		'parent_id' => array('type' => 'string', 'length' => 36, 'null' => true),
		'lft'	=> array('type' => 'integer','null' => false),
		'rght'	=> array('type' => 'integer','null' => false)
	);
}
?>