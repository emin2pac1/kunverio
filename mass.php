<?php
$get_post = $_SERVER['REQUEST_METHOD'];
$tovalue = '';
$fromvalue = '';
$get_post == 'POST'? $value = $_POST['from_value']:$value = ''; 
$from_unit = $_POST['from_unit'] ?? '';
$to_unit = $_POST['to_unit'] ?? '';

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
//var_dump(MASS_IN_KG);

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <title>Kunverio: Mass</title>
</head>
<body>
<div id="main-content" style>

<h1>Convert Mass</h1>
<?php
 !isset($_POST['from_unit']) ? $_POST['from_unit'] ='kilogram': $from_unit = $_POST['from_unit'];   
 !isset($_POST['to_unit']) ? $_POST['to_unit'] ='kilogram': $to_unit = $_POST['to_unit'];   

 ?>
<form action="" method="post">
  
  <div class="entry">
    <label>From:</label>&nbsp;
    <input type="text" name="from_value" value="<?php echo $fromvalue?>" />&nbsp;
    <select name="from_unit">
    <option value= "ounces"<?php if($from_unit == 'ounces') echo " selected" ?>>Ounces</option>
      <option value= "kilograms"<?php if($from_unit == 'kilograms') echo " selected" ?>>Kilograms</option>
      <option value= "pounds"<?php if($from_unit == 'pounds') echo " selected" ?>>Pounds</option>
      <option value= "stones"<?php if($from_unit == 'stones') echo " selected" ?>>Stones</option>
      <option value= "milligrams"<?php if($from_unit == 'milligrams') echo " selected" ?>>Milligrams</option>
      <option value= "long_tons"<?php if($from_unit == 'long_tons') echo " selected" ?>>Long Tons</option>
      <option value= "short_tons"<?php if($from_unit == 'short_tons') echo " selected" ?>>Short Tons</option>
      <option value= "metric_tonnes"<?php if($from_unit == 'metric_tonnes') echo " selected" ?>>Metric Tonnes</option>
      <option value= "grams"<?php if($from_unit == 'grams') echo " selected" ?>>Grams</option>
    </select>
  </div>
  
  <div class="entry">
    <label>To:</label>&nbsp;
    <input type="text" name="to_value" value="<?php echo $tovalue ?>" />&nbsp;
    <select name="to_unit">
      <option value= "ounces"<?php if($to_unit == 'ounces') echo " selected" ?>>Ounces</option>
      <option value= "kilograms"<?php if($to_unit == 'kilograms') echo " selected" ?>>Kilograms</option>
      <option value= "pounds"<?php if($to_unit == 'pounds') echo " selected" ?>>Pounds</option>
      <option value= "stones"<?php if($to_unit == 'stones') echo " selected" ?>>Stones</option>
      <option value= "milligrams"<?php if($to_unit == 'milligrams') echo " selected" ?>>Milligrams</option>
      <option value= "long_tons"<?php if($to_unit == 'long_tons') echo " selected" ?>>Long Tons</option>
      <option value= "short_tons"<?php if($to_unit == 'short_tons') echo " selected" ?>>Short Tons</option>
      <option value= "metric_tonnes"<?php if($to_unit == 'metric_tonnes') echo " selected" ?>>Metric Tonnes</option>
      <option value= "grams"<?php if($to_unit == 'grams') echo " selected" ?>>Grams</option>
    </select>
    
  </div>
  
  <input type="submit" value="Submit" />
</form>

<br />
<a href="index.php">Return to menu</a>

</div>


</body>
</html>