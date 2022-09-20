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
}