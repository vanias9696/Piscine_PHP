<?php
 if ($_POST['login'] && $_POST['passwd'] && $_POST["submit"] == "OK")
 {
 	if (!file_exists('../private'))
 		mkdir('../private', 0777);
 	else if (file_exists('../private/passwd'))
 	{
 		$str = file_get_contents('../private/passwd');
 		$users = unserialize($str);
 		foreach ($users as $data)
 		{
 			foreach ($data as $key => $value)
 			{
 				if ($key == 'login' && $value == $_POST['login'])
 				{
 					echo "ERROR\n";
 					exit();
 				}
 			}
 		}
 	}
 	$pass_hash = hash('whirlpool', $_POST['passwd']);
 	$data = array('login' => $_POST['login'], 'passwd' => $pass_hash);
 	$users[] = $data;
 	file_put_contents('../private/passwd', serialize($users));
 	echo "OK\n";
 	exit();
 }
 else
 	echo "ERROR\n";
?>