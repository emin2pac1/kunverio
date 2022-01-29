<?php
require_once('common/header.php');

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

$title = 'Length';
require_once('common/modal.php')
?>  
  
<div id="main-content">

<h1 class="text-center"><?php echo 'Convert'.' '. $title?></h1>

      <?php require_once('common/breadcrumb.php') ?>
      <?php require_once('common/form_fixed1.php') ?>

      <option value= "inch" <?php if($from_unit == 'inch') echo " selected" ?>>Inch</option>
      <option value= "feet" <?php if($from_unit == 'feet') echo " selected" ?>>Feet</option>
      <option value= "yard"<?php if($from_unit == 'yard') echo " selected" ?>>Yard</option>
      <option value= "mile"<?php if($from_unit == 'mile') echo " selected" ?>>Mile</option>
      <option value= "millimeter"<?php if($from_unit == 'millimeter') echo " selected" ?>>Millimeter</option>
      <option value= "centimeter"<?php if($from_unit == 'centimeter') echo " selected" ?>>Cenimeter</option>
      <option value= "meter"<?php if($from_unit == 'meter') echo " selected" ?>>Meter</option>
      <option value= "kilometer"<?php if($from_unit == 'kilometer') echo " selected" ?>>Kilometer</option>
      
      <?php require_once('common/form_fixed2.php') ?>

      <option value= "inch" <?php if($to_unit == 'inch') echo " selected" ?>>Inch</option>
      <option value= "feet" <?php if($to_unit == 'feet') echo " selected" ?>>Feet</option>
      <option value= "yard"<?php if($to_unit == 'yard') echo " selected" ?>>Yard</option>
      <option value= "mile"<?php if($to_unit == 'mile') echo " selected" ?>>Mile</option>
      <option value= "millimeter"<?php if($to_unit == 'millimeter') echo " selected" ?>>Millimeter</option>
      <option value= "centimeter"<?php if($to_unit == 'centimeter') echo " selected" ?>>Cenimeter</option>
      <option value= "meter"<?php if($to_unit == 'meter') echo " selected" ?>>Meter</option>
      <option value= "kilometer"<?php if($to_unit == 'kilometer') echo " selected" ?>>Kilometer</option>

      <?php require_once('common/form_fixed3.php') ?>

<div class="gutter-sm"></div>

<div class="gutter"></div>

</div>
</div>

<?php require_once('common/footer.php') ?>