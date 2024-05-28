<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


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
      <img src="Images_dynamic/cc1.jpg" alt="Nature" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nature Infused</h3>
        <p>Enjoy the nature</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images_dynamic/cc2.jpg" alt="SelfCare" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Take Care</h3>
        <p>All you need time for yourself</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images_dynamic/cc3.jpg" alt="Bath" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Self Help</h3>
        <p>Relaxation is must</p>
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
        <h2 class="text-center">About Us</h2>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="Images_dynamic/abt.jpg" alt="about" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Hey, This is Clare </h2>
            <p class="py-2"> This is your skinacare buddy. I shall assist you with all the tips and tricks of skincare. Along with, the routines and ingredients.A good skin care routine is only as good as the products you use. While good quality products can help your skin look better now as well as in the future, poor quality products can be ineffective and even cause harm.</p>
            <a href="about.php" class="btn btn-info"> Know more</a>
        </div>
    </div>
</div>
</section>

<section id="service" class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Servies</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
    <img class="card-img-top" src="Images_dynamic/c1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Skin Care</h4>
                  <p class="card-text">Concerns, Solutions & Routines</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
            <img class="card-img-top" src="Images_dynamic/c2.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Body Care</h4>
                  <p class="card-text">Bathing Rituals, Care & Many more</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
    <img class="card-img-top" src="Images_dynamic/c3.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Internal Care</h4>
                  <p class="card-text">Food, Exercises & Self Care</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
          </div>
            
        </div>
     </div>

</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Gallery</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g1.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g2.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g3.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g4.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g5.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g6.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g7.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g8.jpg" class="img-fluid aimg pb-3">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images_dynamic/g9.jpg" class="img-fluid aimg pb-3">
        </div>
      </div>
    </div>
</section>

<section id="contact" class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" autocomplete="off"  class="form-control">
        </div>

        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off"  class="form-control">
        </div>

        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="off"  class="form-control">
        </div>

        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment">
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</section>
    
<footer>
  <p class="p-3 bg-dark text-white text-center">@Skincare Talks</p>

</footer>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>