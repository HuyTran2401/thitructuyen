<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Hệ thống lấy ý kiến</title>
      <link rel="touch-icon" sizes="76x76" href="../ql_layykien/lib/img/icons/favicon.ico">
      <link rel="icon" type="image/png" href="../ql_layykien/lib/img/icons/favicon.ico">
       <link rel="stylesheet" type="text/css" href="../ql_layykien/lib/themes/default/easyui.css">
       <link rel="stylesheet" type="text/css" href="../ql_layykien/lib/themes/metro/easyui.css">
       <link rel="stylesheet" type="text/css" href="../ql_layykien/lib/themes/mobile.css">
      <link rel="stylesheet" type="text/css" href="../ql_layykien/lib/themes/icon.css">
      <link rel="stylesheet" type="text/css" href="../ql_layykien/lib/demo/demo.css">
      <script type="text/javascript" src="../ql_layykien/lib/jquery.min.js"></script>
      <script type="text/javascript" src="../ql_layykien/lib/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../ql_layykien/lib/jquery.easyui.mobile.js"></script>
      <script type="text/javascript" src="../ql_layykien/lib/lib.js"></script>
      <script id="script-lang" type="text/javascript" src="../ql_layykien/lib/locale/easyui-lang-en.js"></script>
      <script type="text/javascript" src="../ql_layykien/lib/datagrid-export.js"></script>
      <script type="text/javascript" src="../ql_layykien/lib/datagrid-filter.js"></script>
      <script type="text/javascript" src="https://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
      <style type="text/css">
      #container2 {
        width: 960px;
        position: relative;
        margin:0 auto;
        line-height: 1.4em;
      }
      @media only screen and (max-width: 479px){
          #container2 { width: 90%; }
      }
    </style>
  </head>
  <body>
    <div id="container2" class="easyui-navpanel" style="width:100%;height:100%">
      <div class="easyui-layout" title="" style="height: 100%; padding:0px;background-color: #E9FAFF;">
           <div data-options="region:'north',title:'',split:true" style="height:100%;">
            <table id="dgdichvu" title="THÔNG TIN KẾT QUẢ BẮT SỐ ONLINE" style="width:100%;height:100%" data-options="iconCls: 'icon-nhanvien',singleSelect: true,toolbar: '#tb',
                  method: 'post'">
            </table>
             <div id="tb" style="height:auto">              
              <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-reload',plain:true" onclick="lammoi()">Làm mới</a>
          </div>
            </div>
        </div>
        <!--<div id="thongtin_chitiet" class="easyui-dialog" title="THÔNG TIN CHI TIẾT" data-options="closed:true,iconCls:'icon-add'" style="width:250px;height:250px;padding:10px;">
          <div><table style="width: 100%;height: 100%">
              <tr align="center">
                  <td  style="width: 60%">
                    <input class="easyui-textbox" id="ten_khachhang" name="ten_khachhang" style="width:90%"  labelWidth="50px" label="Tên Khách hàng:" readonly="true">
                  </td>
                  <td>
                    <input class="easyui-textbox" id="stt" name="stt" style="width:90%"  labelWidth="50px" label="Số thứ tự:" readonly="true">
                  </td>
            </tr>        
          <tr >
               <td colspan="3" align="center">                  
                  <a class="easyui-linkbutton" id="phuthu_huy" iconCls="icon-cancel" onclick="f_dongphieudk()">ĐÓNG</a>
               </td>
          </tr>
          </table>
        </div>
        </div>-->
        <div id="thongtin_chitiet" class="easyui-dialog" style="padding:20px 6px;width:80%;" data-options="inline:true,modal:true,closed:true,title:'Login'">
            <div style="margin-bottom:10px">
                <input class="easyui-textbox" prompt="Username" style="width:100%;height:30px">
            </div>
            <div>
                <input class="easyui-textbox" type="password" prompt="Password" style="width:100%;height:30px">
            </div>
            <div class="dialog-button">
                <a href="javascript:void(0)" class="easyui-linkbutton" style="width:100%;height:35px" onclick="$('#dlg1').dialog('close')">Sign in</a>
            </div>
        </div>
        <?php
        #include_once('../ql_layykien/php/pages/footer.php');
      ?>
    </div>
    <script type="text/javascript">  
         function lammoi(){
            $('#dgdichvu').datagrid('reload');
         } 
         $(function(){             
         var user_online ="2"      
        $('#dgdichvu').datagrid({
          rownumbers:true,
          url: 'go',
          queryParams: {
            for:'load_dsketquabatso',
              user_online:user_online
          },
          columns:[[  
                {field:'action',title:'Thao tác',width:140,align:'center',
                formatter:function(value,row,index){
                  var ph = '<a href="javascript:void(0)" class="easyui-linkbutton" onclick="chitiet()">Xem phiếu</a> ';
                  return ph;
                }
               },               
                {field:'ngay_tn',title:'Ngày bắt số',halign:'center',width:200,align:'center'},
                {field:'ma_khachhang',title:'Mã Khách Hàng',halign:'center',width:100,align:'center',editor:'textbox'},
                {field:'ten_khachhang',title:'Tên Khách Hàng',halign:'center',width:250,align:'center',editor:'textbox'}, 
                {field:'quay',title:'Quầy',halign:'center',width:90,align:'center',editor:'textbox'},     
                {field:'ten_quay',title:'Tên Quầy',halign:'center',width:400,align:'center',editor:'textbox'},
                {field:'stt',title:'Số thứ tự',halign:'center',width:90,align:'center',editor:'textbox'},             
                {field:'trang_thai',title:'Trạng Thái',halign:'center',width:200,align:'center',editor:'numberbox'}
            ]], 
              onBeforeEdit:function(index,row){
                $(this).datagrid('updateRow', {index:index,row:{editing:true}})
              },
              onAfterEdit:function(index,row){
                $(this).datagrid('updateRow', {index:index,row:{editing:false}})
              },
              onCancelEdit:function(index,row){
                $(this).datagrid('updateRow', {index:index,row:{editing:false}})
              }      
          });

        $('#dgdichvu').datagrid('enableFilter');
          
     });
         function chitiet(){
          var row = $('#dgdichvu').datagrid('getSelected');
          var index = $('#dgdichvu').datagrid('getRowIndex', row);
          var stt =row.stt;   
          var ngay_tn =row.ngay_tn;  
          $("#ten_khachhang").textbox('setValue',row.ten_khachhang);
         $("#stt").textbox('setValue',row.stt);
          $('#thongtin_chitiet').dialog('open');
         } 
          function f_dongphieudk(){
        $('#thongtin_chitiet').dialog('close');
      }
    </script>
  </body>
</html>
