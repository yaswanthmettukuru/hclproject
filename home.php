<?php

include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo</title>
    <link rel="stylesheet"
    href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="nav" id="nav">
    <a href="admin.php" target=""> <img src="images/logo-removebg-preview.png" alt="" class="nav__logo" /></a>
       

    </div>
    <!-- header-->
    <div class="banner">
        <div class="banner__contents">
            <h1 class="banner__title">Breaking Bad</h1></br>
            <div class="banner__buttons">
            <a href="breaking bad.php" target=""><button class="banner__button"><i class="fa-solid fa-play"></i></button></a>
                <button class="banner__button"><i class="fa-solid fa-list"></i></button>
            </div></br></br></br>
            <div class="banner__discription">
            <p >         A terminally ill chemistry teacher teams with a former student </br>         to cook crystal meth to secure his family future</p>
            </div>
        </div>
            <!-- <div class="banner--fadebottom"></div> -->
    </div>
        
       
    <!-- orignal -->
    <div class="row">
        <h2>original </h2> </br>
        <div class="row__posters">
            <a href="breaking bad.php" target=""><img src="images\pushpa2.jpg" alt="" class="row__poster row__posterLarge"/></a>
            <a href="boys.php" target=""> <img src="images\nawab.jpg" alt="" class="row__poster row__posterLarge" /></a></br>
            <a href="saul.php" target=""> <img src="images\24.jpg" alt="" class="row__poster row__posterLarge" /></a></br>
            <a href="wednesday.php" target=""> <img src="images\magadheera.jpg" alt="" class="row__poster row__posterLarge" /></a></br>
            <a href="friends.php" target=""> <img src="images\uppena.jpg" alt="" class="row__poster row__posterLarge" /></a></br>
            <a href="lastofus.php" target=""> <img src="images\hello.jpg" alt="" class="row__poster row__posterLarge" /></a></br>
            <a href="upload.php" target="_blank"> <img src="images/your name.png" alt="" class="row__poster row__posterLarge" /></a></br>
            <a href="wrongturn.php" target=""> <img src="images/wrong turn.png" alt="" class="row__poster row__posterLarge" /></a></br>
        </div>
        <!-- trending -->
        <div class="row">
            <h2>Trending</h2> </br>
            <div class="row__posters">
            <a href="" target=""><img src="images\karthikeya.jpg" alt="" class="row__poster " /></a>
            <a href="" target=""> <img src="images\pushpamain1.jpg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/avatar.jpg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images\kgf.jpg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/lord2-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/project x.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images\manam.jpg" alt="" class="row__poster" /></a>
            <a href="" target=""><img src="images/the boys templete 2.jpeg" alt="" class="row__poster " /></a>
            
            </div>
        </div>
        <!-- comedy -->
        <div class="row">
            <h2>Comedy </h2></br>
            <div class="row__posters">
            <a href="" target=""><img src="images/friends.png" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/tbbt-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""> <img src="images/the boys larg.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/the gray man.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""> <img src="images/project xx.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""> <img src="images/100-t.webp" alt="" class="row__poster" /></a>
            <a href="" target=""><img src="images/demon.jpg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/panda-t.jpeg" alt="" class="row__poster " /></a>
            <!-- <a href="breaking bad.php" target="_blank"><img src="images/scam.jpeg" alt="" class="row__poster " /></a>
            <a href="breaking bad.php" target="_blank"><img src="images/life.jpeg" alt="" class="row__poster" /></a> -->
            </div>
        </div>

        <!-- action -->
        <div class="row">
            <h2>Action </h2></br>
            <div class="row__posters">
            <a href="" target=""> <img src="images/lord-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""> <img src="images/man-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/ones up on.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/peaky-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/vikings-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""> <img src="images/dead-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/joker-t.jpeg" alt="" class="row__poster " /></a>
            <a href="" target=""><img src="images/fight-t.jpeg" alt="" class="row__poster" /></a>
            <a href="" target=""><img src="images/narcos-t.jpeg" alt="" class="row__poster " /></a>
            </div>
        </div>

        <script>
            const nav = document.getElementById('nav');
            window.addEventListener('scroll', () => {
                if (window.scrollY >= 100) {
                    nav.classList.add('nav__black');
                } else {
                    nav.classList.remove('nav__black');
                }
            })

        </script>


 
</body>

</html>