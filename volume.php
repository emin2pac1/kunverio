<?php
$get_post = $_SERVER['REQUEST_METHOD'];
$tovalue = '';
$fromvalue = '';
$get_post == 'POST'? $value = $_POST['from_value']:$value = ''; 
$from_unit = $_POST['from_unit'] ?? '';
$to_unit = $_POST['to_unit'] ?? '';

const VLM_IN_LTR = [
    "cubic_inches" => 0.0163871,
    "cubic_feet" => 28.3168,
    "cubic_centimeters" => 0.001,
    "cubic_meters" => 1000,
    "imperial_gallons" => 4.54609,
    "imperial_quarts" => 1.13652,
    "imperial_pints" => 0.568261,
    "imperial_cups" => 0.284131,
    "imperial_ounces" => 0.0284131,
    "imperial_tablespoons" => 0.0177582,
    "imperial_teaspoons" => 0.00591939,
    "liters" => 1,
    "milliliters" => 0.001
];

//solution approach: get liter value and use it as an intermdiate to convert between all supported units

function to_ltr($from_unit,$value){
  switch($from_unit){
    
          case 'cubic_inches':
          return $value * VLM_IN_LTR[$from_unit];          
          break;

        case 'cubic_feet':        
          return $value * VLM_IN_LTR[$from_unit];
          break;

        case 'cubic_centimeters':
          return $value * VLM_IN_LTR[$from_unit];
          break;

          case 'cubic_meters':
            return $value * VLM_IN_LTR[$from_unit];
            break;

        case 'imperial_gallons':
           return $value * VLM_IN_LTR[$from_unit];
           break;

        case 'imperial_quarts':
          return $value * VLM_IN_LTR[$from_unit];
          break;

        case 'imperial_pints':
          return $value * VLM_IN_LTR[$from_unit];
          break;
  
        case 'imperial_cups':
          return $value * VLM_IN_LTR[$from_unit];
          break;

        case 'imperial_ounces':
         return $value * VLM_IN_LTR[$from_unit];
         break;

        case 'imperial_tablespoons':
          return $value * VLM_IN_LTR[$from_unit];
          break;

        case 'imperial_teaspoons':
          return $value * VLM_IN_LTR[$from_unit];
          break;

        case 'liters':
          return $value * VLM_IN_LTR[$from_unit];
          break;

        case 'milliliters':
            return $value * VLM_IN_LTR[$from_unit];
            break;
  
  }
}

function from_ltr($to_unit,$value){
    switch($to_unit){
        
            case 'cubic_inches':
              return $value / VLM_IN_LTR[$to_unit];          
              break;
    
            case 'cubic_feet':        
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
            case 'cubic_centimeters':
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
              case 'cubic_meters':
                return $value / VLM_IN_LTR[$to_unit];
                break;
    
            case 'imperial_gallons':
               return $value / VLM_IN_LTR[$to_unit];
               break;
    
            case 'imperial_quarts':
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
            case 'imperial_pints':
              return $value / VLM_IN_LTR[$to_unit];
              break;
      
            case 'imperial_cups':
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
            case 'imperial_ounces':
             return $value / VLM_IN_LTR[$to_unit];
             break;
    
            case 'imperial_tablespoons':
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
            case 'imperial_teaspoons':
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
            case 'liters':
              return $value / VLM_IN_LTR[$to_unit];
              break;
    
            case 'milliliters':
                return $value / VLM_IN_LTR[$to_unit];
                break;
      
      }
} 
 
