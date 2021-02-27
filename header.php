<!DOCTYPE html>
<html class="no-touch" prefix="og: http://ogp.me/ns#" lang="pt-BR">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Hashimoto Legal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
<?php
    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $path;
    
    if (strpos($url, "admin")!==false){
        $path = './../';
    }
    else {
        $path = './';
    }
?>

<link rel="stylesheet" href="<?php echo $path; ?>css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $path; ?>css/style.css" type="text/css" />












