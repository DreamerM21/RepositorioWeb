<div class="users form">
    <?php echo $this->Form->create('Usuario'); ?>
    <fieldset>
        <legend><?php echo __('Nuevo Usuario'); ?></legend>
        <?php
        echo $this->Form->input('username', array(
                'label' => 'Alias'
            ));
        echo $this->Form->input('password', array(
                'label' => 'Contraseña'
            ));
        echo $this->Form->input('nombre_completo', array(
                'label' => 'Nombre Completo'
            ));

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>

<!--        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Grupos'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add')); ?> </li>-->
        <li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
<!--        <li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
