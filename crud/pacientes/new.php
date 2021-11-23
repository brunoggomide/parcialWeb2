<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include('./config.php');

        //verificar a conexão
        $conn = new mysqli($host, $user, $password, $dbname);
    
        if($conn->connect_error){
            die("Erro na conexão: ".$conn->connect_error);
        }
        else {
          $funcionario_id = $_POST['funcionario_id'];
          $nome_funcionario = $_POST['nome_funcionario'];
          $contato_funcionario = $_POST['contato_funcionario'];
          $funcao_funcionario = $_POST['funcao_funcionario'];
          $salario_funcionario = $_POST['salario_funcionario'];

          $sql = "insert into cadastros (funcionario_id, nome_funcionario, contato_funcionario, funcao_funcionario, salario_funcionario) values ('$funcionario_id', '$nome_funcionario', '$contato_funcionario', '$funcao_funcionario', '$salario_funcionario')";
          if($conn->query($sql) === FALSE ){
            echo "Falha: ".$sql."\n".$conn->error;
          }
        }
    }
?>

<script>
  function alerta() {
    window.alert("Cadastro realizado com sucesso!");
  }
</script>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Novo Paciente</h1>
</div>
<form class="body row" method="post" action="" onsubmit="alerta()">
  <div class="col-md-12 mb-3">
    <label class="form-label"><b>Dados do Paciente</b></label>
  </div>
  <div class="col-md-8 mb-3">
    <label for="" class="form-label">Nome do paciente</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-2 mb-3">
    <label for="" class="form-label">Data de nascimento</label>
    <input type="date" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-2 mb-3">
    <label for="" class="form-label">Sexo</label>
    <input type="text" required="" class="form-control" list="sexo" id="" name="">
    <datalist id="sexo">
      <option value="Feminino">
      <option value="Masculino">
    </datalist>
  </div>
  <div class="col-md-7 mb-3">
    <label for="" class="form-label">Endereço</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-1 mb-3">
    <label for="" class="form-label">Numero</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">Bairro</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">Cidade</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">CEP</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-5">
    <label for="" class="form-label">e-mail</label>
    <input type="email" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-5">
    <label for="" class="form-label">Celular</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-5">
    <label for="" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-12 mb-3">
    <label class="form-label"><b>Dados antropométricos</b></label>
  </div>
  <div class="col-md-1 mb-5">
    <label for="" class="form-label">Peso</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-1 mb-5">
    <label for="" class="form-label">Altura</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-10 mb-5"></div>
  <div class="col-md-12 mb-3">
    <label class="form-label"><b>Dados Clínicos</b></label>
  </div>
  <div class="col-md-3 mb-3">
    <label class="form-check-label" for="">Hipertensão</label>
    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
  </div>
  <div class="col-md-3 mb-3">
    <label class="form-check-label" for="">Diabetes</label>
    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
  </div>
  <div class="col-md-3 mb-3">
    <label class="form-check-label" for="">Fumante</label>
    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
  </div>
  <div class="col-md-3 mb-3">
    <label class="form-check-label" for="">Doença Cardíaca</label>
    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
  </div>
  <div class="col-md-6 mb-3">
    <label for="" class="form-label">Observações</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-6 mb-3">
    <label for="" class="form-label">Medicações em uso</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-1 mb-5">
    <label for="" class="form-label">Glicemia</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-1 mb-5">
    <label for="" class="form-label">Colesterol</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-2 mb-5">
    <label for="" class="form-label">Pressão arterial</label>
    <input type="text" class="form-control" id="" name="">
  </div>
  <div class="col-md-8 mb-5"></div>
  <div class="col-md-3 mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="submit" class="btn btn-secondary">Voltar</button>
  </div>
</form>