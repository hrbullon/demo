<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$this->load->library('form_validation');
		$this->load->model('Encuesta_model','encuesta');

		$param['success'] = false;

		if( $this->input->method() == 'post' )
		{
			//Defino las reglas de validacion del formulario
			$this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[45]');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required|max_length[45]');
			$this->form_validation->set_rules('lugares_conocidos', 'Lugares conocidos', 'required');
			$this->form_validation->set_rules('lugares_conocer', 'Lugares por conocer', 'required');
			$this->form_validation->set_rules('transporte', 'En que prefieres viajar?', 'required');

			if ($this->form_validation->run() == TRUE) {
				//Recibo los datos del formulario
				$data['nombre'] = $this->security->xss_clean($this->input->post('nombre'));
				$data['apellido'] = $this->security->xss_clean($this->input->post('apellido'));
				$data['lugares_conocidos'] = $this->security->xss_clean($this->input->post('lugares_conocidos'));
				$data['lugares_conocer'] = $this->security->xss_clean($this->input->post('lugares_conocer'));
				$data['transporte'] = $this->security->xss_clean($this->input->post('transporte'));

				$codigo = null;

				if($this->encuesta->guardar($data,$codigo))
                {
					redirect('home/encuesta/completada');
				}
			}
		
		}
		
		$this->load->view('home', $param);
	}

	public function encuesta_completada()
	{
		$this->load->view('success');
	}
}

/* End of file Home.php */
