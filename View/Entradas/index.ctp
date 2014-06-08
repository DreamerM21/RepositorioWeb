<div class="entradas index">
    <h2><?php echo __('Entradas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('url'); ?></th>
            <th><?php echo $this->Paginator->sort('categoria'); ?></th>
            <th><?php echo $this->Paginator->sort('idiomas'); ?></th>
            <th><?php echo $this->Paginator->sort('modelo_uso'); ?></th>
            <th><?php echo $this->Paginator->sort('body'); ?></th>
            <th><?php echo $this->Paginator->sort('val_user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($entradas as $entrada): ?>
            <tr>
                <td><?php echo h($entrada['Entrada']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($entrada['User']['id'], array('controller' => 'users', 'action' => 'view', $entrada['User']['id'])); ?>
                </td>
                <td><?php echo h($entrada['Entrada']['title']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['url']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['categoria']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['idiomas']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['modelo_uso']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['body']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['val_user_id']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['created']); ?>&nbsp;</td>
                <td><?php echo h($entrada['Entrada']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $entrada['Entrada']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entrada['Entrada']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entrada['Entrada']['id']), null, __('Are you sure you want to delete # %s?', $entrada['Entrada']['id'])); ?>
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
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Entrada'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Mods'), array('controller' => 'mods', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Mod'), array('controller' => 'mods', 'action' => 'add')); ?> </li>
    </ul>
</div>
