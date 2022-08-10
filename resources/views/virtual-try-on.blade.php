
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>LVTO - Laravel Virtual Try-On Glasses</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="App and Saas Landing Template" />
        <meta name="keywords" content="Application, Clean, Saas, Dashboard, Bootstrap, Tailwind" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="assetsfront/images/favicon.ico">
        <!-- Bootstrap css -->
        <link href="assetsfront/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="assetsfront/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
        <link href="assetsfront/css/twentytwenty.css" rel="stylesheet" type="text/css" />
        <!-- Main css File -->
        <link href="assetsfront/css/style.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('demo-style.css')}}" type="text/css" media="screen" rel="stylesheet" />
        <link href="{{asset('hint.min.css')}}" type="text/css" media="screen" rel="stylesheet" />
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="80" onload="grabNotices()" >
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="#">
                    <img src="assetsfront/images/logo-dark.png" alt="">
                </a>
                <div class="buy-button">
                    <a href="#" target="_blank">
                        <span class="btn btn-primary d-none d-md-inline-block"><i class="mdi mdi-cart-outline"></i> Download code</span>
                        <span class="btn btn-icon btn-primary d-inline-flex d-md-none ms-1"><i class="mdi mdi-cart-outline"></i></span>
                    </a>
                </div><!--end login button--><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu" id="navmenu-nav">
                        <li class="has-submenu">
                            <a href="#home">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#demos">Try on</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#features">Glasses</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#features">About us</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#features">Contact us</a>
                        </li>
                        
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div>
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Home Start -->
        <section class="bg-half-170 pb-0 d-table w-100 bg-soft-primary" style="background: url('assetsfront/images/home-shape.png')center center;" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        
                        <div class="title-heading">
                            <img src="assetsfront/images/png_sunglasses_34606.png" style="width:300px" alt="">
                            
                            <h4 class="heading fw-bold mt-4 mb-3">Virtual try on for <span class="typewrite text-primary" data-period="2000" data-type='[ "Sun glasses", "Eye glasses", "Sytelist glasses"]'></span></h4>
                            <p class="para-desc text-muted mx-auto">Basic <span class="text-primary fw-bold">Virtual Try-On Glasses</span> in the Web. This project is designed to handle trying glasses on the face as 3D by using Mediapipe Facemesh.</p>
                            <div class="mt-4 pt-2"> 
                                
                                <a href="#" class="btn btn-primary rounded mouse-down me-2 mb-2">Contact me</a>
                                <a href="#" target="_blank" class="btn btn-outline-primary rounded mb-2">Download code</a>
                            </div>
                            <div class="mt-5 d-md-block d-none position-relative" style="z-index: 1;">
                                
                                <a href="javascript:void(0)" data="glasses/dkny.png" frameH="1/5" >
                                    <img src="glasses/dkny-angle.jpg" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-2 bg-white rounded-circle shadow-sm btn-outline-primary  " data-bs-toggle="tooltip" data-bs-placement="top" title="Eye Glass 1" alt="">
                                </a>
                                <a href="javascript:void(0)" data="glasses/rayban.png" frameH="1/5" >
                                    <img src="glasses/rayban-angle.jpg" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-2 bg-white rounded-circle shadow-sm btn-outline-primary  " data-bs-toggle="tooltip" data-bs-placement="top" title="Eye Glass 2" alt="">
                                </a>
                                <a href="javascript:void(0)" data="glasses/glass3.png" frameH="1/5" >
                                    <img src="glasses/purpolside.png" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-2 bg-white rounded-circle shadow-sm btn-outline-primary  " data-bs-toggle="tooltip" data-bs-placement="top" title="Eye Glass 3" alt="">
                                </a>
                                <a href="javascript:void(0)" data="glasses/oakley.png" frameH="1/4" >
                                    <img src="glasses/oakley.jpg" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-2 bg-white rounded-circle shadow-sm btn-outline-primary  " data-bs-toggle="tooltip" data-bs-placement="top" title="Eye Glass 4" alt="">
                                </a>
                                <a href="javascript:void(0)" data="glasses/new1.png" frameH="1/5" >
                                    <img src="glasses/redglass.webp" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-2 bg-white rounded-circle shadow-sm btn-outline-primary  " data-bs-toggle="tooltip" data-bs-placement="top" title="Eye Glass 5" alt="">
                                </a>

                                
                            </div>

                            <div class="container">
                                
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                        
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                        <div class="d-flex key-feature align-items-center bg-white p-3 rounded shadow btn-outline-primary  ">
                                            <div style="border:1px solid #000;">
                                                <div id="tryonpreview0" class="tryon"></div>
                                                <div id="tryonbar0" class="tryon-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                    
                                    </div>
                
                                    
                                </div>
                            </div>

                            
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="mt-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i data-feather="chevron-up" class="icons"></i>
        </a>
        <!-- Back to top -->
        
        <!-- javascript -->
        <script src="assetsfront/js/jquery.min.js"></script>
        <script src="assetsfront/js/bootstrap.bundle.min.js"></script>
        <script src="assetsfront/js/gumshoe.polyfills.min.js"></script>
        <!-- Icon -->
        <script src="assetsfront/js/feather.min.js"></script>
        <!-- TYPED -->
        <script src="assetsfront/js/typed.init.js"></script>
        <script src="assetsfront/js/jquery.event.move.js"></script>
        <script src="assetsfront/js/jquery.twentytwenty.js"></script>
        <!-- Main Js -->
        <script src="assetsfront/js/app.js"></script>

        <script type="text/javascript" src="{{asset('assets/scripts/app.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/settings.js')}}"></script>
        <!-- <script type="text/javascript" src="assets/Worker.js"></script> -->
        <script type="text/javascript" src="{{asset('assets/tracking-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/eye-min.js')}}"></script>
        <script type="text/javascript"> 
            /*var tryon = new Tryon();
            last_tryon = tryon;
            tryon.initApp(defaultTryon,defaultBar);*/
        </script>
    
        <script type="text/javascript">
            var tryOnActive='tryonpreview0';
            var last_tryon=null;
            var defaultTryon='tryonpreview0';
            var defaultBar = 'tryonbar0';
            settings_tryon.currentFrame="glasses/oakley.png";
            settings_tryon.tryonActive="tryonpreview0";
    
            function showVto(tryonId,barId){
            EventListener.dispatch("MULTI_DESTROY",this);
            settings_tryon.activeTryOn=tryonId;
            tryOnActive=tryonId;
           
            if(last_tryon!=null){
                last_tryon.destroyAll();
            }
    
            var tryon = new Tryon();
            last_tryon = tryon;
            tryon.initApp(tryonId,barId);
    
    
            }
            showVto(defaultTryon, defaultBar);
            function showalert(event, elem){
                //console.log(event);
                return false;
            }
    
            function grabNotices(){
                EventListener.addEventListener("requestAllowCamera", allowCamNotice);
                EventListener.addEventListener("cameraPermissionDenied", allowCamNotice);
                EventListener.addEventListener("noCamFound", allowCamNotice);
               
            }
    
            function allowCamNotice(){
                alert("Please allow camera, in order to grab a pic");
            }
    
            function webcamready(){
                alert("webcam loaded");
            }
            var elem = document.getElementsByTagName("li");
            for( var i=0; i<elem.length; i++){
                elem[i].addEventListener("click", applyFrame);
            }
            var elem = document.getElementsByTagName("a");
            for( var i=0; i<elem.length; i++){
                elem[i].addEventListener("click", applyFrame);
            }
            function applyFrame(evt) {
                var imageName = evt.currentTarget.getAttribute("data");
                var framePos = evt.currentTarget.getAttribute("frameH");
                EventListener.dispatch("APPLY_FRAME", this, imageName, tryOnActive, framePos);
            }
        </script>

    </body>

</html>