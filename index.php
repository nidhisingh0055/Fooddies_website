<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 </head>
<body>

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\bg3.jpg" alt="Delicious meal" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Delicious meal</h3>
        <p>Pizza,French Fries,Nuggets</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\bg2.jpg" alt="Soup" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Soup</h3>
        <p>Vegetable Soup</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\bg4.jpg" alt="Burger" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Cake</h3>
        <p>Ready to Eat</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Best Sellers</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card" >
          <img class="card-img-top" src="images/pngwing7.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Kebab</h4>
            <p class="card-text">Rs.149</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card" >
          <img class="card-img-top" src="images\pngwing11.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Happy Meal</h4>
            <p class="card-text">Rs.349</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card" >
          <img class="card-img-top" src="images/pngwing9.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Marghareta</h4>
            <p class="card-text">Rs.259</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      

    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Categories</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images\sweet.jpg" class="img-fluid pb-4">
        <h4 class="card-title" align="Center">Sweets</h4>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images\namkeen.jpg" class="img-fluid pb-4">
        <h4 class="card-title" align="Center">Namkeen</h4>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images\bev.jpg" class="img-fluid pb-4">
        <h4 class="card-title" align="Center">Beverages</h4>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images\cookies.jpg" class="img-fluid pb-4">
        <h4 class="card-title" align="Center">Cookies</h4>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images\eat.jpg" class="img-fluid pb-4">
        <h4 class="card-title" align="Center">Ready To Eat</h4>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images\gift.jpg" class="img-fluid pb-4">
        <h4 class="card-title" align="Center">Gift Boxes</h4>
      </div>

    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">New Arrivals</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card" >
          <img class="card-img-top" src="images\idli.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Idli Wada</h4>
            <p class="card-text">Rs.129</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card" >
          <img class="card-img-top" src="images\sambar.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Sambar Wada</h4>
            <p class="card-text">Rs.119</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card" >
          <img class="card-img-top" src="images\Rava-Uttapam.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Rava-Uttapam</h4>
            <p class="card-text">Rs.149</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      

    </div>
  </div>
 </section>
  
<section class="my-5">
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/pngwing3.png" class="img-fluid aboutimg" >
      </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">About Us</h2>
      <p class="py-3 aboutpara">Over the course of eight decades, a lot has changed about us. We have relocated, undergone expansion, developed new product lines & added segments, opened retail chains & stores across India and embraced new markets overseas.
      One thing hasn’t changed - we’re still a tight-knit family business, committed to serving the most authentic taste of India through our products.
      Our origins can be traced back to a small namkeen shop in Bikaner founded by Ganga Bishan Agarwal (Haldiram Ji). This modest shop quickly gained popularity and scaled up to meet a booming demand for its unique-tasting bhujia. Building on this legacy, his grandson, our pioneer Mr. Shiv Kishan Agrawal steered the business towards the heights it has tasted today.
      <br>
      One thing hasn’t changed - we’re still a tight-knit family business, committed to serving the most authentic taste of India through our products.
      Our origins can be traced back to a small namkeen shop in Bikaner founded by Ganga Bishan Agarwal (Haldiram Ji). This modest shop quickly gained popularity and scaled up to meet a booming demand for its unique-tasting bhujia. Building on this legacy, his grandson, our pioneer Mr. Shiv Kishan Agrawal steered the business towards the heights it has tasted today.</p>
      <a href="about.php" class="btn btn-success"> Explore More</a>
      </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Want To Get Latest Updates!</h2>
    <h5 align="center">Sign Up For Free.</h5>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
       <div class="form-group">
        <label>Email-Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
       <div class="form-group">
        <label>Mobile No.</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
       <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@fooddiesProduction</p>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>