<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

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
    public function deletepedido(){
        if($this->input->post('delete'))
        {
            $idpedido = $this->input->post('idpedido');
            //echo $idpedido;
            //die();
            $this->mesas->deletepedido($idpedido);

            $this->view('cocina');

            /*$this->load->helper('url'); 
            $this->load->library('template');
            $this->template->load("basic_template","Hamburgueseria/cocina");*/

        }
    }


    public function view($pagina = 'inicio')
    {
        /*echo "Ensayo";*/

        if(!file_exists(APPPATH.'views/Hamburgueseria/'.$pagina.'.php')){
            //Mensaje de error
            show_404();
        }
        else
        {
            $this->load->model('mesas');            
            $datosMesas = $this->mesas->cargamesas();
            $this->load->model('cocina');
            $datosCocina = $this->cocina->cargarcocina();

            $data['title'] = ucfirst($pagina);
            $data['datosmesas'] = $datosMesas;
            $data['datoscocina'] = $datosCocina;

            $this->load->helper('url');
            $this->load->library('template');
            $this->template->load('basic_template','Hamburgueseria/'.$pagina, $data);               
            

            /*$this->load->view('Hamburgueseria/'.$pagina, $data);*/
        }
    } 

}
?>