<?php
require 'php_files/connexion.class.php'; 
require 'php_files/departement.class.php';
require 'php_files/enseignant.class.php'; 
$stm = new Db_connect();
$dep = new departement($stm->connect());
$ens = new enseignant($stm->connect());

extract($_POST);
extract($_GET);

if (isset($enrj)) {
   if (!empty($nom) AND !empty($prenom) AND !empty($departement) AND !empty($login) AND !empty($password1) AND !empty($password2)) {
      if ($password1 == $password2) {
         $password=sha1($password1);
          $statu = $ens->insert($nom,$prenom,$departement,$telephone,$email,$login,$password);
          if ($statu) {
         $_SESSION['message']="l'Enseignant est bien Ajouté.";
          } else $_SESSION['erreur']="Une Erreur est produite lors de l'enregistrement !";
      } else $_SESSION['erreur']="Les deux Mot de Pass doit etre identique !";

   }
   else $_SESSION['erreur']="Vous devez remplire tous les champs !";
}
if (isset($modifier)) {
   if (!empty($nom) AND !empty($prenom) AND !empty($departement) AND !empty($id)) {
   $statu = $ens->update($id,$nom,$prenom,$departement,$telephone,$email);
   if ($statu) {
         $_SESSION['message']="l'Enseignant est Bien Modfié.";
          } else $_SESSION['erreur']="Une Erreur est produite lors de la modification !";
   } else $_SESSION['erreur']="Vous devez remplire tous les champs !";
}

