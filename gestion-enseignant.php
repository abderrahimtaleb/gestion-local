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
   </head>
   <body>
      <div id="wrapper">
         <nav class="navbar-default navbar-static-side fixed-menu" role="navigation">
            <div class="sidebar-collapse">
               <div id="hover-menu"></div>
               <ul class="nav metismenu" id="side-menu">
                  <li>
                     <div class="logopanel" style="margin-left: 0px;">
                        <div class="profile-element">
                           <h2><a href="index.html">InQ Admin</a></h2>
                        </div>
                        <div class="logo-element">
                           InQ
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="leftpanel-profile">
                        <div class="media-left">
                           <a href="#">
                           <img src="https://placeholdit.imgix.net/~text?txtsize=22&txt=100x100&w=100&h=100" alt="" class="media-object img-circle">                                        
                           </a>
                        </div>
                        <div class="media-body profile-name" style="white-space: nowrap;">
                           <h4 class="media-heading">Rhian Santos <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
                           <span>Software Engineer</span>
                        </div>
                     </div>
                     <div class="leftpanel-userinfo collapse" id="loguserinfo" style="position: absolute; background: #3b4354!important">
                        <h5 class="sidebar-title">Address</h5>
                        <address>
                           Dumaguete Negros Is.
                           Philippines 6200
                        </address>
                        <h5 class="sidebar-title">Contact</h5>
                        <ul class="list-group">
                           <li class="list-group-item">
                              <label class="pull-left">Email</label>
                              <span class="pull-right">demo@softreliance.com</span>
                           </li>
                           <li class="list-group-item">
                              <label class="pull-left">Home</label>
                              <span class="pull-right">(032) 1234 567</span>
                           </li>
                           <li class="list-group-item">
                              <label class="pull-left">Mobile</label>
                              <span class="pull-right">+63012 3456 789</span>
                           </li>
                           <li class="list-group-item">
                              <label class="pull-left">Social</label>
                              <div class="social-icons pull-right">
                                 <a href="#"><i class="fa fa-facebook-official"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-pinterest"></i></a>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <!-- START : Left sidebar -->
                     <div class="nano left-sidebar">
                        <div class="nano-content">
                           <?php include('side_admin.php'); ?>
                        </div>
                     </div>
                     <!-- END : Left sidebar -->
                  </li>
               </ul>
            </div>
         </nav>
         <div id="page-wrapper" class="gray-bg">
            <div>
               <nav class="navbar navbar-fixed-top white-bg show-menu-full" id="nav" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                     <a class="navbar-minimalize minimalize-styl-2 btn" href="javascript:void(0)"><i class="fa fa-bars" style="font-size:27px;"></i> </a>
                     <form role="search" class="navbar-form-custom">
                        <div class="form-group">
                           <div class="kform inq">
                              <div>
                                 <label class="field append-icon">
                                 <input type="text" name="search" id="search" class="gui-input" placeholder="Type your search here...">
                                 <label for="search" class="field-icon">
                                 <i class="fa fa-search"></i>
                                 </label>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <ul class="nav navbar-top-links navbar-right">
                     <li class="dropdown hidden-xs">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-danger">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                           <li>
                              <div class="dropdown-messages-box">
                                 <a href="profile.html" class="pull-left animated animated-short fadeInUp">
                                 <img alt="image" class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=128%C3%97128&w=128&h=128">
                                 </a>
                                 <div class="animated animated-short fadeInUp">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Alden Richards</strong> started following <strong>Maine Mendoza</strong>. <br>
                                    <small class="text-muted">2 days ago at 6:58 pm - 08.06.2015</small>
                                 </div>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="dropdown-messages-box">
                                 <a href="profile.html" class="pull-left animated animated-short fadeInUp">
                                 <img alt="image" class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=128%C3%97128&w=128&h=128">
                                 </a>
                                 <div class="animated animated-short fadeInUp">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Paulo Ballesteros</strong> started following <strong>Alden Richards</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 08.06.2015</small>
                                 </div>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="dropdown-messages-box">
                                 <a href="profile.html" class="pull-left animated animated-short fadeInUp">
                                 <img alt="image" class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=128%C3%97128&w=128&h=128">
                                 </a>
                                 <div class="animated animated-short fadeInUp">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Maine Mendoza</strong> love <strong>Alden Richards</strong>. <br>
                                    <small class="text-muted">3 days ago at 2:30 am - 11.06.2015</small>
                                 </div>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="text-center link-block">
                                 <a href="mailbox.html" class="animated animated-short fadeInUp">
                                 <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                 </a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown hidden-xs">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-danger">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                           <li>
                              <a href="mailbox.html" class="animated animated-short fadeInUp">
                                 <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <a href="profile.html" class="animated animated-short fadeInUp">
                                 <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <a href="grid_options.html" class="animated animated-short fadeInUp">
                                 <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="text-center link-block">
                                 <a href="notifications.html" class="animated animated-short fadeInUp">
                                 <strong>See All Alerts</strong>
                                 <i class="fa fa-angle-right"></i>
                                 </a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="pl15"> Rhian Santos </span>
                        <span class="caret caret-tp"></span>
                        </a>
                        <ul class="dropdown-menu animated m-t-xs">
                           <li><a href="profile.html" class="animated animated-short fadeInUp"><i class="fa fa-user"></i> Profile</a></li>
                           <li><a href="contacts.html" class="animated animated-short fadeInUp"><i class="fa fa-group"></i> Contacts</a></li>
                           <li><a href="mailbox.html" class="animated animated-short fadeInUp"><i class="fa fa-inbox"></i> Mailbox</a></li>
                           <li class="divider"></li>
                           <li><a href="login.html" class="animated animated-short fadeInUp"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
            </div>
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
                           <form method="get" class="form-horizontal" >
                           <div class="kform">
                               <div class="section-divider mb40" id="spy1">
                                    <span>Informations Personnels</span>
                                 </div>
                           </div>
                           <div class="form-group">
                                 <label class="col-sm-4 control-label">Nom* :</label>
                                 <div class="col-sm-4">
                                 <input type="text" class="form-control" name="nom"></div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">Prenom* :</label>
                                 <div class="col-sm-4">
                                 <input type="text" class="form-control" name="prenom"></div>
                              </div>
                               <div class="form-group">
                                 <label class="col-sm-4 control-label">Departement* :</label>
                                 <div class="col-sm-4">
                                    <select class="form-control" name="departement">
                                       <option value="">--Départment--</option>
                                                <option value="AL">Mathématique</option>
                                                <option value="DZ">Informatique</option>
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
                                 <input type="email" class="form-control" name="email" required=""></div>
                              </div>
                              <div class="kform">
                              <div class="section-divider mv40">
                                    <span>Information D'Ahtentification</span>
                                 </div>
                               </div> 
                              <div class="form-group has-success">
                                 <label class="col-sm-4 control-label">Login* :</label>
                                 <div class="col-sm-4">
                                 <input type="text" class="form-control" name="login"></div>
                              </div>
                              <div class="form-group has-success">
                                 <label class="col-sm-4 control-label">Mot de Pass* :</label>
                                 <div class="col-sm-4">
                                 <input type="password" class="form-control" name="password"></div>
                              </div>
                              <div class="form-group has-success">
                                 <label class="col-sm-4 control-label">Resaisire le Mot de Pass* :</label>
                                 <div class="col-sm-4">
                                 <input type="password" class="form-control" name="password"></div>
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
                                    <tr class="gradeX">
                                       <td>Trident</td>
                                       
                                       <td>Win 95+</td>
                                       <td class="center">4</td>
                                       <td class="center">X</td>
                                       <td class="center">X</td>
                                       <td class="">
                                          <a href="project_detail.html" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> supprimer </a>
                                          
                                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal6"><i class="fa fa-pencil"></i>
                                          Modifier
                                          </button>
                                       </td>
                                    </tr>
                                    
                                 </tbody>
                                 
                              </table>
                           </div>

                           <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                       <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                       <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                          printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                          remaining essentially unchanged.
                                       </p>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                       <button type="button" class="btn btn-primary">Enregistrer</button>
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
