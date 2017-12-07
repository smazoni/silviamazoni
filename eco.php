<!DOCTYPE html>
<html>
<?php include('headeco.php'); ?>
<body>	
  <?php include('navbar.php'); ?>
  <h1 class="my">Esami ecografici</h1>
  <h2 class="my">Benvenuto! In questo portale potrai scegliere quale esame ecografico eseguire.</h2>
<form>
  </div>
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>ECO TIROIDE</option>
          <option value="1">ECO MAMMELLA</option>
          <option value="2">ECO ADDOME</option>
      </select>
    </div>
  </div>
  </div> 
    <div class="col-md-6 mb-3">
      <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Remember my preference</span>
      </label>
    </div>
  </div>
  </div>
    <div class="col-md-6 mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php include('script.php'); ?>

</body>
</html>
