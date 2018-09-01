<?php 
require 'php_files/connexion.class.php'; 
require 'php_files/matieres.class.php'; 
$stm = new Db_connect();
$mtr = new matieres($stm->connect());
extract($_POST);
if($action=="chercher") {
$matiere = $mtr->get($id);
?>
<input name="matieres" type="text" class="form-control" required="" value="<?php echo $matiere['matiere']; ?>">


<input name="id" type="hidden" class="form-control" value="<?php echo $matiere['id_matiere']; ?>">
<?php
}
//var_dump($resultat);
?>