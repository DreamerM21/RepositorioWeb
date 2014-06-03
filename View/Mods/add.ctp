<div class="mods form">
<?php echo $this->Form->create('Mod'); ?>
	<fieldset>
		<legend><?php echo __('Add Mod'); ?></legend>
	<?php
		echo $this->Form->input('entrada_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('categoria');
		echo $this->Form->input('idiomas');
		echo $this->Form->input('modelo_uso');
		echo $this->Form->input('body');
		echo $this->Form->input('val_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entradas'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
