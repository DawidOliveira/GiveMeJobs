<h3>Adicionar Vagas</h3>
  <form action="" method="">
    <div class="form-group">
      <label for="vaga">Título</label>
      <input type="text" name="vaga" class="form-control" id="vaga" required>
    </div>
    <div class="form-group">
      <label for="vagas">Quantidade de vagas</label>
      <input type="text" name="vagas" class="form-control" id="vagas" required>
    </div>
    <div class="form-group">
        <label for="rem">Remuneração</label>
        <input type="text" name="rem" class="form-control" id="rem" placeholder="Caso não tenha, digite: Sem remuneração." required>
    </div>
    <div class="form-group">
        <label for="descVaga">Descrição da vaga</label>
        <textarea class="form-control" rows="8" required></textarea>
    </div>
    <div class="form-group">
        <label for="edital">Edital</label>
        <input type="file" name="edital" class="form-control" id="edital">
    </div>
    <div class="form-group">
        <label for="email">E-mail para receber os candidatos às vagas</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div>
 
    <button type="submit" class="btn btn-default">Cadastrar</button>

  </form>