<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pedido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model("mesas");
    }

    /*Controlador que carga las páginas de pedido
	 */
	public function index()
	{
        $data['title'] = ucfirst('pedidos');
        $this->load->helper('url'); 
        $this->load->library('template');
        $this->template->load("basic_template","Pedido/pedido",$data);

        //$this->template->load('basic_template','Pedido/'.'pedido', $data);
    }

    public function savedata()
    {
       
        if($this->input->post('save'))
        {
            $n=$this->input->post('nombre');
            $m=$this->input->post('mesa');

            $data['title'] = ucfirst('pedidos');
            $data['idrecord'] = $this->mesas->saverecords($n,$m);
            $this->load->helper('url'); 
            $this->load->library('template');
            $this->template->load("basic_template","Pedido/pedido",$data);
    

        }
    }
}
?>