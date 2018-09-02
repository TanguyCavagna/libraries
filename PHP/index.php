<?php
require_once './class/Autoloader.php';

Autoloader::register();

$form = new Form(array(
    'username' => 'Qendrime',
    'pseudo' => 'Yolo',
));
?>

<form action="#" method="post">
    <?php
    echo $form->input('username');
    echo $form->input('pseudo');
    echo $form->input('password');
    echo $form->submit();
    ?>
</form>
