<!DOCTYPE html>
<html>
<?php include('headcup.php'); ?>
<body>	
  <?php include('navbar.php'); ?>
  <h1 class="my">CUP</h1>
  <h2 class="my">Benvenuto nel CUP! In questo portale è possibile effettuare la prenotazione dell'esame radiologico.</h2>
  <form class="container" id="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nome</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Inserisci un nome valido." minlength="3" required>
        <div class="invalid-feedback">
          Inserisci un nome valido.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Cognome</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Inserisci un cognome valido." minlength="3" required>
        <div class="invalid-feedback">
          Inserisci un cognome valido.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">e-mail</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="Inserisci una e-mail valida." minlength="3" required>
        <div class="invalid-feedback">
          Inserisci una e-mail valida.
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Citta'</label>
        <input type="text" class="form-control" id="validationCustom04" placeholder="Inserisci una citta' valida." minlength="3" required>
        <div class="invalid-feedback">
          Inserisci una citta' valida.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom04">Stato</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder=" Inserisci uno stato valido." minlength="3" required>
        <div class="invalid-feedback">
          Inserisci uno stato valido.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">CAP</label>
        <input type="number" min="00300" max="00400" class="form-control" id="validationCustom06" placeholder="Inserisci un CAP valido." required>
        <div class="invalid-feedback">
          Inserisci un CAP valido.
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-3">
      <label>Sesso:</label><br>
      <label class="custom-control custom-radio">
        <input id="radio1" name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Maschio</span>
      </label>
      <label class="custom-control custom-radio">
        <input id="radio2" name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Femmina</span>
      </label>
    </div>
   </div>
  </div>
  <div class="row">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

</form>

<?php include('script.php'); ?>

</body>
</html>