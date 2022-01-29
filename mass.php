<?php
require_once('common/header.php');

const MASS_IN_KG = [
  'ounces' => 0.0283495,
  'pounds' => 0.453592,
  'stones' => 6.35029,
  'long_tons' => 1016.85,
  'short_tons' => 987.185,
  'milligrams' => 0.000001,
  'grams' => 0.001,
  'kilograms' => 1,
  'metric_tonnes' => 1000
];

//solution approach: get KG value and use it as an intermdiate to convert between all supported units

function to_kg($from_unit,$value){
  switch($from_unit){
    case 'ounces':
        return $value * MASS_IN_KG[$from_unit];
        break;

        case 'pounds':
          return $value * MASS_IN_KG[$from_unit];          
          break;

        case 'stones':        
          return $value * MASS_IN_KG[$from_unit];
          break;

        case 'long_tons':
          return $value * MASS_IN_KG[$from_unit];
          break;

          case 'short_tons':
            return $value * MASS_IN_KG[$from_unit];
            break;

        case 'milligrams':
           return $value * MASS_IN_KG[$from_unit];
           break;

        case 'grams':
          return $value * MASS_IN_KG[$from_unit];
          break;

        case 'kilograms':
          return $value * MASS_IN_KG[$from_unit];
          break;
  
        case 'metric_tonnes':
          return $value * MASS_IN_KG[$from_unit];
          break;
  
                                                        
  }
}

function from_kg($to_unit,$value){
  switch($to_unit){
    case 'ounces':
      return $value / MASS_IN_KG[$to_unit];
      break;

      case 'pounds':
        return $value / MASS_IN_KG[$to_unit];          
        break;

      case 'stones':        
        return $value / MASS_IN_KG[$to_unit];
        break;

      case 'long_tons':
        return $value / MASS_IN_KG[$to_unit];
        break;

        case 'short_tons':
          return $value / MASS_IN_KG[$to_unit];
          break;

      case 'milligrams':
         return $value / MASS_IN_KG[$to_unit];
         break;

      case 'grams':
        return $value / MASS_IN_KG[$to_unit];
        break;

      case 'kilograms':
        return $value / MASS_IN_KG[$to_unit];
        break;

      case 'metric_tonnes':
        return $value / MASS_IN_KG[$to_unit];
        break;

                                                      
  }
} 
 
if($get_post == 'POST'){
  $fromvalue = $_POST['from_value'];
  $in_kg = round(to_kg($from_unit,$value),3);
  $tovalue = round(from_kg($to_unit,$in_kg),3);
}
$title = 'Mass';
require_once('common/modal.php')
?>  
  
<div id="main-content">
<?php require_once('common/breadcrumb.php') ?>

<h1 class="text-center"><?php echo 'Convert'.' '. $title?></h1>

      <?php require_once('common/form_fixed1.php') ?>

    <option value= "ounces"<?php if($from_unit == 'ounces') echo " selected" ?>>Ounces</option>
      <option value= "kilograms"<?php if($from_unit == 'kilograms') echo " selected" ?>>Kilograms</option>
      <option value= "pounds"<?php if($from_unit == 'pounds') echo " selected" ?>>Pounds</option>
      <option value= "stones"<?php if($from_unit == 'stones') echo " selected" ?>>Stones</option>
      <option value= "milligrams"<?php if($from_unit == 'milligrams') echo " selected" ?>>Milligrams</option>
      <option value= "long_tons"<?php if($from_unit == 'long_tons') echo " selected" ?>>Long Tons</option>
      <option value= "short_tons"<?php if($from_unit == 'short_tons') echo " selected" ?>>Short Tons</option>
      <option value= "metric_tonnes"<?php if($from_unit == 'metric_tonnes') echo " selected" ?>>Metric Tonnes</option>
      <option value= "grams"<?php if($from_unit == 'grams') echo " selected" ?>>Grams</option>

      <?php require_once('common/form_fixed2.php') ?>

      <option value= "ounces"<?php if($to_unit == 'ounces') echo " selected" ?>>Ounces</option>
      <option value= "kilograms"<?php if($to_unit == 'kilograms') echo " selected" ?>>Kilograms</option>
      <option value= "pounds"<?php if($to_unit == 'pounds') echo " selected" ?>>Pounds</option>
      <option value= "stones"<?php if($to_unit == 'stones') echo " selected" ?>>Stones</option>
      <option value= "milligrams"<?php if($to_unit == 'milligrams') echo " selected" ?>>Milligrams</option>
      <option value= "long_tons"<?php if($to_unit == 'long_tons') echo " selected" ?>>Long Tons</option>
      <option value= "short_tons"<?php if($to_unit == 'short_tons') echo " selected" ?>>Short Tons</option>
      <option value= "metric_tonnes"<?php if($to_unit == 'metric_tonnes') echo " selected" ?>>Metric Tonnes</option>
      <option value= "grams"<?php if($to_unit == 'grams') echo " selected" ?>>Grams</option>
      
      <?php require_once('common/form_fixed3.php') ?>

<div class="gutter-sm"></div>

<div class="gutter"></div>

</div>
</div>

<?php require_once('common/footer.php') ?>