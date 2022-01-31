<?php
require_once('common/header.php');

//solution approach: get meter value and use it as an intermdiate to convert between all supported units

function to_meter($from_unit,$value){
  switch($from_unit){
    case 'square_inch':
      return $value * pow(0.0254,2);
      break;
    case 'square_feet':
      return $value * pow(0.3048,2);
      break;
    case 'square_yard':
      return $value * pow(0.9144,2);
       break;
    case 'square_mile':
      return $value *pow(1609.344,2);
       break;
    case 'square_millimeter':
      return $value *pow(0.001,2);
        break;
    case 'square_centimeter':
      return $value *pow(0.01,2);
        break;
    case 'square_meter':
      return $value * pow(1,2);
        break;
    case 'square_kilometer':
      return $value * pow(1000,2);
        break;
                                                        
  }
}

function from_meter($to_unit,$value){
  switch($to_unit){
    case 'square_inch':
      return $value /pow(0.0254,2);
      break;
    case 'square_feet':
      return $value /pow(0.3048,2);
      break;
    case 'square_yard':
      return $value /pow(0.9144,2);
       break;
    case 'square_mile':
      return $value /pow(1609.344,2);
       break;
    case 'square_millimeter':
      return $value /pow(0.001,2);
        break;
    case 'square_centimeter':
      return $value /pow(0.01,2);
        break;
    case 'square_meter':
      return $value /pow(1,2);
        break;
    case 'square_kilometer':
      return $value /pow(1000,2);
        break;
                                                        
  }
} 
 
if($get_post == 'POST'){
  $fromvalue = $_POST['from_value'];
  $in_meter = round(to_meter($from_unit,$value),3);
  $tovalue = round(from_meter($to_unit,$in_meter),3);
}

$title = 'Area';
require_once('common/modal.php')

?>

  
<div id="main-content">
<?php require_once('common/breadcrumb.php') ?>

<h1 class="text-center"><?php echo 'Convert'.' '. $title?></h1>
      
      <?php require_once('common/form_fixed1.php') ?>

      <option value= "square_inch" <?php if($from_unit == 'square_inch') echo " selected" ?>>Square Inch</option>
      <option value= "square_feet" <?php if($from_unit == 'square_feet') echo " selected" ?>>Square Feet</option>
      <option value= "square_yard"<?php if($from_unit == 'square_yard') echo " selected" ?>>Square Yard</option>
      <option value= "square_mile"<?php if($from_unit == 'square_mile') echo " selected" ?>>Square Mile</option>
      <option value= "square_millimeter"<?php if($from_unit == 'square_millimeter') echo " selected" ?>>Square Millimeter</option>
      <option value= "square_centimeter"<?php if($from_unit == 'square_centimeter') echo " selected" ?>>Square Centimeter</option>
      <option value= "square_meter"<?php if($from_unit == 'square_meter') echo " selected" ?>>Square Meter</option>
      <option value= "square_kilometer"<?php if($from_unit == 'square_kilometer') echo " selected" ?>>Square Kilometer</option>

      <?php require_once('common/form_fixed2.php') ?>

      <option value= "square_inch" <?php if($to_unit == 'square_inch') echo " selected" ?>>Square Inch</option>
      <option value= "square_feet" <?php if($to_unit == 'square_feet') echo " selected" ?>>Square Feet</option>
      <option value= "square_yard"<?php if($to_unit == 'square_yard') echo " selected" ?>>Square Yard</option>
      <option value= "square_mile"<?php if($to_unit == 'square_mile') echo " selected" ?>>Square Mile</option>
      <option value= "square_millimeter"<?php if($to_unit == 'square_millimeter') echo " selected" ?>>Square Millimeter</option>
      <option value= "square_centimeter"<?php if($to_unit == 'square_centimeter') echo " selected" ?>>Square Centimeter</option>
      <option value= "square_meter"<?php if($to_unit == 'square_meter') echo " selected" ?>>Square Meter</option>
      <option value= "square_kilometer"<?php if($to_unit == 'square_kilometer') echo " selected" ?>>Square Kilometer</option>

      <?php require_once('common/form_fixed3.php') ?>

<div class="gutter-sm"></div>

<div class="gutter"></div>

</div>
</div>

<?php require_once('common/footer.php') ?>