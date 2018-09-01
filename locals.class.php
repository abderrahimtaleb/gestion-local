<?php

class Local
{

	private $bdd;


	public function __construct($bdd)
	{
		$this->bdd=$bdd;

	}

	public function ajout($id_loc,$capacite,$vp)
	{
		$sql="insert into locals(id_local,capacite,vedio_projecteur) values ('".$id_loc."',".$capacite.",".$vp.")";
		$sth = $this->bdd->exec($sql);

	}

	public function update($id , $cap, $vp)
	{
     	$sql = "update locals set capacite=".$cap.",vedio_projecteur=".$vp." where id_local='".$id."'";
		$this->bdd->exec($sql);
	}
	public function delete($id)
	{
		$sql = 'delete from locals where id_local= :id_loc';
		$sth = $this->bdd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$sth->execute(array('id_loc'=>$id));
	}

	public function getLocal($id)
	{
		$sql = "select * from locals where id_local='".$id."'";
		$resp=$this->bdd->query($sql);
		return $resp->fetch();
	}

	public function getLocals()
	{
		$sql = 'select * from locals ';
		$resp=$this->bdd->query($sql);

		return $resp->fetchAll();
	}

}

?>