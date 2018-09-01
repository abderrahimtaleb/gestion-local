<?php 
require 'php_files/connexion.class.php'; 
require 'php_files/departement.class.php'; 
$stm = new Db_connect();
$dep = new departement($stm->connect());
extract($_POST);
if($action=="chercher") {
$departement = $dep->get($id);
?>
<input name="departement" type="text" class="form-control" required="" value="<?php echo $departement['departement']; ?>">
<input name="id" type="hidden" class="form-control" value="<?php echo $departement['id_departement']; ?>">
<?php
}
//var_dump($resultat);
?>