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
    <title>Cakes Pastries</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cakes-pastries.css">
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
                    <li class="dropdown">Ocassion
                        <div class="dropdown-content">
                            <a href="birthday.php">Birthday</a>
                            <a href="inaugration.php">Anniversary</a>
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
        <div class="cakes-pastries-photo">
            <div class="content">
                <img src="https://whipped.in/cdn/shop/products/zyro-image_36_1800x1800.jpg?v=1686824457" alt="Image 1">
                <div class="side">
                    <h3>Butterfly Coated Strawberry 
                        <br>Cake.</h3>
                    <p>Rs.700 per Kg.</p>
                    <p>2 days.</p>
                    <br>
                    
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://assets.winni.in/product/primary/2023/4/84499.jpeg?dpr=1&w=1000" alt="Image 2">
                <div class="side">
                    <h3>Chocolate Cake.</h3>
                    <p>Rs.500 per Kg.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://whipped.in/cdn/shop/products/Rainbow_800x.png?v=1687513944" alt="Image 3">
                <div class="side">
                    <h3>Rainbow Cake.</h3>
                    <p>Rs.1200 per kg.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXJzHnAdSd-Q94yFzNn2IER24uVIN42xjrdwDWmXU0gg&s"
                    alt="Image 4">
                <div class="side">
                    <h3>Vanilla Chocolate With Cherry <br>On Top.</h3>
                    <p>Rs.2700 per kg.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSidJdNwCakGZg8qseVEze4mI1Ml245ALYHtfn73Rt3g&s"
                    alt="Image 5">
                <div class="side">
                    <h3>Vanilla Cake.</h3>
                    <p>Rs.1000 per cup.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://smoor.in/cdn/shop/files/cake_0138_CameraCake_1200x1200.jpg?v=1683871691"
                    alt="Image 6">
                <div class="side">
                    <h3>Canon Click Cake.</h3>
                    <p>Rs.3000 per Kg.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDPu5O_85d94pbeq7YYl-SCHHHPIBEOGLw8iQo8YO9_w&s"
                    alt="Image 7">
                <div class="side">
                    <h3>Rose Petals Cake.</h3>
                    <p>Rs.1200 per Kg.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://ovenfresh.in/wp-content/uploads/2023/04/Chocolate-Dutch-Truffle-Birthday-Cake-1.jpg"
                    alt="Image 8">
                <div class="side">
                    <h3>Kitkat With Gems Cake.</h3>
                    <p>Rs.3000 per Kg.</p>
                    <p>2 days.</p>
                    <br>
                    <br><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add to cart
</button>
                </div>
            </div>
            <div class="content">
                <img src="https://cakiyo.com/_next/image?url=https%3A%2F%2Fadmin.cakiyo.com%2Fstorage%2F566%2Fkitkat-gem-cake.png&w=3840&q=75"
                    alt="Image 9">
                <div class="side">
                    <h3>Choco Shots.</h3>
                    <p>Rs.300 per Kg.</p>
                    <p>2 days.</p>
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
      <form method = 'post' action = 'cake-pastries.php' name = 'form'>
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
    <script src="cake-pestries.js"></script>
    <script src="common.js"></script>
    <?php require 'script.php'; ?>
</body>

</html>