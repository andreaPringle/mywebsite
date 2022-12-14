<?php 
class crud{
    private $db;

    function __construct($conn){
        $this->db =$conn;
    }
    public function insertStudents($FirstName, $LastName, $gender, $age, $inputEmail3, 
    $home_address, $tel1, $tel2, $avatar_pic){
        try {
            $sql = "INSERT INTO `students`(`fname`, `lname`, `gender_id`, `age`,  
           `email`, `address`, `contact_1`, `contact_2`, `avatar_pic`)
            VALUES (:FirstName, :LastName, :gender, :age, :inputEmail3, 
            :home_address, :tel1,:tel2, :avatar_pic)";
            $stmt= $this->db->prepare($sql);

            
            $stmt->bindparam(":FirstName", $FirstName);
            $stmt->bindparam(":LastName", $LastName);
            $stmt->bindparam(":gender", $gender);
            $stmt->bindparam(":age", $age);
            $stmt->bindparam(":inputEmail3", $inputEmail3);
            $stmt->bindparam(":home_address", $home_address);
            $stmt->bindparam(":tel1", $tel1);
            $stmt->bindparam(":tel2", $tel2);
            $stmt->bindparam(":avatar_pic",$avatar_pic);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
}
public function editStudents($id, $FirstName, $LastName, $gender, $age, $inputEmail3, $home_address, $tel1, $tel2){
    try {
        $sql = "UPDATE `students` SET `fname` = :FirstName,  `lname`= :LastName, `gender_id`=:gender, 
        `age`=:age, `email`=:inputEmail3, `address`=:home_address, 
        `contact_1`=:tel1, `contact_2` =:tel2 WHERE `student_id`= :id ";
        $stmt= $this->db->prepare($sql);

        $stmt->bindparam(":id", $id);
        $stmt->bindparam(":FirstName", $FirstName);
        $stmt->bindparam(":LastName", $LastName);
        $stmt->bindparam(":gender", $gender);
        $stmt->bindparam(":age", $age);
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
public function getStudents(){
    try {
        $sql = "SELECT * FROM `students` s inner join gender g on s.gender_id = g.gender_id;";
        $result= $this->db->query($sql);
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
    
}
public function getStudentDetails($id){
    try {
        $sql= "select * from students s inner join gender g on s.gender_id = g.gender_id where student_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
  
}
public function deleteStudent($id){
    try {
        $sql= "DELETE from `students` where `student_id` = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
public function getGender(){
    try {
        $sql = "SELECT * FROM `gender`;";
        $result= $this->db->query($sql);
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }

  
}
public function getGenderById($id){
    try{
        $sql = "SELECT * FROM `gender` where gender_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
    
}
}
?>