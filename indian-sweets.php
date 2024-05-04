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
    <title>Indian sweets</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="indian-sweets.css">
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
        <div class="indian-sweets-photos">
            <div class="content">
                <img src="https://ashbaber.com/wp-content/uploads/2023/06/Ladoo-on-a-plate-small.jpg" alt="Image 1">
                <div class="side">
                    <h3>Boondi Ladoo.</h3>
                    <p>Rs.725 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://kiasa.co.in/wp-content/uploads/2022/11/Mohanthal.jpg" alt="Image 2">
                <div class="side">
                    <h3>Kesar Mohanthal.</h3>
                    <p>Rs.430 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://cdn.igp.com/f_auto,q_auto,t_pnopt19prodlp/products/p-delicious-kaju-katli-400-gm--101059-m.jpg"
                    alt="Image 3">
                <div class="side">
                    <h3>Kaju Katli.</h3>
                    <p>Rs.700 per kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                
                </div>
            </div>
            <div class="content">
                <img src="https://www.chitalebandhu.in/cdn/shop/files/Rasgulla-Image-_3_1024x1024.jpg?v=1697398551"
                    alt="Image 4">
                <div class="side">
                    <h3>Rasgulla.</h3>
                    <p>Rs.230 per kg.</p>
                    <p>7 days</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://gayathriscookspot.com/wp-content/uploads/2023/07/Mawa-Gulab-Jamun-4.jpg"
                    alt="Image 5">
                <div class="side">
                    <h3>Gulab Jamun.</h3>
                    <p>Rs.270 per kg.</p>
                    <p>7 days</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://rachnas-kitchen.com/wp-content/uploads/2017/07/rasmalai-2-e1505245876472-gpo.jpg"
                    alt="Image 6">
                <div class="side">
                    <h3>Ras Malai.</h3>
                    <p>Rs.300 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://srmsweets.com/online/wp-content/uploads/2019/08/645.jpg" alt="Image 7">
                <div class="side">
                    <h3>Soan Papdi.</h3>
                    <p>Rs.400 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://bombaysweets.in/cdn/shop/files/ghee_mysorepak_1000x1000_b23b4b0b-bda5-45bf-bcf0-9d395bfe3615.jpg?v=1698569379"
                    alt="Image 8">
                <div class="side">
                    <h3>Ghee Mysore Pak.</h3>
                    <p>Rs.400 per Kg.</p>
                    <p>7 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/07/carrot-halwa-gajar-halwa.jpg.webp"
                    alt="Image 9">
                <div class="side">
                    <h3>Gajar Halwa.</h3>
                    <p>Rs.300 per Kg.</p>
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
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</h3>
        </button>
      </div>
      <form method = 'post' action = 'indian-sweets.php' name = 'form'>
      <div class="modal-body">
      <div class = 'cart'>Confirm to add to cart</div>
        <input type="hidden" name='name' id = 'name'>
        <input type="hidden" name='price' id = 'price'>
        <input type="hidden" name='days' id = 'days'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name = 'cart'>Confirm to Cart</button>
      </div>
    </form>
    </div>

  </div>
</div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="indiansweet.js"></script>
    <script src="common.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>