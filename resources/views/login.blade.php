<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIBRARY RENTAL APP</title>

  <style>
  #ip2 {
       border-radius: 25px;
        border: 2px solid rgb(19, 154, 216);
        padding: 20px; 
        width: 300px;
        height: 30px;    
    }
    </style>

<style>

  #ip3 {
       border-radius: 10px;
        border: 0px solid rgb(19, 154, 216);
        padding: 5px; 
        width: 100px;
        height: 10px;  
    }
      
    </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body background="https://images.unsplash.com/photo-1484176141566-3674cda218f0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" style="height:100%; background-position: center; background-repeat: no-repeat; background-size: cover;" >

<nav class="navbar navbar-light" style="background-color: #ffffff;" style="color: rgb(252, 247, 247);">
    <!-- Navbar content -->
    <div class="container-fluid" style="background-color: #0a0a0a;">
      <a class="navbar-brand" href="#">Paging All Readers! <marquee><h1> <font style="font-family: 'Times New Roman', Times, serif ;color: rgb(253, 250, 250);"><b>A New Chapter Library Rental Service</b></font></h1></marquee></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span style="background-color: #0df3f3;" class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
           
            <a class="nav-link active" aria-current="page" href="/" style="font-size: 20px;color: rgb(247, 252, 247);">Home</a>
          </li>
          
          <!-- <li class="nav-item">
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Shopping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" style="font-size: 20px;color: rgb(247, 252, 247);">Inventory</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="font-size: 20px;color: rgb(247, 252, 247);">
             Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item"  href="/" style="font-size: 20px;color: rgb(8, 8, 8);"> Customer</a></li>
              <li><a class="dropdown-item"  href="/login" style="font-size: 20px;color: rgb(20, 20, 20);" >Admin</a></li>
              <li><a class="dropdown-item" href="#" style="font-size: 20px;color: rgb(243, 237, 237);"></a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="Gallery.html" tabindex="-1" aria-disabled="true" style="font-size: 20px;color: rgb(247, 252, 247);">Photo Gallery</a>
          </li> -->
        </ul>
        <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">
          <li>Phone: 91 - 484 - 2660601</li>
          <li>Fax: 91 - 484 - 2426578</li>
      </ul>
        
        
      </div>
    </div>
</nav>


<div class="container">
    <div class="row">
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="margin-top:100px">

        <nav class="navbar navbar-rgb(7, 7, 7);" >
            <div class="container-fluid">
              <span class="navbar-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-sm-5 col-lg-5 col-md-5 col-xl-12 col-xxl-12" >
                            <div class="item active" id="video">
                                <video id="video" muted autoplay="autoplay" loop="loop" preload="auto">
                                  <source src="https://dm0qx8t0i9gc9.cloudfront.net/watermarks/video/qEue9C6/words-letter-sphere-ball-communicate-information_nvkzmbucx__9658be38e9a1f0800dfa23c392926b88__P360.mp4"></source>
                                </video>
                              </div>
                    </div>
                </div>
              </span>
            </div>
          </nav>
         
      </div>
       <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">
       </div>
       <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">



       <form action="" method="post">
        {{ csrf_field() }}
      
        
      

        <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-top:100px">
          <div class="accordion-item">
          
          <h3 style='color:white'>Sign Up </h3><hr> 
        <table class="table table-borderless ">
      
          
          <tr>
            <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Name </ul> </td>
            <td><input name="uname" required type="text" autocomplete='off' class="form-control" placeholder="Name" id="ip2"></td>
        </tr>
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Username</ul> </td>
            <td><input name="usname" required autocomplete='off' type="text"  class="form-control" placeholder="Username" id="ip2"></td>
        </tr>
        <tr>
                           <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Address</ul></td>
                           <td> 
                            <textarea required name="uadd" autocomplete='off' class="form-control"  rows="2" placeholder="Address" id="ip2"></textarea>
                           </div></td>
                       </tr>
        
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);"> Email </ul></td>
            <td><input name="uemail" required autocomplete='off' type="email" class="form-control" placeholder="Email" id="ip2"></td>
        </tr>
        <tr>
            <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Mobile No </ul></td>
            <td><input name="usmob" required pattern='[0-9]{10,10}' autocomplete='off' type="text"  class="form-control" placeholder="Mobile No" id="ip2"></td>
        </tr>
        <tr>
                       <td> <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Gender</ul></td>
                       <td>
                            <input class="form-check-input" required type="radio" name="ugend" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                            <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Male</ul>
                            </label><br>
                            <input class="form-check-input" type="radio" name="ugend" id="flexRadioDefault2" value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                            <ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Female</ul>
                           </label><br>
                       </td>
        
                       </tr>
        
        <tr>
            <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Password</ul></td>
            <td><input name="upass"  required type="password" class="form-control" placeholder="Password" id="ip2"></td>
        </tr>
        <tr>
            <td><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);">Confirm Password</ul></td>
            <td><input name="ucpass" required type="password" class="form-control" placeholder="Confirm Password"  id="ip2"></td>
        </tr>
        <tr>
           
            <td colspan="2"><button type="submit"  class="btn btn-secondary"><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);" id="ip3">Submit</ul></button>
        
           <button class="btn btn-danger"><ul class="list-unstyled" style="font-size: 20px;color: rgb(247, 252, 247);" id="ip3">Reset</ul></button></td>
        </tr>
         
         
           
           </table>
           </form>
           
           <!-- </div>
          
          </div>
          </div> -->

        
      </div>
    </div>
  </div>




</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



