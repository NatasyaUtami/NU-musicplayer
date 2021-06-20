<?php

namespace App;

class Played extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_played";
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
        $i_idalbum = $_POST['i_idalbum'];
        $i_idtrack = $_POST['i_idtrack'];
        $i_playded = $_POST['i_played'];
    
        
        $sql = "INSERT INTO tb_played VALUES (NULL, :album_id, :track_id, :played)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":album_id", $i_idalbum);
        $stmt->bindParam(":track_id", $i_idtrack);
        $stmt->bindParam(":played", $i_played);
    
    
        $stmt->execute();
    }
}