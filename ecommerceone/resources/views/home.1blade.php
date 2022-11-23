@extends('layouts.base')

@section('content')
   <!-- page 1 start  -->
   <div class="container-fluid" id="page-1">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/imgs/carousel3.jfif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SOMETHING IS BETTER</h5>
            <h3>Fashion Lorrem</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/carousel1.jfif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SOMETHING IS BETTER</h5>
            <h3>Fashion Lorrem</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/imgs/carousel2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SOMETHING IS BETTER</h5>
            <h3>Fashion Lorrem</h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa-solid fa-angle-left fa-lg " style="color: black;padding-top: 8px;"></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa-solid fa-angle-right fa-lg" style="color: black; padding-top: 8px;"></i></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- page 1 end  -->
  <!-- page 2 start -->
  <div class="container" id="page-2">
    <div class="row">
      <div class="col-8">
        <div class="card" style="width: 95%; margin-right: 10%; " id="left-card">
          <img src="./assets/imgs/page2-left.jpg" class="card-img-top" alt="..." style="height: 370px;">
          <div class="card-body">
            <h7 class="card-title">HOT COLLECTION</h7>
            <h5 class="card-title">New Trend For women</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-secondary">Shop Now</button>
          </div>
        </div>
      </div>
      <div class="col-4" id="right-card">
        <div class="card" style="width: 100%;" >
          <img src="./assets/imgs/page2-right 1.jpg" class="card-img-top" alt="..." style="height: 243px;">
          <div class="middle">
            <button type="button" class="btn btn-outline-light" disabled>View Collection</button>
          </div>
        </div>
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/page2-right 2.jpg" class="card-img-top" alt="..."style="height: 243px;">
          <div class="middle">
            <button type="button" class="btn btn-outline-light" disabled>View Collection</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page 2 end -->
  <!-- page 3 start -->
  <div class="container" id="page-3">
    <div id="divider">
      <span>
        Featured Items 
      </span>
    </div>   
    <nav class="navbar navbar-expand-lg bg-white" aria-label="Tenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">               
            <li class="nav-item">
              <a class="nav-link" href="#">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Men</a>
            </li>               
            <li class="nav-item">
              <a class="nav-link" href="#">Women</a>
            </li>               
            <li class="nav-item">
              <a class="nav-link" href="#">Kids</a>
            </li>               
          </ul>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page 3 end  -->
  <!-- page 4 start -->
  <div class="container-fluid" id="page-4">
    <div class="row">
      <div class="col">
        <img src="./assets/imgs/background 1.jpg" alt="">
      </div>
      <div class="col">
        <img src="./assets/imgs/background 2.jpg" alt="">
      </div>
    </div>
  </div>
  <!-- page 4 end  -->
  <!-- page 5 start -->
  <div class="container" id="page-5">
    <div id="divider">
      <span>
        Trending Items 
      </span>
    </div>   
    <div class="row">
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="./assets/imgs/blouse.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <div class="row">
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-heart"></i>
                </div>
              </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              <div class="col">
                <div class="icon-container">
                  <i class="fa-solid fa-share-nodes"></i>
                </div>
              </div>
              <div class="col"></div>
              <div class="col"></div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col"></div>
      <div class="col d-flex  align-items-center justify-content-center">
        <button type="button" class="btn btn-outline-secondary">LOAD MORE</button>

      </div>
      <div class="col"></div>
    </div>
  </div>
  <!-- page 5 end -->
  <!-- page 6 start -->
  <div class="container-fluid" id="page-6"> <!-- e3mlelo media query lw fi w2t -->
    <div class="image-container">
      <img src="./assets/imgs/brown jacket.jfif" alt="" id="image1">
      <i class="fa-solid fa-quote-left fa-2xl"></i>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque earum, magnam iusto ipsam eius consequatur aperiam similique praesentium temporibus omnis, qui ad rem maxime veniam, quasi assumenda nostrum aliquid suscipit.</p>
      <img src="./assets/imgs/sunglasses guy.jpg" alt="" id="image2">
      <h4>SHAHINI AB ALAM</h4>
      <h5>CEO of TTCM</h5>
    </div>
  </div>
  <!-- page 6 end -->
  <!-- page 7 start -->
  <div class="container" id="page-7">
    <div id="divider">
      <span>
        Latest Blog
      </span>
    </div> 
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./assets/imgs/page 7 pic1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-secondary">READ MORE</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./assets/imgs/page7 pic2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-secondary">READ MORE</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./assets/imgs/page7 pic3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-secondary">READ MORE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page 7 end -->
  <!-- page 8 start -->
  <div class="container" id="page-8">
    <div id="divider">
      <span>
        Shop By Brand
      </span>
    </div> 
    <div class="row">
      <div class="col"><img src="./assets/imgs/brand.jpg" alt="" style="width:100%; height:75px; margin:3%;"></div>
      <div class="col"><img src="./assets/imgs/brand.jpg" alt="" style="width:100%; height:75px; margin:3%;"></div>
      <div class="col"><img src="./assets/imgs/brand.jpg" alt="" style="width:100%; height:75px; margin:3%;"></div>
      <div class="col"><img src="./assets/imgs/brand.jpg" alt="" style="width:100%; height:75px; margin:3%;"></div>
    </div>
  </div>
  <!-- page 8 end -->
@endsection
