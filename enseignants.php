<?php 
require 'php_files/connexion.class.php'; 
require 'php_files/enseignant.class.php'; 
require 'php_files/departement.class.php'; 
$stm = new Db_connect();
$ens = new enseignant($stm->connect());
$dep = new departement($stm->connect());
$departements = $dep->getAll();
extract($_POST);
if($action=="chercher") {
$enseignant = $ens->get($id);
?>
<div class="kform">
      <div class="section-divider mb40" id="spy1">
          <span>Informations Personnels</span>
        </div>
  </div>
  <div class="form-group">
        <label class="col-sm-3 control-label">Nom* :</label>
        <div class="col-sm-8">
        <input type="hidden" class="form-control" name="id" value="<?php echo $enseignant['id_enseignant']; ?>">
        <input type="text" class="form-control" name="nom" required="" value="<?php echo $enseignant['nom']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Prenom* :</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="prenom" required="" value="<?php echo $enseignant['prenom']; ?>"></div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Departement* :</label>
        <div class="col-sm-8">
          <select class="form-control" name="departement" required="">
                      <option value="">--Départment--</option>
                      <?php
                      foreach ($departements as $d) {
                          ?>
                        <option value="<?php echo $d['id_departement'];?>" <?php if ($d['id_departement'] == $enseignant['id_departement']) {
                          echo "selected";} ?> >
                        <?php echo $d['departement']; ?>
                        </option>
                                                  
                        <?php }
                      ?>
                                                
                                                
          </select>
          </div>
    </div>
    
    <div class="form-group">
         <label class="col-sm-3 control-label">Telephone* :</label>
         <div class="col-sm-8">
         <input type="number" class="form-control" name="telephone" value="<?php echo $enseignant['telephone']; ?>"></div>
      </div>
      <div class="form-group">
         <label class="col-sm-3 control-label">Email* :</label>
         <div class="col-sm-8">
         <input type="email" class="form-control" name="email" value="<?php echo $enseignant['email']; ?>"></div>
      </div>
                              
       
<?php
}
//var_dump($resultat);
?>
