<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infoobjet extends CI_Model {
    public function ajouter($idUser)
    {
        $nom=$_POST['nomObjet'];
        $categorie=$_POST['categorie'];
        $prix=$_POST['prix'];
        $description=$_POST['description'];
        $this->db->query("insert into objet value(null,$idUser,'$categorie',$prix,'$nom','$description')");
    }
    public function modifier()
    {
        $idObjet=$_POST['idObjet'];
        $nom=$_POST['nomObjet'];
        $categorie=$_POST['categorie'];
        $prix=$_POST['prix'];
        $description=$_POST['description'];
        $req = "update objet set idObjet=$idObjet,categorie=$categorie,prix=$prix,description=$description,nomObjet=$nom where idObjet=$idObjet";
        $this->db->query($req);
    }
    public function delete($idObjet)
    {
        $req = "delete from objet where idObjet=$idObjet";
        $this->db->query($req);
    }

    public function listeproprietaire(){
        $req = "select * from objet";
        $this->db->query($req);
    }
		
}