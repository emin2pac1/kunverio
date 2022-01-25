<?php
$get_post = $_SERVER['REQUEST_METHOD'];
$tovalue = '';
$fromvalue = '';
$get_post == 'POST'? $value = $_POST['from_value']:$value = ''; 
$from_unit = $_POST['from_unit'] ?? '';
$to_unit = $_POST['to_unit'] ?? '';

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
  <title>Kunverio: Area</title>
</head>
<body>
<div id="main-content" style>

<h1>Convert Area</h1>
<?php
 !isset($_POST['from_unit']) ? $_POST['from_unit'] ='square_inch': $from_unit = $_POST['from_unit'];   
 !isset($_POST['to_unit']) ? $_POST['to_unit'] ='square_inch': $to_unit = $_POST['to_unit'];   

 ?>
<form action="" method="post">
  
  <div class="entry">
    <label>From:</label>&nbsp;
    <input type="text" name="from_value" value="<?php echo $fromvalue?>" />&nbsp;
    <select name="from_unit">

      <option value= "square_inch" <?php if($from_unit == 'square_inch') echo " selected" ?>>Square Inch</option>
      <option value= "square_feet" <?php if($from_unit == 'square_feet') echo " selected" ?>>Square Feet</option>
      <option value= "square_yard"<?php if($from_unit == 'square_yard') echo " selected" ?>>Square Yard</option>
      <option value= "square_mile"<?php if($from_unit == 'square_mile') echo " selected" ?>>Square Mile</option>
      <option value= "square_millimeter"<?php if($from_unit == 'square_millimeter') echo " selected" ?>>Square Millimeter</option>
      <option value= "square_centimeter"<?php if($from_unit == 'square_centimeter') echo " selected" ?>>Square Cenimeter</option>
      <option value= "square_meter"<?php if($from_unit == 'square_meter') echo " selected" ?>>Square Meter</option>
      <option value= "square_kilometer"<?php if($from_unit == 'square_kilometer') echo " selected" ?>>Square Kilometer</option>
    </select>
  </div>
  
  <div class="entry">
    <label>To:</label>&nbsp;
    <input type="text" name="to_value" value="<?php echo $tovalue ?>" />&nbsp;
    <select name="to_unit">

    <option value= "square_inch" <?php if($to_unit == 'square_inch') echo " selected" ?>>Square Inch</option>
      <option value= "square_feet" <?php if($to_unit == 'square_feet') echo " selected" ?>>Square Feet</option>
      <option value= "square_yard"<?php if($to_unit == 'square_yard') echo " selected" ?>>Square Yard</option>
      <option value= "square_mile"<?php if($to_unit == 'square_mile') echo " selected" ?>>Square Mile</option>
      <option value= "square_millimeter"<?php if($to_unit == 'square_millimeter') echo " selected" ?>>Square Millimeter</option>
      <option value= "square_centimeter"<?php if($to_unit == 'square_centimeter') echo " selected" ?>>Square Cenimeter</option>
      <option value= "square_meter"<?php if($to_unit == 'square_meter') echo " selected" ?>>Square Meter</option>
      <option value= "square_kilometer"<?php if($to_unit == 'square_kilometer') echo " selected" ?>>Square Kilometer</option>
    </select>
    
  </div>
  
  <input type="submit" value="Submit" />
</form>

<br />
<a href="index.php">Return to menu</a>

</div>


</body>
</html>