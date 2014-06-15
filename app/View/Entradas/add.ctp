<div class="entradas form">
    <?php echo $this->Form->create('Entrada'); ?>
    <fieldset>
        <legend><?php echo __('Nueva Entrada'); ?></legend>
        <?php
        echo $this->Form->input('title', array(
            'label' => 'Titulo', 'required' => 'false'));
        echo $this->Form->input('url', array(
            'label' => 'URL', 'required' => 'false'));
        echo $this->Form->input('categoria', array('required' => 'false'));
        echo $this->Form->input('idiomas', array('required' => 'false'));
        echo $this->Form->input('modelo_uso', array(
            'label' => 'Modelo de Uso', 'required' => 'false'));
        echo $this->Form->input('body', array(
            'label' => 'Cuerpo', 'required' => 'false'));
        ?>
    </fieldset>
        <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Inicio'), array('action' => 'index')); ?></li>
<!--        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
