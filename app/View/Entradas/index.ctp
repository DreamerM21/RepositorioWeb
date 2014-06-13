<div class="entradas index">
    <h2><?php echo __('Entradas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('usuario'); ?></th>
            <th><?php echo $this->Paginator->sort('titulo'); ?></th>
            <th><?php echo $this->Paginator->sort('URL'); ?></th>
            <th><?php echo $this->Paginator->sort('categoria'); ?></th>
            <th><?php echo $this->Paginator->sort('idiomas'); ?></th>
            <th><?php echo $this->Paginator->sort('Modelo de Uso'); ?></th>
            <th><?php echo $this->Paginator->sort('cuerpo'); ?></th>
            <th><?php echo $this->Paginator->sort('Usuario Validador'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha de Creacion'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha de Modificacion'); ?></th>
            <th class="actions"><?php echo __('Opciones'); ?></th>
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
                echo $this->Html->link($entrada['User']['username'], array('controller' => 'users', 'action' => 'view', $entrada['User']['id']));
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
            echo $this->Paginator->sort('Usuario');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('Titulo');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('URL');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('categoria');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('idiomas');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('modelo de Uso');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('Cuerpo');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('Usuario Validador');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('Fecha de Creacion');
            echo "</th>";
            echo "<th>";
            echo $this->Paginator->sort('Fecha de Modificacion');
            echo "<th>";
            echo "<th class='actions'>";
            echo __('Opciones');
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
                    echo $this->Html->link($entrada['User']['username'], array('controller' => 'users', 'action' => 'view', $entrada['User']['id']));
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
        echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Menu'); ?></h3>
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
