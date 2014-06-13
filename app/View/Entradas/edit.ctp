<div class="entradas form">
    <?php echo $this->Form->create('Entrada'); ?>
    <fieldset>
        <legend><?php echo __('Validar Entrada'); ?></legend>
        <?php
        echo $this->Form->hidden('id');

        echo $this->Form->input('title', array('readonly'=> 'readonly',
                'label' => 'Titulo'
            ));
        echo $this->Form->input('url', array('readonly'=> 'readonly',
                'label' => 'URL'));
        echo $this->Form->input('categoria', array('readonly'=> 'readonly'));
        echo $this->Form->input('idiomas', array('readonly'=> 'readonly'));
        echo $this->Form->input('modelo_uso', array('readonly'=> 'readonly',
                'label' => 'Modelo de Uso'));
        echo $this->Form->input('body', array('readonly'=> 'readonly',
                'label' => 'Cuerpo'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Validar')); ?>

</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul><li><?php echo $this->Form->postLink(__('Descartar'), array('action' => 'delete', $this->Form->value('Entrada.id')), null, __('¿Seguro que deseas eliminar esta entrada?', $this->Form->value('Entrada.id'))); ?></li>
        <li><?php echo $this->Html->link(__('Inicio'), array('action' => 'index')); ?></li>
        <!--<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
        
    </ul>
</div>
