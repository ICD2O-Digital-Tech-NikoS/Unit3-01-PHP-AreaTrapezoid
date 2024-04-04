<?php
  // get the wage and hous from the textfields
  $side_a = $_POST['sidea'];
  $side_b = $_POST['sideb'];
  $height = $_POST['height'];


  // calculate pay 
  $area =  $height * ($side_a + $side_b) / 2;

?>
<h3>Results:</h3>
The area is <?php echo "$area" ?> cm<sup>2</sup>.


