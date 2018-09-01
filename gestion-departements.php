<?php 
require 'php_files/connexion.class.php'; 
require 'php_files/departement.class.php'; 
require 'php_files/enseignant.class.php'; 
$stm = new Db_connect();
$dep = new departement($stm->connect());
$ens = new enseignant($stm->connect());
//var_dump($resultat);
extract($_POST);
extract($_GET);

if (isset($ajouter)) {
   if(!empty($departement)){
      $statu = $dep->insert($departement);
      if ($statu) {
         $_SESSION['message']="Le Departement bien Ajouté.";
          } else $_SESSION['erreur']="Une Erreur est produite lors de l'enregistrement !";
   } else $_SESSION['erreur']="Vous devez remplire tous les champs !";
}

if (isset($modifier)) {
   if(!empty($departement) AND !empty($id)){
      $statu = $dep->update($id,$departement);
      if ($statu) {
         $_SESSION['message']="Le Departement est bien Modifié.";
          } 
          else $_SESSION['erreur']="Une Erreur se produite lors de la modification !";
   } else $_SESSION['erreur']="Vous devez remplire tous les champs !";
}

if (!empty($departemet_id) AND !empty($delete) AND $delete=="yes") {
   $id=htmlentities($departemet_id);
   if(is_numeric($id)){
      $statu = $dep->delete($id);
      if ($statu) {
         $_SESSION['message']="Le Departement est Supprimé.";
         header('Location:gestion-departements.php');
          } else $_SESSION['erreur']="Une Erreur se produite lors de la supprission !";
   }
}
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
                           <h2 class="text-danger"><i class="fa fa-university fa-2x "></i> Gestion Des Departements</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <?php if (isset($_SESSION['message'])) { ?>
                <div class="row">
               <div class="col-md-12 text-center">
                  <div class="alert alert-success alert-dismissable col-sm-5 col-sm-offset-3 animated bounceIn" >
                     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                     <strong><i class="fa fa-check"></i> Succès </strong> <?php echo $_SESSION['message'];?>
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
                           <li class="active">
                              <a href="#tab1" data-toggle="tab"><i class="fa fa-refresh text-danger"></i> Liste des Departements</a>
                           </li>
                           
                        </ul>

                        <div class="tab-content p30" style="height: 730px;">
                           <div id="tab1" class="tab-pane active">
                           <div class="row">
                           <div class="col-md-12">
                              <div class="table-responsive">
                                <button data-toggle="modal" data-target="#myModal5" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Ajouter Un Departement</button>
                                
                              <table class="table table-striped table-bordered table-hover dataTables-example" >

                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       
                              
                                       <th>DEPARTEMENT</th>
                                       
                                       <th width="180">OPERATION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    foreach ($departements as $d) {
                                      
                                    ?>
                                    <tr class="gradeX">

                                   
                                       <td><?php echo $d['id_departement'];?></td>
                                       
                                       <td><?php echo $d['departement'];?></td>
                                       
                                       <td>
                                          <a href="#" class="btn btn-danger btn-sm demo4" id="<?php echo $d['id_departement'];?>"><i class="fa fa-trash"></i> supprimer </a>
                                          
                                          <button id="<?php echo $d['id_departement'];?>" type="button" class="mod btn btn-info btn-sm" data-toggle="modal" data-target="#myModal6"><i class="fa fa-pencil"></i>
                                          Modifier
                                          </button>
                                       </td>
                                    </tr>
                                    <?php
                                       }
                                    ?>
                                 </tbody>
                                 
                              </table>
                           </div>

                           <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                                       <i class="fa fa-university modal-icon"></i>
                                       <h4 class="modal-title">Modifier Un Departement</h4>
                                    </div>
                                    <form method="post" class="form-horizontal" action="gestion-departements.php">
                                    <div class="modal-body">
                                       
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Departement :</label>
                                 <div class="col-sm-9" id="mydiv">
                                 </div>
                              </div>
                              

                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                       <button name="modifier" type="submit" class="btn btn-primary btn-outline"><i class="fa fa-download"></i> Enregistrer</button>
                                    </div>
                                    </form>
                                 </div>
                              </div>
                           </div>


                           <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                                       <i class="fa fa-university modal-icon"></i>
                                       <h4 class="modal-title">Ajouter Un Departement</h4>
                                    </div>
                                    <form method="post" class="form-horizontal">
                                    <div class="modal-body">
                                       
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Departement :</label>
                                 <div class="col-sm-9">
                                 <input type="text" class="form-control" name="departement" required=""></div>
                              </div>
                              

                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                       <button type="submit" name="ajouter" class="btn btn-primary btn-outline"><i class="fa fa-download"></i> Enregistrer</button>
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
      <script src="js/departements.js"></script>
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
                     title: "Vous voulez supprimer le departement ?",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#DD6B55",
                     confirmButtonText: "Oui",
                     cancelButtonText: "Non",
                     closeOnConfirm: false,
                     closeOnCancel: false},
                 function (isConfirm) {
                     if (isConfirm) {
                         swal("Supprimé !", "Le departement est supprimer.", "success");
                         window.location.replace("gestion-departements.php?delete=yes&departemet_id="+id);
                     } else {
                         swal("Annuler", "Le departement n'est pas supprimé :)", "error");
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
