<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('nombre_completo');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Entradas'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Mods'), array('controller' => 'mods', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Mod'), array('controller' => 'mods', 'action' => 'add')); ?> </li>
    </ul>
</div>
