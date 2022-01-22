<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Security</title>
    <link rel="stylesheet" href="style(main).css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()" ></i>

                <ul>
                
                <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html ">ABOUT</a></li>
                    
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT &nbsp; US</a></li>

                    <li><a href="register.php">SIGN &nbsp;UP/LOG &nbsp; IN</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
       <h1 class="contactheader">CONTACT &nbsp; US</h1>
    </section>






<!--form-->
<div class="contact-col">
    <form action="contact.inc.php" method="post">

<div>

<input type="text" placeholder="Name" name="Name" required>

<input type="email" placeholder="Your email id" name="mail" required>

<input type="text" placeholder="Your Subject" name="subject" required>

<input type="text" placeholder="Your Message" name="message" required>

<input type="text" placeholder="Your Contact no." name="number" required>

    <div style="opacity: 1; margin: 10px 100px 20px 600px;">
    <button type="submit" class="hero-btn red-btn" style="color: rgb(3, 3, 3);">Send Message</button>
    </div>
</div>

    </form>

</div>





<!--Footer-->

<section class="footer">
    <h4>About Us</h4>
    <p>
        We at 'Veerangna' aim to help all those woman that feel unsafe to become a more empowered character.
    </p>

<div class="icon">
<i class="fa fa-facebook" ></i>
<i class="fa fa-twitter" ></i>
<i class="fa fa-instagram" ></i>
<i class="fa fa-linkedin" ></i>
</div>
</section>





<!--Java Script for Toggle Menu-->
<script>

var navLinks= document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right="0";
}
function hideMenu(){
    navLinks.style.right="-200px";
}


</script>



</body>
</html>