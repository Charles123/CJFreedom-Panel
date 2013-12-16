<?php
   include 'config.php';
   include 'globalvariables.php';
   
function isSuperUser() {
    if (in_array($_SESSION['user']['username'], $config['SUPER_USERS'])) {
        return true;
    } else {
        return false;
    }
}

function mapNames($mapnames) {
    $arrlength=count($mapnames);
    for($x=0;$x<$arrlength;$x++)
      {
      echo "<option>";
      echo $mapnames[$x];
      echo "</option>";
      }
}

?>

