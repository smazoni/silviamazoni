<!DOCTYPE html>
<html>
<?php include('headdrg.php'); ?>
<body>  
  <?php include('navbar.php'); ?>
  <h1 class="my">DRG e SDO</h1>
  <h2 class="my">Benvenuto! In questo portale è possibile attribuire il Diagnosis-related-group e la Scheda di dimissione ospedaliera al paziente.</h2>
  <form class="container" id="needs-validation" novalidate>
    <div class="row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Inserisci un nome valido." minlength="3" required>
      <div class="invalid-feedback">Inserisci un nome valido.
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
        <label for="validationCustom06">ID paziente</label>
        <input type="text" class="form-control" id="validationCustom06" placeholder="Inserisci un ID valido." required>
        <div class="invalid-feedback">
          Inserisci un ID valido.
       </div>
     </div>
    </div>
          
<div class="row">
      <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">DRG</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Malattie e disturbi del sistema nervoso</option>
            <option>Malattie e disturbi dell'occhio</option>
            <option>Malattie e disturbi dell'orecchio</option>
            <option>Malattie e disturbi dell'apparato respiratorio</option>
            <option>Malattie e disturbi dell'apparato cardiocircolatorio</option>
            <option>Malattie e disturbi dell'apparato digerente</option>
            <option>Malattie e disturbi epatobiliari e del pancreas</option>
            <option>Malattie e disturbi dell'apparato muscoloscheletrico e connettivo</option> 
            <option>Malattie e disturbi della pelle</option>
            <option>Malattie e disturbi endocrini</option>
          </select>
        </div>
       </div>
      <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">SDO</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>deceduto</option>
            <option>ordinaria a domicilio</option>
            <option>protetta c/o strutture extraospedaliere</option>
            <option>volontaria</option>
            <option>trasferimento ad istituto per acuti</option>
            <option>trasferimento ad altro regime di ricovero</option>
            <option>trasferimento ad istituto riabilitazione</option>
            <option>protetta a dimissione A.D.I</option> 
            <option>Episodio di allontanamento</option>
            <option>Deceduto per suicidio avvenuto in ospedale</option>
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