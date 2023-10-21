<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-right">
        </div>
        <div class="header-left">
            <a href="index.php"><img src="images/logo.png" alt="logo" width="100px"></a>

            <span class="menu"><img src="images/menu.png" alt="hamburger menu" /></span>
            <ul class="nav1">
                <li><a href="index.php">HOME</a></li>
                <li><a class="active" href="about.php">ABOUT</a></li>
                <li><a href="food-available.php"> AVAILABLE FOOD LIST</a></li>

                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="donor/login.php">DONOR</a></li>
                <li><a href="admin/login.php">ADMIN</a></li>

            </ul>
            <!-- script for menu -->
            <script>
                $("span.menu").click(function() {
                    $("ul.nav1").slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- //script for menu -->
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<style>
    .header-left {
        display: flex;
        justify-content: space-around;
    }

    .header {
        padding: 10px 0px;
        background: #000000;
    }

    ul li a.active {
        color: #57aa56 !important;
    }

    .nav1 {
        align-items: center;
        display: flex;
    }

    .header-left ul li a {
        font-family: 'Roboto', sans-serif;
    }
</style>
<!-- //header -->