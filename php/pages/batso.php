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
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../thitructuyen/lib/assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="../thitructuyen/lib/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../thitructuyen/lib/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../thitructuyen/lib/assets/css/demo.css">
    <script src="http://malsup.github.io/jquery.blockUI.js"></script>
    <title>ĐÁNH GIÁ</title>
</head>

<body>    
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header" >
                <a href="#" class="logo" style="text-align:center;color: white; width: 90%; font-size:35px !important">
                    <img src="../thitructuyen/lib/img/logotinhdoan.png" style="margin-center:-20px;padding:0;width:80px;height:80px;color: white; ">
                    HỘI THI TÌM HIỂU VỀ LUẬT PHÒNG, CHỐNG TÁC HẠI THUỐC LÁ
                </a>
                <p id="btn_quantri">
                    <img src="../thitructuyen/lib/img/logoboyte.png" style="padding-top:15px;=;width:70px;height:70px;color: white; ">
                </p>                 
            </div>
        </div>

        <div class="main-panel" style="padding-top:95px !important"> 
                <div class="row m-0">
                    <div class="col-md-12">
                        <div class="row">   
                            <div class="col-md-3"></div>
                            <div class="col-md-6 ketqua" style="text-align:center ;font-size:30px;color: red;">
                                CÔNG BỐ KẾT QUẢ
                            </div> 
                             <div class="col-md-1"  >
                                    <div >
                                         <button type="button" id="btn_cauhoi" class="xemkq" >CÂU HỎI</button>
                                    </div>    
                            </div>
                             <div class="col-md-1"  >
                                    <div >
                                         <button type="button" id="btn_dapan" class="xemkq" >ĐÁP ÁN</button>
                                    </div>    
                            </div>
                        </div>                           
                    </div>
                    <div class="col-md-6 mt-9">                       

                        <div class="row my-2">
                            <div class="col-md-12">
                                <button type="button" id="nd_cauhoi" class="button4a" >Câu hỏi</button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <h2 style="color: #0000FF; font-weight: bold;">Câu A</h2>
                            </div>
                            <div class="col-md-10">
                                <button type="button" id="nd_cau_a" class="button1a" ></button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <h2 style="color: #0000FF;font-weight: bold;">Câu B</h2>
                            </div>
                            <div class="col-md-10">
                                <button type="button" id="nd_cau_b" class="button2a" ></button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <h2 style="color: #0000FF;font-weight: bold;">Câu C</h2>
                            </div>
                            <div class="col-md-10">
                                <button type="button" id="nd_cau_c" class="button3a" ></button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <h2 style="color: #0000FF;font-weight: bold;">Câu D</h2>
                            </div>
                            <div class="col-md-10">
                                <button type="button" id="nd_cau_d" class="button4a" ></button>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-6 mt-9">                        
                            <div id="hienthisoquay"  style=" display: grid;
                                 grid-template-columns: auto auto;padding: 4px;">
                            </div>
                        
                   </div>
                </div>   
        </div>
    </div>    
    <script type="text/javascript">                 
        $(document).ready(function (){  
            loadthongtinquaytiepnhan();  
            }); 
            $("#btn_cauhoi").click(function (evt) {
               loadnoidungcauhoi(); 
            });
            $("#btn_dapan").click(function (evt) {
              loadthongtindapan();
            });
           function addcss1() {
                   var element1 = document.getElementById("nd_cau_a");
                     element1.classList.remove("button1a");
                     element1.classList.add("button_1");
            }
            function addcss2() {
                   var element1 = document.getElementById("nd_cau_b");
                     element1.classList.remove("button2a");
                     element1.classList.add("button_1");
            }
            function addcss3() {
                   var element = document.getElementById("nd_cau_c");
                     element.classList.remove("button3a");
                     element.classList.add("button_1");
            }
            function addcss4() {
                   var element = document.getElementById("nd_cau_d");
                     element.classList.remove("button4a");
                     element.classList.add("button_1");
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
            var kq_dapan = j_data[0].d_an_dung;
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
             if(kq_dapan == 1){
                   addcss1();
             }else if(kq_dapan ==2){
                   addcss2();
             } else if (kq_dapan ==3){
                    addcss3();
             } else{
                   addcss4();
             } 
            });
        } 
          function kiemtratime() { 
            function addZero(i) {
              if (i < 10) {i = "0" + i}
              return i;
            }        
            var today = new Date();
            var time ='23:00:00'        
            var timethuc =  addZero(today.getHours()) + ":" + addZero(today.getMinutes()) + ":" + addZero(today.getSeconds());
             if(timethuc > time){
               window.location="go?page=_thongbao";
             }
            }           
        $("#hienthisoquay").on('click',"button", function(){
            var key_cauhinh = ($(this).attr("id")).split('.//.');
            var bnt_id = key_cauhinh[0];
            var user_online ="2";
               $.ajax({
                     type: 'POST',
                     url: 'go',
                      data: {
                          for: "batsothutu",
                          bnt_id: bnt_id,
                          user_online:user_online
                        }
                }).done(function(data){
                  var j_data = JSON.parse(data);
                  var kq = j_data.ketqua;
                  var kq1 = j_data.quay;
                  var kt = j_data.kiemtra;
                  if (kt == 'TRUE') {
                     loadthongtinquaytiepnhan();
                     $.messager.show({title:'Thông báo',
                                 msg:'Bạn đã chọn thành công số STT :      ' + kq + '  tại quầy Số: '+ kq1,
                                 showType:'show',
                                 timeout:3000,
                                 style:{
                                    right:'',
                                    bottom:''
                                }
                    });          
                  } else {
                        $.messager.confirm({
                        title: 'Thông báo',
                        msg: 'Bạn đã chọn số STT :   ' + kq + '  tại quầy Số: '+ kq1+' trong hôm nay.',
                        fn: function(r){
                            var bnt_id = key_cauhinh[0];
                            var user_online ="2"
                            if (r){
                                processbatsothutu_lan2(bnt_id,user_online);
                            }
                        }
                    });
                                      }
                });
         });
        function processbatsothutu_lan2(bnt_id,user_online){
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "batsothutu_1",
                    bnt_id: bnt_id,
                    user_online:user_online
                }
            }).done(function(data){
                  var j_data = JSON.parse(data);
                  var kq = j_data.ketqua;
                  var kq1 = j_data.quay;
                  if (kq >= 1) {
                     loadthongtinquaytiepnhan();
                     $.messager.show({title:'Thông báo',
                                 msg:'Bạn đã chọn thành công số STT :      ' + kq + '  tại quầy Số: '+ kq1,
                                 showType:'show',
                                 timeout:2000,
                                 style:{
                                    right:'',
                                    bottom:''
                                }
                    });
                } else {
                    alert("Lỗi !!!");
                }
            });
        }
        function loadthongtinquaytiepnhan(){
             var data_quay = $("#hienthisoquay");
              $('.hienthisoquay').remove();
            $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "load_thongtinquaytiepnhan",
                        cauhoi:1
                    }
                }).done(function(data){
                    var j_data = JSON.parse(data);
                    var data_len = j_data.length;
                    var kq_traloi = j_data[0].DAP_AN;
                    if (j_data != '') {
                         $("#hienthisoquay").empty();
                        $('input', data_quay).remove();
                        var i;
                        for(i=0;i<data_len;i++) {
                          data_quay.append('<button class = "btn_soquay" type="button" id = "' + j_data[i].ID_DOI + '"><p class="class3">' + j_data[i].TEN_DOI + '</p> <p class="class4">' + j_data[i].CAU_TRA_LOI +'</p> </button>');
                        }
                        if(kq_traloi=1){
                            // addcss();
                        }
                        else{
                            alert("trả lời sai");
                        }
                    } else {
                        $('input', data_quay).remove();
                        data_quay.append($('<input class = "btn_soquay" type="button" id = "0" />').val("CHƯA CẦU HÌNH QUẦY"));
                    }
        });}
        function loadthongtindapan(){
             var data_quay = $("#hienthisoquay");
              $('.hienthisoquay').remove();
            $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "loadthongtindapan",
                        cauhoi:1
                    }
                }).done(function(data){
                    var j_data = JSON.parse(data);
                    var data_len = j_data.length;
                    var kq_traloi = j_data[0].DAP_AN;
                    if (j_data != '') {
                         $("#hienthisoquay").empty();
                        $('input', data_quay).remove();
                        var i;
                        for(i=0;i<data_len;i++) {
                          data_quay.append('<button class = "btn_soquay" type="button" id = "' + j_data[i].ID_DOI + '"><p class="class3">' + j_data[i].TEN_DOI + '</p> <p class="class4">' + j_data[i].CAU_TRA_LOI +'</p> </button>');
                        }
                        if(kq_traloi=1){
                            // addcss();
                        }
                        else{
                            alert("trả lời sai");
                        }
                    } else {
                        $('input', data_quay).remove();
                        data_quay.append($('<input class = "btn_soquay" type="button" id = "0" />').val("CHƯA CẦU HÌNH QUẦY"));
                    }
        });}        

    </script>
    <style type="text/css"> 
       .mystyle {
          width: 100%;
          padding: 25px;
          background-color: coral;
          color: white;
          font-size: 25px;
          box-sizing: border-box;
        }       
        #container2 {
            position: relative;
            margin:0 auto;
            line-height: 1.4em;
        }       
        .header{
            background-image: url('lib/img/hinhen_mtu.jpg');
        }
        #button1{              
          font-size: 150%;
          font-weight: 700;           
          line-height: 1.0;
          width: 20%;
          font-family: "Times New Roman", Times, serif;
        }
         #button2{              
          font-size: 180%;
          font-weight: 700;           
          line-height: 1.0;
          text-align: left;
          font-family: "Times New Roman", Times, serif;
        }
        .td{
            text-transform: capitalize;
        }
        .btn_soquay{
            padding: 8px 8px 8px 8px;
            margin: 5px 5px 5px 5px;
            text-align: center;
            background-color: #eaf2ff;
            box-shadow: 0 0 5px #0066ff;
            color: #fff;
            border: none;
            position: relative;
            font-size: 20%;
            font-weight: bold;
            cursor: pointer;
            transition: 800ms ease all;
            outline: none;
            border-radius: 12px;
            cursor: pointer;            
        }
        .btn_soquay_2{
            background-color: red;;            
        }
        .ketqua{
            width: 100%;
            height: 65px;
            padding: 5px 5px 5px 5px;
            /*margin: -6px 5px 5px 5px;*/
            text-align: center;
            background-color: #6393e1;
            box-shadow: 0 0 5px #0066ff;
            color: #c90520;
            border: none;
            position: relative;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: 800ms ease all;
            outline: none;
            border-radius: 500px;
            cursor: pointer;            
        }
        .btn_soquay:hover{
            background:#00BFFF;
            color:#088A08;
            font-weight: bold;                
        }
        .class1{
            text-align: center;
            color: green;
            background-color:none;
            padding: 0px 0px 0px 0px;
            height: auto;
            text-align: center;  
            line-height: 0.5;
            font-size:500%;
            margin-top: 0px;
            font-family: "Times New Roman", Times, serif;                
          }
          .class2{
            text-align: center;
            color: #CC0099;
            background-color:none;
            padding: 0px 0px 0px 0px;
            height: auto;
            font-size:900%;
            line-height: 0.1;
            margin-top: 0;
            word-wrap: break-word;
            font-family: "Times New Roman", Times, serif;
            webkit-animation: my 3000ms infinite;
            -moz-animation: my 3000ms infinite; 
            -o-animation: my 3000ms infinite; 
            animation: my 3000ms infinite;
            }
            @-webkit-keyframes my {
            0% { color: #003399; } 
            50% { color: #0A0C05;  } 
            100% { color: #003399;  } 
             }
            @-moz-keyframes my { 
            0% { color: #003399;  } 
            50% { color: #0A0C05;  }
            100% { color: #003399;  } 
            }
            @-o-keyframes my { 
            0% { color: #003399; } 
            50% { color: #0A0C05; } 
            100% { color:#003399;  } 
             }
            @keyframes my { 
            0% { color: #003399;  } 
            50% { color: #0A0C05;  }
            100% { color: #003399;  } 
            }
           .class3{
            text-align: center;
            color: #990000;
            height: auto;
            margin: 0;   
            line-height: 1.3;             
            font-size:28px;
            font-family: "Times New Roman", Times, serif;
            padding: 10px 10px 25px;
            z-index: 800;

          }
          .class4{
            text-align: center;
            color: #1f29a5;
            height: auto;
            padding-top: -200px;                
            font-size:35px;
            line-height: 0.5;
            padding-top: 1px;
            font-family: "Times New Roman", Times, serif;
            z-index: 999;
          }
          .addclass4{
           background-color:#f4f5ef; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 2px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
          }
          .p {
            width: 100%;
            text-align: center;
          }
          .button1a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #050597;
            width: 100%;
            height: 100%;
            color: #0f0fd5;
            padding: 15px 30px 12px 5px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
            margin-left: 10px;
            font-weight: bold;
         }
         .button2a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #050597;
            width: 100%;
            height: 100%;
            color: #0f0fd5;
            padding: 15px 30px 12px 5px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
            margin-left: 10px;
            font-weight: bold;
         }
         .button3a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #050597;
            width: 100%;
            height: 100%;
            color: #0f0fd5;
            padding: 15px 30px 12px 5px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
            margin-left: 10px;
            font-weight: bold;
         }
         .button4a {
            background-color:#EDFABF; /* Green */
            border: 2px solid #050597;
            width: 100%;
            height: 100%;
            color: #0f0fd5;
            padding: 15px 30px 12px 5px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
            margin-left: 10px;
            font-weight: bold;
         }
        .button_1 {
            background-color:red; /* Green */
            border: 2px solid #050597;
            width: 100%;
            height: 100%;
            color: #0f0fd5;
            padding: 15px 30px 12px 5px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
            margin-left: 10px;
            font-weight: bold;
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
          .xemkq {
            background-color:#f4f5ef; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 2px 30px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
            margin: 10px 50px;
            font-weight: bold;
        }
    </style>      
</body> 
</html>

