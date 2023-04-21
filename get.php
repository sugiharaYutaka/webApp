<?php
	$usrid = $_GET["usrID"];
        $pass = $_GET["pass"];

        $db = new PDO('mysql:host=localhost;dbname=testdb','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	
	$id = 0;
	$ps = 0;
        $sql = 'select usrid, password from usrinfo';
        foreach($db->query($sql) as $row)
        {
                if($row['usrid'] == $usrid)
                {
			$id = 1;
		}
                if($row['password'] == $pass)
                {
                	$ps = 1;
                }
	
	}
	if($id == 1 && $ps == 1)
	{
		include 'loginResult.html';
	}
        else
        {
                echo "error";
        }

?>
