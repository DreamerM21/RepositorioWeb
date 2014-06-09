<div class="mods form">
    <?php echo $this->Form->create('Mod'); ?>
    <fieldset>
        <legend><?php echo __('Edit Mod'); ?></legend>
        <?php
        echo $this->Form->hidden('id');
        echo $this->Form->input('entrada_id');
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

        <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Mod.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Mod.id'))); ?></li>
        <li><?php echo $this->Html->link(__('Ver Modificaciones'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Entradas'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
