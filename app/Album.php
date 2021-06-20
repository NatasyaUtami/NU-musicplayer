<?php

namespace App;

class Album extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_album";
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
        $i_idalbum = $_POST['i_ialbum'];
        $i_inamaalbum = $_POST['i_inamaalbum'];

        
        $sql = "INSERT INTO tb_album VALUES (NULL, :album_id, :album_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":album_id", $i_idalbum);
        $stmt->bindParam(":album_name", $i_inamaalbum);

    
        $stmt->execute();
    }
}