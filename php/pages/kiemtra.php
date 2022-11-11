<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng nhập</title>
		<link rel="icon" type="image/png" href="../ql_layykien/lib/img/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="../ql_layykien/lib/themes/default/easyui.css">
		<link rel="stylesheet" type="text/css" href="../ql_layykien/lib/themes/icon.css">
		<link rel="stylesheet" type="text/css" href="../ql_layykien/lib/demo/demo.css">
		<script type="text/javascript" src="../ql_layykien/lib/jquery.min.js"></script>
		<script type="text/javascript" src="../ql_layykien/lib/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="../ql_layykien/lib/lib.js"></script>
		<link rel="stylesheet" type="text/css" href="lib/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="lib/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="lib/css/util.css">
		<link rel="stylesheet" type="text/css" href="lib/css/main.css">
		<script src="lib/vendor/animsition/js/animsition.min.js"></script>
		<script src="lib/vendor/bootstrap/js/popper.js"></script>
		<script src="lib/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/vendor/select2/select2.min.js"></script>
		<script src="lib/vendor/daterangepicker/moment.min.js"></script>
		<script src="lib/vendor/daterangepicker/daterangepicker.js"></script>
		<script src="lib/vendor/countdowntime/countdowntime.js"></script>
		<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
		<script src="lib/js/main.js"></script>
		<script src="lib/vendor/jquery/jquery-3.2.1.min.js"></script>

		<style type="text/css">

		</style>
	</head>
	<body>	

		<script type="text/javascript">
	  	$(function(){
		        function getCookie(TT_HANHCHINH) {
		              const value = `${document.cookie}`;
		              //var value1 = document.cookie.split('='); lấy giá trị cookie
		              //var len = value1.length;
		              //var cookievalue= value1[len-1];
		              var sub =value.slice(38,50)
		              
		              if(sub=="TT_HANHCHINH"){
		             	window.location="go?check=_home";
		              } else{
		                window.location="go?check=_dangnhap";
		              }
		        }  
	  		    getCookie();
	  		$('#fdangnhap').on('submit', function(donard){
		  		donard.preventDefault();
			    var a = $(this).find('input[name="username"]').val().trim();
			    var b = $(this).find('input[name="password"]').val().trim();
				
				$.ajax({
					type: 'POST',
					url: 'go',
					data: {
						for: "login",
						taikhoan: a,
						matkhau: MD5(b),
						mobile: 0
					}
				}).done(function(ret){
					var val = JSON.parse(ret);
					if(val.trangthai == "1"){
						window.location.href = "go?page=_quantri";
					} else if (val.trangthai == "0"){
						document.getElementById('error_nvkhoataikhoan').style.display = "block";
						document.getElementById('error_nvkhongtontai').style.display = "none";
					} else {
						document.getElementById('error_nvkhongtontai').style.display = "block";
						document.getElementById('error_nvkhoataikhoan').style.display = "none";
					}
				});
			});
		});
		</script>
  </body>
</html>
