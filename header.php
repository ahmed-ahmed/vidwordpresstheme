<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <div id="top" class="row"></div>
    <!-- top -->
    <header class="row">
      <div id="logo" class="col-sm-3">
        <a href="" >
          <img src="http://demo.theme-junkie.com/videopro/wp-content/themes/videopro/images/logo.png" />
        </a>
      </div>

      <div id="primary-navigation" class="col-sm-5 col-offset-sm-2">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'theme_location' => 'primary' , 'after' => '<span>/</span>') );
        } else {?>
          <ul class="nav">
            <li>
              <a href="index.html">Home</a>
              <span>/</span>
            </li>
          </ul>
        <?php } ?>
      </div>

      <div id="header-search" role="search">
  				<form action="http://demo.theme-junkie.com/videopro/" method="get" id="search-form">
  					<input type="text" name="s" id="site_search" placeholder="Type and hit enter">
  				</form>
			</div>
    </header>
    <div class="clear">

    </div>
