<h2>Login</h2>
<?php
echo $this->Form->create('User', array(
    'url' => array(
        'controller' => 'users',
        'action' => 'login'
    )
));
echo $this->Form->input('User.username', array(
                'label' => 'Alias'
            ));
echo $this->Form->input('User.password', array(
                'label' => 'Contraseña'
            ));
echo $this->Form->end('Login');
?>