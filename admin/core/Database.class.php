<?php

/*
 * Copyright (c) 2020, JArchi
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
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace Core;

use PDO;

class Database {

    private $host = 'localhost';
    private $dbase = 'vns';
    private $user = 'root';
    private $password = '';
    private $db;

    /**
     * __construct
     * @param type $host
     * @param type $user
     * @param type $password
     * @param type $dbase
     */
    public function __construct($host = null, $user = null, $password = null, $dbase = null) {
        if ($host != 0) {
            $this->host = $host;
            $this->dbase = $dbase;
            $this->user = $user;
            $this->password = $password;
        }

        try {
            $this->db = new \PDO("mysql:host=$this->host;dbname=$this->dbase", $this->user, $this->password);
            $this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print 'ERREUR DE CONNEXION AU SYSTEME => ' . $e->getMessage();
            exit();
        }
    }

    /**
     * Count function
     * @param type $sql
     * @param type $data
     * @return type
     */
    public function Count($sql, $data = array()) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->rowCount();
    }

    /**
     * Show function
     * @param type $sql
     * @param type $data
     * @return type
     */
    public function Show($sql, $data = array()) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        $req->rowCount();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Execute function
     * @param type $sql
     * @param type $data
     * @return type
     */
    public function Exec($sql, $data = array()) {
        $req = $this->db->prepare($sql);
        return $req->execute($data);
    }

    /**
     * __destruct function
     * @return type
     *
     */
    public function __destruct() {
        return $this->db = NULL;
    }


    /**
     * Fonction d'execution des requetes de selection
     */
    public function select($sql, $data = array()) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll();
    }
}
