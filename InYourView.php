  <select>
				<?php  
        //Re-Index
				$array = array_values($enm);
				foreach ($array as $v1) {
					echo "<option>" .$v1."</option>";
				}
				?>
				</select>
