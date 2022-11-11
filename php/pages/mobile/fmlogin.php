<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Đánh giá quản lý nhà trạm</title>
    <link rel="touch-icon" sizes="76x76" href="../dgqlnhatram/lib/img/logo-vnpt.png">
    <link rel="icon" type="image/png" href="../dgqlnhatram/lib/img/logo-vnpt.png">
    <link rel="stylesheet" type="text/css" href="../dgqlnhatram/lib/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../dgqlnhatram/lib/themes/mobile.css">
    <link rel="stylesheet" type="text/css" href="../dgqlnhatram/lib/themes/icon.css">
    <script type="text/javascript" src="../dgqlnhatram/lib/jquery.min.js"></script>
    <script type="text/javascript" src="../dgqlnhatram/lib/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="../dgqlnhatram/lib/jquery.easyui.mobile.js"></script>
		<script type="text/javascript" src="../dgqlnhatram/lib/lib.js"></script>
	</head>
	<body>
    <div class="easyui-navpanel">
        <header>
            <div class="m-toolbar">
                <span class="m-title">Đăng nhập</span>
            </div>
        </header>
        <div style="margin:20px auto;width:100px;height:100px;border-radius:100px;overflow:hidden">
            <img src="../dgqlnhatram/lib/img/logo-vnpt.png" style="padding:20;width:80%;height:80%;">
        </div>
        <div style="padding:0 20px">
					<form id="fdangnhap" method="post">
            <div style="margin-bottom:10px">
                <input class="easyui-textbox" name="username" data-options="prompt:'Tài khoản',iconCls:'icon-man'" style="width:100%;height:38px">
            </div>
            <div>
                <input class="easyui-textbox" name="password" data-options="prompt:'Mật khẩu', type: 'password'" style="width:100%;height:38px">
            </div>
            <div style="text-align:center;margin-top:30px">
                <a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#fdangnhap').submit();"
									style="width:100%;height:40px"><span style="font-size:16px">Đăng nhập</span></a>
            </div>
					</form>
        </div>
    </div>

		<div id="capnhatmatkhau" class="easyui-dialog" style="width: 95%;height:200px"
				data-options="title:'Cập nhật mật khẩu',buttons:'#bb', modal:true, closed: true">
				<form id="fcapnhatmatkhau" method="post" style="width:350px; margin: auto;">
					<div style="margin-top:20px">
	            <input class="easyui-passwordbox" name="password_new" prompt="Mật khẩu mới" iconWidth="28"
								style="width:100%;height:34px;padding:10px">
	        </div>
					<div style="margin-top:20px">
	            <input class="easyui-passwordbox" name="rw_password_new" prompt="Nhập lại mật khẩu mới" iconWidth="28"
								style="width:100%;height:34px;padding:10px">
	        </div>
				</form>
		</div>
		<div id="bb">
			<a href="javascript:void(0)" onclick="$('#capnhatmatkhau').dialog('close');" class="easyui-linkbutton">Đóng</a>
			<a href="javascript:void(0)" onclick="$('#fcapnhatmatkhau').submit();" class="easyui-linkbutton">Lưu</a>
		</div>

		<script type="text/javascript">
		  $(function(){
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
		        },
		        beforeSend:  function(){
		        }
		      })
		      .done(function(ret){
						var val = JSON.parse(ret);
						if(val.trangthai == "1"){
							if(val.cap == "0"){
								window.location.href = "go?page=_thongke";
							} else {
								window.location.href = "go?page=_dsdanhgia";
							}
						} else if(val.trangthai == "0"){
	            $('#capnhatmatkhau').dialog('open');
						} else {
							$.messager.alert('Cảnh báo', 'Sai mật khẩu!','error');
						}
		      });
		    });

				$('#fcapnhatmatkhau').on('submit', function(donard){
		      donard.preventDefault();
		      var a = $(this).find('input[name="password_new"]').val().trim();
		      var b = $(this).find('input[name="rw_password_new"]').val().trim();
					if(a == b){
						$.ajax({
			        type: 'POST',
			        url: 'go',
			        data: {
			          for: "themmatkhau",
			          matkhaumoi: MD5(b)
			        },
			        beforeSend:  function(){
			        }
			      })
			      .done(function(ret){
							var val = JSON.parse(ret);
							if(val.trangthai == "1"){
								if(val.cap == "3"){
									window.location.href = "go?page=_quanliphieu";
								} else {
									window.location.href = "go?page=_dsdanhgia";
								}
							} else {
		            $.messager.alert('Cảnh báo', 'Cập nhật không thành công!','error');
							}
			      });
					} else {
						$.messager.alert('Cảnh báo', 'Mật khẩu nhập lại không đúng!','warning');
					}
		    });



		  });

		</script>
  </body>
</html>
