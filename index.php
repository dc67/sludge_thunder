<?php 

	require 'sections/header.php'; // load css, fonts, js


?>

<body id="page-top" class="home">
    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<?php
	require 'sections/index-navigation.php'; // index navigation

// index content
	require 'sections/index-header.php';
	require 'sections/index-biography.php';
	require 'sections/index-portfolio.php';
	require 'sections/index-music.php';
	require 'sections/contact.php';
	require 'sections/modals.php';

	require 'sections/footer.php'; // footer scripts, close document
?>


