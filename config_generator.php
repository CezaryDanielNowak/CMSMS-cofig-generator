<?php

function lang($line = '')
{
	return $line;
}

function __head()
{
	return '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>'. lang('CMS MS Config Generator') .'</title>
	<link rel="stylesheet" href="'. THIS_FILE .'?css" />
</head>
<body>
';

}

function __foot()
{
	return <<<FOOT

<div class="copyright">
	CMS MS Config Generator
</div>
</body>
</html>
FOOT;
}

if(isset($_GET['css']))
{
	header('Content-type: text/css');
	$expires = 60*60*24*14;
	header("Pragma: public");
	header("Cache-Control: maxage=".$expires);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . ' GMT');
	
	echo <<<CSS
form {
	font-family: "Tahoma", "Geneva", sans-serif;
	color: #626292;
	padding: 10px;
	width: 600px;
}
fieldset, .copyright {
	border: 1px solid #626292;
	padding: 0;
	padding-left: -1px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-border-radius: 5px;
	-khtml-border-radius: 5px;
}

 .copyright {
 margin-top:10px;
 padding:5px;
 }

legend {
	font-size: 1.5em;
	color: #626292;
	font-weight: bold;
	margin-left: 110px;
	padding: 5px 10px;
	border: 1px solid #626292;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-border-radius: 5px;
	-khtml-border-radius: 5px;
	text-transform: capitalize;
}
form p {
	padding: 5px 0;
	position: relative;
}
form p:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
form p.nolabel * {
	margin-left: 110px;
}
label {
	width: 150px;
	text-align: right;
	display: block;
	float: left;
	margin-right: 10px;
	text-transform: capitalize;
	line-height: 1em;
}
input[type=text], textarea, input[type=password] {
	border: 1px solid #626292;
	color: #626292;
	padding: 10px;
	vertical-align: text-top;
	width: 360px;
	-webkit-box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	-moz-box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-border-radius: 5px;
	-khtml-border-radius: 5px;
	background: -webkit-gradient(linear, left top, left 25, from(#f8f8ff), color-stop(4%, #e8e8ee), to(#f8f8ff));  
	background: -moz-linear-gradient(top, #f8f8ff, #dedeee 1px, #e8e8ee 25px); 
}
input[disabled]
{
	color: gray !important;
	border: 1px solid gray !important;
}
p.nolabel input[type=text], p.nolabel textarea, p.nolabel input[type=password] {
	position: relative;
	left: 0;
}
textarea {
	min-height: 100px;
	max-width: 300px;
	min-width: 300px;
	resize: both;
}
button, input[type=submit] {
	border: 1px solid #626292;
	color: #202050;
	-webkit-box-shadow: #e3e3e3 0.1em 0.1em 0.2em;
	box-shadow: #e3e3e3 0.1em 0.1em 0.2em;
	-moz-box-shadow: #e3e3e3 0.1em 0.1em 0.2em;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-border-radius: 5px;
	-khtml-border-radius: 5px;
	background: -webkit-gradient(linear, left top, left 25, from(#f8f8ff), color-stop(4%, #e8e8ee), to(#f8f8ff));  
	background: -moz-linear-gradient(top, #f8f8ff, #dedeee 1px, #e8e8ee 25px); 
	padding: 10px;
}
input[type=text]:hover, input[type=password]:hover, textarea:hover, input[type=submit]:hover, button:hover, input[type=radio]:hover:before, input[type=checkbox]:hover:before, select:hover {
	-webkit-box-shadow: #336 0 0 3px;
	box-shadow: #336 0 0 3px;
	-moz-box-shadow: #336 0 0 3px;
	color: #626292;
}
@-webkit-keyframes pulse {
	0% {
		-webkit-box-shadow: #336 0 0 3px;
		box-shadow: #336 0 0 3px;
		-moz-box-shadow: #336 0 0 3px;
	}
	100% {
		-webkit-box-shadow: #336 0 0 10px;
		box-shadow: #336 0 0 10px;
		-moz-box-shadow: #336 0 0 10px;
	}
}
input[type=text]:focus, input[type=password]:focus, textarea:focus, input[type=submit]:focus, button:focus, input[type=radio]:focus:before, .radioreplacement:focus, input[type=checkbox]:focus:before, .checkboxreplacement:focus, select:focus {
	outline: 0;
	-webkit-box-shadow: #336 0 0 3px;
	box-shadow: #336 0 0 3px;
	-moz-box-shadow: #336 0 0 3px;
	-webkit-animation-name: pulse;
	-webkit-animation-duration: 1s;
	-webkit-animation-iteration-count: 9999;
	-webkit-animation-direction: alternate;
	-webkit-animation-timing-function: linear;
}
input[type=submit]:active button:active {
	position: relative;
	top: 1px;
}
input[type=radio]:before, .radioreplacement {
	position: relative;
	top: -2px;
	left: -2px;
	display: block;
	height: 14px;
	width: 14px;
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	-border-radius: 7px;
	-khtml-border-radius: 7px;
	content: " ";
	text-align: center;
	position: relative;
	z-index: 9999;
	border: 1px solid #626292;
	color: #202050;
	-webkit-box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	background: -webkit-gradient(linear, left top, left 25, from(#f8f8ff), color-stop(4%, #e8e8ee), to(#f8f8ff));  
	background: -moz-linear-gradient(top, #f8f8ff, #dedeee 1px, #e8e8ee 25px); 
}
input[type=radio]:checked:before {
	content: "•";
}
input[type=checkbox]:before, .checkboxreplacement {
	position: relative;
	top: -2px;
	left: -2px;
	display: block;
	height: 14px;
	width: 14px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-border-radius: 3px;
	-khtml-border-radius: 3px;
	content: " ";
	text-align: center;
	position: relative;
	z-index: 9999;
	border: 1px solid #626292;
	color: #202050;
	-webkit-box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	background: -webkit-gradient(linear, left top, left 25, from(#f8f8ff), color-stop(4%, #e8e8ee), to(#f8f8ff));  
	background: -moz-linear-gradient(top, #f8f8ff, #dedeee 1px, #e8e8ee 25px); 
}
input[type=checkbox]:checked:before {
	content: "✓";
}
.radioreplacement, .checkboxreplacement {
	position: absolute;
	top: 15px;
	left: 110px;
	vertical-align: top;
}
.checkboxreplacement {
	text-indent: -9999px;
}
.checkboxreplacement.checked {
	text-indent: 0!important;
}
input[type=checkbox], input[type=radio] {
	position: relative;
	top: 6px;
}
select {
	border: 1px solid #626292;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-border-radius: 3px;
	-khtml-border-radius: 3px;
	color: #202050;
	-webkit-box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	box-shadow: #d3d3e3 0.1em 0.1em 0.2em;
	background: -webkit-gradient(linear, left top, left 25, from(#f8f8ff), color-stop(4%, #e8e8ee), to(#f8f8ff));  
	background: -moz-linear-gradient(top, #f8f8ff, #dedeee 1px, #e8e8ee 25px); 
	position: relative;
	top: 6px;
	height: 20px;
}
CSS;
	exit;
}

define('THIS_FILE', isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : 'config_generator.php' );

$bools = array(
	0 => 'false',
	1 => 'true'
);

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

if(isset($_GET['pobierz']))
{
	header('Content-type: text/php');
	header('Content-Disposition: attachment; filename="config_old.php"');
	
	echo file_get_contents( 'config.php' );
exit;
}

$krok = isset($_GET['krok']) ? (string)(int)$_GET['krok'] : '';

switch ( $krok )
{
	case '4':
		if(!empty( $_POST ) )
		{
			header('Content-type: text/php');
			header('Content-Disposition: attachment; filename="config.php"');
			
			echo "<?php\n";
			
			foreach ($_POST as $field => $arr)
			{
				echo "\$config['{$field}'] = ";
				switch ( $arr['type'] )
				{
					case 'boolean':
						echo ($arr['value'] == 'false') ? 'false' : 'true';
						break;
					case 'integer':
						echo (int)$arr['value'];
						break;
					default: //string
						echo "'" . addcslashes ( $arr['value'] , "'\\" ) . "'";
						//echo "'" . str_replace(array("'", '\\'), array("\\'",'\\\\'), $arr['value']) . "'";
						break;
				}
				echo ";\n";
			}
			echo '?>';

			exit;
			break;
		}
	case '3':
		if( file_exists('config.php') )
		{
			include('config.php');
			if( isset($config) )
			{
				echo __head();
				echo '<fieldset>';
				echo '<legend>' . lang('Krok 3') . '</legend>';
				echo '<form action="' . THIS_FILE . '?krok=4" method="POST">';
				echo '<h1>'. lang('Teraz sprawdź poprawność danych:') .'</h1>';
				
				echo '<table><thead><tr>';
				echo '<th>' . lang('Nazwa pola') . '</th>';
				echo '<th>' . lang('Stara wartość') . '</th>';
				echo '<th>' . lang('Nowa wartość') . '</th>';
				echo '</tr></thead>';
				
				echo '<tbody>';

				foreach($config as $field => $value)
				{
					$raw_value = $value;
					if (is_bool($value))
					{
						$value = $bools[(int)$value];
					}

					echo '<tr>';
					echo '<td>';
					echo '<label for="'. $field .'">' . str_replace('_', ' ', htmlspecialchars($field));
					echo '</td>';
					
					echo '<td>';
					echo '<input type="text" value="'. htmlspecialchars($value) .'" disabled="disabled" />';
					echo '</td>';
					
					if(isset( $_POST[$field]['value'] ))
					{
						$value = $_POST[$field]['value'];
					}
					
					switch ( $field )
					{
						case 'root_url':
							$value = dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
							break;
						case 'ssl_url':
							$value = dirname('https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] );
							break;
						case 'root_path':
							$value = dirname( __FILE__ );
							break;
						case 'previews_path':
							$value = dirname( __FILE__ ) . str_replace($config['root_path'], '', $config['previews_path']);
							break;
						case 'uploads_path':
							$value = dirname( __FILE__ ) . str_replace($config['root_path'], '', $config['uploads_path']);
							break;
						case 'uploads_url':
							$value = dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']) . str_replace($config['root_url'], '', $config['uploads_url']);
							break;
						case 'image_uploads_path':
							$value = dirname( __FILE__ ) . str_replace($config['root_path'], '', $config['image_uploads_path']);
							break;
						case 'image_uploads_url':
							$value = dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']) . str_replace($config['root_url'], '', $config['image_uploads_url']);
							break;
							
							
						case 'image_transform_lib_path':
							$value = ('WIN' === strtoupper(substr(PHP_OS, 0, 3))) ? 'C:/Program Files/VisualMagick/bin/' : '/usr/bin/ImageMagick/';
							break;
						case 'max_upload_size':
							if (!is_numeric($maxFileSize = ini_get('upload_max_filesize')))
							{
								$l=strlen($maxFileSize);
								$i=0;$ss='';$x=0;
								while ($i < $l)
								{
									if (is_numeric($maxFileSize[$i]))
										{$ss .= $maxFileSize[$i];}
									else
									{
										if (strtolower($maxFileSize[$i]) == 'm') $x=1000000;
										if (strtolower($maxFileSize[$i]) == 'k') $x=1000;
									}
									$i ++;
								}
								$maxFileSize=$ss;
								if ($x >0) $maxFileSize = $ss * $x;
							}
							else
							{
								$maxFileSize = 1000000;
							}
							$value = $maxFileSize;
							break;

					}
					echo '<td>';
					echo '<input type="text" value="'. htmlspecialchars($value) .'" name="'.$field.'[value]" />';
					echo '<input type="hidden" value="'. gettype($raw_value) .'" name="'.$field.'[type]" />';
					echo '</td>';
					
					echo '</tr>';
				}
				
				
				
				echo '</tbody>';
				echo '</table>';
				
				echo '<input type="submit" value="'. lang('Pobierz nowy plik config.php') .'" />';
				echo '</form>';
				echo '</fieldset>';

				echo __foot();
				break;
			}
		}
	case '2':
		if( file_exists('config.php') )
		{
			include('config.php');
			if( isset($config) )
			{
				echo __head();
				echo '<fieldset>';
				echo '<legend>' . lang('Krok 2') . '</legend>';
				echo '<form action="' . THIS_FILE . '?krok=3" method="POST">';
				echo '<h1>'. lang('Sprawdź ustawienia bazy danych:') .'</h1>';
				
				echo '<table><thead><tr>';
				echo '<th>' . lang('Nazwa pola') . '</th>';
				echo '<th>' . lang('Stara wartość') . '</th>';
				echo '<th>' . lang('Nowa wartość') . '</th>';
				echo '</tr></thead>';
				echo '<tbody>';
				
				$elements = array('db_hostname','db_username','db_password','db_name','db_port','persistent_db_conn');

				foreach($elements as $field)
				{
					$value = isset($_POST[$field]['value']) ? $_POST[$field]['value'] : $config[$field];
					$raw_value = $config[$field];
					
					if (is_bool($raw_value))
					{
						$value = $bools[(int)$value];
						$raw_value = $bools[(int)$value];
					}
				
					echo '<tr>';
					echo '<td>';
					echo '<label for="'. $field .'">' . str_replace('_', ' ', htmlspecialchars($field));
					echo '</td>';
					
					echo '<td>';
					echo '<input type="text" value="'. htmlspecialchars($raw_value) .'" disabled="disabled" />';
					echo '</td>';
					
					echo '<td>';
					echo '<input type="text" value="'. htmlspecialchars($value) .'" name="'.$field.'[value]" />';
					echo '<input type="hidden" value="'. gettype($raw_value) .'" name="'.$field.'[type]" />';
					echo '</td>';
					
					echo '</tr>';
				}
				
				
				echo '</tbody>';
				echo '</table>';

				if(!empty( $_POST ))
				{
					$connect_func = ( $_POST['persistent_db_conn'] == 'true' ) ? 'mysql_pconnect' : 'mysql_connect';
					echo '<p>';
					if(false !== $connected = @$connect_func($_POST['db_hostname']['value'] . (!empty($_POST['db_port']['value']) ? ":{$_POST['db_port']['value']}" : ''), $_POST['db_username']['value'], $_POST['db_password']['value']))
						echo '&#9679;&nbsp;' . lang('Połączenie powiodło się!');
					else
						echo '-&nbsp;' . lang('Połączenie nie powiodło się!');
					echo '</p>';
					
					echo '<p>';
					if($connected && mysql_select_db( $_POST['db_name']['value'] ))
					{
						echo '&#9679;&nbsp;' . lang('Poprawnie wybrano bazę: ') . $_POST['db_name']['value'];
					}
					else
					{
						echo '-&nbsp;' . lang('Nie można było wybrać bazy: ') . $_POST['db_name']['value'];
					}
					echo '</p>';
					
					if($connected)
						mysql_close();
				}
				echo '<button type="submit" formaction="'.  THIS_FILE . '?krok=2">'. lang('Sprawdź połączenie z bazą danych') .'</button>';
				echo ' <input type="submit" value="'. lang('Przejdź do ostatniego kroku &raquo;') .'" />';
				echo '</form>';
				echo '</fieldset>';

				echo __foot();
				break;
				break;
			}
		}
	
	default: //krok 1
		echo __head();
		echo '<fieldset>';
		echo '<legend>' . lang('Krok 1') . '</legend>';
		echo '<form action="' . THIS_FILE . '" method="GET">';
		if( !file_exists('config.php') )
		{
			echo '<h1>'. lang('Plik config.php nie istnieje lub zawiera błędne dane!') .'</h1>';
			echo '<input type="submit" value="'. lang('Odśwież stronę!') .'" name="krok" />';
		}
		else
		{

			echo '<h1>'. lang('Plik config.php istnieje!') .'</h1>';
			
			echo '<p><a href="' . THIS_FILE . '?pobierz=1">'. lang('Pobierz plik config.php') .'</a></p>';
			echo lang('Przejdź do kroku') .' <input type="submit" value="2" name="krok" />';
		}
		echo '</form>';
		echo '</fieldset>';
		echo __foot();
}