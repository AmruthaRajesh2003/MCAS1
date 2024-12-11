<?php
$cricket=array(array('MS Dhoni',40),
array('virat Kohli',33),
array('Sachin Tendulkar',48),
array('Rohit Sharma',36),
array('Sanju Samson',28));
?>

<!DOCTYPE html>
<html>
<table border="1">
    <tr>
        <th>Name</th
    th>Age</th><th>
    </tr>
    <?php
        foreach ($cricket as $player)
        {
            echo '<tr>';
        foreach ($player as $value)
         {

            echo '<td>'.$value . '</td>';
          }
           echo '</tr>';
        }
    ?>
</table>
</html>