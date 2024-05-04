<?php
require 'db.php';
// if($link)
// {
//     echo "connect";
// }
// else
// {
//     echo "top";
// }
if(isset($_POST['cart']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $days = $_POST['days'];

    $insert = "INSERT INTO `cart`(`name`, `price`, `days`) VALUES ('$name','$price','$days')";

    $result = mysqli_query($link , $insert);
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anniversary</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="anniversary.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="bar"></div>
         <nav class = 'nav'>
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
                    <li class="dropdown">Occasion
                        <div class="dropdown-content">
                            <a href="birthday.php">Birthday</a>
                            <a href="anniversary.php">Anniversary</a>
                            <a href="baby-shower.php">Baby Shower</a>
                            <a href="festival.php">Festivals</a>
                        </div>
                    </li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="https://forms.gle/EXHbX4fRAgMCCB26A">Feedback</a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li class="search-dropdown">
                        <ion-icon name="search-outline"></ion-icon>
                        <input type="text" id="sweet-name" placeholder="Enter the Sweet">
                    </li>
                    <li><a href="login.php"><ion-icon name="person-outline"></ion-icon></a></li>
                    <li><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="anniversary-photos">
            <div class="content">
                <img src="https://cdn.igp.com/f_auto,q_auto,t_pnopt19prodlp/products/p-premium-sweets-anniversary-gift-box-with-personalized-card-box-of-15--153102-m.jpg"
                    alt="Image 1">
                <div class="side">
                    <h3>Dryfruit Special.</h3>
                    <p>Rs.1500.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://m.media-amazon.com/images/I/5175eua3t0L.jpg"
                    alt="Image 2">
                <div class="side">
                <h3>Ghirardelli Intense Dark</h3>
                        <p>Rs.7338 per Kg</p>
                        <p>7 days</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://m.media-amazon.com/images/I/618PbVEAe4L._AC_UF1000,1000_QL80_.jpg"
                    alt="Image 3">
                <div class="side">
                    <h3>Tetra Anniversary Special.</h3>
                    <p>Rs.3999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://assets.giftalove.com/resources/common/giftimages/productimage1/F17-EXDFNP2032.jpg"
                    alt="Image 4">
                <div class="side">
                    <h3>Anniversary Special Cake <br>with Bouquet.</h3>
                    <p>Rs.1999.</p>
                    <p>7 days</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://imgcdn.floweraura.com/Happy%20Anniversary%20Cake.jpg" alt="Image 5">
                <div class="side">
                    <h3>Special Heart Shape Cake.</h3>
                        <p>Rs.1200. per Kg</p>
                        <p>7 days</p>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://cdn.igp.com/f_auto,q_auto,t_prodm/products/p-premium-sweets-birthday-gift-box-with-personalized-card-box-of-15--153103-m.jpg"
                    alt="Image 6">
                <div class="side">
                    <h3>Mix Sweet Combo.</h3>
                    <p>Rs.4999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://www.anniversaryideas.co.uk/wp-content/uploads/2022/07/sweet-as-sugar-6th-wedding-anniversary-gift-ideas-scaled.jpg"
                    alt="Image 7">
                <div class="side">
                    <h3>Bucket Special.</h3>
                    <p>Rs.1599.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfKP2Xa3kntCgqaBEFeQvCb5wQH58SJwSs_mgooQbTSw&s"
                    alt="Image 8">
                <div class="side">
                    <h3>Craftman Special Love.</h3>
                    <p>Rs.7999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://floristchennai.com/cdn/shop/products/WEDDING-ANNIVERSARY-CAKE_large.jpg?v=1680696749"
                    alt="Image 9">
                <div class="side">
                    <h3>Jubliee Special.</h3>
                    <p>Rs.999 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</h3>
        </button>
      </div>
      <form method = 'post' action = 'anniversary.php' name = 'form'>
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
    <script src="anniversary.js"></script>
    <script src="common.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>