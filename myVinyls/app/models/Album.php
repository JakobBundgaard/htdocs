<?php 

class Album {
    private $db;

    public function __construct() {
        // Instantiating db
        $this->db = new Database;
    }

    public function getAlbumsByUserId($user_id) {
        $sql = "SELECT *,
                        albums.id as albumId,
                        users.id as userId
                        FROM albums
                        INNER JOIN users
                        ON albums.user_id = users.id 
                        LEFT JOIN images
                        ON albums.image_id = images.id 
                        WHERE albums.user_id = $user_id
                        
                        ORDER BY artist ASC                            
                        ";
        $this->db->query($sql);
        $results = $this->db->resultSet();

        return $results;
    }

    public function addAlbum($data) {
        $this->db->query('INSERT INTO albums (artist, title, user_id, released, genre, tracks, image_id) VALUES(:artist, :title, :user_id, :released, :genre, :tracks, :image_id)');
        // Bind values
        $this->db->bind(':artist', $data['artist']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':released', $data['released']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':tracks', $data['tracks']);
        $this->db->bind(':image_id', $data['image_id']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function updateAlbum($data) {
        $this->db->query('UPDATE albums SET artist = :artist, title = :title, released = :released, genre = :genre, tracks = :tracks, image_id = :image_id WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':artist', $data['artist']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':released', $data['released']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':tracks', $data['tracks']);
        $this->db->bind(':image_id', $data['image_id']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function addImage($data) {
        $this->db->query("INSERT INTO images (name, image) VALUES(:name, :image)");
        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':image', $data['image']);

        // Execute
        if($this->db->execute()){
            return $this->db->lastInsertId();
        } else {
            return false;
        }
    }

    public function getAlbumById($id) {
        $this->db->query('SELECT * FROM albums WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
     
    public function deleteAlbum($id) {
        // $this->db->query('UPDATE albums SET artist = :artist, title = :title, released = :released, genre = :genre, tracks = :tracks, image = :image WHERE id = :id');
        $this->db->query('DELETE FROM albums WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
        

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}