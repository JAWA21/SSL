<?

class valid{

	/*public function __construct(){
	}*/

	public function validator($user, $pass){
		$p = '^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$^';

		if (preg_match($p, $user)){
			echo "User true";
		} else {
			echo "User false";
		}

		if(preg_match( '/[^A-Za-z0-9]+/', $pass) || strlen( $pass) < 8){
			echo "Invalid password!";
		}else{
			echo "Valid password";
		}

	}


?>