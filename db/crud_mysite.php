<?php 
class crud{
    private $db;

    function __construct($conn){
        $this->db =$conn;
    }
    public function insertStudents($FirstName, $LastName, $gender, $age, $pass1, $pass2, $inputEmail3, $home_address, $tel1, $tel2){
        try {
            $sql = "INSERT INTO `students`(`fname`, `lname`, `gender_id`, `age`, `password`, `confirm__password`, `email`, `address`, `contact_1`, `contact_2`)
            VALUES (:FirstName, :LastName, :gender, :age, :pass1, :pass2, :inputEmail3, :home_address, :tel1,:tel2)";
            $stmt= $this->db->prepare($sql);

            
            $stmt->bindparam(":FirstName", $FirstName);
            $stmt->bindparam(":LastName", $LastName);
            $stmt->bindparam(":gender", $gender);
            $stmt->bindparam(":age", $age);
            $stmt->bindparam(":pass1", $pass1);
            $stmt->bindparam(":pass2", $pass2);
            $stmt->bindparam(":inputEmail3", $inputEmail3);
            $stmt->bindparam(":home_address", $home_address);
            $stmt->bindparam(":tel1", $tel1);
            $stmt->bindparam(":tel2", $tel2);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
}
}
?>