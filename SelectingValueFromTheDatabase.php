  <select>
  <?php 
  $array = array_values($enm);
  $pos = array_search($mydata['student_gender'], $array);
  unset($array[$pos]);
  foreach ($array as $v1) {
  echo "<option>" .$v1."</option>";
  }		
  ?>
  <?php echo  "<option selected>" .$mydata['student_gender']."</option>";?>
  </select>
