<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	
    <html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<!-- Bootstrap -->
<link rel="stylesheet" href="/wp-content/themes/r1/css/bootstrap.css"> 
<link rel="stylesheet" href="/wp-content/themes/r1/js/colorbox-master/example1/colorbox.css">
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet/less" type="text/css" href="/wp-content/themes/r1/css/less.less">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="/wp-content/themes/r1/js/less.js"></script>




    
<?php wp_head(); ?>
</head>

<body id="home">

<!-- HTML код диалогового окна-->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title">Подать заявку</h3>
      </div>
      <div class="modal-body">
        
 <?php echo do_shortcode('[contact-form-7 id="49" title="Форма заявки"]'); ?> 
 
   
        
      </div>
      <div class="modal-footer">
       
       
      </div>
    </div>
  </div>
</div>


<?php
if( is_page(7) ){ ?>
	
<!-- HTML код Верхнее меню -->
<nav class="navbar navbar-default navbar-fixed-top">  
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="/" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li><a href="#pupil">Ученикам</a></li>
        <li><a href="#drivers">Коллектив</a></li>
        <li><a href="#autodrom">Наш автодром</a></li>
        <li><a href="#kontakt">Контакты</a></li>
        
        
      
        
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Информация <span class="caret"></span></a>
          <?php wp_nav_menu('menu=R-menu&container= &menu_class=dropdown-menu '); ?>
        
      </ul>
      <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
        </div>
        <button type="submit" id="searchsubmit" value="найти" class="btn btn-default">Искать</button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>  

<!-- HTML шапка альтернатива-->
<section>
  <div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs12">
        
        
<h1>АВТОШКОЛА</h1>
          <p class="collname">Политехнического техникума №2</p>
          <div style="clear:both; height:30px;"></div>
          <p><a class="btn btn-primary btn-lg myModalCN" href="#myModal" role="button" data-toggle="modal">Записаться в школу</a></p>
          <div style="clear:both; height:30px;"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php } else { ?>

<!-- HTML код Верхнее меню алтернатива -->
<nav class="navbar navbar-default navbar-fixed-top">  
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="/" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li><a href="/ #pupil">Ученикам</a></li>
        <li><a href="/ #drivers">Коллектив</a></li>
        <li><a href="/ #autodrom">Наш автодром</a></li>
        <li><a href="/ #kontakt">Контакты</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Информация <span class="caret"></span></a>
          
            <?php wp_nav_menu('menu=R-menu&container= &menu_class=dropdown-menu '); ?>
          
        </li>
      </ul>

      
      <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
        </div>
        <button type="submit" id="searchsubmit" value="найти" class="btn btn-default">Искать</button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>    
    
<!-- HTML шапка альтернатива-->
<section>
  <div class="jumbotron text-center alterHead">
    <div class="container">
      <div class="row">
        <div class="col-xs12 ">
        
        
			<h1>АВТОШКОЛА</h1>
          <p class="collname">Политехнического техникума №2</p>
          <div style="clear:both; "></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php }?>
