if (!empty($enseignant_id) AND !empty($delete) AND $delete=="yes") {
   $id=htmlentities($enseignant_id);
   if(is_numeric($id)){
   $statu = $ens->delete($id);
   if ($statu) {
         $_SESSION['message']="l'Enseignant est Supprimé.";
         header('Location:gestion-enseignants.php');
          } else $_SESSION['erreur']="Une Erreur se produite lors de la supprission !";
   }
}
$enseignants = $ens->getAll();
$departements = $dep->getAll();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>InQ - A Responsive Bootstrap 3 Admin Dashboard Template</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/forms/kforms.css" rel="stylesheet">
      <!-- Data Tables -->
      <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
      <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
      <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
      <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
   </head>
   <body>
      <div id="wrapper">
          <?php include('header.php'); ?>
            <div style="clear: both; height: 61px;"></div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-content">
                           <h2 class="text-warning"><i class="fa fa-users fa-2x "></i> Gestion Des Enseignants</h2>
                        </div>
                     </div>
                  </div>
               </div>
               
                <?php if (isset($_SESSION['message'])) { ?>
                <div class="row">
               <div class="col-md-12 text-center">
                  <div class="alert alert-success alert-dismissable col-sm-5 col-sm-offset-3 animated bounceIn" >
                     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                     <strong><i class="fa fa-check"></i> Succès. </strong> <?php echo $_SESSION['message'];?>
                  </div>
                   </div>
               </div>
                <?php 
                unset($_SESSION['message']);
                } ?>
                <?php if (isset($_SESSION['erreur'])) { ?>
                <div class="row">
               <div class="col-md-12 text-center">
                  <div class="alert alert-danger alert-dismissable col-sm-5 col-sm-offset-3 animated bounceIn" >
                     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                     <strong><i class="fa fa-warning"></i> Echéc. </strong> <?php echo $_SESSION['erreur'];?>
                  </div>
                   </div>
               </div>
                <?php 
                unset($_SESSION['erreur']);
                } ?>
                 
               <div class="row">
               <div class="col-md-12">
                     <div class="tab-block">
                        <ul class="nav nav-tabs">
                           <li>
                              <a href="#tab1" data-toggle="tab"><i class="fa fa-plus text-warning"></i> Ajouter un Enseignant</a>
                           </li>
                           <li class="active">
                              <a href="#tab2" data-toggle="tab"><i class="fa fa-refresh text-warning"></i> Modifer /Supprimer un enseignant</a>
                           </li>
                           
                        </ul>
                        <div class="tab-content p30" style="height: 730px;">
                           <div id="tab1" class="tab-pane">
                           <form method="post" class="form-horizontal" action="gestion-enseignants.php">
                           <div class="kform">
                               <div class="section-divider mb40" id="spy1">
                                    <span>Informations Personnels</span>
                                 </div>
                           </div>
                           <div class="form-group">
                                 <label class="col-sm-4 control-label">Nom* :</label>
                                 <div class="col-sm-4">
                                 <input type="text" class="form-control" name="nom" required=""></div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">Prenom* :</label>
                                 <div class="col-sm-4">
                                 <input type="text" class="form-control" name="prenom" required=""></div>
                              </div>
                               <div class="form-group">
                                 <label class="col-sm-4 control-label">Departement* :</label>
                                 <div class="col-sm-4">
                                    <select class="form-control" name="departement" required="">
                                                <option value="">--Départment--</option>
                                                <?php
                                                foreach ($departements as $d) {
                                                   ?>
                                                  <option value="<?php echo $d['id_departement']; ?>"><?php echo $d['departement']; ?></option>
                                                  
                                                  <?php }
                                                ?>
                                                
                                                
                                    </select>
                                    </div>
                              </div>
                              
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">Telephone* :</label>
                                 <div class="col-sm-4">
                                 <input type="number" class="form-control" name="telephone"></div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">Email* :</label>
                                 <div class="col-sm-4">
                                 <input type="email" class="form-control" name="email"></div>
                              </div>
                              <div class="kform">
                              <div class="section-divider mv40">
                                    <span>Information D'Ahtentification</span>
                                 </div>
                               </div> 
                              <div class="form-group has-success">
                                 <label class="col-sm-4 control-label">Login* :</label>
                                 <div class="col-sm-4">
                                 <input type="text" class="form-control" name="login" required=""></div>
                              </div>
                              <div class="form-group has-success">
                                 <label class="col-sm-4 control-label">Mot de Pass* :</label>
                                 <div class="col-sm-4">
                                 <input type="password" class="form-control" name="password1" required=""></div>
                              </div>
                              <div class="form-group has-success">
                                 <label class="col-sm-4 control-label">Resaisire le Mot de Pass* :</label>
                                 <div class="col-sm-4">
                                 <input type="password" class="form-control" name="password2" required=""></div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-8">
                                 <div class="pull-right">
                                    <button type="reset" class="btn btn-white" type="submit">Annuler</button>
                                    
                                    <button class="btn btn-success btn-outline" type="submit" name="enrj">Enregistrer <i class="fa fa-download"></i></button>
                                 </div>
                                 </div>
                              </div>
                           </form>
                           </div>


                           <div id="tab2" class="tab-pane active">
                           <div class="row">
                           
                  <div class="col-md-12">
                     
                              <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover dataTables-example" >
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>NOM ET PRENOM</th>
                                     
                                       <th>DEPARTEMENT</th>
                                       <th>TELEPHONE</th>
                                       <th>EMAIL</th>
                                       <th width="180">OPERATION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                    foreach ($enseignants as $e) {
                                      
                                    ?>
                                    <tr class="gradeX">
                                       <td><?php echo $e['id_enseignant'];?></td>
                                       
                                       <td><?php echo $e['nom']." ".$e['prenom'];?></td>
                                       <td class="center">
                                       <?php 
                                       $resultat = $dep->get($e['id_departement']);
                                       echo $resultat['departement'];?>
                                       </td>
                                       <td class="center"><?php echo $e['telephone'];?></td>
                                       <td class="center"><?php echo $e['email'];?></td>
                                       <td class="">
                                          <a href="#" class="btn btn-danger btn-sm demo4" id="<?php echo $e['id_enseignant'];?>"><i class="fa fa-trash"></i> supprimer </a>
                                          
                                          <button type="button" class="btn btn-info btn-sm mod" data-toggle="modal" data-target="#myModal6" id="<?php echo $e['id_enseignant'];?>"><i class="fa fa-pencil"></i>
                                          Modifier
                                          </button>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                                 
                              </table>
                           </div>

                           <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                       <i class="fa fa-user modal-icon"></i>
                                       <h4 class="modal-title text-warning">Modifier un Enseignant</h4>
                                    </div>
                                    <form method="post" class="form-horizontal" action="gestion-enseignants.php">
                                    <div class="modal-body" id="mydiv">
                                       
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                       <button type="submit" class="btn btn-primary" name="modifier">Enregistrer</button>
                                    </div>
                              </form>

                                 </div>
                              </div>
                           </div>
                           </div>
                           </div>


                           </div>
                           </div>

                     </div>

                  </div>
                  
            </div>
            
         </div>
         <div class="footer">
               <div class="pull-right">
                  10GB of <strong>250GB</strong> Free.
               </div>
               <div>
                  <strong>Copyright</strong> Your Company &copy; 2015-2016
               </div>
            </div>
      </div>
      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/main.js"></script>
      <script src="js/plugins/pace/pace.min.js"></script>
      <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
      <!-- Data Tables -->
      <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
      <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
      <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
      <!-- Sweet alert -->
      <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
      <script src="js/enseignants.js"></script>
      <script src="js/profile.js"></script>
      <!-- Page-Level Scripts -->
      <script type="text/javascript">
         $(document).ready(function () {
             "use strict";
             
             $('.dataTables-example').dataTable({
                 responsive: true,
                 "dom": 'T<"clear">lfrtip',
                 "tableTools": {
                     "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                 }
             });
         
         });
         
   
      </script>
      <script type="text/javascript">
         $(function () {
             "use strict";
             // sweet alert
            
             $('.demo4').click(function () {
                 var id=$(this).attr("id");
                 swal({
                     title: "Vous voulez supprimer l'enseignant?",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#DD6B55",
                     confirmButtonText: "Oui",
                     cancelButtonText: "Non",
                     closeOnConfirm: false,
                     closeOnCancel: false},
                 function (isConfirm) {
                     if (isConfirm) {
                         swal("Supprimé !", "l'Enseignant est supprimé.", "success");
                         window.location.replace("gestion-enseignants.php?delete=yes&enseignant_id="+id);
                     } else {
                         swal("Annuler", "l'Enseignant n'est pas supprimé :)", "error");
                         
                     }
                 });
             });
         });
      </script>
      
      <style>
          body.DTTT_Print {
              background: #fff;
          }
          .DTTT_Print #page-wrapper {
              margin: 0;
              background:#fff;
          }
          button.DTTT_button, div.DTTT_button, a.DTTT_button {
              border: 1px solid #e7eaec;
              background: #fff;
              color: #676a6c;
              box-shadow: none;
              padding: 6px 8px;
          }
          button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
              border: 1px solid #d2d2d2;
              background: #fff;
              color: #676a6c;
              box-shadow: none;
              padding: 6px 8px;
          }
          .dataTables_filter label {
              margin-right: 5px;
          }
      </style>
   </body>
</html>
