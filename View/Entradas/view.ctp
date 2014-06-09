<div class="entradas view">
<h2><?php echo __('Entrada'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entrada['User']['id'], array('controller' => 'users', 'action' => 'view', $entrada['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idiomas'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['idiomas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo Uso'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['modelo_uso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Val User Id'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['val_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modificar Entrada'), array('action' => 'edit', $entrada['Entrada']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Entrada'), array('action' => 'delete', $entrada['Entrada']['id']), null, __('Are you sure you want to delete # %s?', $entrada['Entrada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Entradas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Entrada'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>
              
		<!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Realizar Modificacion'); ?></h3>
	<?php if (!empty($entrada['Mod'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entrada Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Categoria'); ?></th>
		<th><?php echo __('Idiomas'); ?></th>
		<th><?php echo __('Modelo Uso'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Val User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entrada['Mod'] as $mod): ?>
		<tr>
			<td><?php echo $mod['id']; ?></td>
			<td><?php echo $mod['entrada_id']; ?></td>
			<td><?php echo $mod['user_id']; ?></td>
			<td><?php echo $mod['title']; ?></td>
			<td><?php echo $mod['url']; ?></td>
			<td><?php echo $mod['categoria']; ?></td>
			<td><?php echo $mod['idiomas']; ?></td>
			<td><?php echo $mod['modelo_uso']; ?></td>
			<td><?php echo $mod['body']; ?></td>
			<td><?php echo $mod['val_user_id']; ?></td>
			<td><?php echo $mod['created']; ?></td>
			<td><?php echo $mod['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mods', 'action' => 'view', $mod['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mods', 'action' => 'edit', $mod['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mods', 'action' => 'delete', $mod['id']), null, __('Are you sure you want to delete # %s?', $mod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Modificar esta Entrada'), array('controller' => 'mods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
