<html>
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Basic Badge - jQuery EasyUI Mobile Demo</title>
      <link rel="touch-icon" sizes="76x76" href="../dgqlnhatram/lib/img/logo-vnpt.png">
      <link rel="icon" type="image/png" href="../dgqlnhatram/lib/img/logo-vnpt.png">
      <link rel="stylesheet" type="text/css" href="../../themes/default/easyui.css">
      <link rel="stylesheet" type="text/css" href="../../themes/mobile.css">
      <link rel="stylesheet" type="text/css" href="../../themes/icon.css">
      <script type="text/javascript" src="../../jquery.min.js"></script>
      <script type="text/javascript" src="../../jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../../jquery.easyui.mobile.js"></script>
  </head>
  <body>
    <table id="dg" data-options="header:'#hh',singleSelect:true,border:false,fit:true,fitColumns:true,scrollbarSize:0, striped:true" rownumbers="true" showFooter="true">
        <thead>
            <tr>
                <th data-options="field:'productid',width:250">Product</th>
                <th data-options="field:'listprice',width:30,align:'right'">List Price</th>
                <th data-options="field:'unitcost',width:30,align:'right'">Unit Cost</th>
            </tr>
        </thead>
    </table>
    <div id="hh">
    	<div class="m-toolbar">
    		<div class="m-title">Basic DataGrid</div>
    	</div>
    </div>
  	<script>
  		var data = 	[
  			{"productid":"Dây kết nối (dây feeder, dây tín hiệu, dây nguồn…)","productname":"Koi","unitcost":10.00,"status":"P","listprice":36.50,"attr1":"Large","itemid":"1"},
  			{"productid":"K9-DL-01","productname":"Dalmation","unitcost":12.00,"status":"P","listprice":18.50,"attr1":"Spotted Adult Female","itemid":"2"},
  			{"productid":"RP-SN-01","productname":"Rattlesnake","unitcost":12.00,"status":"P","listprice":38.50,"attr1":"Venomless","itemid":"3"},
  			{"productid":"RP-SN-01","productname":"Rattlesnake","unitcost":12.00,"status":"P","listprice":26.50,"attr1":"Rattleless","itemid":"4"},
  			{"productid":"RP-LI-02","productname":"Iguana","unitcost":12.00,"status":"P","listprice":35.50,"attr1":"Green Adult","itemid":"5"},
  			{"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":158.50,"attr1":"Tailless","itemid":"6"},
  			{"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":83.50,"attr1":"With tail","itemid":"7"},
  			{"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":23.50,"attr1":"Adult Female","itemid":"8"},
  			{"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":89.50,"attr1":"Adult Male","itemid":"9"},
  			{"productid":"AV-CB-01","productname":"Amazon Parrot","unitcost":92.00,"status":"P","listprice":63.50,"attr1":"Adult Male","itemid":"10"},
  			{"productid":"FI-SW-01","productname":"Koi","unitcost":10.00,"status":"P","listprice":36.50,"attr1":"Large","itemid":"11"},
  			{"productid":"K9-DL-01","productname":"Dalmation","unitcost":12.00,"status":"P","listprice":18.50,"attr1":"Spotted Adult Female","itemid":"12"},
  			{"productid":"RP-SN-01","productname":"Rattlesnake","unitcost":12.00,"status":"P","listprice":38.50,"attr1":"Venomless","itemid":"22"},
  			{"productid":"RP-SN-01","productname":"Rattlesnake","unitcost":12.00,"status":"P","listprice":26.50,"attr1":"Rattleless","itemid":"22"},
  			{"productid":"RP-LI-02","productname":"Iguana","unitcost":12.00,"status":"P","listprice":35.50,"attr1":"Green Adult","itemid":"22"},
  			{"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":158.50,"attr1":"Tailless","itemid":"22"},
  			{"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":83.50,"attr1":"With tail","itemid":"22"},
  			{"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":23.50,"attr1":"Adult Female","itemid":"22"},
  			{"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":89.50,"attr1":"Adult Male","itemid":"22"},
  			{"productid":"AV-CB-01","productname":"Amazon Parrot","unitcost":92.00,"status":"P","listprice":63.50,"attr1":"Adult Male","itemid":"22"},
  			{"productid":"RP-LI-02","productname":"Iguana","unitcost":12.00,"status":"P","listprice":35.50,"attr1":"Green Adult","itemid":"22"},
  			{"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":158.50,"attr1":"Tailless","itemid":"22"},
  			{"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":83.50,"attr1":"With tail","itemid":"22"},
  			{"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":23.50,"attr1":"Adult Female","itemid":"22"},
  			{"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":89.50,"attr1":"Adult Male","itemid":"22"}
  		];
  		$(function(){
  			$('#dg').datagrid({
  				data: data
  			});
  		});
  	</script>
  </body>
</html>
