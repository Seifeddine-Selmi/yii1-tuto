<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>


<?php
foreach($users as $user){
	echo $user->username;
	echo "<br/>";
}
?>
