<!DOCTYPE html>
<html>
<?php include('headrm.php'); ?>
<body>	
  <?php include('navbar.php'); ?>
  <h1 class="my">Esami RM</h1>
  <h2 class="my">Benvenuto! In questo portale potrai scegliere quale esame RM eseguire.</h2>
  <form>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>Rm Encefalo senza/con M.d.C</option>
          <option value="1">Rm Massiccio Facciale senza/con M.d.C</option>
          <option value="2">Rm Collo senza/con M.d.C</option>
          <option value="3">Rm Colonna Cervicale senza/con M.d.C</option>
          <option value="4">Rm Colonna Dorsale senza/con M.d.C</option>
          <option value="5">Rm Colonna Lombo-Sacrale senza/con M.d.C</option>
          <option value="6">Rm Spalla e Braccio senza/con M.d.C</option>
          <option value="7">Rm Gomito senza/con M.d.C</option>
          <option value="8">Rm Polso e Mano senza/con M.d.C</option>
          <option value="9">Rm Bacino senza/con M.d.C</option>
          <option value="10">Rm Art. Coxo Femorale senza/con M.d.C</option>
          <option value="11">Rm Ginocchio e Gamba senza/con M.d.C</option>
          <option value="12">Rm Caviglia e Piede senza/con M.d.C</option>
      </select>
    </div>
    <div class="col-md-3">
      
      <label class="custom-control custom-radio">
        <input id="radio1" name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Con M.d.C</span>
      </label>
      <label class="custom-control custom-radio">
        <input id="radio2" name="radio" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Senza M.d.C</span>
      </label>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Remember my preference</span>
      </label>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   </div>

  </div>
</form>

<?php include('script.php'); ?>

</body>
</html
