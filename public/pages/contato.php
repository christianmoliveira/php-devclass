<h2>Contato</h2>

<?= getFlashMessage('message'); ?>

<form action="/pages/forms/contato.php" method="POST">
  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Assunto</label>
    <input type="text" name="subject" class="form-control" aria-describedby="helpId">
    <small id="helpId" class="text-muted"></small>
  </div>

  <div class="form-group">
    <label for="">Mensagem</label>
    <textarea class="form-control" name="message" rows="3"></textarea>
    <small id="helpId" class="text-muted"></small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
