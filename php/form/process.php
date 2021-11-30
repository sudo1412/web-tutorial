<?php
 $ten = $_POST['ten'];
 $ngay_sinh = $_POST['ngay_sinh'];
 $gioi_tinh = $_POST['gioi_tinh'];
 $dia_chi = $_POST['dia_chi'];
 $email = $_POST['email'];
 $mat_khau = $_POST['mat_khau'];
 $so_thich = $_POST['so_thich'];

 echo "Thông tin đăng ký:<br>";
 echo "Họ và tên: $ten <br>";
 echo "Ngày tháng năm sinh: $ngay_sinh <br>";
 echo "Giới tính: $gioi_tinh <br>";
 echo "Địa chỉ: $dia_chi <br>";
 echo "Email: $email <br>";
 echo "Mật khẩu: $mat_khau <br>";
 echo "Sở thích: $so_thich <br>";
?>