<?php
session_start();
$ee=$_SESSION["counter"];

echo "<div class='fg'><p>Canciones </p></div>";
 $canciones3 = simplexml_load_file('lista.xml');

  	echo "<table>";
  	echo "<tbody>";
foreach ($canciones3 as $key) {

	if($key["numero"]==$ee){
  foreach ($key as $key2){

echo "<tr>";
  	
  echo "<td class='red'><label>".$key2["num"]."</label> <div  id=".$key2." onclick=vhs(id,innerHTML)>".$key2["nombre"]."</div></td>";
  echo "<td><button class='time' id=".$key2["num"]." onclick=exlad2(id)>Borrar</button> </td>";
  echo "</tr>";




  }
}
}
  echo "</tbody>";
  echo "</table>";

?>