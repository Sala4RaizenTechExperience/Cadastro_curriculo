<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <title>Cadastro de currículo</title>
</head>

<body>
  <div class="mb-4 p-4">
    <form action="index.php" method="post">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome">
      </div>
      <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome">
      </div>
      <div class="mb-3">
        <label for="nascimento" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" id="nascimento">
      </div>
      <div class="mb-3">
        <label for="genero" class="form-label">Gênero</label>
        <select name="genero" id="genero" class="form-control">
          <option value="feminino">Feminino</option>
          <option value="masculino">Masculino</option>
          <option value="nao-binario">Não binário</option>
          <option value="nao-informar">Prefiro não informar</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" maxlength="11">
      </div>
      <div class="mb-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep">
      </div>
      <div class="mb-3">
        <label for="logradouro" class="form-label">Logradouro</label>
        <input type="text" class="form-control" id="logradouro">
      </div>
      <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade">
      </div>
      <div class="mb-3">
        <label for="uf" class="form-label">UF</label>
        <input type="text" class="form-control" id="uf">
      </div>
      <div class="mb-3">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro">
      </div>
      <div class="mb-3">
        <label for="numero" class="form-label">Número</label>
        <input type="number" class="form-control" id="numero">
      </div>
      <div class="mb-3">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" class="form-control" id="complemento">
      </div>
      <div class="mb-3">
        <label for="formacao" class="form-label">Formação</label>
        <select name="formacao" id="formacao" class="form-control">
          <option value="graduacao-completa">Graduação completa</option>
          <option value="graduacao-incompleta">Graduação incompleta</option>
          <option value="ensino-medio-completo">Ensino médio completo</option>
          <option value="ensino-medio-incompleto">Ensino médio incompleto</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="bio" class="form-label">BIO</label>
        <textarea class="form-control" id="bio"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>

</html>