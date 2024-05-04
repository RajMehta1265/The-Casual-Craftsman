<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about-us.css">
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
                            <a href="inaugration.php">Anniversary</a>
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
                    <li><ion-icon name="cart-outline"></ion-icon></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="about-section">
            <div class="company-started">
                <img src="logo1.jpeg" alt="Company Logo">
                <p>This company started with a passion for sweets and a dream to share the rich flavors of Indian confectionery with the world. Founded by Mehta Raj and Patel Ansh, we began our journey in 2024 from a small kitchen, crafting traditional recipes with love and dedication.</p>
            </div>
            <div class="people-image">
                <div class="person">
                    <img src="raj4.jpg" alt="Raj">
                    <p class="name">Mehta Raj</p>
                    <p class="role">Founder</p>
                </div>
                <div class="person">
                    <img src="swami1.jpg" alt="Swami">
                    <p class="name">Patel Ansh</p>
                    <p class="role">Co-Founder</p>
                </div>
            </div>
        </div>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
