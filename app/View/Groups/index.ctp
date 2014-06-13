<div class="groups index">
    <h2><?php echo __('Grupos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('Nombre'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha de Creacion'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha de Modificacion'); ?></th>
            <th class="actions"><?php echo __('Menu'); ?></th>
        </tr>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
                <td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $group['Group']['id'])); ?>
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $group['Group']['id'])); ?>
                    <!--<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>-->
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
        echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Nuevo Grupo'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>

        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
    </ul>
</div>
