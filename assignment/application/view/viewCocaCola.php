<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='./application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./application/css/custom.css" crossorigin="anonymous">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Koulen&display=swap');
</style>
      <!-- Lets have some fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
   
    
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="./application/css/jquery.fancybox.min.css">
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <?php $data = $_SESSION["data"];?>
    
    <title>Coca Cola Virtual Museum</title>

  </head>
  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div id="logo" class="logo">
              <a class="navbar-brand" href="#">
                <h1 style="font-family: Koulen">Coca Cola Journey</h1>
              </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" >About</a>
                  </li>
                  <li class="nav-item">
                    <a id="navGallery" class="nav-link"  href="#" >Gallery</a>
                  </li>
              
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" >Models</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="javascript:changeLook()">Restyle</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="javascript:changeBack()">Reset</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
            </div>
      </nav>

      
      
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            
            <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"><h2><?php echo $data[3]['modelTitle'] ?></h2></div>
                        <div id="subTitle_home"><h3><?php echo $data[3]['modelSubtitle'] ?></h3></div>
                        <div id="description_home"><p><?php echo $data[3]['modelDescription'] ?></p></div>
                      </div> 
                    </div>
              </div>
            </div>  

            <!-- A row to hold three cards -->
            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="./application/assets/images/cokerender2.png" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="./application/assets/images/coke_tn.jpg" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"><h2><?php echo $data[0]['modelTitle'] ?></h2></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"><h3><?php echo $data[0]['modelSubtitle'] ?></h3></div>
                                <div id="description_left" class="card-text drinksText"><p><?php echo $data[0]['modelDescription'] ?></p></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-success btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="./application/assets/images/zerorender.png" data-fancybox data-caption="My 3D Coca Cola Zero Glass Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="./application/assets/images/zero_tn.jpg" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"><h2><?php echo $data[1]['modelTitle'] ?></h2></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"><h3><?php echo $data[1]['modelSubtitle'] ?></h3></div>
                            <div id="description_centre" class="card-text drinksText"><p><?php echo $data[1]['modelDescription'] ?></p></div>   
                            <a href="https://www.coca-cola.co.uk/brands/coca-cola-zero-sugar" class="btn btn-success btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="./application/assets/images/costarender.png" data-fancybox data-caption="My 3D Costa Coffee Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="./application/assets/images/costa_tn.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"><h2><?php echo $data[2]['modelTitle'] ?></h2></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"><h3><?php echo $data[2]['modelSubtitle'] ?></h3></div>
                            <div id="description_right" class="card-text drinksText"><p><?php echo $data[2]['modelDescription'] ?></div>   
                            <a href="https://www.costa.co.uk/behind-the-beans/our-story/history" class="btn btn-success btn-responsive">Find out more ...</a>
                            
                          </div>
                      </div><br><br><br><br><br><br>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <div id="about" style="display:none;">
          <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <h2>About</h2>
                        <h3>Deeper Understanding</h3>
                        <p>Deeper understanding in the assignment is demonstarted by 3D modelling that went beyond the scope of labs - experimenting with glass textures and modelling a costa coffe cup with fairly complex lid.</p>
                        <p> In addition, three camera animations were produced and rendered as .avi files and then converted to .mp4 to embed in the website. A bootstrap carousel was created and instead of using images, videos were placed inside video tags as carousel elements. One of the animation cameras is also added as a 3D model interactions button</p>
                        <p> 3D assets were rendered for main page gallery and thumbnail images created on Photoshop. Individual styling was used throughout the website</p>

</div></div></div></div>
          </div>  </div>

          <div id="carousel" style="display:none;">
              
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <video class="img-fluid" autoplay loop muted>
        <source src="./application/assets/cokeanim2.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
    <video class="img-fluid" autoplay loop muted>
        <source src="./application/assets/zeroanim.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
    <video class="img-fluid" autoplay loop muted>
        <source src="./application/assets/costaanim.mp4" type="video/mp4" />
      </video>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          </div>  
          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                  <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coca Cola</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Coca Cola Zero</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Costa Coffee</button>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                    
                        <div id="x3dModelTitle_coke" class="card-title drinksText"><h2><?php echo $data[0]['x3dModelTitle'] ?></h2></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"><h2><?php echo $data[1]['x3dModelTitle'] ?></h2></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"><h2><?php echo $data[2]['x3dModelTitle'] ?></h2></div>
                        
                       
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="./application/assets/x3d/coke1.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="./application/assets/x3d/glass2.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="./application/assets/x3d/costa.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"><?php echo $data[0]['x3dCreationMethod'] ?></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"><?php echo $data[1]['x3dCreationMethod'] ?></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"><?php echo $data[2]['x3dCreationMethod'] ?></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 3D image gallery -->
              
           
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Camera</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraAnimate();">Animate</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
               
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-light btn-responsive" onclick="spin();">Rotate</a>
                          
                          <a href="#" class="btn btn-dark btn-responsive" onclick="stopRotation();">Stop</a>

    
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons start and stop the rotation of coca cola can</p>
                          </div>
                        </div>
                      </div>
                
                <!-- Column for the render type and lighting controls -->
                
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#" >Render</a>
                              
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active" href="#" >Lights</a>
                      
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="headlight();">Headlight</a>
                          
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->

          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"><h2><?php echo $data[0]['modelTitle'] ?></h2></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"><h3><?php echo $data[0]['modelSubtitle'] ?></h3></div>
                          <div id="description_coke" class="card-text drinksText"> <p><?php echo $data[0]['modelDescription'] ?></p></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-success btn-responsive">Visit Coca Cola</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText"><h2><?php echo $data[1]['modelTitle'] ?></h2></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"><h3><?php echo $data[1]['modelSubtitle'] ?></h3></div>
                          <div id="description_sprite" class="card-text drinksText"><p><?php echo $data[1]['modelDescription'] ?></p></div>  
                        <a href="https://www.coca-cola.co.uk/brands/coca-cola-zero-sugar" class="btn btn-success btn-responsive">Visit Coca Cola Zero</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"><h2><?php echo $data[2]['modelTitle'] ?></h2></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"><h3><?php echo $data[2]['modelSubtitle'] ?></h3></div>
                        <div id="description_pepper" class="card-text drinksText"><p><?php echo $data[2]['modelDescription'] ?></p></div>  
                        <a href="https://www.costa.co.uk/behind-the-beans/our-story/history" class="btn btn-success btn-responisve">Visit Costa</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End costa description contents -->

      </div> <!-- End 3D App SPA Contents -->
      <br>
      <br>
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2022 3D Apps | Alise Darta Silina</span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="https://www.facebook.com/cocacolaGB"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://twitter.com/cocacola/?lang=en"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="https://www.linkedin.com/company/the-coca-cola-company/"><i class="fab fa-linkedin fa-2x"></i></a>
                  <a href="https://github.com/alisedarta/Web-3D-App"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      <!-- My 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Owner Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Alise Darta Silina, ads35@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="./application/js/popper.min.js" crossorigin="anonymous"></script>
      
      <script src="./application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="./application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="./application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="./application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='./application/js/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="./application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="./application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="./application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="./application/js/jquery.fancybox.min.js"></script>
  </body>
</html>