<div class="users view">
    <h2><?php echo __('User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($user['User']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Username'); ?></dt>
        <dd>
            <?php echo h($user['User']['username']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Password'); ?></dt>
        <dd>
            <?php echo h($user['User']['password']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nombre Completo'); ?></dt>
        <dd>
            <?php echo h($user['User']['nombre_completo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Group'); ?></dt>
        <dd>
            <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($user['User']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($user['User']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Modificar Usuario'), array('action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Eliminar Usuario'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Usuarios'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Grupos'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Home'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>-->
<!--		<li><?php echo $this->Html->link(__('Nueva Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Modificaciones'), array('controller' => 'mods', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Nueva Modificacion'), array('controller' => 'mods', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Entradas del usuario'); ?></h3>
    <?php if (!empty($user['Entrada'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Title'); ?></th>
                <th><?php echo __('Url'); ?></th>
                <th><?php echo __('Categoria'); ?></th>
                <th><?php echo __('Idiomas'); ?></th>
                <th><?php echo __('Modelo Uso'); ?></th>
                <th><?php echo __('Body'); ?></th>
                <th><?php echo __('Val User Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($user['Entrada'] as $entrada): ?>
                <tr>
                    <td><?php echo $entrada['id']; ?></td>
                    <td><?php echo $entrada['user_id']; ?></td>
                    <td><?php echo $entrada['title']; ?></td>
                    <td><?php echo $entrada['url']; ?></td>
                    <td><?php echo $entrada['categoria']; ?></td>
                    <td><?php echo $entrada['idiomas']; ?></td>
                    <td><?php echo $entrada['modelo_uso']; ?></td>
                    <td><?php echo $entrada['body']; ?></td>
                    <td><?php echo $entrada['val_user_id']; ?></td>
                    <td><?php echo $entrada['created']; ?></td>
                    <td><?php echo $entrada['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Ver'), array('controller' => 'entradas', 'action' => 'view', $entrada['id'])); ?>
                        <?php echo $this->Html->link(__('Validar'), array('controller' => 'entradas', 'action' => 'edit', $entrada['id'])); ?>
                        <?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'entradas', 'action' => 'delete', $entrada['id']), null, __('Are you sure you want to delete # %s?', $entrada['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <!--<li><?php  echo $this->Html->link(__('New Entrada'), array('controller' => 'entradas', 'action' => 'add'));  ?> </li>-->
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Modificaciones de Usuario'); ?></h3>
    <?php if (!empty($user['Mod'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Entrada Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Title'); ?></th>
                <th><?php echo __('Url'); ?></th>
                <th><?php echo __('Categoria'); ?></th>
                <th><?php echo __('Idiomas'); ?></th>
                <th><?php echo __('Modelo Uso'); ?></th>
                <th><?php echo __('Body'); ?></th>
                <th><?php echo __('Val User Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($user['Mod'] as $mod): ?>
                <tr>
                    <td><?php echo $mod['id']; ?></td>
                    <td><?php echo $mod['entrada_id']; ?></td>
                    <td><?php echo $mod['user_id']; ?></td>
                    <td><?php echo $mod['title']; ?></td>
                    <td><?php echo $mod['url']; ?></td>
                    <td><?php echo $mod['categoria']; ?></td>
                    <td><?php echo $mod['idiomas']; ?></td>
                    <td><?php echo $mod['modelo_uso']; ?></td>
                    <td><?php echo $mod['body']; ?></td>
                    <td><?php echo $mod['val_user_id']; ?></td>
                    <td><?php echo $mod['created']; ?></td>
                    <td><?php echo $mod['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Ver'), array('controller' => 'mods', 'action' => 'view', $mod['id'])); ?>
                        <?php echo $this->Html->link(__('Validar'), array('controller' => 'mods', 'action' => 'edit', $mod['id'])); ?>
                        <?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'mods', 'action' => 'delete', $mod['id']), null, __('Are you sure you want to delete # %s?', $mod['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php // echo $this->Html->link(__('New Mod'), array('controller' => 'mods', 'action' => 'add'));  ?> </li>
        </ul>
    </div>
</div>
