<?php

//Setup script written by Matthew Des Enfants for use with CatBot
//Yeah, baby, yeah.
	
	//If they're all set (i.e. the person hasn't just opened the page), then proceed.
	if(isset($_POST['host']) && isset($_POST['host']) && isset($_POST['host']) && isset($_POST['host'])){
	
	//If any of the variables are empty, report the error.
	if($_POST['host'] == '' || $_POST['user'] == '' || $_POST['pass'] == '' || $_POST['data'] == '') {
		
		//Report the lack of information
		$error = "<b>Please fill in all of the blanks.</b>";
		
	} else {
		//Set configuration variables
		$host = '$host = \'' . $_POST['host'] . "';";
		$user = '$username = \'' . $_POST['user'] . "';";
		$pass = '$password = \'' . $_POST['pass'] . "';";
		$data = '$database = \'' . $_POST['data'] . "';";
		$conf = '$configured = 1;';
		
		if($_POST['log'] == 'on'){
		$log = '$logging = TRUE;';
		}else{
		$log = '$logging = FALSE;';
		}
		
		$logfile = '$logfile = \'log.txt\'; ';
		
		if($_POST['com'] == 'on'){
		$com = '$allowcommands = TRUE;';
		}else{
		$com = '$allowcommands = FALSE;';
		}
		
		$finalconf = "<?php\n" . $host . "\r" . $user . "\r" . $pass . "\r" . $data . "\r" . $conf . "\r" . $log . "\r" . $logfile . "\r" . $com . "\r" . "?>";
		
		//Open configuration file for editing
		//This will clear any file that currently exists
		$file = fopen("config.php","w");
	
		//Write configuration data 
		fwrite($file,$finalconf);
		
		//Close file
		fclose($file);
		$error = "<b>Configuration file created.</b>";
		
		if($_POST['crtdb'] == 'yes'){
		//Attempt to connect to the database.
		$dblink = @mysql_connect($_POST['host'], $_POST['user'], $_POST['pass']);
		
		if($dblink == FALSE){
		$error = "Database connection failed. Reason:" . mysql_error();
		} else {
			//If you connect ok, try creating the database.
			
			$createdbquery = "CREATE DATABASE IF NOT EXISTS `$_POST[data]`;";
			$cdb = mysql_query($createdbquery);
			if ($cdb == FALSE){
			$error = "Database creation falied. Reason:" . mysql_error();
			} else {
			
				//If the database is ok, add tables and data.
				mysql_select_db($_POST['data']);
				$catd = include('sql.php');
				if ($replyquery == FALSE || $pendingquery == FALSE || $repliesquery == FALSE){
				$error = "Table and data insert failed. Reason:" . mysql_error();
				} else {
				$error = "You should be set to go!<br /> Make sure Catbot works, then <b>delete setup.php and sql.php</b>.";
				}
			
			}
	}
	}
	}
	} else {
	$error = "";
	}
?>
<html>
<head>
<title>Setup CatBot</title>
<link rel="StyleSheet" type="text/css" href="catbotcss.css">
</head>
<body onLoad="document.setup.host.focus()">

<div class="logo">
<img src="images/logo.jpg" width="400" height="100" alt="CatBot the Chatterbot" />
</div>
<br /><br />


<div class="setupright">
<?php echo $error; ?>

<form name="setup" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
<b>Host:</b><br />
<input type="text" name="host" size="30" class="text" /><br /><br />

<b>User Name:</b><br />
<input type="text" name="user" size="30" class="text" /><br /><br />

<b>Password:</b><br />
<input type="text" name="pass" size="30" class="text" /><br /><br />

<b>Database:</b><br />
<input type="text" name="data" size="30" class="text" /><br /><br />

<b>Logging:</b>&nbsp;&nbsp;&nbsp;<b>Commands:</b><br />
On<input type="radio" name="log" value="on" checked="checked" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On<input type="radio" name="com" value="on" checked="checked" /><br />
Off<input type="radio" name="log" value="off" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Off<input type="radio" name="com" value="off" /><br /><br />
<b>Attempt to create database:</b><br />
Yes<input type="radio" name="crtdb" value="yes" checked="checked" />
   No<input type="radio" name="crtdb" value="no" />
<br /><br />
<input type="submit" name="configure" value="Go!" class="bttn" />

</form>
</div>
<div class="setupleft">
Instructions:<ul>
	<li>Host:&nbsp; URL or IP Address of mySQL database server.</li>
	<li>User Name:&nbsp; User name for database login.</li>
	<li>Password:&nbsp; Password for database login.</li>
	<li>Database:&nbsp; Name of database to be created.</li>
	<li><b>Hit Go!</b><br /> It will be saved as config.php</li>
	<li>If you choose to enable logging, you can change the location of the logfile in config.php.</li>
</ul>

<b style="font-size:medium;">You cannot overwrite the replies, if you already have a database setup. You have to manually delete the existing tables first.</b><br />
</div>

<div class="copyrights">
<hr />
CatBot is released under the <a href="http://www.gnu.org/licenses/gpl.txt">GNU General Public License</a>. 
</div>
</body>
</html>