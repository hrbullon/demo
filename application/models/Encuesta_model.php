<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Encuesta_model extends CI_Model {

	private $tabla = 'demo_encuesta';

	/**
     *
     * Guarda el objeto  en la tabla demo_encuesta
     * 
     * @param data array('nombre','apellido','lugares_conocidos','lugares_conocer','transporte')
     * @param id int id de la encuesta
     * @return Boolean 
     **/
    public function guardar($data,$id = null)
    {
        //Start transaction
        $this->db->trans_begin();
        if(!$id)
        {
            $id = ($this->db->insert($this->tabla,$data))? $this->db->insert_id() : null;
        }else{

            $this->db->where(array('id'=>$id));
            $this->db->update($this->table,$data);
        }

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return false;
        }else{
            $this->db->trans_commit();
            return true;
        }

    }

}

/* End of file Encuesta_model.php */
