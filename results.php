<?php
  // get the dimensions of the trapezoid from the textfields
  $side_a = $_POST['sidea'];
  $side_b = $_POST['sideb'];
  $height = $_POST['height'];


  // formula to calculate area 
  $area =  $height * ($side_a + $side_b) / 2;

?>
<h3>Results:</h3>
The area is <?php echo round($area,3) ?> cm<sup>2</sup>.


