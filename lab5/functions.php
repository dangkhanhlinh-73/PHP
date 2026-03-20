<?php
include 'User.php';


function loadUsers() {
    $users = [];
    $filePath = "users.csv";

    if (!file_exists($filePath)) {
        die("Không tìm thấy file users.csv!");
    }

    $file = fopen($filePath, "r");

    
    while (($data = fgetcsv($file, 0, ",", '"', "\\")) !== false) {
        
        if (count($data) == 7 && $data[0] !== 'userID') {
            $users[] = new User(
                $data[0], $data[1], $data[2],
                $data[3], $data[4], $data[5], $data[6]
            );
        }
    }

    fclose($file);
    return $users;
}


function displayUsers() {
    $users = loadUsers();

    echo '<table border="1" cellpadding="8" cellspacing="0" 
            style="border-collapse: collapse; width: 60%; margin: 30px auto; text-align: left;">';
    echo '<tr style="background-color: #333; color: white;">';
    echo '<th>User Name</th>';
    echo '<th>Full Name</th>';
    echo '</tr>';

    foreach ($users as $user) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($user->getUserName()) . '</td>';
        echo '<td>' . htmlspecialchars($user->fullName()) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}


function displayUsersWithLink() {
    $users = loadUsers();

    echo '<table border="1" cellpadding="8" cellspacing="0" 
            style="border-collapse: collapse; width: 70%; margin: 30px auto; text-align: left;">';
    echo '<tr style="background-color: #333; color: white;">';
    echo '<th>User Name</th>';
    echo '<th>Full Name</th>';
    echo '</tr>';

    foreach ($users as $user) {
        echo '<tr>';
        echo '<td><a href="userinfo.php?id=' . urlencode($user->getUserID()) . 
             '" style="text-decoration: none; color: #007bff;">' . 
             htmlspecialchars($user->getUserName()) . '</a></td>';
        echo '<td>' . htmlspecialchars($user->fullName()) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>
