<div class="groups form">
    <?php echo $this->Form->create('Group'); ?>
    <fieldset>
        <legend><?php echo __('Modificar Grupo'); ?></legend>
        <?php
        echo $this->Form->hidden('id');
        echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Group.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
        <li><?php echo $this->Html->link(__('Ver Grupos'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
