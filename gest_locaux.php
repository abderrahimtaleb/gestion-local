<?php
 session_start();

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
      <script src="js/jquery-2.1.1.js"></script>

                     <script> 
                           $(function(){
                                 $('.upbtn').click(function(){
                                    var id = $(this).attr('id');
                                    $.post('locaux.php',{op:"up",id:id},function(data){
                                          $("#myModal6").empty().append(data);
                                       }); 
                                 });
                                 $('.delbtn').click(function(){
                                    var id = $(this).attr('id');
                                    $('#spanid').empty().append(id);
                                    $('#confirmdel').click(function(){
                                        $.post('locaux.php',{op:"del",id:id},function(data){
                                          $(location).attr("href","gest_locaux.php");
                                       });     
                            });
                                 });


                           })
                   </script>



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
                           <h2 class="text-success"><i class="fa fa-home fa-2x "></i> Gestion Des Locaux</h2>

                        </div>
               <?php
                  include('locaux.php');
             ?>
                     </div>
                  </div>
               </div>
               <div class="row">
               <div class="col-md-12">
                                            
                     <div class="tab-block">
                        <ul class="nav nav-tabs">
                           <li class="active">
                              <a href="#tab1" data-toggle="tab"><i class="fa fa-refresh text-success"></i> Modifer /Supprimer un local</a>
                           </li>
                           
                        </ul>

                        <div class="tab-content p30" style="height: 730px;">

                           <div id="tab1" class="tab-pane active">
                           <div class="row">
                           <div class="col-md-12">
                              <div class="table-responsive">
                                <button data-toggle="modal" data-target="#myModal5" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Ajouter Un Local</button>
                                
                              <table class="table table-striped table-bordered table-hover dataTables-example" style="text-align: center">

                                 <thead>
                                    <tr>
                                     
                                       <th>Local </th>
                                       <th>Capacité</th>
                                       <th>Vidéo-projecteur</th>
                                       <th width="280">OPERATION</th>
                                    </tr>
                                 </thead>
                                 <tbody div="list_locaux">

                                  <?php include('list_locaux.php') ;?>

                                    
                                 </tbody>
                                 
                              </table>
                           </div>

                           <div class="modal inmodal animated bounceIn" style="margin-top: 13%" id="modaldel" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                 <div class="modal-content">
                                    <div class="modal-body">
                                          <center class="text-warning"> <i class="fa fa-warning fa-3x"></i> </center>
                                          <center> <h2 class="text-warning "> Etes-vous sur de vouloir supprimer Le local  <span id="spanid"></span> </h2>  </center>    
                                    </div>
                                    <div class="modal-footer">
                                     <button type="button" class="btn btn-warning" data-dismiss="modal">Non</button>
                                     <button type="button" id="confirmdel" class="btn btn-succes btn-outline"><i class="fa fa-ok"></i> Oui</button>

                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-md">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                                       <i class="fa fa-home modal-icon"></i>
                                       <h4 class="modal-title">Ajouter Un Local</h4>
                                    </div>
                                    <div class="modal-body">
                                       <form method="post" class="form-horizontal" action="#">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Local </label>
                                 <div class="col-sm-9"><input type="text" class="form-control" name="id" minlength="2" maxlength="3" required></div>
                              </div>

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Capacité </label>
                                 <div class="col-sm-9"><input type="number" class="form-control" name="capacite" min="20" max="300" required></div>
                              </div>

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Vidéo-projecteur </label>
                                 <div class="col-sm-9">
                                    <select name="vp" class="form-control" required>
                                       <option value="true"> Oui</option>
                                       <option value="false" >Non</option>
                                    </select>

                                 </div>
                              </div>

                                    </div>
                                    <div class="modal-footer">
                                     <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                     <button type="submit" name="ajout" class="btn btn-primary btn-outline"><i class="fa fa-plus"></i> Ajouter</button>
                                </form>

                                    </div>
                                 </div>
                              </div>
                           </div>
 
                                 
                         <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                         
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
