<?php
class User {	
   
	private $userTable = 'utilisateur';	
	private $followTable = 'follow';	


	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	
	
	public function loggedIn (){
		if(!empty($_SESSION["id_utilisateur"])) {
			return 1;
		} else {
			return 0;
		}
	}
	
	public function getUser(){	
		if(!empty($_SESSION["id_utilisateur"])) {
			$sqlQuery = "
				SELECT *
				FROM ".$this->userTable." 
				WHERE id_utilisateur = '".$_SESSION["id_utilisateur"]."'";	
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();			
			$result = $stmt->get_result();		
			$userDetails = array();		
			while ($user = $result->fetch_assoc()) { 				
				$userDetails['id_utilisateur'] = $user['id_utilisateur'];				
				$userDetails['nom'] = $user['nom'];	
				$userDetails['nom'] = $user['nom'];							
				$userDetails['email'] = $user['email'];
				$userDetails['photo'] = $user['photo'];
				$userDetails['bio'] = $user['bio'];
				
			}	
			return $userDetails;	
		}
	}
	
	
	public function getUnfollowedUsers(){	
		if(!empty($_SESSION["id_utilisateur"])) {
			$sqlQuery = "
				SELECT user.id_utilisateur, user.nom, user.photo
				FROM ".$this->userTable." AS user
				WHERE user.id_utilisateur != '".$_SESSION["id_utilisateur"]."' AND user.id_utilisateur NOT IN (SELECT follow.followed_user_id FROM ".$this->followTable." AS follow WHERE follow.follower_id = '".$_SESSION["id_utilisateur"]."')";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();			
			$result = $stmt->get_result();		
			return $result;	
		}
	}
	
	public function getFollowedUsers(){	
		if(!empty($_SESSION["id_utilisateur"])) {
			$sqlQuery = "
				SELECT user.id_utilisateur, user.nom, user.photo
				FROM ".$this->userTable." AS user
				WHERE user.id_utilisateur != '".$_SESSION["id_utilisateur"]."' AND user.id_utilisateur IN (SELECT follow.followed_user_id FROM ".$this->followTable." AS follow WHERE follow.follower_id = '".$_SESSION["id_utilisateur"]."')";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();			
			$result = $stmt->get_result();		
			return $result;	
		}
	}
	
	public function getFollower(){	
		if(!empty($_SESSION["id_utilisateur"])) {
			$sqlQuery = "
				SELECT user.id_utilisateur, user.nom, user.photo
				FROM ".$this->userTable." AS user
				LEFT JOIN ".$this->followTable." follow ON user.id_utilisateur = follower_id 
				WHERE follow.followed_user_id = '".$_SESSION["id_utilisateur"]."' ";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();			
			$result = $stmt->get_result();		
			return $result;	
		}
	}
	
	public function getFollwing(){
		if(!empty($_SESSION["id_utilisateur"])) {
			$sqlQuery = "
				SELECT *
				FROM ".$this->followTable." 
				WHERE follower_id = '".$_SESSION["id_utilisateur"]."'";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();			
			$result = $stmt->get_result();	
			$allRecords = $result->num_rows;			
			return $allRecords;	
		}
	}
	public function getFollowers(){
		if(!empty($_SESSION["id_utilisateur"])) {
			$sqlQuery = "
				SELECT *
				FROM ".$this->followTable." 
				WHERE followed_user_id = '".$_SESSION["id_utilisateur"]."'";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->execute();			
			$result = $stmt->get_result();	
			$allRecords = $result->num_rows;			
			return $allRecords;	
		}
	}
	
	public function followUser() {
		if($_SESSION["id_utilisateur"] && $this->followUserId) {			
			$sqlQuery = "INSERT INTO ".$this->followTable."(`follower_id`, `followed_user_id`)
				VALUES(?, ?)";					
			$stmt = $this->conn->prepare($sqlQuery);						
			$stmt->bind_param("ii", $_SESSION["id_utilisateur"], $this->followUserId);	
			if($stmt->execute()){				
				$output = array(			
					"success"	=> 	1
				);
				echo json_encode($output);
			}
		}		
	}
	
	public function unfollowUser() {
		if($_SESSION["id_utilisateur"] && $this->followUserId) {			
			$sqlQuery = "DELETE FROM ".$this->followTable." 
			WHERE follower_id = ? AND followed_user_id = ?";					
			$stmt = $this->conn->prepare($sqlQuery);						
			$stmt->bind_param("ii", $_SESSION["id_utilisateur"], $this->followUserId);	
			if($stmt->execute()){				
				$output = array(			
					"success"	=> 	1
				);
				echo json_encode($output);
			}
		}		
	}

	public function getUserPostLike ($postId){
		if(!empty($_SESSION["id_utilisateur"]) && $postId) {
			$sqlQuery = "
				SELECT *
				FROM ".$this->likeTable." 
				WHERE id_utilisateur = ? AND post_id = ?";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("ii", $_SESSION["id_utilisateur"], $postId);	
			$stmt->execute();			
			$result = $stmt->get_result();	
			$allRecords = $result->num_rows;			
			return $allRecords;	
		}
	}
	
}
?>