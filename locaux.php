<?php
	   include('connexion.class.php');
	   include('locals.class.php');

         $bdd = new Db_connect();
         $local=new Local($bdd->connect());

	if(isset($_POST['ajout']))
	{
		if(!$local->getLocal($_POST['id']))
		{
			$local->ajout($_POST['id'],$_POST['capacite'],$_POST['vp']);
		}
		else
		{
		echo '<div class="alert alert-danger col-sm-5 col-sm-offset-3  animated bounceIn" style="margin-top:1%">Local déja existant</div>';

		}
	}
	else if(isset($_POST['update']))
	{
		$local->update($_POST['id_loc'],$_POST['capacite'],$_POST['vp']);

	}

	if(isset($_POST['op']))
	{
		if($_POST['op']=='del')
			$local->delete(htmlspecialchars($_POST['id']));
		else if($_POST['op']=='up')
		{
			$infos=$local->getLocal($_POST['id']);
			?>        
                      <div class="modal-dialog modal-md animated bounceIn">
                                 <div class="modal-content">
                             <form method="post" class="form-horizontal" action="#">

                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                                       <i class="fa fa-home modal-icon"></i>
                                       <h4 class="modal-title">Modification</h4>
                                    </div>
                                    <div class="modal-body">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Local </label>
 
                                 <div class="col-sm-9"><input type="text" class="form-control"  name="id" value="<?php echo $infos[0] ?>" minlength="2" maxlength="3" disabled ></div>
                                 <input type="hidden" value="<?php echo $infos[0] ?>" name="id_loc">
                              </div>

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Capacité </label>
                                 <div class="col-sm-9"><input type="number" class="form-control" id="idd" name="capacite" min="20" max="300" value="<?php echo $infos[1] ?>" required></div>
                              </div>

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Vidéo-projecteur </label>
                                 <div class="col-sm-9">
                                    <select name="vp" class="form-control" required>
                                       <option value="true" <?php  if($infos[2]) echo 'selected'; ?> > Oui</option>
                                       <option value="false" <?php  if(!$infos[2]) echo 'selected'; ?> >Non</option>
                                    </select>

                                 </div>
                              </div>

                                    </div>
                                    <div class="modal-footer">
                                     <button type="button" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                     <button type="submit" name="update" class="btn btn-primary btn-outline"><i class="fa fa-pencil"></i> Modifier</button>
                              </div>
                              </form>
                              </div>
                              </div>
                              </div>

<?php		
		}
	}



?>