<?php
require '../Helpers/Database.php';
class user{
    private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function Add_User($data){
                $this->db->query('INSERT INTO users (Name, Email, PNumber, Proficiency) 
        VALUES (:name,:email,:pnumber,:proficiency )');
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':pnumber',$data['pnumber']);
        $this->db->bind(':proficiency',$data['proficiency']);
       

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        }
        
        public function ViewUsers()
    {
    

        $this->db->query("SELECT * FROM users");
        $result = $this->db->resultSet();
        return $result;
      
    }
    
     public function updateUser($data){

        $this->db->query('UPDATE users SET Name = :name , Email = :email, PNumber = :pnumber, Proficiency = :proficiency  WHERE Id = :Id');
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':pnumber',$data['pnumber']);
        $this->db->bind(':proficiency',$data['proficiency']);
        $this->db->bind(':Id' , $data['id']);

       if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        }
    public function delete($id)
        {
           
            $this->db->query('DELETE FROM users WHERE Id = :id');
            $this->db->bind('id',$id);
           if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


        }
       
    }
   

