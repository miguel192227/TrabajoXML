
<?php


echo "<div class='cell'><p >lista de canciones</p></div>";
 $canciones3 = simplexml_load_file('canciones2.xml');

  	echo "<table>";
  	echo "<tbody>";
foreach ($canciones3 as $key) {
   echo "  <td   class='mol'   id=".$key["numero"]." onclick=aqui(id,innerHTML) >".$key->nombre."</td>";
}
  echo "</tbody>";
  echo "</table>";
  
?>