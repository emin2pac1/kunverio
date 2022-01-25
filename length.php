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
  <title>Kunverio: Length</title>
</head>
<body>
<div id="main-content" style>

<h1>Convert Length</h1>
<?php
 !isset($_POST['from_unit']) ? $_POST['from_unit'] ='inch': $from_unit = $_POST['from_unit'];   
 !isset($_POST['to_unit']) ? $_POST['to_unit'] ='inch': $to_unit = $_POST['to_unit'];   

 ?>
<form action="" method="post">
  
  <div class="entry">
    <label>From:</label>&nbsp;
    <input type="text" name="from_value" value="<?php echo $fromvalue?>" />&nbsp;
    <select name="from_unit">

      <option value= "inch" <?php if($from_unit == 'inch') echo " selected" ?>>Inch</option>
      <option value= "feet" <?php if($from_unit == 'feet') echo " selected" ?>>Feet</option>
      <option value= "yard"<?php if($from_unit == 'yard') echo " selected" ?>>Yard</option>
      <option value= "mile"<?php if($from_unit == 'mile') echo " selected" ?>>Mile</option>
      <option value= "millimeter"<?php if($from_unit == 'millimeter') echo " selected" ?>>Millimeter</option>
      <option value= "centimeter"<?php if($from_unit == 'centimeter') echo " selected" ?>>Cenimeter</option>
      <option value= "meter"<?php if($from_unit == 'meter') echo " selected" ?>>Meter</option>
      <option value= "kilometer"<?php if($from_unit == 'kilometer') echo " selected" ?>>Kilometer</option>

    </select>
  </div>
  
  <div class="entry">
    <label>To:</label>&nbsp;
    <input type="text" name="to_value" value="<?php echo $tovalue ?>" />&nbsp;
    <select name="to_unit">

      <option value= "inch" <?php if($to_unit == 'inch') echo " selected" ?>>Inch</option>
      <option value= "feet" <?php if($to_unit == 'feet') echo " selected" ?>>Feet</option>
      <option value= "yard"<?php if($to_unit == 'yard') echo " selected" ?>>Yard</option>
      <option value= "mile"<?php if($to_unit == 'mile') echo " selected" ?>>Mile</option>
      <option value= "millimeter"<?php if($to_unit == 'millimeter') echo " selected" ?>>Millimeter</option>
      <option value= "centimeter"<?php if($to_unit == 'centimeter') echo " selected" ?>>Cenimeter</option>
      <option value= "meter"<?php if($to_unit == 'meter') echo " selected" ?>>Meter</option>
      <option value= "kilometer"<?php if($to_unit == 'kilometer') echo " selected" ?>>Kilometer</option>

    </select>
    
  </div>
  
  <input type="submit" value="Submit" />
</form>

<br />
<a href="index.php">Return to menu</a>

</div>


</body>
</html>