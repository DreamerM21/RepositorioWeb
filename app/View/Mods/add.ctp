<div class="mods form">
    <?php echo $this->Form->create('Mod'); ?>
    <fieldset>
        <legend><?php echo __('Proponer Modificacion'); ?></legend>
        <?php
        echo $this->Form->input('entrada_id', array(
                'label' => 'Entrada'
            ));
        echo $this->Form->input('title', array(
                'label' => 'Titulo'
            ));
        echo $this->Form->input('url', array(
                'label' => 'URL'
            ));
        echo $this->Form->input('categoria');
        echo $this->Form->input('idiomas');
        echo $this->Form->input('modelo_uso', array(
                'label' => 'Modelo de Uso'
            ));
        echo $this->Form->input('body', array(
                'label' => 'Cuerpo'
            ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>

        <li><?php // echo $this->Html->link(__('Ver Modificaciones'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
<!--        <li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
