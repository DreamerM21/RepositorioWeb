<div class="mods view">
<h2><?php echo __('Modificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entrada'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mod['Entrada']['title'], array('controller' => 'entradas', 'action' => 'view', $mod['Entrada']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mod['User']['id'], array('controller' => 'users', 'action' => 'view', $mod['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idiomas'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['idiomas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo Uso'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['modelo_uso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Val User Id'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['val_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mod['Mod']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Validar Modificacion'), array('action' => 'edit', $mod['Mod']['id'])); ?> </li>
		<!--<li><?php echo $this->Form->postLink(__('Eliminar Modificacion'), array('action' => 'delete', $mod['Mod']['id']), null, __('Are you sure you want to delete # %s?', $mod['Mod']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Ver Modificiaciones'), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
<!--		<li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
	</ul>
</div>