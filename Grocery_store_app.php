<?php
session_start();
session_regenerate_id();
$msg = "";
//include "../Web_App/db_stuff/db.php";
include "../Web_App/db_stuff/test_db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Grocery shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/master.css" rel="stylesheet" type="text/css" />
    <link href="css/dark-mode.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/producePage.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/8986e240e9.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/fu.ico" type="images/x-icon" />
</head>

<body>
    <?php
    if (!isset($_SESSION['user_name'])) {
        header("location: ../Web_App/login.php"); // redirects back to the login page 
    } else {
        $msg = "<h3> Welcome " . $_SESSION['user_name'] . "</h3>"; //this is shown on the navbar to show which is the user that is logged in
    }
    ?>
    <?php if (isset($_SESSION['user_name'])) { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="logo-image">
                <img src="images/135763.png" class="img-fluid">
            </div>
            <a class="navbar-brand">Grocery Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" <?php echo $msg ?> </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Products</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#cart"><i class="fa-solid fa-cart-shopping"></i>Cart</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark" id="butt3" data-toggle="modal" data-target="#contactDetails">Contact Us</button>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline" action="login_logout&registration/logout.php" method="post" id="signOut">
                            <button class="btn btn-dark" type="submit">Sign out</button>
                        </form>
                    </li>
                </ul>
                <div class="fixed-top">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                            <h5 class="text-white h4">Collapsed content</h5>
                            <span class="text-muted">Toggleable via the navbar brand.</span>
                        </div>
                    </div>
                </div>
                <img src="images/moon.png" id="icon">
        </nav>
        <br />
        <br />
        <br />
        <a id="category">
            <h2 style="text-align: center">Categories</h2>
            <div class="card-deck">
                <div class="card card border-success" id="cat">
                    <img class="card-img-top" src="images/cat_1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Vegetables</h5>
                        <p class="card-text">upto 30% off</p>
                        <br />
                        <!-- "#product" -->
                        <a class="btn btn-success btn-lg" href="https://impomu.com/" role="button"><span>Buy now </span></a>
                    </div>
                </div>
                <div class="card card border-warning" id="cat">
                    <img class="card-img-top" src="images/cat_2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Fruits</h5>

                        <p class="card-text">upto 44% off</p>
                        <br>
                        <!-- #product -->
                        <a class="btn btn-success btn-lg" href="https://impomu.com/" role="button"><span>Buy now </span></a>
                    </div>
                </div>
                <div class="card card border-danger" id="cat">
                    <img class="card-img-top" src="images/cat_3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Meat</h5>
                        <p class="card-text">upto 50% off</p>
                        <br>
                        <!-- #product -->
                        <a class="btn btn-success btn-lg" href="https://impomu.com/" role="button"><span>Buy now </span></a>
                    </div>
                </div>
            </div>
        </a>
        <!-- Product Pages -->
        <a id="product">
            <h2 style="text-align: center">Products</h2>
            <div class="produce" id="page_1">
                <div class="card-deck">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Orange</div>
                        <div class="card-body">
                            <img src="images/pro-1.jpg" width="200" height="150">
                            <p class="card-text">Price: $2.50</p>
                            <br>
                            <a data-name="Orange" data-price="2.50" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Strawberry</div>
                        <div class="card-body">
                            <img src="images/pro-2.jpg" width="200" height="150">
                            <p class="card-text">Price: $2.70</p>
                            <br>
                            <a data-name="Strawberry" data-price="2.70" class="btn btn-success btn-lg add-to-cart " role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Banana</div>
                        <div class="card-body">
                            <img src="images/pro-3.jpg" width="200" height="150">
                            <p class="card-text">Price: $1.90</p>
                            <br>
                            <a data-name="Banana" data-price="1.90" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Oat Milk</div>
                        <div class="card-body">
                            <img src="images/pro-4.jpg" width="200" height="150">
                            <p class="card-text">Price: $2.00</p>
                            <br>
                            <a data-name="Oat Milk" data-price="2.00" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Salmon</div>
                        <div class="card-body">
                            <img src="images/pro-5.jpg" width="200" height="150">
                            <p class="card-text">Price: $10.50</p>
                            <br>
                            <a data-name="Salmon" data-price="10.50" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produce" id="page_2" style="display: none">
                <div class="card-deck">
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Tomato</div>
                        <div class="card-body">
                            <img src="images/pro-6.jpg" width="200" height="150">
                            <p class="card-text">Price: $3.50</p>
                            <br>
                            <a data-name="Tomato" data-price="3.50" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Carrot</div>
                        <div class="card-body">
                            <img src="images/pro-7.jpg" width="200" height="150">
                            <p class="card-text">Price: $1.80</p>
                            <br>
                            <a data-name="Carrot" data-price="1.80" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Cheddar Cheese</div>
                        <div class="card-body">
                            <img src="images/pro-8.jpg" width="200" height="150">
                            <p class="card-text">Price: $4.80</p>
                            <br>
                            <a data-name="Cheddar Cheese" data-price="4.80" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Cherry Tomato</div>
                        <div class="card-body">
                            <img src="images/pro-9.jpg" width="200" height="150">
                            <p class="card-text">Price: $5.60</p>
                            <br>
                            <a data-name="Cherry Tomato" data-price="5.60" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Apples</div>
                        <div class="card-body">
                            <img src="images/pro-10.jpg" width="200" height="150">
                            <p class="card-text">Price: $1.60</p>
                            <br>
                            <a data-name="Apples" data-price="1.60" class="btn btn-success btn-lg add-to-cart" role="button"><span>Buy now</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page_buttons">
                <button type="button" class="btn btn-dark" id="butt1" onclick="producePage('page_1')">Page-1</button>
                <button type="button" class="btn btn-dark" id="butt2" onclick="producePage('page_2')">Page-2</button>
            </div>
        </a>
        <div class="modal fade" id="contactDetails" tabindex="-1" role="dialog" aria-labelledby="contactDetails" aria-hidden="true">
            <div class="modal-dialog modal-dialong-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="contactDetails">Contact Us</h4>
                        <button type="button" class="btn btn-primary close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Contact Details: 66568945</p>
                        <p>Send us through this number through WhatsApp or just call-in to enquire about our products</p>
                        <p>Vist the office at 10 Upper Aljunied Link 06-04 York International Ind Bldg Singapore 367904</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/xavierScripts.js" text="text/javascript"></script>
        <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartTable" aria-hidden="true">
            <div class="modal-dialog modal-dialong-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="cartTItle">Cart</h4>
                        <button type="button" class="btn btn-primary close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <section class="container content-section">
                            <div class="cart-row">
                                <span class="cart-item cart-header cart-column">Item</span>
                                <span class="cart-price cart-header cart-column">Price</span>
                                <span class="cart-quantity cart-header cart-column">Quantity</span>
                            </div>
                            <div class="cart-items">
                            </div>
                            <div class="cart-total">
                                <strong class="cart-total-title">Total</strong>
                                <span class="cart-total-price">$0</span>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary btn-purchase" type="button">Purchase</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</body>

</html>