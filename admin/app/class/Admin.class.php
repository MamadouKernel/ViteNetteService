<?php

/*
 * Copyright (c) 2022,
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPREJ.ARCHI OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNEJ.ARCHI FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOJ.ARCHI OF USE, DATA, OR PROFITS; OR BUSINEJ.ARCHI
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POJ.ARCHIIBILITY OF SUCH DAMAGE.
 */


class Admin {

    /**
     * __Construct
     *
     * @var $db
     */

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }


    /**
     * Login
     * @param $email
     * @param @password
     * @return boolean
     */
    public function __login_user($email, $password) {
        $user = $this->db->Show("SELECT * FROM user,poste WHERE user.idposte=poste.idposte AND pseudo=:login && password=:pass", [
            'login' => $email,
            'pass' => $password
        ]);

        if ($user) {
            $_SESSION['Admin']['id'] = $user[0]->iduser;
            $_SESSION['Admin']['np'] = $user[0]->nomprenom;
            $_SESSION['Admin']['post'] = $user[0]->poste;
            return TRUE;
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
