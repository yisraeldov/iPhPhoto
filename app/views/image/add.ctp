<div class="image form">
<?php echo $form->create('Image');?>
	<fieldset>
 		<legend><?php __('Add Image');?></legend>
	<?php

Warning: Invalid argument supplied for foreach() in /Users/yisraeldov/Sites/cake/cake/console/libs/templates/views/form.ctp on line 31
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Image', true), array('action' => 'index'));?></li>
	</ul>
</div>
