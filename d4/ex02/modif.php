<?php
 if ($_POST['login'] && $_POST['oldpw'] && $_POST["submit"] == "OK" && $_POST['newpw'])
 {
 	if (file_exists('../private/passwd'))
 	{
 		$str = file_get_contents('../private/passwd');
 		$users = unserialize($str);
 		foreach ($users as $key => $value)
 		{
 			if ($value['login'] == $_POST['login'] && $value['passwd'] == hash('whirlpool', $_POST['oldpw']))
 			{
 				$users[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
 				file_put_contents('../private/passwd', serialize($users));
 				echo "OK\n";
 				exit();
 			}
 		}
 	}
 	else
 	{
 		echo "ERROR\n";
 		exit();
 	}

 }
 echo "ERROR\n";
 exit();
?>
