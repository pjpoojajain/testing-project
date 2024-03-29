
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2092 Shelf

http://www.tooplate.com/view/2092-shelf

-->
    <title>Apka Apna Bookstore</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type = "text/css" href="{{ url('css/font-awesome.min.css') }}">                <!-- Font Awesome -->
    <link rel="stylesheet" type = "text/css" href="{{ url('css/bootstrap.min.css') }}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type = "text/css" href="{{ url('css/tooplate-style.css') }}">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        
        <div class="container">
            <header class="tm-site-header">
                <h1 class="tm-site-name">Shelf</h1>
                <p class="tm-site-description">Your Online Bookstore</p>
                
                <nav class="navbar navbar-expand-md tm-main-nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                        <ul class="nav nav-fill tm-main-nav-ul">
                            <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Catalogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Awards</a></li>
                            <li class="nav-item"><a class="nav-link" href="team">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
                            <li class="nav-item"><div class="dropdown nav-link">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="login">Login</a>
                                <a class="dropdown-item" href="logout">Logout</a>
                                <a class="dropdown-item" href="addBook">Add Book</a>
                                <a class="dropdown-item" href="readOnline">Read Online</a>
                                <a class="dropdown-item" href="readOnline">order Online</a>
                                <a class="dropdown-item" href="readOnline">Rent</a>
                                <a class="dropdown-item" href="readOnline">Liberary</a>
                            </div>
                            </div></li>
                        </ul>
                    </div>
                </nav>
                
            </header>
            
            <div class="tm-main-content">
                <section class="tm-margin-b-l">
                    <header>
                        <h2 class="tm-main-title">Welcome to our bookstore</h2>    
                    </header>
                    
                    <p>Shelf HTML template is provided by Tooplate. Please tell your friends about it. Thank you. Images are from Unsplash website. In tincidunt metus sed justo tincidunt sollicitudin. Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat.</p>
                    
                    <div class="tm-gallery">
                        <div class="row">
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="{{ url('img/image-01.jpg') }}" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    
                                    <p class="tm-figcaption">Nam vitae odio</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-02.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Integer ornare</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-03.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Cras non augue</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-04.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Dolor lacus</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-05.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Quisque velit</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Suspendisse suscipit</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="{{ url('img/image-07.jpg') }}" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Facilisis justo</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-08.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Vivamus facilisis</p>
                                </a>
                            </figure> 
                        </div>   
                    </div>
                    
                    <nav class="tm-gallery-nav">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#">1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">3</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">4</a></li>                    
                        </ul>
                    </nav>
                </section>

                <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>    
                    </div>                    

                    <div class="media-body">
                        <header>
                            <h2>Need Help?</h2>
                        </header>
                        <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
                        <a href="" class="tm-white-bordered-btn">Live Chat</a>
                    </div>                    
                </section>
            </div>

            <footer>
                Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company 
                
                - Designed by Tooplate
            </footer>    
        </div>
        
        <!-- load JS files -->
        <script src="{{ url('js/jquery-1.11.3.min.js') }}"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{ url('js/popper.min.js') }}"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>             

</body>
</html>