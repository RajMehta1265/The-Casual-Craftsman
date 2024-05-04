<?php
require 'db.php';
if(isset($_POST['cart']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $days = $_POST['days'];

    $insert = "INSERT INTO `cart`(`name`, `price`, `days`) VALUES ('$name','$price','$days')";

    $result = mysqli_query($link , $insert);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- Button trigger modal -->


<!-- Modal -->

    

    <header>
        <div class="bar"></div>
        <nav class = "nav">
            <div class="logo">
                <img src="logo1.jpeg" alt="Logo">
            </div>
            <div class="center">
                <ul>
                    <li><a href="Sweet.php">Home</a></li>
                    <li class="dropdown">Shop
                        <div class="dropdown-content">
                            <a href="indian-sweets.php">Indian Sweets</a>
                            <a href="cakes-pastries.php">Cakes & Pastries</a>
                            <a href="chocolates.php">Chocolates</a>
                        </div>
                    </li>
                    <li class="dropdown">Ocassion
                        <div class="dropdown-content">
                            <a href="birthday.php">Birthday</a>
                            <a href="anniversary.php">Anniversary</a>
                            <a href="baby-shower.php">Baby Shower</a>
                            <a href="festival.php">Festivals</a>
                    <li><a href="about-us.php"> About Us</a></li>
                    <li><a href="https://forms.gle/EXHbX4fRAgMCCB26A">Feedback</a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li class="search-dropdown">
                        <ion-icon name="search-outline"></ion-icon>
                        <input type="text" id="sweet-name" placeholder="Enter the Sweet">
                         <div class="items-container">
                            <div class="item">
                              <!-- <button class="add-to-cart" data-name="diwali-sweet" data-price="999"></button> -->
                            </div>
                            
                          </div> 
                    </li>
                        <li><a href="login.php"><ion-icon name="person-outline"></ion-icon></a></li>
                    <li><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <p style="text-align: center; font-size: 2rem; color: rgb(65, 27, 19); margin-top: 20px;">Taste the Magic of Sweet
        Bliss With "The Casual Craftsman"</p>

    <div class="barimg">
        <img src="choco (1).jpg" alt="Image 1" id="sw1">
        <img src="sweet (1) (1).jpg" alt="Image 2" id="sw2">

    </div>

    

    <section class="top-sellers">
        <h1>Our Top Sweet Sellers</h1>
        <div class="sellers-container">
            <div class="seller-item">
                <img src="https://www.chitalebandhu.in/cdn/shop/files/Rasgulla-Image-_3_1024x1024.jpg?v=1697398551"
                    alt="Seller 1">
                <h3>Rasgulla</h3>
                <p>Price: Rs230 per Kg.</p>
                <p>Shelf Life: 7 days</p>
                
                <button  class = 'button' data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
            </div>
            <div class="sellers-container">
                <div class="seller-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXJzHnAdSd-Q94yFzNn2IER24uVIN42xjrdwDWmXU0gg&s"
                        alt="Seller 2">
                    <h3>Vanilla Chocolate Cake</h3>
                    <p>Price: Rs.2700 per Kg</p>
                    <p>Shelf Life: 2 days</p>
                    <button class='button'  data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
                <div class="sellers-container">
                    <div class="seller-item">
                        <img src="https://images-cdn.ubuy.co.in/656a3b2675f2700d9e6365d2-ghirardelli-intense-dark-chocolate.jpg"
                            alt="Seller 3">
                        <h3>Ghirardelli Intense Dark</h3>
                        <p>Price: Rs.7338 per Kg</p>
                        <p>Shelf Life: 7 days</p>
                        <button class='button'  data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                    </div>
                    <div class="sellers-container">
                        <div class="seller-item">
                            <img src="https://us.123rf.com/450wm/maxsheb/maxsheb1202/maxsheb120200569/12354527-chocolate-sweets.jpg"
                                alt="Seller 4">
                            <h3>Creamy Fudge</h3>
                            <p>Price: Rs.2700 per kg.</p>
                            <p>Shelf Life: 14 days</p>
                            <button class = 'button'  data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                        </div>
                        <div class="sellers-container">
                            <div class="seller-item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfKP2Xa3kntCgqaBEFeQvCb5wQH58SJwSs_mgooQbTSw&s"
                                    alt="Seller 5">
                                <h3>Craftman Special Love</h3>
                                <p>Price: Rs.7999</p>
                                <p>Shelf Life: 7 days</p>
                                <button class='button'  data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                            </div>
                            <div class="sellers-container">
                                <div class="seller-item">
                                    <img src="https://jenkinsons.com/sweet-shop/wp-content/uploads/sites/3/2020/10/bridal.jpg"
                                        alt="Seller 6">
                                    <h3>Coffee Shape Table.</h3>
                                    <p>Price: Rs.1799</p>
                                    <p>Shelf Life: 7 days</p>
                                    <button class='button'  data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                                </div>
                            </div>
    </section>

    <section class="contact">
        <h1>Contact Us</h1>
        <div class="contact-details">
            <p>The Casual Craftsman</p>
            <p>Dharmsinh Desai University,
                <br>College Road,
                <br>Uttarsanda,
                <br>Nadiad-387007.
            </p>
            <p>Email: thecasualcraftsman1211@gmail.com</p>
            <p>Phone: +91-9662810515</p>
        </div>
    </section>

   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method = 'post' action = 'sweet.php' name = 'form'>
      <div class="modal-body">
      <div class = 'cart'>conform to add to cart</div>
        <input type="hidden" name='name' id = 'name'>
        <input type="hidden" name='price' id = 'price'>
        <input type="hidden" name='days' id = 'days'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name = 'cart'>Conform to Cart</button>
      </div>
    </form>
    </div>

  </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- <script src="sample.js"></script>
    <script src="searchbar.js"></script> -->
    <script src="sweet.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>