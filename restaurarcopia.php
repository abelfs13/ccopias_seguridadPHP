<?php

include_once 'head.php';


echo'<form action = "realizarcopia.php" method = "POST">
        
      <input type="radio" name="rbcopia" value="0" checked="checked" /> Todas las BD 
      <input type="radio" name="rbcopia" value="0" checked="checked" /> Una sola BD
        
      <input type="submit" value="Realizar" name="realizar" />
        
</form >';
        include_once 'footer.php';