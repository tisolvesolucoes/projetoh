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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Libs -->
<script type="text/javascript" src="<?php echo $path; ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>js/aos.js"></script>
<!-- Hashimoto javascript -->
<script src="<?php echo $path; ?>js/hashimoto.js"></script>

<script>
    functionHashi.utils();    
</script>