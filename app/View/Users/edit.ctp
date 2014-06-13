<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php
        echo $this->Form->hidden('id');
        echo $this->Form->input('username', array(
                'label' => 'Alias'
            ));
        echo $this->Form->input('password', array(
                'label' => 'Contraseña'
            ));
        echo $this->Form->input('nombre_completo', array(
                'label' => 'Nombre Completo'
            ));
        echo $this->Form->input('group_id', array(
                'label' => 'Grupo'
            ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Confirmar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Grupos'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Ver Entradas'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
