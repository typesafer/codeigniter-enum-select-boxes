  <select>
  <?php 
    $array = array_values($enm); 
      foreach ($array as $v1)
      {
          if($v1 == $mydata['student_gender'])
          {
              echo "<option selected>" .$v1."</option>";
          }
          else
          {
              echo "<option>" .$v1."</option>";
          }
      }
  ?>
  </select>
