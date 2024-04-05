<!DOCTYPE html>
<html>
  <body>
  
  <?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
 $size = $_POST['Size'];
    echo "<table border = '1' >";
    for ($i = 0; $i <= $size; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= $size; $j++) {
        if ($i == 0 && $j == 0) {
          echo "<td></td>";
        } elseif ($i == 0) {
          echo "<td>$j</td>";
        } elseif ($j == 0) {
          echo "<td>$i</td>";
        } else {
          echo "<td>" . ($i * $j) . "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";}
    c?>
    </body>
    </html>
