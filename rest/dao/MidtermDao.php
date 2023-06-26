<?php
require_once "BaseDao.php";

class MidtermDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used add new investor to investor table and cap-table
    */
    public function investor($first_name, $last_name, $email, $company){
        
        $sql = "INSERT INTO investors (first_name, last_name, email, company) VALUES (:first_name, :last_name, :email, :company)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'company' => $company]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

    }

    /** TODO
    * Implement DAO method to validate email format and check if email exists
    */
    public function investor_email($email){

        $sql = "SELECT * FROM investors WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

    }

    /** TODO
    * Implement DAO method to return list of investors according to instruction in MidtermRoutes.php
    */
    public function investors($share_class_id){
        
    }

}
?>
