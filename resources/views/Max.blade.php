@extends('Manuparent')
@section('FastFood')


<!DOCTYPE html>
<html>
<head>
  <title>Max Restaurant</title>
  <link rel="stylesheet" href="{{asset('/css/style.css') }}"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>



  <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

</head>
<body>
  <div style="background-image: url('Main_page_pic.jpg'); height: 680px;

  width: 100%; background-repeat: no-repeat;">

</div>

<script type="text/javascript">


  $(window).on('scroll',function()
  {
   if($(window).scrollTop())
   {
    $('nav').addClass('black');  <!-- Add black nav -->
  }
  else{
    $('nav').removeClass('black');
  }
})

</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">
      <img src="logo.png" style="margin-left: 20px;margin-top: 5px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item active" >
            <a class="nav-link" href="#">Home </a>
          </li>
          <li class="nav-item" >
            <div class="dropdown " >
             <a class="btn nav-link text" href="#RESERVATION" 
             style="color: white; font-size: 15px;"><span class="text" style="margin-left:15px;"> RESERVATION</span></a>
             <div class="dropdown-content">
              <a href="#RESERVATION">Resrvation Form</a>
              <a href="#RESERVATION">Open Table Form</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
         <a  class="btn dropdown nav-link text" style="color: white ;font-size: 15px;" href="#MENUScroll" >
          <span  class="text" style="margin-left:15px;">MENU</span></a>  

        </li>

        <li class="nav-item">
          <div class="dropdown ">
           <a class="btn nav-link text" href="#EVENT"  
           style="color: white; font-size: 15px;"><span class="text" style="margin-left:15px;"> EVENT</span></a>
           <div class="dropdown-content">
            <a href="#EVENT">Happening Event</a>
            <a href="#EVENT">Upcomming Event</a>
            <a href="#EVENT">Expired Event</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <div class="dropdown ">
         <a class="btn nav-link text" href="#FEATURES"
         style="color: white; font-size: 15px;"><span class="text" style="margin-left:15px;"> FEATURES</span></a>
         <div class="dropdown-content">
          <a href="#FEATURES">About us</a>
          <a href="#FEATURES">Gallery</a>
          <a href="#FEATURES">Social Links</a>
          <a href="#FEATURES">Admin News</a>

        </div>
      </div>
    </li>


    <li class="nav-item">

      <div class="dropdown">
        <a class="btn nav-link" href="#COMPLAINS" 
        style="color: white; font-size: 15px" ><span class="text"> 
        Complains</span>
      </a>
    </div>

  </li>


  <li class="nav-item">
    <div class="dropdown">
      <a class="btn nav-link"href="#BLOG" style="color: white; font-size: 15px" ><span class="text"> BLOG</span>
      </a>
    </div>
  </li>
  <li class="nav-link">
    <div class="hrh">

    </div>
  </li>
  <li class="nav-link">
    <a href="#"   style="color: white" >
      <span class="iconify" ho data-icon="simple-line-icons:social-facebook"
      data-inline="false" data-width="20px" data-height="20px"></span>
    </a></li>


    <li class="nav-link">
      <a href="#"   style="color: white">
        <span class="iconify" data-icon="simple-line-icons:social-twitter"
        data-inline="false"   data-width="20px" data-height="20px"></span>
      </a></li>

      <li class="nav-link">
        <a href="#"   style="color: white">
          <span class="iconify" data-icon="entypo-social:tripadvisor"
          data-inline="false"  data-width="20px" data-height="20px"></span>
        </a></li>      
      </ul>
    </div>
  </nav>
</div>


<!-- table reservation -->
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-12" >

      <p class="text-center"  id="RESERVATION" style="font-size: 38px;color: #ffb606; 
      font-family: Forte; margin-top: 110px;">Book`S </p>
      <h2 class="text-center">TABLE</h2>

      <br>
      <br>
      <p class="text-center" style="color: gray">Opening Hour <b>8:00</b> AM - <b>10:00</b> PM, every day on week.</p>
    </div>
  </div>
</div>

