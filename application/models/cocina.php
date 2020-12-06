<?php 

class cocina extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function cargarcocina()
    {

        $query = $this->db->query("select C.idclientes, P.idpedidos, C.nombre as nombre , C.idmesa as mesa, 
        substring_index(P.pedido, ',', 1) as pan,
        substring_index(substring_index(P.pedido, ',', 2), ',', -1)  as carne,
        substring_index(substring_index(substring_index(P.pedido, ',', 3), ',', -2), ',', -1) as verdura,
        substring_index(substring_index(P.pedido, ',', -2), ',', 1) as bebida,
        substring_index(P.pedido, ',', -1) as acompanamiento   
        from 
        clientes C 
        inner join pedidos P
        on C.idclientes = P.idclientes");
        return $query->result();
        
    }
}