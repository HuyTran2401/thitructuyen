<?php
require_once('php/ConnectDb.php');

class Ajbatso
	{
		public function Fchon_cau_hoi($bnt_id){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call f_chon_cau_hoi(:bnt_id);");
		    $stmt -> bindParam(':bnt_id', $bnt_id, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		public function FThem_sttbatso_1($bnt_id,$user_online){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call insert_tiepnhan_1cua_1(:bnt_id,:user_online);");
		    $stmt -> bindParam(':bnt_id', $bnt_id, PDO::PARAM_STR);
		     $stmt -> bindParam(':user_online', $user_online, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		public function Fload_dsketquaonline($user_online){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_dsketquaonline(:user_online);");
		    $stmt -> bindParam(':user_online', $user_online, PDO::PARAM_STR);
		    $stmt -> execute();
		    $stmt = $pdo->prepare('SHOW ERRORS');
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>
