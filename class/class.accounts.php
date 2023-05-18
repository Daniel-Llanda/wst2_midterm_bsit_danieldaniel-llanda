<?php
class accounts{
    public function register(){
        require '../dbcon.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM accounts WHERE email = :email';

        $stmt = $pdo->prepare($query);
        $stmt->bindParam('email',$email);
        $stmt->execute();

        $result = $stmt->fetchColumn();

        if ($result > 0) {
            echo 'error';
        } else {
            $query = 'INSERT INTO accounts(name,email,password) VALUE(:name,:email,:password)';

            $stmt = $pdo->prepare($query);
            $stmt->bindParam('name',$name);
            $stmt->bindParam('email',$email);
            $stmt->bindParam('password',$password);
            $stmt->execute();
        }
        
    }
    public function login(){
        session_start();
        require '../dbcon.php';
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM accounts WHERE email = :email AND password = :password';

        $stmt = $pdo->prepare($query);
        $stmt->bindParam('email',$email);
        $stmt->bindParam('password',$password);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result == 0) {
            echo 'error';
        } else {
            echo 'success';
            $_SESSION['auth'] = $result;
        }
        
    }
}
?>