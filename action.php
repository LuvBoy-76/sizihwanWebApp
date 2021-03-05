<?php

use function PHPSTORM_META\type;

require_once 'conn.php';
	$userid = $_POST['userid'];
	$action = $_POST['action'];
	if($action=='search'){
		$category = $_POST['category'];
		$answer = 'no result';
		if($category == 'food'){
			$sql1 = "SELECT `uname` FROM `users` WHERE `uid`='".$userid."'";
			$username = $db_link->query($sql1)->fetch_assoc()['uname'];
			$sql2 = "SELECT `loc_id` FROM `collection` WHERE `uid`='".$userid."'";
			$collection = $db_link->query($sql2);
			$list = array();
			while($loc_id = $collection->fetch_assoc()['loc_id']){
				$sql3 = "SELECT `loc_name` FROM `location` WHERE `loc_id`='".$loc_id."'";
				$loc_name = $db_link->query($sql3)->fetch_assoc()['loc_name'];
				$list[] = $loc_name;
			}

			$data = json_encode($list);
			$answer = $data;
			$db_link->close();
		}
		else if($category == 'drink'){
			$answer = '香篆茶坊';



		}
		else if($category == 'scenery'){
			$answer = 'no result';



		}

		echo $answer; //3個答案[A, B, C]
	}
	else if($action=='pesona'){



		$answer = 'no user data existed';
		echo $answer; //輸出[等級、頭像、稱號]
	}
	else if($action=='message'){



		$answer = 'hello, welcome to this big family';
		echo $answer; //輸出"郵件內容"
	}
?>