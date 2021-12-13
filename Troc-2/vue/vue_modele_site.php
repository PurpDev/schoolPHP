<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
                <nav>
                    <ul>
                        <!-- <li id="logo"><a href="index.php">Troc&Toy</a></li> -->
                        <!-- <li ><a href="gestion_login.php">Login/Logout</a></li>
                        <li ><a href="gestion_market.php">Market</a></li>              
                        <li ><a href="gestion_trending.php">Trending</a></li>                -->
                        <?php
                            
                                echo '
                                <li id="logo"><a href="index.php?page=0">Troc&Toy</a></li>
                                ';
                                if(isset($_SESSION['email'])){echo '
                                <li ><a href="index.php?page=1">Deconnexion</a></li>';
                                }else{
                                    echo'<li ><a href="index.php?page=1">Connexion</a></li>';
                                }
                                echo'
                                <li ><a href="index.php?page=2">Famille</a></li>              
                                <li ><a href="index.php?page=3">Salle</a></li>  
                                <li ><a href="index.php?page=4">RDV</a></li> 
                                <li ><a href="index.php?page=5">Acheteur</a></li> 
                                <li ><a href="index.php?page=6">Jouet</a></li> 
             
                                ';
                            
                        ?>
                    </ul>

                </nav>
                
    </header>


    


    <footer>
                
    <!-- <h2>Send e-mail to our support:</h2>

                    <form action="mailto:augustindiabira@gmail.com" method="post" enctype="text/plain">
                    Name:<br>
                    <input type="text" name="name"><br>
                    E-mail:<br>
                    <input type="text" name="mail"><br>
                    Comment:<br>
                    <input type="text" name="comment" size="50"><br><br>
                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">
                    </form> -->
                <div id="copyrightEtIcons">
                    <div id="copyright">
                        <span>©Copyrights - From Augustin</span>
                    </div>
                    <div id="icons">
                        <a href="https://twitter.fr"> <i class="fa fa-twitter"></i></a>
                        <a href="https://facebook.com"> <i class="fa fa-facebook"></i></a>
                        <a href="https://instagram.com"> <i class="fa fa-instagram"></i></a>
                        
                    </div>
                </div>

    </footer>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap');

        html {
  scroll-behavior: smooth;
}
body {
    font-family: 'Advent Pro', sans-serif;
    padding: 0;
    margin: 0;
    overflow: visible;
    background: url('images/to.jpg');
    background-size: cover;
}
/* ul{
    margin: 0;
    padding: 0;
} */
li{
    list-style-type: none ;
}
h2{
    text-transform: uppercase;
    text-align: center;
    padding-top: 30px;
    font-size: 2em;
}
a {
    text-decoration: none;
    color: black;
}



nav {
    /* overflow: scroll; */
    background-color: pink;
    width: 100%;
    opacity: 0.9;
}

header li {
    float: right;
    font-size: 1.2em;
}

header li a {
    text-decoration: none;
    display: flex;
    text-align: center;
    padding: 18px 16px;
}

#logo {
    font-family: 'Dancing Script', cursive;
    font-weight: bold;
    float: left;
}

#ImagePrincipale {
    padding-top: 60px;
    background: url(images/blackclover.jpg) no-repeat fixed 50% 50%;
    background-size: cover;
    height: 799px; 
}

h1{
    font-family: 'Dancing Script', cursive;
    text-align: center;
    color: rgb(133, 82, 15);
    font-size: 6em;
    margin-top: 100px;
    text-shadow: 1px 3px 2px black;
}

#premierTrait {
    height: 1px;
    width: 25%;
    margin: -3px auto;
    background-color: #221d05;
    text-shadow: 1px 3px 2px black;
}

h3 {
    text-align: center;
    color: plum;
    font-style: 3em;
    text-shadow: 1px 3px 2px black;

}

#presentation {
    background-color: #161304;
}





footer {
    text-decoration: none;
    display: block;
    /* position:fixed; */
   left:0px;
   bottom:0px;
   width:100%;
    position: fixed;
    text-align: center;
    padding: 10px 10px;
    background-color: pink;
    opacity: 0.9;
}


    </style>
</body> 
</html>