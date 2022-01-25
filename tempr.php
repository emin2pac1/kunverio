<?php
$get_post = $_SERVER['REQUEST_METHOD'];
$tovalue = '';
$fromvalue = '';
$get_post == 'POST'? $value = $_POST['from_value']:$value = ''; 
$from_unit = $_POST['from_unit'] ?? '';
$to_unit = $_POST['to_unit'] ?? '';

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
  <title>Kunverio: Temperature</title>
</head>
<body>
<div id="main-content" style>

<h1>Convert Temperature</h1>
<?php
 !isset($_POST['from_unit']) ? $_POST['from_unit'] ='celsius': $from_unit = $_POST['from_unit'];   
 !isset($_POST['to_unit']) ? $_POST['to_unit'] ='celsius': $to_unit = $_POST['to_unit'];   

 ?>
<form action="" method="post">
  
  <div class="entry">
    <label>From:</label>&nbsp;
    <input type="text" name="from_value" value="<?php echo $fromvalue?>" />&nbsp;
    <select name="from_unit">
      <option value= "celsius"<?php if($from_unit == 'celsius') echo " selected" ?>>Celsius</option>
      <option value= "fahrenheit"<?php if($from_unit == 'fahrenheit') echo " selected" ?>>Fahrenheit</option>
      <option value= "kelvin"<?php if($from_unit == 'kelvin') echo " selected" ?>>Kelvin</option>
    </select>
  </div>
  
  <div class="entry">
    <label>To:</label>&nbsp;
    <input type="text" name="to_value" value="<?php echo $tovalue ?>" />&nbsp;
    <select name="to_unit">
      <option value= "celsius"<?php if($to_unit == 'celsius') echo " selected" ?>>Celsius</option>
      <option value= "fahrenheit"<?php if($to_unit == 'fahrenheit') echo " selected" ?>>Fahrenheit</option>
      <option value= "kelvin"<?php if($to_unit == 'kelvin') echo " selected" ?>>Kelvin</option>
    </select>
    
  </div>
  
  <input type="submit" value="Submit" />
</form>

<br />
<a href="index.php">Return to menu</a>

</div>


</body>
</html>