<br>
<br>
<!-- table reservation  time/date-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
      <div class="form-group">
        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
          <input type="text" placeholder=" Time" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
          <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
          </div>
        </div>
      </div>  
      <script type="text/javascript">
        $(function () {
          $('#datetimepicker3').datetimepicker({
            format: 'LT'
          });
        });
      </script>
    </div>



    <div class="col-sm-2">
     <div class="form-group">
      <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="Date" />
        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker1').datetimepicker();
      });
    </script>


  </div>
  <div class="col-sm-3">
    <select class="colorful-select dropdown-primary" style="height: 36px;width: 250px; border-radius: 5px;">
      <option disabled selected>Choose your option</option>
      <option value="1">1 People</option>
      <option value="2">2 People</option>
      <option value="3">3 People</option>
      <option value="4">4 People</option>
      <option value="5">5 People</option>
      <option value="6">6 People</option>
      <option value="7">7 People</option>
      <option value="8">8 People</option>
      <option value="9">9 People</option>
      <option value="10">10 People</option>

    </select>
  </div>
  <div class="col-sm-2">
    <button  type="button" class="button1" style="
    background: #ffb606;
    border-color: #ffb606;
    transition: all .2s ease-in-out 0s;
    font-weight: 700;
    width: 250px;
    height: 40px;
    border-radius: 5px;
    margin-left: 45px; 
    color: #2a2a2a;">BOOK A TABLE</button>
    <p style="float: right; color: gray ;margin-right: 120px;font-size: 12px;">Reserve Now</p>

  </div>
</div>

</div>
<div  id="MENUScroll" style="background-image: url('MenuUpper.jpg'); 
height: 600px; margin-top: 100px; background-attachment: fixed;">
</div>


<!-- menu section -->

<div class="container-fluid">
  <div class="row">

    <div class="col-sm-2">

    </div>
    <div class="col-sm-8" style="margin-top: -60px"  >


      <div class="nav nav-tabs nav-fill"  role="tablist" style=" background-color: black;opacity: 0.5">
        <a class="nav-item nav-link "  data-toggle="tab" href="#JUNKSFOOD" role="tab" >
          <img src="junksfood.png"> <span style="color: yellow">JUNKSFOOD</span>
        </a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#DRINKS" role="tab">
          <img src="drinks.png"> <span style="color: yellow">DRINKS</span>

        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#CHEF" role="tab">
          <img src="chef.png"> <span style="color: yellow">CHEF</span>

        </a>
        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#COCKTAIL" role="tab">
          <img src="coctail.png"> <span style="color: yellow">COCKTAIL</span>
        </a>
      </div>



      <div class="tab-pane fade show active" id="JUNKSFOOD" role="tabpanel" style="margin-top: 100px;" >


        @parent
      </div>
      @endsection
      @section('Drinks')

      <div class="tab-pane fade" id="DRINKS" role="tabpanel"
      style="margin-top:-150px;" >
      @parent
    </div>
    @endsection
    @section('Chef') 
    <div class="tab-pane fade" id="CHEF" role="tabpanel" 
    style="margin-top:-190px;">
    @parent
  </div>
  @endsection
  @section('Coktail')
  <div class="tab-pane fade" id="COCKTAIL" role="tabpanel" 
  style="margin-top: -160px; ">

  @parent

</div>


</div>
</div>
</div>
@endsection
<!-- Threee Time lunch start-->
@section('Dinner')
<div style="background-image: url('Dinner.jpg');   background-size: cover; height: 300px; background-size: cover;margin-top: 200px; background-attachment: fixed;">
  <br><br><br><br><br><br>
  <h2><span style="color: white"><center><b> DINNER</b></center></span></h2>
</div>


<!-- Dinner section open -->

<div class="container-fluid">
  <div  class="row">
    <div class="col-sm-6">
     @parent

   </div>
   <div class="col-sm-6">

    @parent 

  </div>
</div>
</div>
@endsection

<!-- Dinner section closee -->

@section('lunch')
<div style="background-image: url('lunch.jpg');   background-size: cover; height: 300px; background-size: cover;margin-top: 200px; background-attachment: fixed;">
  <br><br><br><br><br><br>>

  <h2><span style="color: white"><center><b>LUNCH</b></center></span></h2>

</div>

<!-- lunch section open -->

<div class="container-fluid">
  <div  class="row">
    <div class="col-sm-6">
      @parent
    </div>
    <div class="col-sm-6">

      @parent

    </div>
  </div>
</div>
<!-- lunch section close -->
@endsection

<!-- Breakfast section open -->

<!-- lunch section closee -->
@section('Breakfast')
<div style="background-image: url('breakfast.jpg');   background-size: cover; height: 300px;width: 100%;background-position: 50% 195px;
margin-top: 100px;
background-attachment: fixed;">
<br><br><br><br><br><br>

