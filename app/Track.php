<?php

namespace App;

class Track extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_track";
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
        $i_trackname = $_POST['i_trackname'];
        $i_idartist = $_POST['i_idartist'];
        $i_idalbum = $_POST['i_idalbum'];
        $i_time = $_POST['i_time'];

        
        $sql = "INSERT INTO tb_track VALUES (NULL, :track_name, :artist_id,  :album_id, :time)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":track_name", $i_trackname);
        $stmt->bindParam(":artist_id", $i_idartist);
        $stmt->bindParam(":album_id", $i_idalbum);
        $stmt->bindParam(":time", $i_time);

    
        $stmt->execute();
    }
}