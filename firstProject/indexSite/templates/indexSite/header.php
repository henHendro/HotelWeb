{% load static %}

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Holiday Crown | Best hotel in Dubai</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="{% static 'indexSite/assets/bootstrap/css/bootstrap.min.css' %}" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="{% static 'indexSite/assets/uniform/css/uniform.default.min.css' %}" />

<!-- animate.css -->
<link rel="stylesheet" href="{% static 'indexSite/assets/wow/animate.css' %}" />


<!-- gallery -->
<link rel="stylesheet" href="{% static 'indexSite/assets/gallery/blueimp-gallery.min.css' %}">


<!-- favicon -->
<link rel="shortcut icon" href="{% static 'indexSite/images/favicon.png' %}" type="image/x-icon">
<link rel="icon" href="{% static 'indexSite/images/favicon.png' %}" type="image/x-icon">

<link rel="stylesheet" href="{% static 'indexSite/assets/style.css' %}">

<!-- js 
<script src="{% static 'indexSite/assets/jquery.js' %}"></script>
<script src="{% static 'indexSite/assets/uniform/js/jquery.uniform.js' %}"></script>
<script src="{% static 'indexSite/assets/bootstrap/js/bootstrap.js' %}" type="text/javascript"></script>
<script src="{% static 'indexSite/assets/gallery/jquery.blueimp-gallery.min.js' %}"></script>
<script src="{% static 'indexSite/assets/script.js' %}"></script>
<script src="{% static 'indexSite/assets/respond/respond.js' %}"></script>
<script src="{% static 'indexSite/assets/mobile/touchSwipe.min.js' %}"></script>-->

</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="{% static 'indexSite/images/logo.png' %}"  alt="holiday crown"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
  
      <ul class="nav navbar-nav">        
        <li><a href="{% url 'home' %}">Home </a></li>
        <li><a href="{% url 'rooms-tariff' %}">Rooms & Tariff</a></li>        
        <li><a href="{% url 'intro' %}">Introduction</a></li>
        <li><a href="{% url 'gallery' %}">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->

