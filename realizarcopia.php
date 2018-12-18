<?php
include_once 'head.php';


echo'<form action = "realizarcopia.php" method = "POST">
       
<table>
       <tr>
      <td><input type="radio" name="rbcopia" value="0" checked="checked" /> Todas las BD </td>
      </tr>
      <tr>
      <td><input type="radio" name="rbcopia" value="0" checked="checked" /> Una sola BD <input type="text" name="nombre" value="" /></td>
      </tr>  
      <tr>
      <td><input type="submit" value="Realizar" name="realizar" /></td>
      </tr>  
</form >';



include_once 'footer.php';