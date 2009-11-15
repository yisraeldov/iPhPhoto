<?php
// app/views/users/login.ctp
if (isset($message)) {
    echo '<p class="error">'.$message.'</p>';
}
// echo $form->create('User', array('type' => 'post', 'action' => 'login'));
// echo $form->input('OpenidUrl.openid', array('label' => false));
// echo $form->end('Login');

$session->flash('auth');
   echo $form->create('User', array('action' => 'login'));
   echo $form->input('username');
   echo $form->input('password');
   echo $form->end('Login');
?>