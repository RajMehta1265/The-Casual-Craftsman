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
    <title>Chocolates</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="chocolates.css">
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
        <div class="chocolates-photos">
            <div class="content">
                <img src="https://rukminim2.flixcart.com/image/850/1000/khavrm80-0/chocolate/5/l/a/269-collection-assorted-chocolates-24-pieces-ferrero-rocher-original-imafxcaxeefygezx.jpeg?q=20&crop=false"
                    alt="Image 1">
                <div class="side">
                    <h3>Ferrero Rocher.</h3>
                    <p>Rs.1599.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://rukminim2.flixcart.com/image/850/1000/kq9ta4w0/chocolate/t/p/8/20-swiss-made-milk-chocolate-100g-pack-of-20-impoeted-1-original-imag4bnffzqyuzhh.jpeg?q=90&crop=false"
                    alt="Image 2">
                <div class="side">
                    <h3>Toblerone.</h3>
                    <p>Rs.2599.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://images-cdn.ubuy.co.in/656a3b2675f2700d9e6365d2-ghirardelli-intense-dark-chocolate.jpg"
                    alt="Image 3">
                <div class="side">
                    <h3>Ghirardelli Intense Dark.</h3>
                    <p>Rs.7338.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://images-cdn.ubuy.co.in/65233575a570656dfe576620-guylian-belgium-chocolates-22-piece.jpg"
                    alt="Image 4">
                <div class="side">
                    <h3>Guylian Artisanal Belgian <br>Chocolate.</h3>
                    <p>Rs.2309.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://m.media-amazon.com/images/I/51XnJ92uZ6L.jpg" alt="Image 5">
                <div class="side">
                    <h3>Hershey's Cookie & Cream.</h3>
                    <p>Rs.400.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://m.media-amazon.com/images/I/71alyXi5OOL._AC_UF1000,1000_QL80_.jpg"
                    alt="Image 6">
                <div class="side">
                    <h3>Cadbury Chocolates Combo.</h3>
                    <p>Rs.570.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://images-cdn.ubuy.co.in/633b17ff3dc73a1eac12ba44-schogetten-assortment-of-german.jpg"
                    alt="Image 7">
                <div class="side">
                    <h3>Schogetten Assortment 6 <br>Variety Pack.</h3>
                    <p>Rs.3261.</p>
                    <p>7 days</p>.
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://images-cdn.ubuy.co.in/6353f3997b1f410af9611b45-galaxy-milk-chocolate-block-114g.jpg"
                    alt="Image 8">
                <div class="side">
                    <h3>Galaxy Chocolate Combo.</h3>
                    <p>Rs.3725.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://www.jiomart.com/images/product/original/rvi0qvi1uk/nestle-chocolates-gift-hamper-chocolate-gift-for-diwali-anniversary-valentine-s-day-birthday-christmas-product-images-orvi0qvi1uk-p597535197-0-202301130829.jpg?im=Resize=(1000,1000)"
                    alt="Image 9">
                <div class="side">
                    <h3>Nestle Chocolates.</h3>
                    <p>Rs.300.</p>
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
      <form method = 'post' action = 'chocolates.php' name = 'form'>
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
    <script src="chocolate.js"></script>
    <script src="common.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>