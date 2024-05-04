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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby-Shower</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="baby-shower.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php require 'tocart.php'; ?>

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
                    <li><a href="about-us.php"> About Us</a></li>
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
        <div class="baby-shower-photos">
            <div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0gIGuJSbcnXkc1rWtXGZYMIl7JtpFKQKheaXWV2iX2Q&s"
                    alt="Image 1">
                <div class="side">
                    <h3>Dessert Table Special.</h3>
                    <p>Rs.1299.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://i.redd.it/nyuvfqrohpf41.jpg"
                    alt="Image 2">
                <div class="side">
                    <h3>Cup Cake with Biscuit <br>and Sweet.</h3>
                    <p>Rs.3999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://i.pinimg.com/564x/ff/32/9a/ff329a87b780c74cf0ebff592548f0b8.jpg"
                    alt="Image 3">
                <div class="side">
                    <h3>Blueberry SpecialShower <br>Table.</h3>
                    <p>Rs.12999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://images.ctfassets.net/iyiurthvosft/featured-img-of-post-212051/4fc867d6ea14da9eaa5460033b20284a/featured-img-of-post-212051.png?fm=jpg&fl=progressive&q=50&w=1200"
                    alt="Image 4">
                <div class="side">
                    <h3>Baby Size Cup Strawberry <br> Special.</h3>
                    <p>Rs.1999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://www.partyideasuk.co.uk/Portals/0/NBStore/images/rqMggwPr.jpg" alt="Image 5">
                <div class="side">
                    <h3>Cone Shape Blueberry.</h3>
                    <p>Rs.1299.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://pbs.twimg.com/media/ESsdKwmXgAEiq0y.jpg"
                    alt="Image 6">
                <div class="side">
                    <h3>Milk Bottle Shape Cake.</h3>
                    <p>Rs.2999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://jenkinsons.com/sweet-shop/wp-content/uploads/sites/3/2020/10/bridal.jpg"
                    alt="Image 7">
                <div class="side">
                    <h3>Coffee Shape Table.</h3>
                    <p>Rs.1799.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://i.etsystatic.com/24683903/r/il/5e24f9/4108490105/il_fullxfull.4108490105_emgh.jpg"
                    alt="Image 8">
                <div class="side">
                    <h3>Choco Special.</h3>
                    <p>Rs.1799.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://www.sweetesbakeshop.com/cdn/shop/products/Baby_20Shower_20Dessert_20Table_d57bfbe3-9213-46c8-a67e-a42abe95a308.jpg?v=1681501344"
                    alt="Image 9">
                <div class="side">
                <h3>Shower Special With <br> Arrangment.</h3>
                    <p>Rs.19999.</p>
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
      <form method = 'post' action = 'baby-shower.php' name = 'form'>
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
    <script src="babyshower.js"></script>
    <script src="common.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>