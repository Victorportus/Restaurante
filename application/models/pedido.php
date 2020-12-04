<?php 

class pedido extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function cargaingredeintes()
    {
        $query = $this->db->query('select nombre, tipo from ingredeintes');
        return $query->result();
        
    }

    function saveorders($idCliente, $order_string):int
	{
        $query="insert into pedidos (idclientes, pedido) values(".$idCliente.", '".$order_string."')";
        $this->db->query($query);
        $id =  $this->db->insert_id();
        return $id;
    }
    
    function cargarpedidos($idPedido)
    {
        $query = $this->db->query('select pedido from pedidos where idclientes =' .$idPedido);
        return $query->result();
        
    }
    
}

?>