<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Pesquise os melhores locais e serviços para seu pet!">
<meta name="author" content="Tiago">
<meta name="theme-color" content="#0563A1">

<!-- ICONS -->
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/metas/apple-icon-57x57.png"> 
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/metas/apple-icon-60x60.png"> 
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/metas/apple-icon-72x72.png"> 
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/metas/apple-icon-76x76.png"> 
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/metas/apple-icon-114x114.png"> 
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/metas/apple-icon-120x120.png"> 
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/metas/apple-icon-144x144.png"> 
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/metas/apple-icon-152x152.png"> 
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/metas/apple-icon-180x180.png"> 
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/metas/android-icon-192x192.png"> 
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/metas/favicon-32x32.png"> 
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/metas/favicon-96x96.png"> 
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/metas/favicon-16x16.png"> 
<link rel="manifest" href="assets/img/metas/manifest.json"> 
<meta name="msapplication-TileColor" content="#36b8ea"> 
<meta name="msapplication-TileImage" content="assets/img/metas/ms-icon-144x144.png"> 
<meta name="format-detection" content="telephone=no">


<?php 

$titlePage = 'Scapets';
$descriptionPage = 'Pesquise os melhores locais e serviços para seu pet!';
$imgPage = "http://".$_SERVER["SERVER_NAME"].'/assets/img/social.jpg';
$siteName = 'Scapets';
    
?>

<title><?php echo $siteName; ?></title>

<!-- Social: Twitter -->
<meta name='twitter:card' content='summary_large_image'>
<meta name='twitter:title' content='<?php echo $titlePage; ?>'>
<meta name='twitter:description' content='<?php echo $descriptionPage; ?>'>
<meta name='twitter:image:src' content='<?php echo $imgPage; ?>'>

<!-- Social: Facebook / Open Graph -->
<meta property='og:url' content='<?php echo "http://".$_SERVER["SERVER_NAME"].strtok($_SERVER ["REQUEST_URI"],"?"); ?>'>
<meta property='og:type' content='website'>
<meta property='og:title' content='<?php echo $titlePage; ?>'>
<meta property='og:image' content='<?php echo $imgPage; ?>'/>
<meta property='og:description' content='<?php echo $descriptionPage; ?>'>
<meta property='og:site_name' content='<?php echo $siteName; ?>'>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4B78BESD82"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4B78BESD82');
</script>


<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/all.min.css">