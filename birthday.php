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
    <title>Birthday</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="birthday.css">
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
        <div class="birthday-photos">
            <div class="content">
                <img src="https://totallychocolate.com/wp-content/uploads/2017/05/custom-cookie-box-personalized-logo-on-chocolate.jpg"
                    alt="Image 1">
                <div class="side">
                    <h3>Caramel Chocolate.</h3>
                    <p>Rs.500 per Kg.</p>
                    <p>15 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://content.jdmagicbox.com/comp/dehradun/c1/9999px135.x135.170606114800.d4c1/catalogue/kalra-sweet-shop-prem-nagar-dehradun-sweet-shops-aw562qkff0.jpg"
                    alt="Image 2">
                <div class="side">
                    <h3>Kalra Kracks.</h3>
                    <p>Rs.700 per Kg.</p>
                    <p>9 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://imagedelivery.net/9sCnq8t6WEGNay0RAQNdvQ/UUID-cl90fni8y609244vmqy0e93zoea/public"
                    alt="Image 3">
                <div class="side">
                    <h3>Hazelnut Cup.</h3>
                    <p>Rs.1200 per Cup.</p>
                    <p>3 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://us.123rf.com/450wm/maxsheb/maxsheb1202/maxsheb120200569/12354527-chocolate-sweets.jpg"
                    alt="Image 4">
                <div class="side">
                    <h3>Creamy Fudge.</h3>
                    <p>Rs.2700 per kg.</p>
                    <p>14 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://generations.krea.ai/images/69fd133d-d94f-435a-a3c9-befa94a39307.webp" alt="Image 5">
                <div class="side">
                    <h3>Wine taste Cream.</h3>
                    <p>Rs.3500 per cup.</p>
                    <p>3 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://thumbs.dreamstime.com/z/thai-sweet-dessert-rose-shape-bake-cray-as-soil-motal-unique-style-thai-sweet-dessert-rose-shape-bake-cray-as-soil-198729480.jpg"
                    alt="Image 6">
                <div class="side">
                    <h3>Rose Coates.</h3>
                    <p>Rs.300 per Kg.</p>
                    <p>5 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://b3230406.smushcdn.com/3230406/wp-content/uploads/2020/08/img_7292-1.jpg?lossy=2&strip=1&webp=1"
                    alt="Image 7">
                <div class="side">
                    <h3>Tricombo Taste.</h3>
                    <p>Rs.400 per Kg.</p> 
                    <p>30 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR40HfStfiP-076BEmc8X_WMqRsuwMPwaYLSANK6S2ovHmmEi9Lg-sK3LOkDs2hxbvn6nI&usqp=CAU"
                    alt="Image 8">
                <div class="side">
                    <h3>Nepotalian Biscuit.</h3>
                    <p>Rs.1000 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div><div class="content">
                <img src="https://media.istockphoto.com/id/1494766888/photo/chocolate-truffles.webp?b=1&s=170667a&w=0&k=20&c=O99kTKeau2QkmaboKtzeXfqputZikLeqgOdkDPs3sfw="
                    alt="Image 9">
                <div class="side">
                    <h3>Choco Shots.</h3>
                    <p>Rs.300 per Kg.</p>
                    <p>4 days.</p>
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
      <form method = 'post' action = 'birthday.php' name = 'form'>
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
    <script src="birthday.js"></script>
    <script src="common.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>