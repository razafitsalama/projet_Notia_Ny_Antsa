<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infologin extends CI_Model {

public function insert(){
        $nom=$_POST['nom'];
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        $this->db->query("insert into user value(null,'$nom','$email','$mdp',0)");
    }

public function verify($email,$mdp){
    $query=$this->db->query("select * from user");
    foreach ($query->result_array() as $row) {
        if ($email==$row['email'] && $mdp==$row['mdp'] && $row['admin']==0) {
            $this->session->set_userdata('idUser',$row['idUser']);
            return true;
        }
    }
    return false;
}

public function admin($email,$mdp){
    $query=$this->db->query("select * from user");
    foreach ($query->result_array() as $row) {
        if ($email==$row['email'] && $mdp==$row['mdp'] && $row['admin']==1) {
            $this->session->set_userdata('idUser',$row['idUser']);
            return true;
        }
    }
    return false;
}
}


