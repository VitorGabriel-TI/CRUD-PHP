<?php
//fazendo conexão com o db
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

//mensagens
include_once 'includes/message.php'
?> 

<!codigo para centralizar o texto seja em pcs ou em celular>
<div class= "row">
    <div class="col s12 m6 push-m3 ">   
        <h3 class="light">Clientes</h3> 
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
              
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                //usamos um loop while para exibir todos os dados de cada linha
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar cliente</a>     
    </div>
</div>

<?
include_once 'includes/footer.php';
?>