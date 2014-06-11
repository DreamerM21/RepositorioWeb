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

        <?php
        foreach ($entradas as $entrada):
            if ($entrada['Entrada']['val_user_id'] == !null) {
                echo "<tr>";
                echo "<td>";
                echo h($entrada['Entrada']['id']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";
                echo $this->Html->link($entrada['User']['id'], array('controller' => 'users', 'action' => 'view', $entrada['User']['id']));
                echo "&nbsp";
                echo "</td>";
                echo "<td>";
                echo h($entrada['Entrada']['title']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";
                echo h($entrada['Entrada']['url']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['categoria']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['idiomas']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['modelo_uso']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['body']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['val_user_id']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['created']);
                echo "&nbsp";
                echo "</td>";
                echo "<td>";

                echo h($entrada['Entrada']['modified']);
                echo "&nbsp";
                echo "</td>";
                echo '<td class="actions">';
                echo $this->Html->link(__('Ver'), array('action' => 'view', $entrada['Entrada']['id']));
//                echo $this->Html->link(__('Edit'), array('action' => 'edit', $entrada['Entrada']['id']));
//                echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entrada['Entrada']['id']), null, __('Are you sure you want to delete # %s?', $entrada['Entrada']['id']));
                
                echo "</td>";
                echo "</tr>";
            }

        endforeach;

//        $uid = $this->Session->read('Auth.User.id');
                $uid = AuthComponent::user('group_id') ;
        if ($uid == 1 || $uid == 2) {
//        echo "<h2>";
//        echo ('Entradas Pendientes');
//        echo "</h2>";
            echo "<table cellpadding='0' cellspacing='0'>";
            echo "<tr>";
            echo "<th>";
            echo $this->Paginator->sort('id');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('user_id');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('title');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('url');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('categoria');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('idiomas');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('modelo_uso');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('body');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('val_user_id');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('created');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('modified');
            echo "<th>";
            echo "<th class='actions'>";
            echo __('Actions');
            echo "<th>";
            echo "</tr>";


            foreach ($entradas as $entrada):
                if ($entrada['Entrada']['val_user_id'] == null) {
                    echo "<tr>";
                    echo "<td>";
                    echo h($entrada['Entrada']['id']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";
                    echo $this->Html->link($entrada['User']['id'], array('controller' => 'users', 'action' => 'view', $entrada['User']['id']));
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";
                    echo h($entrada['Entrada']['title']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";
                    echo h($entrada['Entrada']['url']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['categoria']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['idiomas']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['modelo_uso']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['body']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['val_user_id']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['created']);
                    echo "&nbsp";
                    echo "</td>";
                    echo "<td>";

                    echo h($entrada['Entrada']['modified']);
                    echo "&nbsp";
                    echo "</td>";
                    echo '<td class="actions">';
                    echo $this->Html->link(__('Ver'), array('action' => 'view', $entrada['Entrada']['id']));
                    echo $this->Html->link(__('Validar'), array('action' => 'edit', $entrada['Entrada']['id']));
//                    echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $entrada['Entrada']['id']), null, __('Are you sure you want to delete # %s?', $entrada['Entrada']['id']));

                    echo "</td>";
                    echo "</tr>";
                }

            endforeach;
        }
        ?>
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
        <li><?php echo $this->Html->link(__('Nueva Entrada'), array('action' => 'add')); ?></li>
        <?php
        if ($uid == 1):
            echo"<li>";
            echo $this->Html->link(__('Admin. Usuarios'), array('controller' => 'users', 'action' => 'index'));
            echo"</li>";
        endif;
        ?>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->

    </ul>
</div>
