<div class="entradas form">
    <?php echo $this->Form->create('Entrada'); ?>
    <fieldset>
        <legend><?php echo __('Nueva Entrada'); ?></legend>
        <?php

        echo $this->Form->input('title');
        echo $this->Form->input('url');
        echo $this->Form->input('categoria');
        echo $this->Form->input('idiomas');
        echo $this->Form->input('modelo_uso');
        echo $this->Form->input('body');

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Ver Entradas'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
