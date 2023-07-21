<header class="header" id="header">
    <a href="http://localhost/Travelx/index.php" class="logo"><i class="fas fa-hiking"></i> travelx</a>

    <nav class="navbar">
        <a href="http://localhost/Travelx/index.php">Home</a>
        <a href="http://localhost/Travelx/index.php#container">Destination</a>
        <a href="http://localhost/Travelx/index.php#feedback">Reviews</a>
        <a href="http://localhost/Travelx/index.php#about_us">About</a>
        <?php
            if(!isset($_SESSION['login_user'])){
            ?>
        <a id= "login_btn" href="#" onclick="login()">Login</a>
        <?php 
            }
        ?>
    </nav>

    <div class="icons">  
        <?php
            if(isset($_SESSION['login_user'])){
        ?>        
        <div class="dropdown">
            <div id="login_user" class="fa-solid fa-user"></div>
            <div class="dropdown_content">
                <!-- <p>Welcome <b><?php echo $_SESSION['login_user_name']; ?></b></p> -->
                <button onclick="location.href='http://localhost/Travelx/LoginSignupModel/dashboard.php'">My Profile</button>
                <button onclick="location.href=' http://localhost/Travelx/LoginSignupModel/logout.php ' ">Logout</button>
            </div>
        </div>
        <?php 
            } 
        ?>
        <div id="menu_btn" class="fas fa-bars"></div>
    </div>

</header>

<div id="search_btn">
    <button onclick="book_trip()"><i class="fa-solid fa-location-dot"></i> Plan your Trip</button>
</div>