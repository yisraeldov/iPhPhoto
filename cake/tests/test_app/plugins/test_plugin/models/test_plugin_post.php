<?php
/* SVN FILE: $Id: test_plugin_post.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Test Plugin Post Model
 *
 *
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2006-2008, Cake Software Foundation, Inc.
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2006-2008, Cake Software Foundation, Inc.
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package       cake
 * @subpackage    cake.cake.tests.test_app.plugins.test_plugin
 * @since         CakePHP v 1.2.0.4487
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-19 04:16:01 +0200 (ו', 19 דצמ 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class TestPluginPost extends TestPluginAppModel {
/**
 * Name property
 *
 * @var string
 */
	var $name = 'Post';
/**
 * useTable property
 *
 * @var string
 */
	var $useTable = 'posts';
}