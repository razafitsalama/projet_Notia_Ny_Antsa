<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outil extends CI_Model {
    
    public function Rechercher($mot,$cat){
        $sql = ' SELECT * from objet where (nomObjet like "%s'.$mot.'%s" or description like "%s'.$mot.'%s") and idCategorie= '.$cat.'';
        $sql = sprintf($sql,"%","%","%","%");
        $query=$this->db->query($sql);
        $tab=$query->result_array();
        return $tab;
        
    }
}