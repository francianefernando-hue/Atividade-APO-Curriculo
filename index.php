<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Currículo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Gerador de Currículo</h1>
    <form action="processa.php" method="post">
      
      <fieldset>
        <legend>Dados Pessoais</legend>
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" placeholder="Ex: João da Silva" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Ex: joao@email.com" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Ex: São Paulo">

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" placeholder="Ex: SP">

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Ex: 25">

        <label for="linkedin">LinkedIn:</label>
        <input type="url" id="linkedin" name="linkedin" placeholder="Ex: https://www.linkedin.com/in/usuario">
      </fieldset>

      <fieldset>
        <legend>Formação Acadêmica</legend>
        <div id="formacoes">
          <div class="form-item">
            <input type="text" name="formacao[]" placeholder="Ex: Bacharel em Ciência da Computação - Universidade XYZ" required>
          </div>
        </div>
        <button type="button" id="addFormacao">+ Adicionar Formação</button>
      </fieldset>

      <fieldset>
        <legend>Experiência Profissional</legend>
        <div id="experiencias">
          <div class="exp-item">
            <input type="text" name="experiencia[]" placeholder="Ex: Estagiário em TI - Empresa ABC (2022-2023)" required>
          </div>
        </div>
        <button type="button" id="addExperiencia">+ Adicionar Experiência</button>
      </fieldset>

      <fieldset>
        <legend>Habilidades</legend>
        <label for="habilidades">Habilidades:</label>
        <textarea id="habilidades" name="habilidades" placeholder="Ex: Word, Excel, HTML, CSS" required></textarea>
      </fieldset>

      <button type="submit">Gerar Currículo</button>
    </form>
  </div>

  <script>
    document.getElementById('addFormacao').addEventListener('click', function() {
        const container = document.getElementById('formacoes');
        const novoCampo = document.createElement('div');
        novoCampo.classList.add('form-item');
        novoCampo.innerHTML = '<input type="text" name="formacao[]" placeholder="Ex: Bacharel em Ciência da Computação - Universidade XYZ" required>';
        container.appendChild(novoCampo);
    });

    document.getElementById('addExperiencia').addEventListener('click', function() {
        const container = document.getElementById('experiencias');
        const novoCampo = document.createElement('div');
        novoCampo.classList.add('exp-item');
        novoCampo.innerHTML = '<input type="text" name="experiencia[]" placeholder="Ex: Estagiário em TI - Empresa ABC (2022-2023)" required>';
        container.appendChild(novoCampo);
    });
  </script>
</body>
</html>
