<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["username"])){}



}





?>





<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        
        <style>
                   @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&family=Poppins:wght@200&display=swap');
            h1{
         text-align: center;
          font-family: 'Fredoka', sans-serif;
          height:40vh;
         background-color:crimson;
         color: white;
    }
    body{
        line-height: 1.5;
        background-color:white;
        position: relative;

    }
    .container{
     display:grid;
     grid-auto-flow:column;
     grid-auto-columns: 40%;
     gap:5px;
     overflow-behavior-inline:contain;
     overflow: auto;
     white-space: nowrap;
     margin-left: 10%;
    }
    
    

    
    .items{
        background:white;
   
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    min-width: 430px;
    width: 430px;
    min-height: 254px;
    height: 262px;
    border-radius: 6px;
    margin: 0px 13px 5px 3px;
    box-sizing: border-box;
    box-shadow: rgb(0 0 0 / 25%) 0px 2px 4px;
    padding: 16px;
    transition: box-shadow 0.3s ease-in-out 0s;

   border-radius: 12px;
        padding:20px;
    }
   .doc2{
        
        display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    min-width: 430px;
    width: 430px;
    min-height: 254px;
    height: 262px;
    border-radius: 6px;
    margin: 0px 13px 5px 3px;
    box-sizing: border-box;
    box-shadow: rgb(0 0 0 / 25%) 0px 2px 4px;
    padding: 16px;
    transition: box-shadow 0.3s ease-in-out 0s;
   
    }
    .doc3{
        
        
        display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    min-width: 430px;
    width: 430px;
    min-height: 254px;
    height: 262px;
    border-radius: 6px;
    margin: 0px 13px 5px 3px;
    box-sizing: border-box;
    box-shadow: rgb(0 0 0 / 25%) 0px 2px 4px;
    padding: 16px;
    transition: box-shadow 0.3s ease-in-out 0s;
    
    }
    
    
    *{
        padding:0;
        margin:0;
        box-sizing: border-box;
    }
    section{
        margin: top 50px;
    }
    .male{
        height: 42%;
    width: 24%;
    }
    h4{
        font-size:30px;
        font-family:'Fredoka', sans-serif;
        margin-left: 10%;
    }
    p{
        font-size:20px;
        margin-left: 10%;
        font-family: 'Poppins', sans-serif;
        font-weight:bold;
    }
