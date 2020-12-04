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
            $order_string = 'pan:'.$p.',carne:'.$c.',verdura:'.$v.',bebida:'.$b.',acompañamiento:'.$a;

                        
            $idPedido = $this->pedido->saveorders($idCliente, $order_string);
            /*$datoPedido = $this->pedido->cargarpedidos($idPedido);
            
            $productos = explode(",", $datoPedido);

            //pan
            $pan = explode(":",$productos[0]);
            //$pan[0] $pan[1]
            $nombrePan = $pan[1];

            //carne
            $carne = explode(":",$productos[1]);
            $nombreCarne = $carne[1];

            //verdura 
            $verdura = explode(":",$productos[2]);
            $nombreVerdura = $verdura[1];

            //bebida
            $bebida = explode(":",$productos[3]);
            $nombreBebida = $bebida[1];

            //acompañamiento
            $acompanamiento = explode(":",$productos[4]);
            $nombreAcompanamiento = $acompanamiento[1];
            


            
            /*$data['nombrePan'] = $nombrePan;
            $data['nombreCarne'] = $nombreCarne;
            $data['nombreVerdura'] = $nombreVerdura;
            $data['nombreBebida'] = $nombreBebida;
            $data['nombreacompanamiento'] = $nombreAcompanamiento;*/
            $data['title'] = ucfirst('gracias');
            $this->load->helper('url'); 
            $this->load->library('template');
            $this->template->load("basic_template","Gracias/gracias",$data);
        }
        
    }
}
?>