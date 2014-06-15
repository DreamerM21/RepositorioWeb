<div class="groups form">
    <?php echo $this->Form->create('Group'); ?>
    <fieldset>
        <legend><?php echo __('Nuevo Grupo'); ?></legend>
        <?php
        echo $this->Form->input('name', array(
            'label' => 'Nombre', 'label' => 'Nombre Completo',
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Ver Grupos'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Usuario'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
