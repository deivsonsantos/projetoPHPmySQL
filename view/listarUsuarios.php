<?php



include_once '../control/UsuarioControl.php';
    $usuarioControl = new UsuarioControl();
?>   
    <table>
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>email</th>
       
    </tr>
    <?php
    foreach ($usuarioControl->listarTodos()as $usuario){
    ?>
    
    <tr>
        <td><?php echo $usuario->id;?></td>
        <td><?php echo $usuario->nome;?></td>
        <td><?php echo $usuario->email;?></td>
    </tr>
    <?php }
 var_dump($dados = $usuarioControl->listarId(1));
 
    echo $dados->id;
    echo $dados->nome;
    echo $dados->email;
    echo $dados->senha;
    
    ?>
</table>
