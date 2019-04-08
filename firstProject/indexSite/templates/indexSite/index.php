{% include 'indexSite/header.php' %}
{% load static %}


<!-- banner -->
<div class="banner">    	   
    <img src="{% static 'indexSite/images/photos/banner.jpg' %}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotel in Bunda Mulia</h1>
                <p class="animated fadeInUp">Most luxurious hotel of asia with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control">
              <option>No. of Rooms</option>
              {% for i in range %}
                <option>{{ i }}</option>
              {% endfor %}
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control">
              <option>No. of Adult</option>
              {% for i in range %}
                <option>{{ i }}</option>
              {% endfor %}
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
                <span>Check-In</span>
            </div>
            <div class="col-xs-6">
                <span>Check-Out</span>
            </div>
            </div>
        </div>
        <div class="form-group" >
            <div class="row">
            <div class="col-xs-6">
                <input  type="date" name="dateBookIn" min="{{ dateNow }}">
            </div>
            <div class="col-xs-6">
                <input  type="date" name="dateBookOut" min="{{ dateNow }}">
            </div>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
        </div>
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{% static 'indexSite/images/photos/8.jpg' %}" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="{% static 'indexSite/images/photos/9.jpg' %}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{% static 'indexSite/images/photos/10.jpg' %}"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="{% url 'rooms-tariff' %}" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{% static 'indexSite/images/photos/6.jpg' %}" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{% static 'indexSite/images/photos/3.jpg' %}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{% static 'indexSite/images/photos/4.jpg' %}"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="{% url 'gallery' %}" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="{% static 'indexSite/images/photos/1.jpg' %}" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{% static 'indexSite/images/photos/2.jpg' %}"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="{% static 'indexSite/images/photos/5.jpg' %}"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="{% url 'gallery' %}" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


{% include 'indexSite/footer.php' %}