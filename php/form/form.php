<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validate Form</title>
	<style type="text/css">
		*, *:before, *:after {
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		body {
			font-family: 'Nunito', sans-serif;
			color: #384047;
		}

		form {
			max-width: 300px;
			margin: 10px auto;
			padding: 10px 20px;
			background: #f4f7f8;
			border-radius: 8px;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"],
		input[type="date"],
		textarea {
			background: rgba(255,255,255,0.1);
			border: none;
			font-size: 16px;
			height: auto;
			margin: 0;
			outline: 0;
			padding: 10px;
			width: 100%;
			background-color: #e8eeef;
			color: #8a97a0;
			box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
/*			margin-bottom: 10px;*/
}

input[type="radio"] {
	margin: 0 4px 8px 0;
}

select {
	padding: 6px;
	height: 32px;
	border-radius: 2px;
}

button {
	padding: 9px 29px 8px 29px;
	color: #FFF;
	background-color: #4bc970;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	border-radius: 5px;
	width: 100%;
	border: 1px solid #3ac162;
	box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
	margin-bottom: 10px;
}

span {
	color: red;
	font-size: 12px;
	padding-right: 2px;
}

label {
	margin-top: 10px;
	display: block;
	margin-bottom: 8px;
}

label.light {
	font-weight: 300;
	display: inline;
}

@media screen and (min-width: 480px) {

	form {
		max-width: 480px;
	}

}

</style>
</head>
<body>
	<form method="post" action="process.php">
		<label for="ten">Tên</label>
		<input type="text" name="ten" placeholder="VD: Dương Hải Đông">
		<br>
		<label for="ten">Ngày sinh</label>
		<input type="date" name="ngay_sinh">
		<br>
		<label>Giới tính</label>
		<input type="radio" name="gioi_tinh" value="Nam">Nam
		<input type="radio" name="gioi_tinh" value="Nữ">Nữ
		<br>
		<label for="dia_chi">Địa chỉ</label>
		<input type="text" name="dia_chi" placeholder="VD: Quận 1, TPHCM">
		<br>
		<label for="email">Email</label>
		<input type="email" name="email" placeholder="VD: haidong@gmail.com">
		<br>
		<label for="mat_khau">Mật khẩu</label>
		<input type="password" name="mat_khau">
		<br>
		<label for="so_thich">Sở thích</label>
		<textarea id="so_thich" name="so_thich"></textarea>
		<br>
		<button onclick="return kiemtra()">Đăng ký</button>
	</form>
</body>
</html>
