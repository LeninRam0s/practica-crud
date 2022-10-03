<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registro</h1>
    <ul>
        <?php foreach($menu as $item): ?>
        <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php echo validation_errors();
    ?>

    <?php echo form_open('registro'); //hacia donde redirige
    ?>

    <?php 
        echo form_open('registro/create', array('method' => 'POST'));


    echo form_label('Nombre de usuario:');
    echo form_input('username');

    echo "<br>", "<br>";

    echo form_label('Correo Electrónico:');
    echo form_input(array('type' => 'email', 'name' => 'email'));

    echo "<br>", "<br>";

    echo form_label('Constraseña:');
    echo form_password('password');

    echo "<br>", "<br>";

    echo form_label('Confirmacion de Contraseña:');
    echo form_password('password_confirm');

    echo "<br>", "<br>";

    echo form_submit('submit','Enviar Datos');

    echo form_close();
    ?>
    <?= isset($msg) ? $msg : '' ?>
</body>

</html>