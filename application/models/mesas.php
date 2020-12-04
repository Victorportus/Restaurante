<?php 

class mesas extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function cargamesas()
    {
        $query = $this->db->query('select id, nro_mesa from mesas');
        return $query->result();
        
    }

    function saverecords($nombre,$mesa):int
	{
	    $query="insert into clientes (nombre,idmesa) values('".$nombre."',".$mesa.")";
        $this->db->query($query);
        $id =  $this->db->insert_id();
        return $id;
	}
}

?>