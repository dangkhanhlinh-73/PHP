<?php
class User {
  
    private $userID;
    private $userName;
    private $firstName;
    private $lastName;
    private $passwordInput;
    private $passwordCheck;
    private $primaryEmail;


    public function __construct($userID, $userName, $firstName, $lastName, $passwordInput, $passwordCheck, $primaryEmail) {
        $this->userID = $userID;
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->passwordInput = $passwordInput;
        $this->passwordCheck = $passwordCheck;
        $this->primaryEmail = $primaryEmail;
    }


    public function getUserID() {
        return $this->userID;
    }
    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function getUserName() {
        return $this->userName;
    }
    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getFirstName() {
        return $this->firstName;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getPasswordInput() {
        return $this->passwordInput;
    }
    public function setPasswordInput($passwordInput) {
        $this->passwordInput = $passwordInput;
    }

    public function getPasswordCheck() {
        return $this->passwordCheck;
    }
    public function setPasswordCheck($passwordCheck) {
        $this->passwordCheck = $passwordCheck;
    }

    public function getPrimaryEmail() {
        return $this->primaryEmail;
    }
    public function setPrimaryEmail($primaryEmail) {
        $this->primaryEmail = $primaryEmail;
    }

    public function fullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function isPasswordMatch() {
        return $this->passwordInput === $this->passwordCheck;
    }
}

    $user = new User(1, "Khanhlinh21", "Khanh", "Linh", "Khanhlinh2004", "Khanhlinh2004", "khanhlinhm10@gmail.com");

    echo "Họ tên đầy đủ: " . $user->fullName() . "<br>";

    if ($user->isPasswordMatch()) {
        echo " Mật khẩu khớp nhau!";
    } else {
        echo " Mật khẩu không khớp!";
    }
?>