<h2><span style="color: white"><center><b>BREAKFAST</b></center></span></h2>


</div>
<!-- BF section open -->

<div class="container-fluid">
  <div  class="row">
    <div class="col-sm-6">
      @parent
    </div>
    <div class="col-sm-6">

      @parent

    </div>
  </div>

</div>



<!-- breakfast section close-->

<div alt=""  id="EVENT" 
style=" background-image: url('eventpic.jpg');  background-size: cover; height: 300px;width: 100%;margin-top: 100px">
</div>

<!-- Breakfast section closeee -->


<!-- Menuuu totalllyy closeee -->

<div class="container-fluid">
  <div class="row">
   <!-- about Event Sections Tabs -->

   <div class="col-sm-8">


    <ul class="nav nav-pills" style="margin-top: 100px;margin-left: 200px">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#Happenning" style="width: 200px;opacity: 0.7">Happenning</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#Upcomming"  style="width: 200px;opacity: 0.7">Upcomming</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#Expired"  style="width: 200px;opacity: 0.7">
        Expired</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" style="margin-top: 70px;margin-left: 100px">

      <div class="tab-pane container active" id="Happenning"><span style="color: gray"><h4 class="text">Wine Testig</h4><br>
        <img src="chef.png" style="width: 110px;height: 120px">
        <br>

        <div  style="border-radius: 5px;border: 1px solid gray;width:240px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
          <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>

          <p style="color: #666666;margin-top: 20px">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos
         </p>

         <p style="color: #666666;">
           <span style="color: yellow;margin-left: 50px; font-size: 19px;opacity: 0.6"><b>31 </b></span> : &nbsp&nbsp&nbsp02:00 - 20:30
           <br> 
           <span style="color: yellow;margin-left: 50px; font-size: 14px;opacity: 0.6"><b>  AUG</b></span>
           &nbsp&nbsp&nbspPARIS
         </p>
       </div>


     </div>

     <div class="tab-pane container fade" id="Upcomming"><br>
       <span style="color: gray"><h4 class="text">Wine Testig</h4><br>
        <img src="gg.jpg" style="width: 210px;height: 170px">
        <div  style="border-radius: 5px;border: 1px solid gray;width:240px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
          <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>

          <p style="color: #666666;margin-top: 20px">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos
         </p>

         <p style="color: #666666;">
           <span style="color: yellow;margin-left: 50px; font-size: 19px;opacity: 0.6"><b>31 </b></span> : &nbsp&nbsp&nbsp02:00 - 20:30
           <br> 
           <span style="color: yellow;margin-left: 50px; font-size: 14px;opacity: 0.6"><b>  AUG</b></span>
           &nbsp&nbsp&nbspPARIS
         </p>
       </div>


     </div>


     <div class="tab-pane container fade" id="Expired"><br>
       <span style="color: gray"><h4 class="text">Wine Testig</h4><br>
        <img src="ice.jpg" style="width: 210px;height: 170px">
        <div  style="border-radius: 5px;border: 1px solid gray;width:240px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
          <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>

          <p style="color: #666666;margin-top: 20px">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos
         </p>

         <p style="color: #666666;">
           <span style="color: yellow;margin-left: 50px; font-size: 19px;opacity: 0.6"><b>31 </b></span> : &nbsp&nbsp&nbsp02:00 - 20:30
           <br> 
           <span style="color: yellow;margin-left: 50px; font-size: 14px;opacity: 0.6"><b>  AUG</b></span>
           &nbsp&nbsp&nbspPARIS
         </p>
       </div>
     </div>
   </div>   <!-- tabs portio closeee baby -->

 </div>
 <!-- about Event Sections Tabs closeeeeeee -->
 <!-- about bloggg-->

 <div  class="col-sm-4" style="margin-top: 100px">

  <div style="border:1px solid #ddd;width: 260px;">

    <h3 style="margin-top: 5px;" ><center>ABOUT BLOG</center></h3>
    <img src="blog.jpg" style="width: 100%;height: 80%s">
    <div style="margin-left: 20px;margin-top: 20px">
      <p style="color: gray">
        Pizza Hut was founded in 1958<br> by brothers Dan and Frank<br> Carney in their hometown of<br> Wichita, Kansas.<br> When a friend suggested opening a pizza<br> parlor—then a rarity—they<br> agreed that the idea could prove successful, <br>and they borrowed $600 from their mother <br>to start a business with partner John Benden.

      </p>

    </div>
  </div>

