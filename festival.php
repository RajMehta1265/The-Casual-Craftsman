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
    <title>Festival</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="festival.css">
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
        <div class="festival-photos">
            <div class="content">
                <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/11/diwali-sweets-recipes.jpg.webp"
                    alt="Image 1">
                <div class="side">
                    <h3>Diwali Sweet Combo.</h3>
                    <p>Rs.5999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://i.pinimg.com/originals/dd/1c/e9/dd1ce99af79733f10a858cc0baad1788.jpg"
                    alt="Image 2">
                <div class="side">
                    <h3>Ganesh Chaturthi Sweet Combo.</h3>
                    <p>Rs.7999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://www.jiomart.com/images/product/original/rvnljmznb0/kesar-sweets-lohri-makar-sankranti-snacks-sweets-gifting-hamper-box-sweet-sugar-fini-till-patti-gond-laddoo-navratan-mixture-mini-kachori-product-images-orvnljmznb0-p596809473-1-202212302034.jpg?im=Resize=(420,420)"
                    alt="Image 3">
                <div class="side">
                    <h3>Makar Sankrantri Sweet <br>Combo.</h3>
                    <p>Rs.6338.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://assets.vogue.in/photos/5fd9fcc4d8f3b5a5fec9f41a/master/w_1600%2Cc_limit/Christmas%2520Combo%2C%2520Bombay%2520Sweet%2520Shop.jpg"
                    alt="Image 4">
                <div class="side">
                    <h3>Christmas Special.</h3>
                    <p>Rs.5999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://i.pinimg.com/originals/aa/3a/91/aa3a9126709822cdc814f1a67b3caa8f.jpg" alt="Image 5">
                <div class="side">
                    <h3>Ram Navmi Special.</h3>
                    <p>Rs.4099.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://chokhidhanifoods.com/csadmin/public/img/uploads/blogs/1709715985.jpg"
                    alt="Image 6">
                <div class="side">
                    <h3>Maha Shivrati Special.</h3>
                    <p>Rs.9999.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://www.gifts-to-india.com/images/DFCSUUN157_big.webp"
                    alt="Image 7">
                <div class="side">
                    <h3>Paryushan Jain Special.</h3>
                    <p>Rs.3261.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://m.media-amazon.com/images/I/81QT8A3T8hL.jpg"
                    alt="Image 8">
                <div class="side">
                    <h3>Holi Special Combo.</h3>
                    <p>Rs.1599.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://m.media-amazon.com/images/I/71cZP6JLs6L._AC_UF894,1000_QL80_.jpg"
                    alt="Image 9">
                <div class="side">
                    <h3>Rakshabandhan Special.</h3>
                    <p>Rs.7990.</p>
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
      <form method = 'post' action = 'festival.php' name = 'form'>
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
    <!-- <script src="searchbar.js"></script> -->
    <script src="ser.js"></script>
    <script src="fest.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>