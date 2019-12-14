

<!DOCTYPE html>
<html>
<head>
  <title>Max Restaurant</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">

    @import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
  html{
    scroll-behavior: smooth;
  }
    body{ 
  
      height: 500px;
      background-image:url("Main_page_pic.jpg");
    width: 100%;
      background-repeat: no-repeat;
    }

    nav{
      position: fixed;
   
       width: 100%;
          z-index: 1;

      box-sizing: border-box;;
      transform: .4s;
    }
    nav.black{
      background: rgba(0,0,0,0.5);
      opacity: .9;
    }

    nav ul{
      float: right;
      padding: 0;
      margin-right: 150px;
      font-family: 'Roboto', sans-serif;
     
      text-transform: uppercase;
      cd /

      list-style: none;
    }

    button{
      list-style: 80px;
      padding: 5px 20px;

      font-family: 'Roboto', sans-serif;
      text-decoration: none;

      text-transform: uppercase;
      transition: .5s;
    }



    .dropbtn {
      background-color:  #ffffff;
      color: white;
      padding: 13px;
      border: none;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #ffffff;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index:1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {color:#ffb606;}

    .dropdown:hover .dropdown-content {display: block;}    

    .text:hover{
      color:#ffb606;

    }

    .hrh{
     border:         none;

     border-left:    1px solid hsla(200, 10%, 50%,100);
     margin-left: 1000px;
     margin-top: 20px;
     height:         5vh;
     width:          1px;  
   }

   .hrf{
     display: block;
     margin-top: 0.5em;
     margin-bottom: 0.5em;
     margin-left: 300px;
     margin-right: 300px;
     border-style: inset;
     border-width: 1px;
   }

   h2{
    color: #2a2a2a;
    font-size: 54px;
    font-weight: 800;
    font-style: normal;
    text-transform: none;
  }
  .button1:hover {
    background-color: red;
  }

.navbar-toggler-icon{
color: white;


}

</style>
<script  src="https://code.jquery.com/jquery-3.4.1.js"></script>




</head>
<body>




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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> 
   <!-- <script src="https://Kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script> 
 -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
    <img src="logo.png" style="margin-left: 10px;margin-top: 10px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
<li class="nav-item">
     
        
<a  class="btn dropdown nav-link text" style="color: white; font-size: 15px;" href="#MENUScroll" >
  <span  class="text">MENU</span></a>  

      </li>

<li class="nav-item">
  <div class="dropdown ">
         <a class="btn nav-link text" style="color: white; font-size: 15px;"><span class="text"> EVENT</span></a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
      </li>
     
     <li class="nav-item">
  <div class="dropdown ">
         <a class="btn nav-link text" style="color: white; font-size: 15px;"><span class="text"> RESERVATION</span></a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
      </li>
<li class="nav-item">
  <div class="dropdown ">
         <a class="btn nav-link text" style="color: white; font-size: 15px;"><span class="text"> FEATURES</span></a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
      </li>

       <li class="nav-item">
        
                <div class="dropdown">
        <a class="btn nav-link"href="#" style="color: white; font-size: 15px" ><span class="text"> BLOG</span>
        </a>
      </div>

      </li>
      
    </ul>
  </div>
</nav>
</div>

  

<div class="container-fluid">
  <div class="row">
   
  <div class="col-sm-12">
  
  <p class="text-center" style="font-size: 38px;color: #ffb606; 
  font-family: Forte; margin-top: 1100px;">Book`S </p>
  <h2 class="text-center"> TABLE</h2>

  <br>
  <br>
  <p class="text-center" style="color: gray">Opening Hour <b>8:00</b> AM - <b>10:00</b> PM, every day on week.</p>
</div>
</div>
</div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
<br>
<br>

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
  <p style="float: right; color: gray ;margin-right: 90px;font-size: 12px;"> powerd By Open Tab</p>

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


      <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>
   </div>

 <div class="tab-pane fade" id="DRINKS" role="tabpanel"
      style="margin-top:-150px;" >
    <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>


    </div>
    <div class="tab-pane fade" id="CHEF" role="tabpanel" 
    style="margin-top:-190px;">
    <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>
  </div>


  <div class="tab-pane fade" id="COCKTAIL" role="tabpanel" 
  style="margin-top: -160px; ">

    <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>

</div>


</div>
</div>
</div>

<!-- Threee Time lunch start-->



<div style="background-image: url('lunch.jpg');   background-size: cover; height: 300px; background-size: cover;margin-top: 200px; background-attachment: fixed;">
</div>
<!-- lunch section open -->

<div class="container-fluid">
<div  class="row">
  <div class="col-sm-6">
     <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>
</div>
  <div class="col-sm-6">
 
  <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>
 
  </div>
</div>
</div>
<!-- lunch section close -->

<!-- Breakfast section open -->


<div style="background-image: url('breakfast.jpg');   background-size: cover; height: 300px;width: 100%;background-position: 50% 195px;
margin-top: 100px;
background-attachment: fixed;">
</div>

<div class="container-fluid">
<div  class="row">
  <div class="col-sm-6">
     <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>
</div>
  <div class="col-sm-6">
 
  <div  style="border-radius: 5px;border: 1px solid gray;width:450px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
  <img   src="ice.jpg"  style="   
    font-weight: 700; height: 110px;width: 110px;
    text-transform: uppercase;    position: relative;">
  <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>
  <span  style="color: #666666; border-radius: 5px; border:1px solid gray;margin-left: 190px;">Price:
  <b><b>9.9</b></b></span>
  
    <span style="margin-left: 105px;color: #666666;margin-top: -30px">  Smoked quail, crispy egg, spelt, girolles, parsley</span>
</div>
 
  </div>
</div>

</div>



<!-- breakfast section close-->

<div alt="" 
 style=" background-image: url('eventpic.jpg');  background-size: cover; height: 300px;width: 100%;margin-top: 100px">
</div>

<div class="container-fluid">
<div class="row">

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

 <!-- about bloggg-->
<!-- about bloggg-->

<div  class="col-sm-4" style="margin-top: 100px">
  
  <div style="border:1px solid #ddd;width: 260px;">

    <h3 style="margin-top: 5px;" ><center>ABOUT BLOG</center></h3>
    <img src="blog.jpg" style="width: 100%;height: 80%s">
    <div style="margin-left: 20px">
      <p style="color: gray">
        Typi non habent claritatem insitam; est usus legentis in iis<br> qui facit eorum claritatem.<br> Investigationes demonstraverunt
    Typi non habent claritatem insitam; est usus legentis in iis<br> qui facit eorum claritatem.<br> Investigationes demonstraverunt
        Typi non habent claritatem insitam; est usus legentis in iis<br> qui facit eorum claritatem.<br> Investigationes demonstraverunt
        
 </p>

  </div>
</div>

</div>
</div>
</div>   <!-- tab blog row closeee-->

<!-- recent post open -->

<div class="container-fluid">
<div class="row">
<div class="col-sm-1"> </div> 
<div class="col-sm-3">
<!-- Recent POST -->
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

<div class="col-sm-5">
<!-- sign in button --> 
<div  style="margin-top: 33px;margin-left: 20px">
 GET OUR<sup style="color: gray;margin-left: 20px">Your email here</sup>
  <hr style="width: 140px;margin-left: -40px">
NEWSLETTER

<button style="background-color: black;color: white;border-radius: 5px;margin-left: 20px;font-size: 12px">
  <b>SIGN IN</b>
</button>
</div>

</div> 


<div class="col-sm-3"> 

<button class="btn btn-light" href="#demo" data-toggle="collapse"  style="float: right;
margin-right: 270px;
margin-top: 40px;
position: relative;
"> Catagories</button> 
<div id="demo" class="collapse" >

  <div id="accordion"  style="width: 250px;margin-right:240px ;margin-top: 70px">
    <div class="card" >
      <div class="card-header">
        <a class="card-link text" data-toggle="collapse" href="#collapseOne">
        DESIGN</a>
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
</div> 
</div>

<!-- our standar open -->
  
<div style="background-image: url('fotterup.jpg');   background-size: cover; height: 300px;width: 100%;margin-top: 450px;background-attachment: fixed;">
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
    
    <br>
    <br>
    <br>
    <br>
</div>

<span style="color: gray"><center>There are many variations of passages of Lorem Ipsum available.</center> </span>
<br>
<br>
<br>
<br>
</div>
</div>
</div>

   <!-- our standar close -->

   <!-- our gallery  open -->

<div class="container-fluid">
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-3" >
      
<div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
</div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

<div   style=";color: yellow"><h5>4. Make deliberate choices with lighting.</h5>
</div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>

  </div>
  <div class="col-sm-1"></div>
  
  <div class="col-sm-3">
      
<div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
</div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
 
<div   style=";color: yellow"><h5>2. Never serve food that has expired.</h5>
</div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>


  </div>

    <div class="col-sm-1"></div>
  
</div>
</div>
 <!-- our gallery close -->
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

<span style="color: gray;"><center> There are many variations of passages of Lorem Ipsum available.
</center> </span>
<br>
<br>
<br>
<br>
</div>
</div>
</div>   <!--  gallery row  closeee  -->

<!--  whats newwww  opeeennnnn-->

<!--  Sliderrrrrrrrrr -->

<div class="container-fluid">
<div class="row">
  <div class="col-sm-1"> </div>
  
  
  <div class="col-sm-3">
<div  style="border: 1px solid #ddd;border:1px solid #ddd;width: 300px ;margin-top: 100px;height: 340px" >


  <button class="w3-button w3-black w3-display-left btn btn-light" onclick="plusDivs(-1)" style="margin-left:10px;">&#10094;</button>

  <button class="w3-button w3-black w3-display-right btn btn-light" onclick="plusDivs(1)" style="float: right;  margin-right: 10px">&#10095;</button>

  <img class="mySlides" src="gg.jpg" style="width:84%;height:40%; margin-left: 25px">
  <img class="mySlides" src="Main_page.jpg" style="width:84%;height:40%;">
  <img class="mySlides" src="ice.jpg" style="width:84%;height:40% ">
  <img class="mySlides" src="chef.png" style="width:84%;height:40%;">
  <br>

  <h4><span class="text" style="margin-left: 15px ;color:#ddd" ><b>Resturant</b></span></h4>
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

    <div style="border:1px solid #ddd;width: 300px;;margin-top: 100px ">

      <h3 style="margin-top: 5px;margin-left: 75px" >TWITTER</h3>
      <div style="margin-left: 20px">
        Make sure you are following<span style="cursor: pointer;">@EnvatoMarket</span>
        for all your ThemeForest needs
        <br>
        <span style="color: #999999 ;font-size: 12px">Sep, 15 2014</span>
        <br>
        Eight marketplaces, one Envato Market. Join us:
        <a href=" http://t.co/cLo2w7rWOx" class="text" style="cursor: pointer;">http://t.co/cLo2w7rWOx</a>
        <br>
        <span style="color: #999999 ;font-size: 12px">Aug, 13 2014</span>
        <br>
        <span style="color: yellow" >  @realseojoe</span> why thank you sir! We'd love to show
        <br>
        you around 🙂 ^Dan
        <br>
        <span style="color: #999999 ;font-size: 12px">Aug, 13 2014</span>

      </div>

    </div>

  </div>

  <div class="col-sm-3">
 <div style="border:1px solid #ddd;width: 300px;margin-top: 100px">
     <a > 
      <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer; margin: 20px">
    </a>
    <a>
      <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer;">

    </a>
    <br>
    <a > 
      <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer; margin: 20px">
    </a>
    <a>
      <img src="gg.jpg" style="width:100px;height: 60px;cursor: pointer;">

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

  <div class="col-sm-1"> </div>

</div>
</div>
<div class="container-fluid">
<div class="row" style="background-color: #181818;height: 400px;margin-top: 50px">
 
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

  <hr class="hrf">

</div>


   </div>
   <div class="col-sm-3"></div>
  
</div>

</div>

</div>
<!-- modelll -->
<script>
$(document).ready(function(){
    $("#myModal").on("show.bs.modal", function(event){
        // Place the returned HTML into the selected element
        $(this).find(".modal-body").load("/examples/php/remote.php");
    });
});
</script>
<div >
    <!-- Button HTML (to Trigger Modal) -->
    <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Launch Demo Modal</button>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog " style="margin-top: 250px;">
            <div class="modal-content justify-content-center align-items-center">

                <div class="modal-header">
                    <h5 class="modal-title">Ajax Loading Demo</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Content will be loaded here from "remote.php" file -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">OK, Got it!</button>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>