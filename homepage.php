<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Porftfolio</title>
</head>
<body>
    <header>
        <div id="frontpage">
         <h1 id="intro">Welkom bij:</h1>
            <h1 class="ml11">
                <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="name">Bram&nbsp;Studios</span>
                </span>
            </h1>
    	</div>
        <!-- <img id="headerimg" src="assets/img/bramwedstrijd.jpg" alt="bram"> -->
        <div class="headerimg">
            <img src="assets/img/bramwedstrijd.jpg" alt="bram">
        </div>
    </header>

    <div id="navbar" style="bottom: 0;">
        <a href="homepage.php">Home</a>
        <a href="about.php">About</a>
        <a href="#projects">Projects</a>
    </div>


    <div class="bram">
        <h1>Wie ben ik?</h1>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/animation.js"></script>
    <script>
      window.onscroll = function () {
        scrollNavFromBottom();
      };
      var screenSize = window.innerHeight - 40;
      function scrollNavFromBottom() {
        var bottomOffset = document.documentElement.scrollTop;
        if (screenSize > bottomOffset) {
          document.getElementById("navbar").style.bottom = bottomOffset + "px";
        }
        if (bottomOffset >= screenSize) {
          document.getElementById("navbar").style.bottom = screenSize + "px";
        }
      }
    </script>
</body>
</html>