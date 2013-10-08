<?

//controller (index)
include 'models/viewModel.php';
//include 'models/valid.php';

$viewModel = new viewModel();
//$validate = new validate();


// =>seperator or same as ; in actionscript
$data = array("name"=>"jeanna");

//$loginData = array("user"=>$_POST["user"], "pass"=>$_POST["pass"]);

// ->calling the class with the method getView and passing the header path
//$viewModel->getView("views/header.php", $data);


if(!empty($_GET["action"])){
	if($_GET["action"] == "form"){
		//show all post parameters
		var_dump($_GET);
		//<cfdump var="">
		//console.log
	}else if($_GET["action"] == "process"){
		//var_dump($_POST);
		//echo $_POST["username"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$validate->validator($user, $pass);
	}

}else{
	$viewModel->getView("views/header.php",$data);
}
$viewModel->getView("views/nav.php");
$viewModel->getView("views/body.php", $data);
$viewModel->getView("views/form.php", $data);
$viewModel->getView("views/footer.php");

?>