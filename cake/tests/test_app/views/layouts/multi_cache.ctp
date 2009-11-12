<?php
/* SVN FILE: $Id: multi_cache.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-19 04:16:01 +0200 (ו', 19 דצמ 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<p>This is regular text</p>
<cake:nocache>
	<p>A. Layout Before Content</p>
	<?php $this->log('1. layout before content') ?>
</cake:nocache>
<cake:nocache><?php echo $this->element('nocache/plain'); ?></cake:nocache>
<cake:nocache>
	<p>C. Layout After Test Element But Before Content</p>
	<?php $this->log('3. layout after test element but before content') ?>
</cake:nocache>
<?php echo $content_for_layout; ?>
<cake:nocache>
	<p>E. Layout After Content</p>
	<?php $this->log('5. layout after content') ?>
</cake:nocache>
<p>Additional regular text.</p>
<?php //echo $this->element('nocache/contains_nocache'); stub?>
<cake:nocache>
	<p>G. Layout After Content And After Element With No Cache Tags</p>
	<?php $this->log('7. layout after content and after element with no cache tags') ?>
</cake:nocache>
