<?php
/* SVN FILE: $Id: database.group.php 8283 2009-08-03 20:49:17Z gwoo $ */
/**
 * DatabaseGroupTest file
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
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.5517
 * @version       $Revision: 8283 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-08-03 23:49:17 +0300 (ב', 03 אוג 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * DatabaseGroupTest class
 *
 * This test group will run all behavior, schema and datasource tests excluding database
 * driver-specific tests
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class DatabaseGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All model tests'
 * @access public
 */
	var $label = 'Datasources, Schema and DbAcl tests';
/**
 * ModelGroupTest method
 *
 * @access public
 * @return void
 */
	function DatabaseGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'db_acl');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'schema');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'datasources' . DS . 'dbo_source');
	}
}
?>