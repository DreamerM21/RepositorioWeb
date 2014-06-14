<div class="mods form">
    <?php echo $this->Form->create('Mod'); ?>
    <fieldset>
        <legend><?php echo __('Proponer Modificacion'); ?></legend>
        <?php

        echo $this->Form->hidden('entrada_id', array(
                'label' => 'Entrada', 'default' => $entrada['Entrada']['id']
            ));
        echo $this->Form->input('title', array(
                'label' => 'Titulo' , 'default' => $entrada['Entrada']['title'])
            );
        echo $this->Form->input('url', array(
                'label' => 'URL', 'default' => $entrada['Entrada']['url']
            ));
        echo $this->Form->input('categoria', array(
                'default' => $entrada['Entrada']['categoria']
            ));
        echo $this->Form->input('idiomas', array(
            'default' => $entrada['Entrada']['idiomas']
            ));
        echo $this->Form->input('modelo_uso', array(
                'label' => 'Modelo de Uso', 'default' => $entrada['Entrada']['modelo_uso']
            )
            );
        echo $this->Form->input('body', array(
                'label' => 'Cuerpo', 'default' => $entrada['Entrada']['body']
            )
            );
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
