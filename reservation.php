<?php session_start();

if (!isset($_SESSION['id_admin'])) {
header("location:index.php");
  }
    include_once (dirname(__FILE__).'/class/cnx.php'); 
   include_once (dirname(__FILE__).'/class/getBigEmp.php'); 
    $cnx = new connexion();
    $db = $cnx->getDB();
   $LocaleEmploiTable  = new  LocaleEmploiTable($db);
/*$ad = new admin($db);
    $img =$ad->getPathImageAdmin(0);*/
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FSTG KESH</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/forms/kforms.css" rel="stylesheet">
      <script src="js/jquery-2.1.1.js"></script>
       <script type="text/javascript" src="js/jsAction/controleValidationDate.js"></script> 
   </head>
   <body>
      <div id="wrapper">
       <?php include_once('header.php'); ?>
            <div style="clear: both; height: 61px;"></div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-content">
                           <h2>Emploie du temps</h2>
                           <ol class="breadcrumb">
                              <li>
                                 <a href="index.html">Home</a>
                              </li>
                              <li>
                                 <a>Gestion des emploies du temps</a>
                              </li>
                              <li class="active">
                                 <strong>Réservation</strong>
                              </li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-title border-top-primary">
                           <h5 class="text-danger" id="NomFiliere"></h5>
                           <div class="inqbox-tools">
                              <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                              </a>
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-user">
                                 <li><a href="#">Config option 1</a>
                                 </li>
                                 <li><a href="#">Config option 2</a>
                                 </li>
                              </ul>
                              
                           </div>
                        </div>
                        <div class="inqbox-content">
                           <div class="table-responsive">
                           <table class="table table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th></th>
                                    <?php echo $LocaleEmploiTable->getLocaleHeader(); ?>
                                 </tr>
                              </thead>
                              <tbody>
                                    <?php echo $LocaleEmploiTable->getLocaleBody(); ?>
                              </tbody>
                           </table>
                        </div>
                         </div>
                     </div>
                  </div>

               </div>
            </div>


                           <div class="modal inmodal" id="myModalSupp" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                       <i class="fa fa-eraser modal-icon"></i>
                                       <h3 class="modal-title text-danger">Etes-vous sure de supprimer cette période ?</h3>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-white" data-dismiss="modal">Quitter</button>
                                       <button type="button" class="btn btn-danger" id="supprimerPeriode">Supprimer</button>
                                    </div>
                                 </div>
                              </div>
                           </div>


                                       <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content animated flipInY">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                       <h4 class="modal-title"><span class="text-primary" id="forModifText">Liste de réservations !</span></h4>
                                    </div>
                                    <div class="modal-body">
                      

                      <form class="form-horizontal" role="form">

                        <table class="table table-hover">
                           <thead>
                             <tr> <th>Enseignant</th>
                              <th>Date</th><th>Action</th></tr>
                           </thead>
                           <tbody id="tbody">
                           </tbody>
                        </table>


                        </form>

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
      </div>
      <!-- Mainly scripts -->

   
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/main.js"></script>
      <script src="js/plugins/pace/pace.min.js"></script>
      <!-- Chosen -->

      <!-- JSKnob -->
      <span id="mettez"></span>
      <input type="hidden" id="idOccpation" value="aqdv"></input>
      <input type="hidden" id="RienCliquer" value="0"></input>
      <input type="hidden" id="child" value="aqdv"></input>
      <input type="hidden" id="idOksup" value=""></input>
  <input type="hidden" id="forM" value="aqdv">
</input>
   </body>
</html>