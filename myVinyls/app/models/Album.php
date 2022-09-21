<?php 

class Album {
    private $db;

    public function __construct() {
        // Instantiating db
        $this->db = new Database;
    }

    public function getAlbums() {
        $this->db->query('SELECT *,
                            albums.id as albumId,
                            users.id as userId
                            FROM albums
                            INNER JOIN users
                            ON albums.user_id = users.id 
                            WHERE albums.user_id = users.id
                            ORDER BY artist ASC                            
                            ');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addAlbum($data) {
        $this->db->query('INSERT INTO albums (artist, title, user_id, released, genre, tracks, image) VALUES(:artist, :title, :user_id, :released, :genre, :tracks, :image)');
        // Bind values
        $this->db->bind(':artist', $data['artist']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':released', $data['released']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':tracks', $data['tracks']);
        $this->db->bind(':image', $data['image']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
       
}