
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

      <h1><b>Cadastre o Livro</b></h1>
      <form action="processo_cadastro.php" method="POST"> 
      
      <div class="Inputs">
      <br>
       <label for="nome" class="label">Título do livro</label>
       <input type="text" name="titulo" id="titulo" class="input_cadastro">
      </div>

      <div class="Inputs">
      <br>
       <label for="autor" class="label">Autor</label>
       <input type="text" name="autor" id="autor" class="input_cadastro">
      </div>

      <div class="Inputs">
      <br>
       <label for="ano" class="label">Ano de Publicação</label>
       <input type="number" name="ano" id="ano" class="input_cadastro">
      </div>

      <div class="Inputs">
      <br>
       <label for="categoria" class="label">Categoria</label>
       <select name="categoria" id="categoria" class="input_cadastro">
        <option class="input_cadastro">Drama</option>
        <option class="input_cadastro">Comédia</option>
       </select>
      </div>

      <div class="Inputs">
      <br>
       <label for="quantidade" class="label">Quantidade</label>
       <input type="number" name="quantidade" id="quantidade" class="input_cadastro">
      </div>

      <br>
      <button type="submit" name="enviar" id="enviar" class="input_cadastro"><b><strong>Cadastro</strong></b></button>
      
    </div>
   </form>
</body>
</html>