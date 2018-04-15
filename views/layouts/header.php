<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eElectronics </title>
    
     <!-- Custom CSS -->
   
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
         <!-- Custom CSS -->
         
    <link rel="stylesheet" type="text/css" href="/template/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css"  href="/template/css/responsive.css">
    
    
    <!-- End mainmenu area -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                </div>
                
               <div class="user-menu">
                        <ul>
            <li><a href="/user/register"> Registration</a></li>
                             <?php if (User::isGuest()): ?>
                            <li><a href="/user/login">Login</a></li>
                            <?php else: ?>
                            <li><a href="/cabinet/">Cabinet</a></li>
                            <li><a href="/user/logout/">Logout</a></li>
                           <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="/site">e<span>Electronics</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    
      <div class="shopping-item">
                        <a href="/cart">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count" id="cart-count"><?php echo Cart::countItems();?></span></a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/site">Home</a></li>
                        <li><a href="/catalog">Shop</a></li>
                        <li><a href="/cart">Cart</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> 