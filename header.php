
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

<link rel="stylesheet" href="<?php echo $path; ?>css/owl.carousel.min.css"/>
<link rel="stylesheet" href="<?php echo $path; ?>css/owl.theme.default.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<link rel="stylesheet" href="<?php echo $path; ?>css/aos.css" />