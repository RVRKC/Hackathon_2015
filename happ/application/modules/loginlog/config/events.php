<?php
$config['user.after_login'][] = array(
	'file'		=> 'loginlog/models/loginlog_model.php',
	'class'		=> 'Loginlog_model',
	'method'	=> 'log'
	);
