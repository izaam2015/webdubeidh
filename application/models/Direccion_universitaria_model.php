<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Direccion_universitaria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get direccion_universitaria by direccionuniv_id
     */
    function get_direccion_universitaria($direccionuniv_id)
    {
        return $this->db->get_where('direccion_universitaria',array('direccionuniv_id'=>$direccionuniv_id))->row_array();
    }
        
    /*
     * Get all direccion_universitaria
     */
    function get_all_direccion_universitaria()
    {
        $this->db->order_by('direccionuniv_id', 'desc');
        return $this->db->get('direccion_universitaria')->result_array();
    }
        
    /*
     * function to add new direccion_universitaria
     */
    function add_direccion_universitaria($params)
    {
        $this->db->insert('direccion_universitaria',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update direccion_universitaria
     */
    function update_direccion_universitaria($direccionuniv_id,$params)
    {
        $this->db->where('direccionuniv_id',$direccionuniv_id);
        return $this->db->update('direccion_universitaria',$params);
    }
    
    /*
     * function to delete direccion_universitaria
     */
    function delete_direccion_universitaria($direccionuniv_id)
    {
        return $this->db->delete('direccion_universitaria',array('direccionuniv_id'=>$direccionuniv_id));
    }
}