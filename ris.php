<!DOCTYPE html>
<html>
<?php include('headris.php'); ?>
<body>	
  <?php include('navbar.php'); ?>
  <h1 class="my">RIS</h1>
  <h2 class="my">Benvenuto nel RIS! In questo portale è possibile inserire la tipologia d'esame.</h2>
  
<form class="container" id="needs-validation" novalidate>

<div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom06">ID paziente</label>
        <input type="text" class="form-control" id="validationCustom06" placeholder="Inserisci un ID valido." required>
        <div class="invalid-feedback">
          Inserisci un ID valido.
        </div>
        </div>
      <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">TIPOLOGIA ESAME</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>RX</option>
            <option>TC</option>
            <option>RM</option>
            <option>ECO</option>
          </select>
         </div>
      </div>  
      <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">DISTRETTO</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>CAPO-COLLO</option>
            <option>TORACE</option>
            <option>ADDOME-PELVI</option>
            <option>ARTI</option>
          </select>
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
 
  <div class="row">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

</form>

<?php include('script.php'); ?>

</body>
</html>