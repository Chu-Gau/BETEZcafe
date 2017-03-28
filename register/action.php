    <?php
    session_start();
    require_once("../app/database.php");
    if (isset($_POST["button"])) {
		//lấy thông tin từ các form bằng phương thức POST
		// $username = $_POST["user_name"];
		$password = $_POST["password"];
		$email = $_POST["email"];
        $confirm_password = $_POST["confirm_password"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone_number = $_POST["phone_number"];
        $address = $_POST["address"];
        $username = $first_name." ".$last_name;
        $accept = $_POST["accept"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $email == ""||$confirm_password == "") {
			$_SESSION['notif']='Bạn vui lòng nhập đầy đủ thông tin';                    
            header('location: ../register');

		}
        elseif($password!=$confirm_password) {
            $_SESSION['notif']='Mật khẩu không khớp';
                    header('location: ../register');
        }
        elseif($accept != 'checked'){
            $_SESSION['notif']='Bạn phải đồng ý với tất cả các điều khoản!';
            header('location: ../register');
        }
        else{
  				// Kiểm tra tài khoản đã tồn tại chưa
  				$sql="SELECT * FROM users WHERE `email` = '$email'";
				$kt=mysqli_query($conn, $sql);
 
				    if($kt->num_rows  > 0){
					$_SESSION['notif']= 'Tài khoản đã tồn tại';
                    header('location: ../register');
				}
                else{
                    $sql = "INSERT INTO `users`(`username`, `email`, `password`, `addresses`, `phonenumber`) VALUES ('$username', '$email', '$password', '$address', '$phone_number')";
                    mysqli_query($conn,$sql);
                    // die($sql);
				   	$_SESSION['notif']= 'Chúc mừng bạn đã đăng ký thành công';
                    header('location: ../login');
                }
        }
    }
    ?>