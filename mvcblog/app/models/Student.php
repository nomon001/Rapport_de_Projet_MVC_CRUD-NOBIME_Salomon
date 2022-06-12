<?php
class Student{
private $db;

public function __construct(){
    $this->db= new Database ;
}

public function findAllStudents(){
    $this->db->query('SELECT * FROM students');

        $results = $this->db->resultSet();

        return $results;
}

public function addStudent($data) {
    $this->db->query('INSERT INTO students (user_id, CNE, Nom, Prenom, Adresse, Ville, Email) VALUES (:user_id, :CNE, :Nom, :Prenom, :Adresse, :Ville, :Email)');

    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':CNE', $data['CNE']);
    $this->db->bind(':Nom', $data['Nom']);
    $this->db->bind(':Prenom', $data['Prenom']);
    $this->db->bind(':Adresse', $data['Adresse']);
    $this->db->bind(':Ville', $data['Ville']);
    $this->db->bind(':Email', $data['Email']);

    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}

public function findStudentById($CNE) {
    $this->db->query('SELECT * FROM students WHERE CNE = :CNE');

    $this->db->bind(':CNE', $CNE);

    $row = $this->db->single();

    return $row;
}

public function updateStudent($data) {
    $this->db->query('UPDATE students SET CNE = :CNE, Nom = :Nom, Prenom = :Prenom, Adresse = :Adresse, Ville = :Ville, Email = :Email WHERE CNE = :CNE');

    $this->db->bind(':CNE', $data['CNE']);
    $this->db->bind(':Nom', $data['Nom']);
    $this->db->bind(':Prenom', $data['Prenom']);
    $this->db->bind(':Adresse', $data['Adresse']);
    $this->db->bind(':Ville', $data['Ville']);
    $this->db->bind(':Email', $data['Email']);

    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}

public function deleteStudent($CNE) {
    $this->db->query('DELETE FROM students WHERE CNE = :CNE');

    $this->db->bind(':CNE', $CNE);

    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}

}