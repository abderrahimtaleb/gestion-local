<?php session_start();

    include_once (dirname(__FILE__).'/class/cnx.php'); 
    include_once (dirname(__FILE__).'/class/filiere.php'); 
    /*include_once (dirname(__FILE__).'/class/infoLocale.php');*/
 
    $cnx = new connexion();
    $db = $cnx->getDB();
   $SelectionFiliere  = new  SelectionFiliere($db);

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
      <script type="text/javascript" src="js/jsAction/controle_ct.js"></script> 
   </head>
   <body>
      <div id="wrapper">
        <?php  include_once('header.php') ?>
            <div style="clear: both; height: 61px;"></div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-content">
                           <h2>Emploi du temps</h2>
                           <ol class="breadcrumb">
                              <li>
                                 <a href="#">Home</a>
                              </li>
                              <li>
                                 <a>Gestion des emploies du temps</a>
                              </li>
                              <li class="active">
                                 <strong>Emploi du temps</strong>
                              </li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-6 col-lg-offset-3">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-title border-top-danger">
                           <h5>Choisissez la filière</h5>
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
                              <a class="close-link">
                              <i class="fa fa-times"></i>
                              </a>
                           </div>
                        </div>
                        <div class="inqbox-content">
<form class="form-horizontal" role="form">
<div class="form-group">
<label for="filier" class="col-sm-4 control-label">Sélectionner la filière</label>
<div class="col-sm-8">
<form name="formFiliere">
<select class="form-control" id="SelectFiliere" name="SelectFiliere">
<option value="">--------------</option>
<?php echo $SelectionFiliere->getSelections(); ?>
</select>
</form>
</div>
</div>

</form>
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
                              <i class="fa fa-chevron-up text-primary"></i>
                              </a>
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-times text-danger"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-user">
                                 <li><a href="javascript::;" style="color:red" id="deleteAllEmploi">Supprimer tous l'emplois du temps et les réservations associés</a>
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
                                    <th class="text-center">08H - 10H</th>
                                    <th class="text-center">10H - 12H</th>
                                    <th class="text-center">14H - 16H</th>
                                    <th class="text-center">16H - 18H</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="text-primary warning"><strong>Lundi</strong></td>
                                    <td id="1T1">
                                    </td>
                                    <td id="1T2"></td>
                                    <td id="1T3"></td>
                                    <td id="1T4"></td>
                                 </tr>
                                 <tr>
                                    <td class="text-primary warning"><strong>Mardi</strong></td>
                                    <td id="2T1"></td>
                                    <td id="2T2"></td>
                                    <td id="2T3"></td>
                                    <td id="2T4"></td>
                                 </tr>
                                 <tr>
                                    <td class="text-primary warning"><strong>Mercredi</strong></td>
                                    <td id="3T1"></td>
                                    <td id="3T2"></td>
                                    <td id="3T3"></td>
                                    <td id="3T4"></td>
                                 </tr>
                                                                  <tr>
                                    <td class="text-primary warning"><strong>Jeudi</strong></td>
                                    <td id="4T1"></td>
                                    <td id="4T2"></td>
                                    <td id="4T3"></td>
                                    <td id="4T4"></td>
                                 </tr>
                                                                  <tr>
                                    <td class="text-primary warning"><strong>Vendredi</strong></td>
                                    <td id="5T1"></td>
                                    <td id="5T2"></td>
                                    <td id="5T3"></td>
                                    <td id="5T4"></td>
                                 </tr>
                                                                                                   <tr>
                                    <td class="text-primary warning"><strong>Samedi</strong></td>
                                    <td id="6T1"></td>
                                    <td id="6T2"></td>
                                    <td id="6T3"></td>
                                    <td id="6T4"></td>
                                 </tr>
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
                                       <h4 class="modal-title"><span class="text-primary" id="forModifText">Marquez cette période !</span></h4>
                                    </div>
                                    <div class="modal-body">
                      

                      <form class="form-horizontal" role="form">

<div class="form-group">
<label for="firstname" class="col-sm-3 control-label">Locale : </label>
<div class="col-sm-8">
                                 <select id="selectForLocal" data-placeholder="Choose a Country..."  class="form-control" tabindex="2">
                                    <option value="">-----------</option>
                                 </select>
</div>
</div>

<div class="form-group">
<label for="lastname" class="col-sm-3 control-label">Enseignant :</label>
<div class="col-sm-8">
                                 <select id="selectForEns" data-placeholder="Choose a Country..." class="form-control"  tabindex="2">
                                    <option value="">-----------</option>
                                 </select>
</div></div>


<div class="form-group">
<label for="lastname" class="col-sm-3 control-label">Matière :</label>
<div class="col-sm-8">
                                 <select id="selectForM" data-placeholder="Choose a Country..."   class="form-control" tabindex="2">
                                    <option value="">-----------</option>
                                 </select>
</div></div>

<div class="form-group">
<label for="lastname" class="col-sm-3 control-label">Groupe :</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="Groupe"
placeholder="Groupe">
</div></div>


</form>


                                    </div>
                                    <div class="modal-footer" >
                                       <div class="alert alert-danger text-center disp" id="err">Vérifier le groupe !!</div>
                                       <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                       <button type="button" id="validerPeriode" class="btn btn-primary">Valider</button>
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

   </body>
</html>