<?php



         $bdd = new Db_connect();
         $local=new Local($bdd->connect());

         $list_loc=$local->getLocals();
         foreach ($list_loc as $loc) {

            # code...
            if($loc['vedio_projecteur'])
            	$vd='ok';
            else
            	$vd='remove';
         
                  echo '<tr class="gradeX">

                                       <td>'.$loc['id_local'].'</td>
                                       
                                       <td>'.$loc['capacite'].'</td>

                                       <td > <i class="glyphicon glyphicon-'.$vd.'"> </i> </td>
                                       <td class="">
                                          <button type="button" id="'.$loc['id_local'].'" class="btn btn-danger btn-sm delbtn" data-toggle="modal" data-target="#modaldel"><i class="fa fa-trash"  ></i> supprimer </button>
                                          <button type="button" class="btn btn-info btn-sm upbtn" id="'.$loc['id_local'].'" data-toggle="modal" data-target="#myModal6"><i class="fa fa-pencil"></i>
                                          Modifier
                                          </button>

                                          

                                       </td>
                     </tr>';

                  }

?>