<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hamburgueseria extends CI_Controller {

	/*Controlador que carga las páginas de la hamburgueseria
	 */
	public function index()
	{
        echo "Hamburgueseria";
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
            

        }
    }   
    

}
?>