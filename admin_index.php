<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penguin-fashion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/main-logo.jpg" type="images/x-icon">
</head>

<body>
    <header class="container background">
     
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="w-50" src="images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Product
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Jacket.php" target="_blank">Jackets</a></li>
                              <li><a class="dropdown-item" href="Bag.html">Bag</a></li>
                              <li><a class="dropdown-item" href="Shoes.php">Shoes</a></li>
                              <!-- <li><hr class="dropdown-divider"></li> -->
                         
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login/index.php">login/SignUp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carouselExampleControls" class="carousel slide panda-slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7">
                            <h1><span style="color: orange;">BE THE PENGUINS</span>
                                <h1>
                                    <h1>OF WINTER</h1>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, id.</p>
                                    <button class="btn btn-success"><i></i> EXPLORE NOW</button>
                        </div>
                        <div class="col-md-5">
                            <img src="images/profile2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="container">


        <div id="carouselExampleControls" class="carousel slide orange-bg" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1>Mega LCD TV For Sports</h1>
                        <p>This is the best tv in the world for people who just want to waste time in front of tv.</p>
                        <h1 class="price">$1200</h1>
                        <button class="buy-now-button">Buy Now</button>
                    </div>
                    <div class="col-md-5">
                        <img src="images/banner-images/tv.png" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                  <div class="row  align-items-center">
                      <div class="col-md-7">
                        <h1>Cool Dude Headphone</h1>
                        <p>This is the best headphone in the world for people who just want to waste time in front of funky world.</p>
                        <h1 class="price">$420</h1>
                        <button class="buy-now-button">Buy Now</button>
                      </div>
                      <div class="col-md-5">
                        <img src="images/banner-images/headphone.png" class="d-block w-100" alt="...">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="row align-items-center">
                      <div class="col-md-7">
                        <h1>X-Box for your living room</h1>
                        <p>This is the best x-box in the world for people who just want to waste time in front of fake sports.</p>
                        <h1 class="price">$600</h1>
                        <button class="buy-now-button">Buy Now</button>
                      </div>
                      <div class="col-md-5">
                        <img src="images/banner-images/xbox.png" class="d-block w-100" alt="...">
                      </div>
                  </div>
                  
              </div>
              <div class="carousel-item">
                  <div class="row align-items-center">
                      <div class="col-md-7">
                        <h1>redmi note 9 pro</h1>
                        <p><a href="https://search.yahoo.com/search?fr=mcafee&type=E210US91213G0&p=daffodil">
                            redmi note 9 pro </a></p>
                        <h1 class="price">$600</h1>
                        <button class="buy-now-button">Buy Now</button>
                      </div>
                      <div class="col-md-5">
                        <img src="images/bags/bag-1.png" class="d-block w-100" alt="...">
                      </div>
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>

    
        <section>
            <h1 class="men">MENS Fashion SITE</h1>
            <div>
                <!-- <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#shoes">Shoes</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#backpack">Backpack</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#subscribe">Subscribe</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div> -->
                <div class="container">
                    
                
                <div class="container categories">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="d-flex justify-content-between align-items-center cat1">
                        <h1>Watch</h1>
                        <img src="images/categories/watch.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex justify-content-between align-items-center cat2">
                        <h1>Bag</h1>
                        <img src="images/categories/bag.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex justify-content-between align-items-center cat3">
                        <h1>Shoes</h1>
                        <img src="images/categories/shoes.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
            
            
                <section id="about" class="container row d-flex align-items-center" style="margin-left: -40px; margin-top: 10%;">
                    <div class="icon col-md-5">
                        <div class="h-100 shadow card mb-3 rounded" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/icon (1).png" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Find the Perfect Fit</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 shadow card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/icon (2).png" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Exchanges</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural</p>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 shadow card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/icon (3).png" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Contact Our Seller</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural.</p>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center col-md-7" style="margin-left: 7px;">
                        <img src="images/XMLID 1.png" class="d-block w-100" alt="">
                    </div>
                </section>
                <section class="container" style="margin-top: 5%">
                    <h3 style="color: orchid; text-align: center;">Our Another store(online/offline)</h3>
                    <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel"
                        style="margin-left: -10px;">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/grocery.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="text-dark">Grocery Item/product</h4>
                                    <p class="text-dark">Fresh and healty fruits and others thing availabel</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/sports.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Worldclass sports Item</h5>
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/stationary.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-dark">Staionary item</h5>
                                    <p class="text-dark">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
        
                </section>
                
                <div class="container d-flex align-items-center justify-content-center orange-bg" id="subscribe">
                  <div>
                    <h3>LET'S STAY IN TOUCH</h3>
                    <h6>Get updates on sales, specials and more</h6>
                    <input class="form-control" type="text">
                    <button class="buy-now-button">SUBMIT</button>
                  </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center mt-5">
        <small>All rights reserve By Cipher_Shadow</small>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>