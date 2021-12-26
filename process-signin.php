<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','db_user');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }

        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_nguoidung WHERE email='$email' AND matkhau='$pass'";
        // echo $sql;

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['isLoginOK'] = $email;
            header("location: New.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: vk.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:vk.php");
    }
?>