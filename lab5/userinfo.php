<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $users = loadUsers();
    $found = false;

    foreach ($users as $user) {
        if ($user->getUserID() == $id) {
            $found = true;

            echo '<div class="user-details" 
                    style="max-width: 600px; margin: 30px auto; padding: 40px; 
                           border: 1px solid #ccc; border-radius: 10px; 
                           background-color: #f9f9f9; 
                           box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">';

            echo '<h2 style="text-align: center; color: #333; font-size: 36px;">Thông tin người dùng</h2>';
            echo '<p style="font-size: 20px;"><strong>User ID:</strong> ' . htmlspecialchars($user->getUserID()) . '</p>';
            echo '<p style="font-size: 20px;"><strong>Full Name:</strong> ' . htmlspecialchars($user->fullName()) . '</p>';
            echo '<p style="font-size: 20px;"><strong>Username:</strong> ' . htmlspecialchars($user->getUserName()) . '</p>';
            echo '<p style="font-size: 20px;"><strong>Email:</strong> ' . htmlspecialchars($user->getPrimaryEmail()) . '</p>';
            echo '<p style="font-size: 20px;"><strong>Password:</strong> ' . str_repeat("•", strlen($user->getPasswordInput())) . '</p>';

            echo '<div style="text-align: center; margin-top: 30px;">
                    <a href="allusers.php" 
                       style="display: inline-block; padding: 10px 20px; 
                              background-color: #007bff; color: white; 
                              text-decoration: none; border-radius: 5px;">
                       ⬅ Quay lại danh sách
                    </a>
                  </div>';

            echo '</div>';
            break;
        }
    }

    if (!$found) {
        echo '<p style="text-align: center; color: red; font-size: 20px;"> Không tìm thấy user có ID = ' . htmlspecialchars($id) . '</p>';
    }
} else {
    echo '<p style="text-align: center; color: red; font-size: 20px;"> Không có ID được truyền!</p>';
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
