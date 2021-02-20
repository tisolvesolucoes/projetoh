<?php
    session_start();
?>

<!DOCTYPE html>
<html class="no-touch" prefix="og: http://ogp.me/ns#" lang="pt-BR">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	
	<script type="text/javascript" id="www-widgetapi-script" src="sitenovo_arquivos/www-widgetapi.js" async=""></script>
	<meta charset="UTF-8">

	<title>Hashimoto Legal</title>

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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $path; ?>css/aos.css" />


	<link rel="canonical" href="https://www.hashimotolegal.com.br/">
	<meta property="og:locale" content="pt-BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Hashimoto Legal">
	<meta property="og:url" content="https://www.hashimotolegal.com.br/">
	<meta property="og:site_name" content="HashimotoLegal">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Hashimoto Legal">

	<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
	<link rel="dns-prefetch" href="https://s.w.org/">
	<link rel="alternate" type="application/rss+xml" title="hashimo tolegal » Feed"
		href="https://www.hashimotolegal.com.br/feed/">
	<link rel="alternate" type="application/rss+xml" title="Hashimoto Legal » Comments Feed"
		href="https://www.hashimotolegal.com.br/comments/feed/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="og:title" content="Home">
	<meta name="og:type" content="website">
	<meta name="og:url" content="https://www.hashimotolegal.com.br/">
	
	<style id="rs-plugin-settings-inline-css" type="text/css">
		#rs-demo-id {}
	</style>

	<link rel="stylesheet" id="us-font-1-css" 
	href="sitenovo_arquivos/css.css" type="text/css" media="all">
	<link rel="stylesheet" id="recent-posts-widget-with-thumbnails-public-style-css" 
	href="sitenovo_arquivos/public.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="rpt_front_style-css" 
	href="sitenovo_arquivos/front.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-base-css" 
	href="sitenovo_arquivos/us-base.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-font-awesome-css" 
	href="sitenovo_arquivos/font-awesome.css" type="text/css"
		media="all">
	<link rel="stylesheet" id="us-font-mdfi-css" 
	href="sitenovo_arquivos/font-mdfi.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-style-css" 
	href="sitenovo_arquivos/style.css" type="text/css" media="all">
	<link rel="stylesheet" id="us-responsive-css" 
	href="sitenovo_arquivos/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" id="bsf-Defaults-css" 
	href="sitenovo_arquivos/Defaults.css" type="text/css" media="all">
	<link rel="stylesheet" id="ultimate-style-min-css" 
	href="sitenovo_arquivos/ultimate.css" type="text/css"
		media="all">
	
	<link rel="stylesheet" id="ultimate-style-min-css" 
	href="sitenovo_arquivos/arquivo.css" type="text/css"
		media="all">


	<script type="text/javascript" src="sitenovo_arquivos/jquery_002.js"></script>

	<link rel="shortlink" href="https://www.hashimotolegal.com.br/">
	<link rel="apple-touch-icon" sizes="180x180" href="img/logo.png">
	<link rel="icon" type="image/png" href="img/logo.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/logo.png" sizes="16x16">
	<link rel="shortcut icon" href="https://www.hashimotolegal.com.br/img/favicon.ico">

	<meta name="theme-color" content="#ffffff">
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<!--[if IE  8]><link rel="stylesheet" type="text/css" href="css/vc-ie8.min.css" media="screen"><![endif]-->
	
	<link rel="icon" href="img/logo.png" sizes="32x32">
	<link rel="icon" href="img/logo.png" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="img/logo.png">
	<meta name="msapplication-TileImage" content="img/logo.png">


	<!-- BEGIN GADWP v5.2.3.1 Universal Analytics - https://deconf.com/google-analytics-dashboard-wordpress/ -->
	
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
		ga('create', '0000000', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- END GADWP Universal Analytics -->
	<noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>








<!--
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Hashimoto Legal</title>

-->
