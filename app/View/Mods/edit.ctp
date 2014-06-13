<div class="mods form">
    <?php echo $this->Form->create('Mod'); ?>
    <fieldset>
        <legend><?php echo __('Validar Modificacion'); ?></legend>
        <?php
        echo $this->Form->hidden('id');
//        echo $this->Form->input('entrada_id', array('default'=>'enter your email address','readonly'=> 'readonly'));
         echo $this->Form->input('entrada_id', array('readonly'=> 'readonly', 'label' => 'Entrada'));
        echo $this->Form->input('title', array('readonly'=> 'readonly', 'label' => 'titulo'));
        echo $this->Form->input('url', array('readonly'=> 'readonly', 'label' => 'URL'));
        echo $this->Form->input('categoria', array('readonly'=> 'readonly'));
        echo $this->Form->input('idiomas', array('readonly'=> 'readonly'));
        echo $this->Form->input('modelo_uso', array('readonly'=> 'readonly', 'label' => 'modelo de uso'));
        echo $this->Form->input('body', array('readonly'=> 'readonly', 'label' => 'Cuerpo'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Validar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Descartar'), array('action' => 'delete', $this->Form->value('Mod.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Mod.id'))); ?></li>
<!--        <li><?php echo $this->Html->link(__('Ver Modificaciones'), array('action' => 'index')); ?></li>-->
        <li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
<!--        <li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
    </ul>
</div>