</div>   <!-- tab blog row closeee-->
</div>
</div>  


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1"> </div> 

    <!-- Recent POST open-->
    <div class="col-sm-3">

      <hr><span class="text">RECENT POSTS</span><hr>
      <br>
      <span class="text" style="font-size: 12px;">
      White Wine Cheesecake</span>
      <br>
      <span style="color: gray"><i> July 7, 2015</i></span>
      <br>
      <span class="text" style="font-size: 12px">
      Mac and Cheese Waffles</span>
      <br>
      <span style="color: gray"><i> July 7, 2015</i></span>
      <br>
      <span class="text" style="font-size: 12px">
      Easy Sparkling Sangria</span>
      <br>
      <span style="color: gray"><i> July 7, 2015</i></span>

      <br>
      <span class="text" style="font-size: 12px;" > 
        E6 Mixers You Should Absolutely Never Use
      </span>
      <br>
      <span style="color: gray"><i>May 5, 2015</i></span>

      <br>
      <span class="text" style="font-size: 12px;">
        The 5 Biggest Myths About Vodka
      </span>
      <br>
      <span style="color: gray"><i>May15, 2016</i></span>


      <br>
      <span class="text" style="font-size: 12px;">
      Easy Sparkling Sangria</span>
      <span style="color: gray"><i> July 18, 2015</i></span>
    </div>
    <!-- Recent POST closeeee-->

    <!-- Newss Latterrr -->
    <div class="col-sm-5">

      <div  style="margin-top: 33px;margin-left: 20px">
       GET OUR<sup style="color: gray;margin-left: 20px">Your email here</sup>
       <hr style="width: 140px;margin-left: -40px">
       NEWSLETTER

       <button style="background-color: black;color: white;border-radius: 5px;margin-left: 20px;font-size: 12px">
        <b>SIGN IN</b>
      </button>
    </div>

    <!-- Newss Latterrr  closee -->
  </div> 
  <!-- catagoriessss -->

  <div class="col-sm-3"> 

    <button class="btn btn-light" href="#demo" data-toggle="collapse"  style="float: right;
    margin-right: 310px;
    margin-top: 40px;
    position: relative;
    "> Catagories</button> 
    <div id="demo" class="collapse" >

      <div id="accordion"  style="width: 250px;margin-top: 100px">
        <div class="card">
          <div class="card-header">
            <a class="card-link text" data-toggle="collapse" href="#collapseOne">
              DESIGN
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link text" data-toggle="collapse" href="#collapseTwo">
            EVENT</a>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link text" data-toggle="collapse" href="#collapseThree">

            GALLERY</a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a  class="collapsed card-link text" data-toggle="collapse" href="#collapseFour">

            RECIPIES</a>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordion">
            <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <!-- catagoriessss -->
</div> 
</div>

<!-- our standar open -->

<div id="FEATURES" style="background-image: url('fotterup.jpg');   background-size: cover; height: 300px;width: 100%;margin-top: 150px;background-attachment: fixed;">
</div>

<div class="container-fluid">
  <div class="row">  
    <div class="col-sm-12">


      <div  style="text-align: center;">
       <span style=" font-size: 48px;color: #ffb606; 
       font-family: Forte;"> our</span> 
       <br>
       <span style="color: #2a2a2a;

       text-transform: none;
       font-size: 54px;
       font-weight: 800;
       font-style: normal;
       text-transform: none;">Standard</span>
       <br>

       <br>
       <br>
       <img src="curly.png" >
       <br><br><br><br>
     </div>

     <span style="color: gray"><center>Every so often you might have an outburst in the gallery.
     </center> </span>
     <br>
     <br>
     <br>
     <br>
   </div>
 </div>
</div>



<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-3">

      <div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
      </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

      <div   style=";color: yellow"><h5>4. Make deliberate choices with lighting.</h5>
      </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>

    </div>
    <div class="col-sm-2"></div>

    <div class="col-sm-3">

      <div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
      </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

      <div   style=";color: yellow"><h5>2. Never serve food that has expired.</h5>
      </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>


    </div>

    <div class="col-sm-1"></div>

  </div>
</div>

<!-- our standar close -->

<!-- our gallery  open -->


