<h1>Clientes</h1>
<table class= "table">
<?php foreach ($clientes as $data):?>
    <tr>
        <td><strong>ID</td>
        <td><?php echo $data->id?></td>
    </tr>
    <tr>
        <td><strong>Cedula</strong></td>
        <td><?php echo $data ->cedula;?></td>
        
    </tr>
    <tr>
        <td><strong>Nombre Cliente</strong></td>
        <td>  <?php echo $data ->nombre_cliente;?></td>
    </tr>
    <tr>
        <td><strong>Telefono</strong></td>
        <td><?php echo $data ->telefono;?></td>
    </tr>
    <tr>
        <td><strong>Gmail</strong></td>
        <td> <?php echo $data ->email;?></td>
    </tr>
    <tr>
        <td><strong>Genero</strong></td>
        <td><?php echo $data ->genero;?></td>
    </tr>
    <?php endforeach;?>

   
                   

