<?php
	require_once('DB_config.php');
	
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);

	}


	function updateUser($user, $id){
		$conn = getConnection();
		$sql = "update products set name='$name',buyingPrice='$buying',sellingPrice='selling' where name='$name'"; 
		$result = mysqli_query($conn, $sql);


	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into products values('', '$name', '$buying', '$selling')"; 
		$result = mysqli_query($conn, $sql);
		
	}

?>