<div style="background-image: url('gallery.jpg');   background-size: cover; height: 300px;width: 100%;background-position: 50% 195px;
margin-top: 100px;
background-attachment: fixed;">
</div>
<div class="container-fluid">
  <div class="row">  
    <div class="col-sm-12">


      <div style="text-align: center;" >
        <span style=" font-size: 48px;color: #ffb606; 
        font-family: Forte;"> our</span> 
        <br>
        <span style="color: #2a2a2a;

        text-transform: none;
        font-size: 54px;
        font-weight: 800;
        font-style: normal;
        text-transform: none;">Gallery</span>
        <br>
        <br>
        <br>
        <br>

      </div>

      <span style="color: gray;"><center>Every so often you might have an outburst in the gallery
      </center> </span>
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
</div>  
<!--  gallery row  closeee  -->


<!--  whats newwww  opeeennnnn-->

<!--  Sliderrrrrrrrrr -->

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1"> </div>


    <div class="col-sm-3">
      <div  style="border: 1px solid #ddd;border:1px solid #ddd;width: 300px ;margin-top: 100px;height: 340px;color: #666;font-size: 12px" >


        <button class="w3-button w3-black w3-display-left btn btn-light" onclick="plusDivs(-1)" style="margin-left:10px;">&#10094;</button>

        <button class="w3-button w3-black w3-display-right btn btn-light" onclick="plusDivs(1)" style="float: right;  margin-right: 10px">&#10095;</button>

        <img class="mySlides" src="gg.jpg" style="width:84%;height:40%; margin-left: 25px">
        <img class="mySlides" src="Main_page.jpg" style="width:84%;height:40%;">
        <img  class="mySlides"   src="chef.jpg" style="width:84%;height:40%;">
        <img class="mySlides" src="lunch.jpg" style="width:84%;height:40%;">
        
        <img class="mySlides" src="ice.jpg" style="width:84%;height:40% ">
        <img class="mySlides" src="chef.png" style="width:84%;height:40%;">
        <br>

        <h4><span class="text" style="margin-left: 15px ;margin-top: 15px" ><b>Resturant</b></span></h4>
        Smoked quail, crispy egg, spelt, girolles, parsley
        <br>
        <br>

        <I> posted by<span style="color: #ddd"> Admin</span></I></p>
      </div>

      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              x[slideIndex-1].style.display = "block";  
            }
          </script>     
          <!------ slider script ---------->

        </div>

        <div class="col-sm-3"> 

          <div style="border:1px solid #ddd;width: 300px;;margin-top: 100px;height: 340px ">

            <h4 class="text"  style="margin-top: 15px; color:gray;margin-left: 75px" ><b>TWITTER</b></h4>
            <div style="margin-left: 20px;color: #666;font-size: 12px">
              Make sure you are following<span style="cursor: pointer;">@EnvatoMarket</span>
              for all your ThemeForest needs
              <br>
              <span style="color: #999999 ;font-size: 12px">Sep, 15 2014</span>
              <br>
              Eight marketplaces, one Envato Market. Join us:
              <a href=" http://t.co/cLo2w7rWOx" class="text" style="cursor: pointer;">http://t.co/cLo2w7rWOx</a>
              <br>
              Eight marketplaces, one Envato Market. Join us:
              <a href=" http://t.co/cLo2w7rWOx" class="text" style="cursor: pointer;">http://t.co/cLo2w7rWOx</a>
              <br>
              <span style="color: #999999 ;font-size: 12px">Aug, 13 2014</span>
              <br>
              <span style="color: yellow" >  @realseojoe</span> why thank you sir! We'd love to show
              <br><br>
              you around 🙂 ^Dan
              <br>
              <span style="color: #999999 ;font-size: 12px">Aug, 13 2014</span>

            </div>

          </div>

        </div>

        <div class="col-sm-3">
         <div style="border:1px solid #ddd;
         width: 300px;margin-top: 100px;color: #666;font-size: 12px">
           <a > 
            <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer; margin: 20px">
          </a>
          <a>
            <img src="ice.jpg" style="width:100px;height: 60px;cursor: pointer;">

          </a>
          <br>
          <a > 
            <img src="lunch.jpg" style="width:100px;height: 60px;cursor: pointer; margin: 20px">
          </a>
          <a>
            <img src="chef.jpg" style="width:100px;height: 60px;cursor: pointer;">

          </a>
          <br>
          <a > 
            <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer; margin: 20px">
          </a>
          <a>
            <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer;">

          </a>
          <br>
          <button type="button" style="height: 34px;width: 100px; font-size: 12px" class="btn btn-dark">
          Load More...</button>
          <button type="button" class="btn btn-primary" style="margin-left: 20px;font-size: 12px">Follow on Instagram</button> 

        </div>

        <!--  whats newwww closeeeeee -->


      </div>

      <div class="col-sm-1" > </div>

    </div>
  </div>

  <!--Complain----modelll Open-->

  <script>
    $(document).ready(function(){
      $("#myModal").on("show.bs.modal", function(event){
        // Place the returned HTML into the selected element
        $(this).find(".modal-body").load("/examples/php/remote.php");
      });
    });
  </script>
  <div style="margin-left: 200px;margin-top: 200px" id="COMPLAINS">
    <!-- Button HTML (to Trigger Modal) -->
    <hr style="margin-right: 800px">
    <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Give Complain</button>
    <hr style="margin-right: 800px">
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
      <div class="modal-dialog " style="margin-top: 250px;">
        <div class="modal-content justify-content-center align-items-center">

          <div class="modal-header">
            <h5 class="modal-title">Complains Show a Mirror</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <input type="text" name="Feed-Back" placeholder="Enter Complains" style="border-radius: 5px;height: 150px;width: 300px">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">OK, Got it!</button>
          </div>
        </div>
      </div>
    </div>

  </div> 

  <!--Complain----modelll Closseee-->



  <!-- this Blog section -->
  <div class="container-fluid" id="BLOG">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div  style="border: 1px solid #ddd;border:1px solid #ddd;
        margin-top: 100px;height: 400px" >
        <button class="w3-button w3-black w3-display-left btn btn-light" onclick="plusDivs(-1)" style="margin-left:10px;">&#10094;
        </button>

        <button class="w3-button w3-black w3-display-right btn btn-light" onclick="plusDivs(1)" style="float: right;  margin-right: 10px">&#10095;</button>
        <a href="#" class="text" style="font-size: 24px"><b><b><center> BLOGS</center></b></b></a>

        <img class="mySlides" src="chef.jpg" style="width: 600px;height: 300px" 
        alt="1">
        <img class="mySlides" src="cocktail.jpg" style="width: 600px;height: 300px" alt="2">
        <img class="mySlides" src="Blunch2.jpg" style="width: 600px;height: 300px" alt="3">
        <img class="mySlides" src="Blunch2.jpg" style="width: 600px;height: 300px"  alt="4">
        <img class="mySlides" src="BDinner1.jpg" style="width: 600px;height: 300px" alt="5">
        <img class="mySlides" src="BDinner2.jpg" style="width: 600px;height: 300px" alt="6">

        <br>
        <br>
        <br>
        <br>
        <h4><span class="text" style="margin-left: 15px ;color:#ddd">
          <b><center> Resturant Blogs</center></b></span></h4>
          <ul>
            <li><a href="#" class="text">Cookie and Kate.</a></li>
            <li><a href="#" class="text">Joy the Baker</a></li>
            <li><a href="#" class="text">Smitten Kitchen</a></li>
            <li><a  href="#" class="text">Gimme Some Oven</a></li>
          </ul>
          <br>
          <br>


        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>  

  </div>
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
      </script>     
      <!------ slider script ---------->

      <!-- this Blog section closeeee-->




      <!-- footterrrrrr opeeennn -->
      <div class="container-fluid">
        <div class="row" style="background-color: #181818;height: 420px;margin-top: 250px">

          <div  class="col-sm-12" style="margin-top: 100px">
            <center><img src="logo.png">
            </center>

            <br>
            <br>

            <p class="text-center" style="font-family: 'Roboto', sans-serif;      font-size: 16px; font-family: aileron;color: white" >
              329 Queensberry Street, North Melbourne VIC 3051, Australia.
            </p>


            <p class="text-center" style="font-family: 'Roboto', sans-serif;      font-size: 16px; font-family: aileron;color: white" >
              Call. <span class="text"> 0123 456 78910</span>
            </p>


            <p class="text-center" style="  font-family: 'Roboto', sans-serif;      ;font-size: 16px; font-family: aileron;color: white" >
              Email. <span class="text"> hello@yourmail.com</span>
            </p>


            <br>
            <br>
            <br>

            <hr style="
            margin-left: 300px;
            margin-right: 300px;
            border-style: inset;
            border-width: 3px;
            margin-top: -25px">

          </div>

        </div>

      </div>

      <!-- footterrrrrr clooosssseeeeee -->


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> 
      <script src="https://Kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
      @endsection

    </body>
    </html>



