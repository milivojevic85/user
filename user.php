<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>User</title>
</head>
<body>

<?php 

class User
{
	private $data = array(); // a class attribute or property
	
	// a magic class method
	public function __set($key, $value) {
		$this->data[$key] = $value;
	}
	// a magic class method
	public function __get($key) {
		if (array_key_exists($key, $this->data)) {
			return $this->data[$key];
		}
	}
}

$user = new User(); // an instantination of the User class
$user->first_name = "John";
$user->last_name = "Doe";
echo $user->first_name." ".$user->last_name."<br>"; // John Doe

?>
</body>
</html>