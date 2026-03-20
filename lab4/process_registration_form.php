<?php
include "layout.php";
define("PAGE_TITLE", "Process Registration Form");
template_header();
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <?php
                    function check_username($username) {
                        if (isset($username) && strpos($username, ' ') !== false) {
                            return false;
                        }
                        return true;
                    }

                    function check_password($password) {
                        if (strlen($password) < 6) {
                            return "Mật khẩu phải dài ít nhất 6 ký tự.";
                        }
                        if (!preg_match('/[A-Z]/', $password)) {
                            return "Mật khẩu phải có ít nhất 1 ký tự viết hoa.";
                        }
                        if (!preg_match('/[#@~^*]/', $password)) {
                            return "Mật khẩu phải có ít nhất 1 ký tự đặc biệt (#, @, ~, ^, *).";
                        }
                        return true;
                    }

                    function ascii_encrypt_password($password, $d) {
                        $encrypted = '';
                        for ($i = 0; $i < strlen($password); $i++) {
                            $encrypted .= chr(ord($password[$i]) + $d);
                        }
                        return $encrypted;
                    }

                    function standard_encrypt_password($password) {
                        return password_hash($password, PASSWORD_BCRYPT);
                    }

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $username = isset($_POST['username']) ? $_POST['username'] : '';
                        $password = isset($_POST['password']) ? $_POST['password'] : '';
                        $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

                        if (!check_username($username)) {
                            echo '<div class="alert alert-danger">Username không hợp lệ. Không được chứa khoảng trắng.</div>';
                        } else {

                            if ($password !== $confirm_password) {
                                echo '<div class="alert alert-danger">Mật khẩu và Xác nhận mật khẩu không khớp.</div>';
                            } else {
                            
                                $passwordCheck = check_password($password);
                                if ($passwordCheck !== true) {
                                    echo '<div class="alert alert-danger">' . $passwordCheck . '</div>';
                                } else {
                                    echo '<div class="alert alert-success">Chào <strong>' . htmlspecialchars($username) . '</strong>! Tài khoản của bạn đã được tạo thành công.</div>';

                                    
                                    $encryptedPassword = ascii_encrypt_password($password, 2);
                                    echo '<div class="alert alert-info">Mật khẩu của bạn đã được mã hóa bằng ASCII: <strong>' . htmlspecialchars($encryptedPassword) . '</strong></div>';

                                    
                                    $standardEncryptedPassword = standard_encrypt_password($password);
                                    echo '<div class="alert alert-info">Mật khẩu của bạn đã được mã hóa bằng phương pháp tiêu chuẩn: <strong>' . htmlspecialchars($standardEncryptedPassword) . '</strong></div>';
                                }
                            }
                        }
                    }
                    ?>
                    <div class="text-center mt-4">
                        <a href="Registration_form.php" class="btn btn-primary">Quay lại Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
template_footer();
?>
