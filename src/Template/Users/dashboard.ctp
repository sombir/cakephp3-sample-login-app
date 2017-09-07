<?php 
$session = $this->request->session()->read('Auth'); 
$userSession = $session['User']; 
?>
<div class="container">
<div class="jumbotron1">
  <h1>Dashboard</h1>
	<?php
		if (isset($userSession['username'])) {
			$username = $userSession['username'];
			echo "Hello <b id='welcome'><i>" . $username . "</i> !</b><br/>";
			echo "click here to <a href='/users/add'>add new user</a>";
		} else {
			header("location: home");
		}
	?>
</div>
</div>

