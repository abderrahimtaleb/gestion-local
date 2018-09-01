<?php 
require 'php_files/connexion.class.php'; 
require 'php_files/filieres.class.php'; 
$stm = new Db_connect();
$fel = new filiere($stm->connect());
extract($_POST);
if($action=="chercher") {
$filiere = $fel->get($id);
?>
<input name="filiere" type="text" class="form-control" required="" value="<?php echo $filiere['libelle']; ?>">
<input name="id" type="hidden" class="form-control" value="<?php echo $filiere['id_filiere']; ?>">
<?php
}
//var_dump($resultat);
?>