<?php
session_start();
    include('./config.php');

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $query = "select * from cadastros order by nome_funcionario";
    $result = mysqli_query($con, $query);
    $num_rows = mysqli_num_rows($result);
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Funcionários</h1>
        <a href="?p=funcionarios/new" type="button" class="btn btn-primary">Cadastrar</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Função</th>
                    <th scope="col">Salário</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if($num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                            <td>".$row['funcionario_id']."</td>
                            <td>".$row['nome_funcionario']."</td>
                            <td>".$row['contato_funcionario']."</td>
                            <td>".$row['funcao_funcionario']."</td>
                            <td>".$row['salario_funcionario']."</td>
                        </tr>";
                    }
                } else {
                    echo "<tr>
                            <td> 
                                <h2>Sem dados cadastrados</h2>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
    $con->close();
?>

</body>
</html>