if($get_post == 'POST'){
    //sleep(3);
  $fromvalue = $_POST['from_value'];
  $in_ltr = round(to_ltr($from_unit,$value),3);
  $tovalue = round(from_ltr($to_unit,$in_ltr),3);
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
  <title>Kunverio: Volume</title>
</head>
<body>
<div id="main-content" style>

<h1>Convert Volume</h1>
<?php
 !isset($_POST['from_unit']) ? $_POST['from_unit'] ='kilogram': $from_unit = $_POST['from_unit'];   
 !isset($_POST['to_unit']) ? $_POST['to_unit'] ='kilogram': $to_unit = $_POST['to_unit'];   

 ?>
<form action="" method="post">
  
  <div class="entry">
    <label>From:</label>&nbsp;
    <input type="text" name="from_value" value="<?php echo $fromvalue?>" />&nbsp;
    <select name="from_unit">
      <option value= "cubic_inches"<?php if($from_unit == 'cubic_inches') echo " selected" ?>>Cubic Inches</option>
      <option value= "cubic_feet"<?php if($from_unit == 'cubic_feet') echo " selected" ?>>Cubic Feet</option>
      <option value= "imperial_gallons"<?php if($from_unit == 'imperial_gallons') echo " selected" ?>>Imperial Gallons</option>
      <option value= "imperial_quarts"<?php if($from_unit == 'imperial_quarts') echo " selected" ?>>Imperial Quarts</option>
      <option value= "imperial_pints"<?php if($from_unit == 'imperial_pints') echo " selected" ?>>Imperial Pints</option>
      <option value= "imperial_cups"<?php if($from_unit == 'imperial_cups') echo " selected" ?>>Imperial Cups</option>
      <option value= "imperial_teaspoons"<?php if($from_unit == 'imperial_teaspoons') echo " selected" ?>>Imperial Teaspoons</option>
      <option value= "imperial_tablespoons"<?php if($from_unit == 'imperial_tablespoons') echo " selected" ?>>Imperial Tablespoons</option>
      <option value= "cubic_centimeters"<?php if($from_unit == 'cubic_centimeters') echo " selected" ?>>Cubic Centimeters</option>
      <option value= "cubic_meters"<?php if($from_unit == 'cubic_meters') echo " selected" ?>>Cubic Meters</option>
      <option value= "liters"<?php if($from_unit == 'liters') echo " selected" ?>>Liters</option>
      <option value= "milliliters"<?php if($from_unit == 'milliliters') echo " selected" ?>>Millimeters</option>
      <option value= "imperial_ounces"<?php if($from_unit == 'imperial_ounces') echo " selected" ?>>Imperial Ounces</option>
    </select>
  </div>
  
  <div class="entry">
    <label>To:</label>&nbsp;
    <input type="text" name="to_value" value="<?php echo $tovalue ?>" />&nbsp;
    <select name="to_unit">
    <option value= "cubic_inches"<?php if($to_unit == 'cubic_inches') echo " selected" ?>>Cubic Inches</option>
      <option value= "cubic_feet"<?php if($to_unit == 'cubic_feet') echo " selected" ?>>Cubic Feet</option>
      <option value= "imperial_gallons"<?php if($to_unit == 'imperial_gallons') echo " selected" ?>>Imperial Gallons</option>
      <option value= "imperial_quarts"<?php if($to_unit == 'imperial_quarts') echo " selected" ?>>Imperial Quarts</option>
      <option value= "imperial_pints"<?php if($to_unit == 'imperial_pints') echo " selected" ?>>Imperial Pints</option>
      <option value= "imperial_cups"<?php if($to_unit == 'imperial_cups') echo " selected" ?>>Imperial Cups</option>
      <option value= "imperial_teaspoons"<?php if($to_unit == 'imperial_teaspoons') echo " selected" ?>>Imperial Teaspoons</option>
      <option value= "imperial_tablespoons"<?php if($to_unit == 'imperial_tablespoons') echo " selected" ?>>Imperial Tablespoons</option>
      <option value= "cubic_centimeters"<?php if($to_unit == 'cubic_centimeters') echo " selected" ?>>Cubic Centimeters</option>
      <option value= "cubic_meters"<?php if($to_unit == 'cubic_meters') echo " selected" ?>>Cubic Meters</option>
      <option value= "liters"<?php if($to_unit == 'liters') echo " selected" ?>>Liters</option>
      <option value= "milliliters"<?php if($to_unit == 'milliliters') echo " selected" ?>>Millimeters</option>
      <option value= "imperial_ounces"<?php if($to_unit == 'imperial_ounces') echo " selected" ?>>Imperial Ounces</option>

    </select>
    
  </div>
  
  <input type="submit" value="Submit" />
</form>

<br />
<a href="index.php">Return to menu</a>

</div>


</body>
</html>