.text{
    font-size:20px;
     
         margin-left: 27%;
    margin-top: -19%;
    position: relative;
}
.text::before{
    content: '';
    position: absolute;
    left: -82px;
    bottom: -97px;
    height: 53px;
    background-color: crimson;
    width: 5px;
}
strong{
    font-family:'Fredoka', sans-serif;
    font-size: 22px;
}
.appoint{
    margin-top: 13px;
    margin-left: 11px;
}
select{
    padding: 13px 51px;
            border: solid rgb(240, 238, 238);
            background-color: rgb(240, 238, 238);
            border-radius: 5px;
            font-family: 'Fredoka', sans-serif;
}
.book{


    width: 239px;
    position: absolute;
    height: 51px;
 
    left: 39px;
    margin-bottom: 110px;
    top: 202px;
    border-radius: 12px;
    background-color:crimson;
    align-text: center;
    text-decoration: none;
    text-style: none;
    color: white;
    font-weight: bold;
    font-family: 'Fredoka', sans-serif;
    box-shadow: 0 0 5px #000;
}
.submit{
    padding: 13px 108px;
            background-color: crimson;
            border: solid rgb(36, 34, 34);
            border-radius: 5px;
            font-family: 'Fredoka', sans-serif;
            color: white;
}
.p4{
    margin-top: 11px;
    margin-left: 60px;
}
.footer_content {
            background-color: rgb(14, 12, 12);
            box-shadow: 0 0 8px #000;
            padding: 70px 0px;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        
        .foot-colm {
            width: 25%;
            line-height: 20px;
        }
        ul {
            list-style: none;
        }
        .foot-colm h4 {
            color: crimson;
            font-family: 'Fredoka', sans-serif;
            position: relative;
            font-size: 18px;
            margin-left: 0px;
        }
        
        .foot-colm h4::after {
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
            box-shadow: 0 0 4px #fff;
            border-radius: 50px;
        }
        
        .fab:hover {
            border: 1px solid transparent;
        }
        .p1{
            margin-top:-1px;
        }
        .p2{
            margin-top: -1px;
        }
        .p3{
            margin-top: -1px;
        }
        .p40{
            margin-top: -1px;
    margin-left: 34px;
        }
        .p5{
            margin-top: -1px;
    margin-left: 34px;
        }
        .p6{
            margin-top: -1px;
    margin-left: 34px;
        }
    
        </style>
    </head>
    <body>
<h1>HI,<?php 
echo $_POST["username"];
?>
<section class="fatigued">
            <form  method="post">
                <select name="payment" class="pay">
                <option value="payment">pay by money transfer</option> 
                <option value="PAY BY CREDIT CARD">PAY BY CREDIT CARD</option>
                <option value="PAY BY CASH">PAY BY CASH</option>
            </select>
            

                <select name="payment2" class="pay2">
                <option value="payment">pay by insurance method</option> 
                <option value="NHIF">NHIF</option>
                <option value="JUBILEE">JUBILEE</option>
                <option value="NIC">NIC</option>
                <option value="PPF">PPF</option>
                <option value="AAR">AAR</option>
                <option value="NSSF">NSSF</option>
                <option value="STRATEGIES">STRATEGIES</option>
            </select>
            <input type="submit" class="submit">
                

</form>
</h1>
</h2>
</section>
<br>
<br>
<br>


<h4>Primary Care Doctors with loyal patients</h4>
<p >Patients often return to these doctors for their care</p>
<br>


<section>
<div class="container">
<div class="items">
<img src="img/male.png" class="male" alt="male">
<p class="text"><strong>
DR.Winston Steinburger                     </strong> <br>
Winston Dudly Steinburger,MD 
</P>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p>"someone you ever needed...,<br>
very faithful and pleasant."</p>
<a href="book form.html" class="book"><p class="p4"> BOOK NOW</p></a>


</div>
<div class="doc2"> 
    <img src="img/male.png" class="male" alt="male">
    <p class="text"><strong>DR.John Blender
    </strong>   <br>
        John Blender,MD 
    </p>
    <p class="appoint">Available everyday from 8am. to 13pm.</p>
    <p>"Honest and panctual,A very blessed<br>
 hand which never goes wrong"</p>
 <a href="book form.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>


<div class="doc3"> 
    <img src="img/doctor (1).png" class="male" alt="male">
    <p class="text"><strong>DR.Hearlin Rrujveer</strong><BR>
    Hearlin  Shwartz Rrujveer,MD 
</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p>"Your wish is her concern, <br>
a very powerful listener".</p>
<a href="book form.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>

<div class="doc3">
     <img src="img/female.png" class="male" alt="male">
<p class="text"><strong>DR. Kayla Casmir</strong><br>
Kayla Casmir Ottar,DO
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p>"Very beautiful, kind and faithful,<br>
somebody who never wastes time." </p>
<a href="book form.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>



<div class="doc3">
<img src="img/male.png" class="male" alt="male">
<p class="text"><strong>
Dr. Terry Wayne Fonville</strong><br>
Terry Wayne Fonville, MD
</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<P>"Friendly and helpful, you'll never<br>
regret visiting a doctor like him."</p>
<a href="book form.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>


<div class="doc3">
<img src="img/male.png" class="male" alt="male">
<p class="text"><strong>DR.Wayne Johnson</strong><br>
 Wayne Johnson Sangito, MD 
</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p>"Here's a man talented with accuracy,<br>
his key point is fulfilling your needs."
</p>
<a href="book form.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>



</div>
<br>
<br>
<br>
<section>
   



<h4>Specialist with loyal patients</h4>
<p >Patients often return to these doctors for their care</p>
<br>


<section>
<div class="container">
<div class="items">
<img src="img/eye.png" class="male" alt="male">
<p class="text"><strong>
DR.Einsten krender</strong> <br>
Einsten krender,MD 
</P>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p class="p1">
Absolutely excellent.Extremely caring<br>regarded and experienced surgeon.<br>
    </p>
<a href="bookform2.html" class="book"><p class="p4"> BOOK NOW</p></a>

</div>
<div class="doc2"> 
    <img src="img/thermometer.png" class="male" alt="male">
    <p class="text"><strong>DR.Albert Zuoma
    </strong>   <br>
        Albert Zuoma,MD 
    </p>
    <p class="appoint">Available everyday from 8am. to 13pm.</p>
    <p class="p2">
        A new and profound Otolaryngologist <br>from the best medical centers in town
    </p>
    <a href="bookform2.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>

<div class="doc3"> 
    <img src="img/eye.png" class="male" alt="male">
    <p class="text"><strong>DR.Catherine Romanus</strong><BR>
    Catherine Romanus Patrick,MD 
</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p class="p3">
    patients usually tip off after his services.<br>he treats his customers prodigously 
    </p>
<a href="bookform2.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>

<div class="doc3">
     <img src="img/pediatrician (1).png" class="male" alt="male">
<p class="text"><strong>DR. Miranda Steven </strong><br>
Miranda Steven Ottar,DO
</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p class="p40">
    She is one of the best, in making her <br>customers swim into their conception <br>about raising healthier kids.
    </p>
<a href="bookform2.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>


<div class="doc3">
<img src="img/magnifying-glass.png" class="male" alt="male">
<p class="text"><strong>
Dr. Jack Herman</strong><br>
Jack Herman Blender, MD

</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p class="p5">
Dr. Jack Herman Blender, is thought <br>to have an impressive mind set about <br>problem facing skins

    
    </p>
<a href="bookform2.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>
<div class="doc3">
<img src="img/pediatrician (1).png" class="male" alt="male">
<p class="text"><strong>DR.Newton Karim</strong><br>
DR.Newton Karim Johnson, MD 

</p>
<p class="appoint">Available everyday from 8am. to 13pm.</p>
<p class="p6">
    like DR. Catherine , Wayne also  has <br>always been calm and reassuring<br> which is what patient need.

    </p>
<a href="bookform2.html" class="book"><p class="p4"> BOOK NOW</p></a>
</div>




</section>
<br>
    <br>
    <br>
    <br>
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
                        <a href="https://www.instagram.com/explore/locations/441813971/talarrubias-spain/bombo-hospital-tanga-tanzania/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/255"><i class="fab fa-whatsapp"></i></a>
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