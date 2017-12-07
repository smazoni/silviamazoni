<!DOCTYPE html>
<html>
<?php include('headrx.php'); ?>
<body>	
  <?php include('navbar.php'); ?>
  <h1 class="my">Esami radiografici</h1>
  <h2 class="my">Benvenuto! In questo portale potrai scegliere quale esame radiografico eseguire.</h2>
<form>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>Rx mammografia e/o bilaterale</option>
          <option value="1"> Rx di organo/apparato</option>
          <option value="2">Rx esofago</option>
          <option value="3">Rx esofago esame diretto</option>
          <option value="4">Rx tenue seriato</option>
          <option value="5">Rx tubo digerente</option>
          <option value="6">Rx tubo digerente prime vie/seconde vie</option>
          <option value="7">Stratigrafia (di organi e apparati)</option>
          <option value="8">Angiografia</option>
          <option value="9">Artrografia</option>
          <option value="10">Broncografia</option>
          <option value="11">Cisternografia</option>
      </select>
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


