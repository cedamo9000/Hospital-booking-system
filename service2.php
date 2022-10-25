<?php
$usernameErr="";
$username="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"])){
        $usernameErr="username is required";

    }else{
        $username=test_input($_POST["username"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Mirza&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Black+And+White+Picture&family=Nosifer&family=Rampart+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Nosifer&display=swap');
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-family: 'Fredoka', sans-serif;
        background-color: white;
        height: 8vh;
    }

    .css {
        display: flex;
        width: 40%;
        justify-content: space-around;
    }

    .css a {
        text-decoration: none;
        font-family: 'Fredoka', sans-serif;
        color: black;
        font-weight: 800;
        justify-content: space-around;
        text-align: center;
    }

    .css li {
        list-style: none;
    }

    .button {
        padding: 10px 26px;
        border: 3px solid crimson;
        color: crimson;
        font-family: 'Fredoka', sans-serif;
        font-weight: 800;
        background-color: white;
        align-items: center;
    }

    .bg_img {
        background-image: url("img/doc.jpg");
        background-repeat: no-repeat;
        background-position: center;
        top: 0%;
        left: 0%;
        right: 0%;
        bottom: 0%;
        height: 550px;
        overflow: hidden;
        background-size: 100% 557px;
;
    }

    .h3 {
        font-family: 'Fredoka', sans-serif;
        font-size: 30px;
        margin-left: 100px;
        margin-top: 90px;
        color: white;
        font-weight: lighter;
        float: inline-start;
        box-sizing: border-box;
    }

    .p {
        font-size: 18px;
    }

    .btn {
        height: 60px;
        width: 190px;
        overflow: hidden;
        background-color: crimson;
        border: 3px solid crimson;
        margin-top: 30px;
        font-family: 'Fredoka', sans-serif;
        color: white;
        font-weight: 500;
        border-radius: 5px;
        position: relative;
        text-align: center;
        transition: 1s;
    }

    .btn:hover {
        transition: 1s;
        width: 249px;
    }

    .container {
        background:hsl(0,0%,100%,0.3);
        margin-right: 121px;
        padding: 60px 48px;
        float: right;
        margin-top: -228px;
        margin-right: 121px;
        border-radius: 5px;
    }

    .email {
        padding: 13px 52px;
        border-radius: 5px;
        background-color: rgb(240, 238, 238);
        border: solid rgb(240, 238, 238);
    }

    .password {
        padding: 13px 52px;
        border-radius: 5px;
        background-color: rgb(240, 238, 238);
        border: solid rgb(240, 238, 238);
    }

    .user {
        padding: 13px 52px;
        border-radius: 5px;
        background-color: rgb(240, 238, 238);
        border: solid rgb(240, 238, 238);
    }

    .submit {
        padding: 13px 116px;
        background-color: crimson;
        border: solid crimson;
        border-radius: 5px;
        font-family: 'Fredoka', sans-serif;
        color: white;
    }

    .container h3 {
        text-align: center;
        font-family: 'Fredoka', sans-serif;
    }

    .eye {
        margin-top: 50px;
        width: 342px;
        margin-right: 121px;
        height: 186px;
        margin-left: 91px;
        float: left;
        border-radius: 10px;
    }

    .ear {
        margin-top: 150px;
        width: 342px;
        margin-right: 121px;
        height: 186;
        margin-left: -457px;
        float: left;
        border-radius: 10px;
    }

    .skin {
        margin-top: 72px;
        width: 342px;
        margin-right: 121px;
        height: 186;
        margin-left: -457px;
        float: left;
        border-radius: 10px;
    }
   

    .baby {
        margin-top: 100px;
        width: 342px;
        margin-right: 121px;
        height: 186;
        margin-left: -457px;
        float: left;
        border-radius: 10px;
    }

    .p2 {
        margin-top: 200px;
        font-family: 'Fredoka', sans-serif;
    }

    .p3 {
        margin-top: 280px;
        font-family: 'Fredoka', sans-serif;
    }

    section p {
        font-family: 'Fredoka', sans-serif;
    font-size: 21px;
    text-align: center;
    margin-top: 7px;
    }

    .footer_content {
        background-color: rgb(14, 12, 12);
        padding: 70px 0px;
        margin-top:-120px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }
    

    .foot-colm {
        width: 25%;
        line-height: 20px;
    }

    .foot-colm h4 {
        color: crimson;
        font-family: 'Fredoka', sans-serif;
        position: relative;
    }

    .foot-colm h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        box-sizing: border-box;
        height: 2px;
        background-color: crimson;
        width: 50px;
    }

    .foot-colm a {
        color: antiquewhite;
        text-decoration: none;
        column-gap: 5px;
        font-family: 'Poppins', sans-serif;
    }

    ul {
        list-style: none;
    }

    .nav2 {
        margin-bottom: -200px;
        float: left;
        margin-left: -1099;
    }

    .containe {
        max-width: 1170px;
        margin: auto;
    }

    .logo {
        font-family: 'Fredoka', sans-serif;
    }

    .fab {
        padding: 12px 12px;
        background-color: crimson;
        border-radius: 50px;
    }

    .doc {
        color: crimson;
    }

    .about {
        background-color: antiquewhite;
        padding: 0% 50%;
    }

    .card {
        
        background-color: whitesmoke;
        width: 224px;
        height: 260px;
        margin-left: -199px;
    }

    .castro {
        height: 160px;
        width: 160px;
        margin-left: 27px;
        margin-top: -71px;
    }

    .arrow {
        height: 54px;
        width: 54px;
        margin-top: -17px;
        position: absolute;
        left: 187px;
    }

    .cards {
        display: flex;
        position: absolute;
        width: -22px;
        gap: 288px;
        margin-top: 8%;
        margin-left: -28%;
    }

    .us {
        margin-top: 2%;
        font-size: 38px;
        font-family: 'Fredoka', sans-serif;
        text-align: center;
        /* color: white; */
        position: absolute;
        margin-left: 45%;
        letter-spacing: 3px;
    }

    .us::after {
        content: "";
        position: absolute;
        background-color: crimson;
        width: 105px;
        height: 5px;
        left: 31px;
        bottom: -10;
        border-radius: 16px;
    }

    .error {
        color: crimson;
        font-family: 'poppins', sans-serif;
        font-weight: bold;
    } 
    .spon{
        display:flex;
        margin-top:100px;
    }
    .robo{
        height: 223px;
        width: 260px;
        margin-top: 322px;
        margin-left:-473px;
        border-radius:20px;
    }
    .img2{
        height: 223px;
        width: 260px;
        margin-top: 322px;
        margin-left: -125px;
        border-radius: 20px;
    }
    .img3{
        background-color:white;
        height: 223px;
        width: 260px;
        margin-top: 322px;
        margin-left: 94px;
        border-radius: 20px;
    }
    .sponsers{
        margin-top:362px;
        display:flex;
        position: absolute;
        margin-left: -130px;
        font-family: 'Fredoka', sans-serif;
    }
    .castro2{
        font-weight:bolder;
        font-family: 'Rampart One', cursive;

    }
   
    .des{
        font-size:20px;
        font-family: 'Mirza', cursive;
    }
    .inside{
        align-text: center;
        height: 230px;
        width: 260px;
        font-family: 'Rampart One', cursive;
        positions: absolute;
        margin-left: -416px;
        font-weight: bolder;
     
    }
    .inside1{
        height: 230px;
        width: 260px;
        positions: absolute;
        font-family: 'Rampart One', cursive;
        margin-left: -86px;
        font-weight: bolder;
    }
    .inside2{
        height: 230px;
        width: 260px;
        positions: absolute;
        font-family: 'Rampart One', cursive;
        margin-left: 150px;
        font-weight: bolder;
    }
    </style>


</head>

<body>

    <header>
        <nav>

            <div class=" top_doc ">

                <h3>
                    TOP
                    <div class="doc">DOC</div>
                </h3>

            </div>
            <ul class="css ">
               
               

            </ul>

        </nav>

    </header>

    <div class="bg_img ">
        <div class="h3 ">
            <h3>we provide profesional Hospitals<br>for our client</h3>
            <br>
            <p class="p ">
                top doc helps users to , Interact directly with a specific <br> Doctor which enable a user To get
                best treatment from  Best doctors that we provide.
            </p>
            <button class="btn ">learn more<img src="img/right-arrow.png" alt="" class="arrow"></button>
        </div>
        <div class="container ">
            <h3>Please Let us Know Who You are</h3>
            <br>

            <form action="service.php" method="POST">

                <input type="text " placeholder="please insert your name " class="user" name="username" value="<?php echo $username?>">
                <br>
                <span class="error"><?php echo $usernameErr;?></span>
                <br>
                <br>
                <input type="Submit" value="Submit" class="submit">
            </form>
        </div>
    </div>
    <section>

        <p> <img src="img/eye.jpg " class="eye ">
            <br>
            <br>
            <br>
            <br> Vision has been a big problem to this country, Top doc provides the Best treatments that we have.


        </p>

        <img src="img/ear.jpg " class="ear ">
        <p class="p3 ">
        We provide for your hearing health and protect your investment in valuable ways. </p>
        <img src="img/skin.jpg " class="skin ">
        <p class="p2 "> 
        Our committed staff has the expertise and experience to treat all your medical, surgical and cosmetic dermatology needs. 
        </p>
        <img src="img/baby.jpg " class="baby ">
        <p class="p2 "> The future generation depends on the young ones of today,we give out best service to Baby's so
            as to build the future generation.
        </p>
    </section>
    <section>
        <h1 class="us">About Us</h1>
        <div class="about">

            <div class="cards">

                <div class="card">
                    <img src="img/mathias.png " class="castro ">
                    <p class="castro2">"Castro Elirehema Mollel"</p>
                    <p class="des">*A young talented coder with interllectual skills of programing work.....</p>
                </div>
                <div class="card">
                    <img src="img/baraka.png " class="castro ">
                    <p class="castro2">"Baraka Yuda Chaula"</p>
                    <p class="des">*A programmer with esential coding skills that enhance solving of nature questions......</p>
                </div>
                <div class="card">
                    <img src="img/Mathiass.png " class="castro ">
                    <p class="castro2">"Mathias Sangito Sumari"</p>
                    <p class="des">*A young designer with a very fantastic eye<br>
                         and fast hands on his work......
                    </p>
                </div>
                <div class="card">
                    <img src="img/Justin.png " class="castro ">
                    <p class="castro2">"Justin Tumainiel Ngomuo"</p>
                    <p class="des">*A competent developer on styling the web works......</p>
                </div>
            </div>
            <br>
          
            
                <h2 class="sponsers">Together with our sponsors</h2>
 
          
            <div class="spon">
            <div ><img src="img/robotech.png "  class="robo"><div class="inside"> ROBOTECH LABS</div></div>
    <div class="TTS"><img src="img/TTS.jpg " class="img2"><div class="inside1">TANGA TECH SCHOOL </div></div>
    <div class="TTS"> <img src="img/projekti.jpg " class="img3"><div class="inside2">PROJECT INSPIRE</div></div>
     
</div>
        </div>
      
    </section>
    <section>
   
     
    </section>

    <footer class="footer_content ">
        <div class="containe">
            <div class="row">
                <div class="foot-colm">
                    <h4>NAVIGATION</h4>
                    <br>
                    <ul>

                        <li><a href="# ">home</a></li>
                        <li> <a href="# ">about</a></li>
                        <li> <a href="# ">contact us</a></li>
                        <li><a href="# ">service</a></li>

                    </ul>
                </div>
                <div class="foot-colm">
                    <h4>COMPANY</h4>
                    <br>
                    <ul>
                        <li><a href="# ">investments</a></li>
                        <li><a href="# ">FAQ</a></li>
                        <li><a href="# ">doctors</a></li>

                        <li><a href="# ">clients</a></li>
                    </ul>
                </div>
                <div class="foot-colm">
                    <h4>GET HELP</h4>
                    <br>
                    <ul>
                        <li><a href="# ">customer care</a></li>
                        <li><a href="# ">FAQ</a></li>
                        <li><a href="# ">our service</a></li>

                        <li><a href="# ">settings</a>
                    </ul>
                </div>
                <div class="foot-colm">
                    <h4>BLOG</h4>
                    <br>
                    <ul>
                        <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.whatsapp.com/login"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>






                    </ul>
                </div>
            </div>



        </div>
        </div>
        </div>



    </footer>



</body>

</html>