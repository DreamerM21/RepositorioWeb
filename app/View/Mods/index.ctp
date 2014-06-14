<div class="mods index">
    <h2><?php echo __('Modificaciones'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('entrada'); ?></th>
            <th><?php echo $this->Paginator->sort('usuario'); ?></th>
            <th><?php echo $this->Paginator->sort('titulo'); ?></th>
            <th><?php echo $this->Paginator->sort('URL'); ?></th>
            <th><?php echo $this->Paginator->sort('categoria'); ?></th>
            <th><?php echo $this->Paginator->sort('idiomas'); ?></th>
            <th><?php echo $this->Paginator->sort('Modelo de uso'); ?></th>
            <th><?php echo $this->Paginator->sort('Cuerpo'); ?></th>
            <th><?php echo $this->Paginator->sort('usuario validador'); ?></th>
            <th><?php echo $this->Paginator->sort('fecha de creacion'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha de modificacion'); ?></th>
            <th class="actions"><?php echo __('Opciones'); ?></th>
        </tr>
        <?php foreach ($mods as $mod): ?>
            <tr>
                <td><?php echo h($mod['Mod']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($mod['Entrada']['title'], array('controller' => 'entradas', 'action' => 'view', $mod['Entrada']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($mod['User']['username'], array('controller' => 'users', 'action' => 'view', $mod['User']['id'])); ?>
                </td>
                <td><?php echo h($mod['Mod']['title']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['url']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['categoria']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['idiomas']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['modelo_uso']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['body']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['val_user_id']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['created']); ?>&nbsp;</td>
                <td><?php echo h($mod['Mod']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $mod['Mod']['id'])); ?>
                    <?php $uid = AuthComponent::user('group_id');
                    if ($uid == 1 || $uid == 2) {
                        echo $this->Html->link(__('Validar'), array('action' => 'edit', $mod['Mod']['id']));
                    }
                    ?>
                    <!--<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mod['Mod']['id']), null, __('Are you sure you want to delete # %s?', $mod['Mod']['id'])); ?>-->
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>-->
<!--		<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
