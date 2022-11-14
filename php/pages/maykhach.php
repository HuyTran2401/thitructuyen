    
<!doctype html>
<html lang="en"> 
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../thitructuyen/lib/img/quyhieudoan.png"/>
    <link rel="stylesheet" type="text/css" href="../thitructuyen/lib/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../thitructuyen/lib/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../thitructuyen/lib/demo/demo.css">
    <script type="text/javascript" src="../thitructuyen/lib/jquery.min.js"></script>
    <script type="text/javascript" src="../thitructuyen/lib/jquery.easyui.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/webfont/webfont.min.js"></script>    
    <!--
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../thitructuyen/lib/assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>-->
    <link rel="stylesheet" href="../thitructuyen/lib/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../thitructuyen/lib/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../thitructuyen/lib/assets/css/demo.css">
    <title>THI TRẮC NGHIỆM</title>
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header" background-color="green">
                <a href="#" class="logo" style="text-align:right;color: white; width: 90%; font-size:35px !important">
                     <img src="../thitructuyen/lib/img/logotinhdoan.png" style="margin-center:-20px;padding:0;width:80px;height:80px;color: white; ">
                    HỘI THI TÌM HIỂU VỀ LUẬT PHÒNG, CHỐNG TÁC HẠI THUỐC LÁ
                </a>
                <p id="btn_quantri">
                    <img src="../thitructuyen/lib/img/logoboyte.png" style="padding-top:15px;=;width:70px;height:70px;color: white; ">
                </p>                 
            </div>

        </div>
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row m-0">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="row m-0">
                                            <div class="col col-md-10 mt-3">
                                                <button class="cauhoi" type="button"  id="nd_cauhoi"> </button>
                                            </div>
                                            <div class="col col-md-2 mt-3 d-flex justify-content-center" style="padding-top:5px" id="dongho">
                                                <div class="hinh_tron">
                                                    <span id="timer" style="color: white;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <div class="row">
                                                    <div class="col-md-2 text-center">
                                                        <div id="avartar"></div><br>
                                                        <div id="tennv"></div> 
                                                        <div id="ten_donvi"></div>
                                                        <input id="id_canbo" type="hidden"  />
                                                        <input id="donvi_canbo" type="hidden" />
                                                        <input id="stt_vuagoi" type="hidden" />
                                                        <input id="id_cauhoi" type="hidden" />
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="row my-2">
                                                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                                                <h2 style="color: #0000FF;">Câu A</h2>
                                                            </div>
                                                            <div class="col-md-10"  >
                                                                <button type="button" id="nd_cau_a" class="button1a" onclick="button(1)" ></button>
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                                                <h2 style="color: #0000FF;">Câu B</h2>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <button type="button" id="nd_cau_b" class="button2a" onclick="button(2)" ></button>
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                                                <h2 style="color: #0000FF;">Câu C</h2>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <button type="button" id="nd_cau_c" class="button3a" onclick="button(3)" ></button>
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                                                <h2 style="color: #0000FF;">Câu D</h2>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <button type="button" id="nd_cau_d" class="button4a" onclick="button(4)" ></button>
                                                            </div>
                                                        </div>
                                                        <div id="message" style="display: none;">
                                                        <h1>Đã hết thời gian để trả lời 
                                                            
                                                        </h1>
                                                        </div>     
                                                    </div>
                                                    <div class="col-md-8">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table id="basic-datatables" class="display table table-striped table-hover">
                                        <tbody>
                                           <tr>
                                                 <td rowspan="5" align="center" style="width: 50%;">
                                                        
                                                    </td>
                                            </tr>
                                        </tbody>
                                        </table>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="footer">
                                            <div style="display: flex;justify-content: flex-end; align-items: center;height: 40px;">
                                                <span class="pr-3">VNPT Sóc Trăng</span>
                                               <p><img src="../thitructuyen/lib/img/vnpt-logo1.png" style=" margin:16px 0 0 0; padding:0;width:40px;height: auto;color: white;"></p>
                                           </div>
                                        </div>
        <div id="modal_themykien" class="easyui-window" title="NHẬP GÓP Ý" data-options="modal:true,closed:true,iconCls:'icon-add',method:'post'" style="width:350px;height:40%;padding:5px;">
            <div class="easyui-layout" data-options="fit:true">
                <div data-options="region:'center'" style="padding:5px;">
                    <table style="width: 100%" border="0">
                        <tr>
                            <td>
                              <input class="easyui-textbox" name="noidung" id="noidung" required="true" multiline="true" 
                              style="width:300px;height: 90px;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                    <a class="easyui-linkbutton" data-options="iconCls:'icon-save'" href="javascript:void(0)" onclick="luu_noidungdanhgia()" style="width:80px" id="luudm_dichvu" name="luudm_dichvu">LƯU</a>
                    <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="close_formnhapykien()" style="width:80px">ĐÓNG</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../thitructuyen/lib/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/core/popper.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/core/bootstrap.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/atlantis.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../thitructuyen/lib/assets/js/plugin/sweetalert2/sweetalert2.min.css">
    <script type="text/javascript">
        var madonvi_load = <?php  if(isset($_SESSION["madonvi"])) { echo $_SESSION["madonvi"]; } else { echo 0; } ?>;
        var madonvi_cookie = "";
        if (madonvi_load == "0"){
            var value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var cookie = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    madonvi_cookie = ck_arr[1];
                }
            }
        } else {
            madonvi_cookie = madonvi_load;
        }
        $(document).ready(function (){
            const counter = 16;
            var time,question;
            getCookie(); 
            loadthongtindoi();           
            var loadcauhoi = setInterval(function() {
                loadnoidungcauhoi();   
            },1000);            
            function tinhthoigianthi(){
                addcss();
                clearInterval(loadcauhoi);
                stop_timer(question);
                var counter = 16;
                time = setInterval(function(){
                    counter--;
                    if (counter == -1){
                        stop_timer(time);                              
                        Swal.fire('Thông báo !','Bạn đã hết thời gian !!!' );
                        document.getElementById("nd_cau_a").disabled = true;
                        document.getElementById("nd_cau_b").disabled = true;
                        document.getElementById("nd_cau_c").disabled = true;
                        document.getElementById("nd_cau_d").disabled = true;  
                        question = setInterval(function() {
                            loadnoidungcauhoi();   
                        },1000);             
                        test();              
                        return;  
                    }
                    document.getElementById("timer").innerHTML= counter;
                }, 1000);     
            }
            function stop_timer(type){
                clearInterval(type);
            }
        function loadnoidungcauhoi(){ 
             document.getElementById("nd_cau_a").disabled = false;
             document.getElementById("nd_cau_b").disabled = false;
             document.getElementById("nd_cau_c").disabled = false;
             document.getElementById("nd_cau_d").disabled = false;  
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "loadnoidungcauhoi",
                    madonvi:<?php echo $_SESSION["madonvi"];?>
                }
            }).done(function(data){
            var j_data = JSON.parse(data);
            var kq = j_data[0].tt_cauhoi;
            var a = $('#nd_cauhoi');
            var b = $('#nd_cau_a');                    
            var c = $('#nd_cau_b');
            var d = $('#nd_cau_c');
            var e = $('#nd_cau_d');
            var f = $('#id_cauhoi');
            //$("#nd_cauhoi",a).remove();
            $("#nd_cauhoi").empty();
            $("#nd_cau_a").empty();                     
            $("#nd_cau_b").empty();
            $("#nd_cau_c").empty();                     
            $("#nd_cau_d").empty();
            $("#id_cauhoi").empty();
            $("#id_cauhoi").val(j_data[0].id_cauhoi);
            $("#nd_cauhoi").append(j_data[0].nd_cauhoi);
            $("#nd_cau_a").append(j_data[0].nd_cau_a);
            $("#nd_cau_b").append(j_data[0].nd_cau_b);
            $("#nd_cau_c").append(j_data[0].nd_cau_c);
            $("#nd_cau_d").append(j_data[0].nd_cau_d);
               if (kq == 1) {
                    document.getElementById("nd_cau_a").disabled = true;
                    document.getElementById("nd_cau_b").disabled = true;
                    document.getElementById("nd_cau_c").disabled = true;
                    document.getElementById("nd_cau_d").disabled = true;  
                } else {
                    tinhthoigianthi();
                    document.getElementById("nd_cau_a").disabled = false;
                    document.getElementById("nd_cau_b").disabled = false;
                    document.getElementById("nd_cau_c").disabled = false;
                    document.getElementById("nd_cau_d").disabled = false;  
                }
            });
        }
        function test(){            
            var id_cauhoi = $("#id_cauhoi").val();
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_tt_cauhoidaload",
                    id_cauhoi:id_cauhoi
                }
            }).done(function(data){
                
            });
        }
        $("#ykiendonggop").click(function (evt) {
             
        });
        $("#btn_quantri").click(function (evt) {
            window.location.href = "go?page=_login";
        });
        });
        function getCookie(TT_HANHCHINH) {
            const value = `${document.cookie}`;
            var sub = value.includes('TT_HANHCHINH');
            if (sub == true) {
                return true;
            } else {
                window.location="go?check=_cookie";                
            }
        }
        function luu_noidungdanhgia(ykien_type){
            const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var id_quay = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    id_quay = ck_arr[0];
                }
            }
            var id_canbo = $("#id_canbo").val();
            var donvi_canbo = $("#donvi_canbo").val();
            var stt_vuagoi = $("#stt_vuagoi").val()
            if (stt_vuagoi == ""){
                stt_vuagoi = 0;
            } else {
                stt_vuagoi = $("#stt_vuagoi").val();
            }
            var madonvi = madonvi_cookie;
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_danhgiaykien",
                    madonvi: madonvi,
                    id_quay: id_quay,
                    id_canbo: id_canbo,
                    donvi_canbo:donvi_canbo,
                    stt_vuagoi:stt_vuagoi,
                    bnt_id:5,
                    noidung:ykien_type
                }
            }).done(function(data){
                var j_data = JSON.parse(data);
                var kq = j_data.ketqua;
                if (kq == 1) {
                    Swal.fire({
                        showConfirmButton: false,
                        title: 'Cảm ơn bạn đã đánh giá!',
                        html: 'TRUNG TÂM HÀNH CHÍNH CÔNG TỈNH SÓC TRĂNG',
                        icon: 'success',
                        timer: 3000
                    });
                } else {
                    Swal.fire({
                        showConfirmButton: false,
                        title: 'Bạn đã thực hiện đánh giá rồi!',
                        html: 'TRUNG TÂM HÀNH CHÍNH CÔNG TỈNH SÓC TRĂNG',
                        icon: 'success',
                        timer: 3000
                    });
                }
            });
        }        
        function button(bnt_id){
            var id_cauhoi = $("#id_cauhoi").val();
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_dapan",
                    id_cauhoi:id_cauhoi,
                    bnt_id:bnt_id,
                    manhanvien:<?php echo $_SESSION["manhanvien"];?>
                }
            }).done(function(data){
                var j_data = JSON.parse(data);
                var kq = j_data.ketqua;
                var kq1 = j_data.v_dapan;
                var kq_chon = j_data.v_cauchon;
                if (kq == 1){
                     Swal.fire('Thông báo !','Bạn vừa chọn đáp án : '+kq1 );
                } else {
                   Swal.fire('Thông báo !','Chọn thất bại : ');
                }
                 if(kq_chon == 1){
                      addcss1();
                 }else if(kq_chon == 2){
                      addcss2();
                }else if(kq_chon == 3){
                      addcss3();
                }else{
                      addcss4();
                }
            });
        } 
        function addcss() {
                   var element1 = document.getElementById("nd_cau_a");
                   var element2 = document.getElementById("nd_cau_b");
                   var element3 = document.getElementById("nd_cau_c");
                   var element4 = document.getElementById("nd_cau_d");
                      element1.classList.remove("button_1");
                      element2.classList.remove("button_1");
                      element3.classList.remove("button_1");
                      element4.classList.remove("button_1");
                        
                      element1.classList.remove("button1a");
                      element2.classList.remove("button2a");
                      element3.classList.remove("button3a");
                      element4.classList.remove("button4a");
                        
                      element1.classList.add("button1a");
                      element2.classList.add("button2a");
                      element3.classList.add("button3a");
                      element4.classList.add("button4a");

        } 
        function addcss1() {
                   var element1 = document.getElementById("nd_cau_a");
                   var element2 = document.getElementById("nd_cau_b");
                   var element3 = document.getElementById("nd_cau_c");
                   var element4 = document.getElementById("nd_cau_d");
                      element1.classList.remove("button1a");
                      element1.classList.remove("button_1");
                      element2.classList.remove("button_1");
                      element3.classList.remove("button_1");
                      element4.classList.remove("button_1");
                      element1.classList.add("button_1");
                      element3.classList.add("button3a");
                      element2.classList.add("button2a");
                      element4.classList.add("button4a");

        } 
        function addcss2() {
                   var element1 = document.getElementById("nd_cau_a");
                   var element2 = document.getElementById("nd_cau_b");
                   var element3 = document.getElementById("nd_cau_c");
                   var element4 = document.getElementById("nd_cau_d");
                      element2.classList.remove("button2a");
                      element1.classList.remove("button_1");
                      element2.classList.remove("button_1");
                      element3.classList.remove("button_1");
                      element4.classList.remove("button_1");                      
                      element2.classList.add("button_1");
                      element3.classList.add("button3a");
                      element1.classList.add("button1a");
                      element4.classList.add("button4a");
        } 
        function addcss3() {
                   var element1 = document.getElementById("nd_cau_a");
                   var element2 = document.getElementById("nd_cau_b");
                   var element3 = document.getElementById("nd_cau_c");
                   var element4 = document.getElementById("nd_cau_d");
                      element2.classList.remove("button3a");
                      element1.classList.remove("button_1");
                      element2.classList.remove("button_1");
                      element3.classList.remove("button_1");
                      element4.classList.remove("button_1");
                      element3.classList.add("button_1");
                      element1.classList.add("button1a");
                      element2.classList.add("button2a");
                      element4.classList.add("button4a");
        } 
        function addcss4() {
                   var element1 = document.getElementById("nd_cau_a");
                   var element2 = document.getElementById("nd_cau_b");
                   var element3 = document.getElementById("nd_cau_c");
                   var element4 = document.getElementById("nd_cau_d");
                      element2.classList.remove("button4a");
                      element1.classList.remove("button_1");
                      element2.classList.remove("button_1");
                      element3.classList.remove("button_1");
                      element4.classList.remove("button_1");
                      element4.classList.add("button_1"); 
                      element1.classList.add("button1a");
                      element2.classList.add("button2a");
                      element3.classList.add("button3a");
        } 
        function load_stt_vuagoi(){
            const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var cookie = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    cookie = ck_arr[0];
                }
            }
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "Fload_stt_vuagoi",
                    madonvi: madonvi_cookie,
                    cookie: cookie
                }
            }).done(function(data){
                var j_data = JSON.parse(data);                   
                $("#stt_vuagoi").val(j_data[0].STT);
            });
        }
        function loadthongtindoi(){            
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "loadthongtindoi",
                    id_doi:<?php echo $_SESSION["id_doi"];?>
                }
            }).done(function(data){
            var j_data = JSON.parse(data);
            var a = $('#tennv');
            var b = $('#ten_donvi');                    
            var cc = $('#avartar');
            $("#tennv",a).remove();
            $("#tennv",b).remove();                     
            $("#avartar",cc).remove();
            $("#id_canbo").val(j_data[0].id_canbo);
            $("#donvi_canbo").val(j_data[0].donvi_canbo);
            $("#tennv").append(j_data[0].hoten_canbo);
            $("#ten_donvi").append(j_data[0].ten_donvi);
            cc.append('<img class="imgavatar" alt="Embedded Image" src="' + j_data[0].img_canbo + '" >');
            });
        }        
        function close_formnhapykien(){
            $('#modal_themykien').window('close');
        }
        function launchFullscreen(element) {
            if(element.requestFullscreen) {
                element.requestFullscreen();
            } 
            else if(element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
            } 
            else if(element.webkitRequestFullscreen) {
                element.webkitRequestFullscreen();
            } 
            else if(element.msRequestFullscreen) {
                element.msRequestFullscreen();
            }
        }
        function exitFullscreen() {
            if(document.exitFullscreen) {
                document.exitFullscreen();
            } 
            else if(document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } 
            else if(document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }
    </script>
    <style type="text/css">
        .call-mobile {
            position: fixed;
            top: 325px;
            height: 40px;
            right: 70px;
            line-height: 40px;
            color: #fff;
            left: 92%;
            z-index: 9999;
            text-align: center;
        }
        #container2 {
            position: relative;
            margin:0 auto;
            line-height: 1.4em;
        }
        @media only screen and (max-width: 479px){
            #container2 { width: 90%; }
        }
        .button1a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;            
        }
        /*@media (hover: none) {
            .button1a:active{
                background-color: #DCC659;
            }
        }*/
        .button2a:hover {
            background-color: #DCC659;
        }
        .button2a:focus {
            background-color: #DCC659;
        }
        .button2a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;            
        }
        /*@media (hover: none) {
            .button2a:active{
                background-color: #DCC659;
            }
        }*/
        .button2a:hover {
            background-color: #DCC659;
        }
        .button2a:focus {
            background-color: #DCC659;
        }
        .button3a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;            
        }
        /*@media (hover: none) {
            .button3a:active{
                background-color: #DCC659;
            }
        }*/
        .button3a:hover {
            background-color: #DCC659;
        }
        .button3a:focus {
            background-color: #DCC659;
        }
        .button4a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;            
        }
        /*@media (hover: none) {
            .button4a:active{
                background-color: #DCC659;
            }
        }*/
        .button4a:hover {
            background-color: #DCC659;
        }
        .button4a:focus {
            background-color: #DCC659;
        }
        .button_1 {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;            
        }
            @keyframes glowing {
            0% {
              background-color: #2ba805;
              box-shadow: 0 0 5px #2ba805;
            }
            50% {
              background-color: #49e819;
              box-shadow: 0 0 20px #49e819;
            }
            100% {
              background-color: #2ba805;
              box-shadow: 0 0 5px #2ba805;
            }
           }
          .button_1 {
            animation: glowing 1300ms infinite;
          }
         .cauhoi {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 25px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
        }
        .dapan {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 25px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
        }
        
        .td{
            text-transform: capitalize;
        }
        .imageemo{
            width: 80px;
            height: 70px;
        }
        .imgavatar {
            width: 200px;
            height: 240px;
        }
        #tennv{
            color: blue;
        }
        #ten_donvi{
            font-size: 12px;
        }
        #btn_quantri {
            opacity: 1;
            cursor: pointer;
            display: inline-block;
            line-height: 56px;
            order: 3;
            width: unset;
            margin-left: auto;
        }
        .hinh_tron {
            width: 100px;
            height: 100px;
            background-color: #007bff;
            border-radius: 50%;
            -moz-border-radius:50%;
            -webkit-border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font: bold 30px arial;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                /* width: 100%; */
                background-color: transparent;
                color: #0059aa;
                text-align: right;
                width: 100%;
                border: 0;
        }
    </style>
</body> 
</html>