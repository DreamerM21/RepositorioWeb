<div class="entradas form">
    <?php echo $this->Form->create('Entrada'); ?>
    <fieldset>
        <legend><?php echo __('Edit Entrada'); ?></legend>
        <?php
        echo $this->Form->hidden('id');
//		echo $this->Form->input('user_id');
        echo $this->Form->show('title');
        echo $this->Form->show('url');
        echo $this->Form->show('categoria');
        echo $this->Form->show('idiomas');
        echo $this->Form->show('modelo_uso');
        echo $this->Form->show('body');
	echo $this->Form->hidden('val_user_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entrada.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Entrada.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Entradas'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Mods'), array('controller' => 'mods', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Mod'), array('controller' => 'mods', 'action' => 'add')); ?> </li>
    </ul>
</div>
