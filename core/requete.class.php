<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of requete
 *
 * @author Kernel
 */
class vns {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
     /*     * ******
     * selection des types de piece
     * ** */

    public function _tpi() {
        return $this->db->select("SELECT * FROM piece");
    }

     /*     * ******
     * selection des reseaux
     * ** */

    public function _reseau() {
        return $this->db->select("SELECT * FROM depot");
    }
    /** 
     * selection du nombre de piece
    */
    public function _trie($nump) {
        $resp = $this->db->count("SELECT * FROM achat WHERE id_piece_no =?", [$nump]);
        if ($resp) {
            return $resp;
        }
        return FALSE;
    }
    /*     * *****************
     * insertion des donnees dans la table achat
     * * */

    public function _inserer($np, $tpi, $nump, $tele, $mail, $dnai,$date) {
        $resp = $this->db->insert("INSERT INTO achat VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [null, $np, $tpi, $nump, $tele, $mail, $dnai,$date]);
        if ($resp) {
            return true;
        }
        return FALSE;
    }
    /*     * *****************
     * insertion des donnees dans la table rechargement
     * * */

    public function _inser_rech($numc, $pn, $ktrech, $montant, $ope, $fichie, $date) {
        
        $resp = $this->db->insert("INSERT INTO rechargement VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [null, $numc, $pn, $ktrech, $montant, $ope, $fichie, $date]);
        if ($resp) {
            return true;
        }
        return FALSE;
    }
    
    /** 
     * selection du nombre de rechargement
    */
    public function _nb_rech() {
        $resp = $this->db->count("SELECT * FROM rechargement");
        if ($resp) {
            return $resp;
        }
        return FALSE;
    }
    /** 
     * selection du nombre de rechargement
    */
    public function _som_rech() {
        $resp = $this->db->select("SELECT SUM(montant) as gain FROM rechargement");
        if ($resp) {
            return $resp;
        }
        return FALSE;
    }
    /** 
     * selection du nombre de rechargement
    */
    public function _nb_ach() {
        $resp = $this->db->count("SELECT * FROM achat");
        if ($resp) {
            return $resp;
        }
        return FALSE;
    }
    /** 
     * selection du nombre de rechargement
    */
    public function _rechargement_jour() {
        return $this->db->select("SELECT * FROM rechargement,depot WHERE rechargement.id_depot_type_id = depot.id_depot_type_id ");
        
    }
     /** 
     * selection du total d'achat de carte
    */
    public function _achat_jour() {
        return $this->db->select("SELECT *  FROM achat,piece WHERE achat.idpiece = piece.idpiece");
        
    }
}