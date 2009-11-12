<div class="image view">
<h2><?php  __('Image');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>

Warning: Invalid argument supplied for foreach() in /Users/yisraeldov/Sites/cake/cake/console/libs/templates/views/view.ctp on line 29
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Image', true), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Image', true), array('action' => 'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Image', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Image', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
