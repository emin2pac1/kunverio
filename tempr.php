<?php
require_once('common/header.php');

//solution approach: get celsius value and use it as an intermdiate to convert between all supported units

function to_cel($from_unit,$value){
  switch($from_unit){
    case 'celsius':
        return $value *1;
        break;
      case 'fahrenheit':
        return ($value -32) /1.8;
        break;
      case 'kelvin':
        return $value - 273.15;
         break;
                                                        
  }
}

function from_cel($to_unit,$value){
  switch($to_unit){
    case 'celsius':
      return $value *1;
      break;
    case 'fahrenheit':
      return ($value *1.8) +32;
      break;
    case 'kelvin':
      return $value + 273.15;
       break;
                                                        
  }
} 
 
if($get_post == 'POST'){
  $fromvalue = $_POST['from_value'];
  $in_cel = round(to_cel($from_unit,$value),3);
  $tovalue = round(from_cel($to_unit,$in_cel),3);
}

$title = 'Temperature';
require_once('common/modal.php')
?>  
  
<div id="main-content">

<h1 class="text-center"><?php echo 'Convert'.' '. $title?></h1>

      <?php require_once('common/breadcrumb.php') ?>
      <?php require_once('common/form_fixed1.php') ?>

      <option value= "celsius"<?php if($from_unit == 'celsius') echo " selected" ?>>Celsius</option>
      <option value= "fahrenheit"<?php if($from_unit == 'fahrenheit') echo " selected" ?>>Fahrenheit</option>
      <option value= "kelvin"<?php if($from_unit == 'kelvin') echo " selected" ?>>Kelvin</option>
      
      <?php require_once('common/form_fixed2.php') ?>

      <option value= "celsius"<?php if($to_unit == 'celsius') echo " selected" ?>>Celsius</option>
      <option value= "fahrenheit"<?php if($to_unit == 'fahrenheit') echo " selected" ?>>Fahrenheit</option>
      <option value= "kelvin"<?php if($to_unit == 'kelvin') echo " selected" ?>>Kelvin</option>
         
      <?php require_once('common/form_fixed3.php') ?>

<div class="gutter-sm"></div>

<div class="gutter"></div>

</div>
</div>

<?php require_once('common/footer.php') ?>