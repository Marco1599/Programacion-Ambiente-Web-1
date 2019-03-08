
<?php
session_start();

$contador = $_SESSION['click']??0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contador++;
    $_SESSION['click'] =$contador;
    
}
 ?>

 <form method="POST">
 <label><?=$contador?></label>
    <button type ="submit">click</button>
</form>
