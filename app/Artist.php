<?php

namespace App;

class Artist extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function input()
    {
        $i_name = $_POST['i_name'];
        
        $sql = "INSERT INTO tb_artist VALUES (NULL, :artist_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_name", $i_name);

        
        $stmt->execute();

    }
    
}