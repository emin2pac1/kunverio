<?php
error_reporting(0);
require_once('common/header.php');
//global $tovalue;
$get_post = $_SERVER['REQUEST_METHOD'];
$tovalue = '';
$fromvalue = '';
$get_post == 'POST'? $value = $_POST['from_value']:$value = ''; 
$from_unit = $_POST['from_unit'] ?? '';
$to_unit = $_POST['to_unit'] ?? '';

//solution approach: get meter value and use it as an intermdiate to convert between all supported units

function to_meter($from_unit,$value){
  switch($from_unit){
    case 'inch':
      return $value *0.0254;
      break;
    case 'feet':
      return $value *0.3048;
      break;
    case 'yard':
      return $value *0.9144;
       break;
    case 'mile':
      return $value *1609.344;
       break;
    case 'millimeter':
      return $value *0.001;
        break;
    case 'centimeter':
      return $value *0.01;
        break;
    case 'meter':
      return $value *1;
        break;
    case 'kilometer':
      return $value *1000;
        break;
                                                        
  }
}

function from_meter($to_unit,$value){
  switch($to_unit){
    case 'inch':
      return $value /0.0254;
      break;
    case 'feet':
      return $value /0.3048;
      break;
    case 'yard':
      return $value /0.9144;
       break;
    case 'mile':
      return $value /1609.344;
       break;
    case 'millimeter':
      return $value /0.001;
        break;
    case 'centimeter':
      return $value /0.01;
        break;
    case 'meter':
      return $value /1;
        break;
    case 'kilometer':
      return $value /1000;
        break;
                                                        
  }
} 
 
if($get_post == 'POST'){

  $fromvalue = $_POST['from_value'];
  $in_meter = round(to_meter($from_unit,$value),3);
  $tovalue = round(from_meter($to_unit,$in_meter),3);
}
//settype($tovalue,"float");

  ?>
<?php 
?>

<!-- Using BS Modal -->
<?php  ?>
   <div class="modal" tabindex="-1" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Result</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><?php settype($tovalue,'float'); if ($tovalue){ echo $tovalue.' '.ucfirst($to_unit); } else{echo "Looks like you haven't entered a value";} ?></p>
        </div>
        <div class="modal-footer">  
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
<div id="main-content" style>

<h1 class="text-center">Convert Length</h1>


<?php
 !isset($_POST['from_unit']) ? $_POST['from_unit'] ='inch': $from_unit = $_POST['from_unit'];   
 !isset($_POST['to_unit']) ? $_POST['to_unit'] ='inch': $to_unit = $_POST['to_unit'];   

 ?> 
 <div class="container">
<!-- twbs -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb gutter">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Length</li>
  </ol>
</nav>
<form action="" method="POST">
<div class="row g-2 justify-content-center">
  <div class="col-sm-3">
    <div class="form-floating">
    <input type="text" name="from_value" value="<?php echo $fromvalue?>" class="form-control form-control-sm" id="floatingInputGrid" placeholder="">
      <label for="floatingInputGrid" class="label-lg">Enter a value</label>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-floating">
      <select class="form-select form-control-sm" id="floatingSelectGrid" aria-label="Choose Unit" name="from_unit">

      <option value= "inch" <?php if($from_unit == 'inch') echo " selected" ?>>Inch</option>
      <option value= "feet" <?php if($from_unit == 'feet') echo " selected" ?>>Feet</option>
      <option value= "yard"<?php if($from_unit == 'yard') echo " selected" ?>>Yard</option>
      <option value= "mile"<?php if($from_unit == 'mile') echo " selected" ?>>Mile</option>
      <option value= "millimeter"<?php if($from_unit == 'millimeter') echo " selected" ?>>Millimeter</option>
      <option value= "centimeter"<?php if($from_unit == 'centimeter') echo " selected" ?>>Cenimeter</option>
      <option value= "meter"<?php if($from_unit == 'meter') echo " selected" ?>>Meter</option>
      <option value= "kilometer"<?php if($from_unit == 'kilometer') echo " selected" ?>>Kilometer</option>

      </select>
      <label for="floatingSelectGrid" class="label-lg">Choose Unit</label>
    </div>
  </div>


  <div class="col-sm-3">
    <div class="form-floating">
    <select class="form-select  form-control-sm" id="floatingSelectGrid2" aria-label="Choose Unit" name="to_unit">

      <option value= "inch" <?php if($to_unit == 'inch') echo " selected" ?>>Inch</option>
      <option value= "feet" <?php if($to_unit == 'feet') echo " selected" ?>>Feet</option>
      <option value= "yard"<?php if($to_unit == 'yard') echo " selected" ?>>Yard</option>
      <option value= "mile"<?php if($to_unit == 'mile') echo " selected" ?>>Mile</option>
      <option value= "millimeter"<?php if($to_unit == 'millimeter') echo " selected" ?>>Millimeter</option>
      <option value= "centimeter"<?php if($to_unit == 'centimeter') echo " selected" ?>>Cenimeter</option>
      <option value= "meter"<?php if($to_unit == 'meter') echo " selected" ?>>Meter</option>
      <option value= "kilometer"<?php if($to_unit == 'kilometer') echo " selected" ?>>Kilometer</option>

    </select>
      <label for="floatingSelectGrid2" class="label-lg">Unit to be converted to</label>
    </div>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary col-sm-3" data-bs-toggle="modal" data-bs-target="#modal">
</div>

</form>
<div class="gutter-sm"></div>

<div class="gutter"></div>

</div>
</div>


<?php require_once('common/footer.php') ?>
