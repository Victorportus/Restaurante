<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class gracias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model("pedido");
    }

    public function saveorder()
    {


        if($this->input->post('save'))
        {  
            $idCliente = $this->input->post('idrecord');
            $p = $this->input->post('pan');
            $c = $this->input->post('carne');
            $v = $this->input->post('verdura');
            $b = $this->input->post('bebida');
            $a = $this->input->post('acompañamiento');
            $order_string = $p.','.$c.','.$v.','.$b.','.$a;

                        
            $idPedido = $this->pedido->saveorders($idCliente, $order_string);
            
            $data['title'] = ucfirst('gracias');
            $this->load->helper('url'); 
            $this->load->library('template');
            $this->template->load("basic_template","Gracias/gracias",$data);
        }
        
    }
}
?>