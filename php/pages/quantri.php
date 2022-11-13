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
    <script src="../thitructuyen/lib/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="../thitructuyen/lib/assets/js/plugin/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../thitructuyen/lib/assets/js/plugin/sweetalert2/sweetalert2.min.css">
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
    <title>QUẢN TRỊ</title>
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
                <div class="row">                       
                   <div class="col-md-12">                        
                        <div id="hienthicauhoi"  style=" display: grid;grid-template-columns: 17% 16% 16% 16% 16% 17%;
    padding: 4px 0 0 30px;">
                        </div>
                        
                   </div>
                </div>   
        </div>
    </div>    
    <script type="text/javascript">                 
        $(document).ready(function (){  
               showcaccauhoi();
         }); 
           function addcss() {
                   var element = document.getElementById("nd_cau_b");
                   element.classList.remove("button");
                   element.classList.add("button_1");
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

        function showcaccauhoi(){
             var data_quay = $("#hienthicauhoi");
              $('.hienthicauhoi').remove();
              $("#hienthicauhoi").empty();
            $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "showcaccauhoi",
                        madonvi:<?php echo $_SESSION["madonvi"];?>
                    }
                }).done(function(data){
                    var j_data = JSON.parse(data);
                    var data_len = j_data.length;
                    if (j_data != '') {
                         $("#hienthicauhoi").empty();
                        $('input', data_quay).remove();
                        var i;
                        for(i=0;i<data_len;i++) {
                          data_quay.append('<button class = "btn_soquay" type="button" id = "' + j_data[i].ID + '"><p class="class3">' + j_data[i].NOIDUNG + '</p> <p class="class4">' + j_data[i].TT_HIEN +'</p> </button>');
                        }
                    } else {
                        $('input', data_quay).remove();
                        data_quay.append($('<input class = "btn_soquay" type="button" id = "0" />').val("CHƯA CẦU HÌNH QUẦY"));
                    }
                });}
        $("#hienthicauhoi").on('click',"button", function(){                    
            var ID = ($(this).attr("id")).split('.//.');
            var bnt_id = ID[0];
               $.ajax({
                     type: 'POST',
                     url: 'go',
                      data: {
                          for: "choncauhoi",
                          bnt_id: bnt_id
                        }
                }).done(function(data){
                  var j_data = JSON.parse(data);
                  var kq = j_data.ketqua;
                  var kq1 = j_data.id;
                  showcaccauhoi(); 
                  // if (kq == 1) {
                  //     showcaccauhoi(); 
                  //     Swal.fire('Thông báo !','Bạn vừa chọn câu : '+kq1 );     
                  // } else {
                  //     Swal.fire('Thông báo !','Chọn thất bại! : ' );
                  // }
                });
         });

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
        /*.btn_soquay{
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
            height: 90%;           
        }*/
        .btn_soquay {
            background-color:#eaf2ff; /* Green */
            border: 2px solid #D9F287;
            height: 90%;
            color: #0000FF;
            padding: 8px 8px 8px 8px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 25px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
        }
        /*@media (hover: none) {
            .button:active{
                background-color: #DCC659;
            }
        }*/
        .btn_soquay:hover {
            background-color: #DCC659;
        }
        .btn_soquay:focus {
            background-color: #DCC659;
        }
        .btn_soquay_2{
            background-color: red;;            
        }
        .ketqua{
            width: 100%;
            height: 65px;
            padding: 5px 5px 5px 5px;
            margin: -6px 5px 5px 5px;
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
            padding: 0px 10px 10px;
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
          .button {
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
        /*@media (hover: none) {
            .button:active{
                background-color: #DCC659;
            }
        }*/
        .button:hover {
            background-color: #DCC659;
        }
        .button:focus {
            background-color: #DCC659;
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
            font-size: 18px;
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

