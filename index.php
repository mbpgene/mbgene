
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" 
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" ></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
  <title>Portfolio</title>
</head>
<body>


<?php 

if(isset($_POST['submit'])){

  include 'sendmail.php';
    
}

?>
  
    <div class="mainbox">

      <nav class="navbar">

        <div class="max-width">
          <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
          <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="menu-btn">
            <i class="fa fa-bars" style="font-size:24px;color:white"></i>
          </div>
        </div>  
      </nav>

      <!----Home Section Start-->

    <section class="home" id="home">

      <div class="max-width">
        <div class="home-content">
          <div class="text-1">Hello, my name is </div>
          <div class="text-2">Mani Bhushan Pandey </div>
          <div class="text-3">And I'm a <span>Full Stack Developer</span></div>
          <a href="#contact">Hire Me</a>
        </div>
      </div>

    </section>

    </div>
      
    
    <!-----About Section Starts-->

    <section class="about" id="about">
      <div class="max-width">
        <h2 class="title">About Me</h2>
        <div class="about-content">
          <div class="column left">
            <img src="img/apple.jpg" alt="">
          </div>
          <div class="column right">
            <div class="text">I'm Mani And I am a <span>full stack Developer</span></div> <br><br>
            <p style="font-family:cursive"> Programming and coding was always a cabalistic thing for me and I always wanted to reveal the mystic way it work s
Being a biology teacher , It was somewhat hard for me to learn and switch the whole learning process . COVID 19 has
an adverse affect on the who le teaching process and I took this as an opportunity. I have spended all the resource
and strenght to learn coding and programming skills . Java become my first step, next was advancing it with
advanced java and lastly frameworks such as hibernate, spring, spring MVC etc.
The joy of learning more and more helped me to learn HTML, CSS, Java Script, JQuery, AJAX, JSON, XML, MySQL etc. In
the minimum stack of time, I have followed all the criteria needed to develop ones as Junior Java developer. The best
part of programming is going through errors. Rectifying error is a exhaustive task for a programmer and always
alarming one to not to do the same mistake twice. But in the mean time errors teach us a lot. Errors never bothered
me, but not learning a day does. Programming fullfills all my learning requirements . Coding is my passion and I want
to make it my career. </p>
               <a href="Mani'sResume.pdf">Download CV</a>
          </div>
            
        </div>
      </div>
    </section>

    <!-----Service Section Starts-->

    <section class="service" id="service">
      <div class="max-width">
        <h2 class="title">My Services</h2>
        <div class="serv-content">
          <div class="card">
            <div class="box">
              <i class="fa fa-paint-brush" style="font-size:24px;"></i>
              <div class="text">Web Development</div>
              <p> I will provide you some of the top noch design and feature that are already hitting the market
              trends. Along with a perfect design you will get secured and data persisting server support So that your
              website will be available 24 x 7. In total your Ideas and my efforts together can bring a lot of
            wealth.</p>
            </div>
          </div>

          <div class="card">
            <div class="box">
              <i class="fa fa-line-chart" style="font-size:24px;"></i>
              <div class="text">Advertising</div>
              <p> For growing your digital product reach you always requires some good advertisement efforts.
              I will help you there by reviewing and reconfigure you product. Once your product will reach to soon it 
              makes another reach for lakhs new viewers or customers</p>
            </div>
          </div>

          <div class="card">
            <div class="box">
              <i class="fa fa-code" style="font-size:24px;"></i>
              <div class="text">App Design</div>
              <p> Mobile application is now become an another necessary platform for every digital product to be a part of aggresive competition.
              I will help you to manage your digital products to become an application.</p>
            </div>
          </div>
          
            
        </div>
      </div>
    </section>

    <!-- skill section starts -->

    <section class="skills" id ="skills">
      <div class="max-width">
        <h2 class="title">My Skills</h2>
        <div class="skills-content">
          <div class="column left">

            <div class="text">My Creative Skills & Expriences.</div>
          <p style="font-family:cursive">I am post graduated in Medical Biotechnology. I am also a fullstack web and application developer.
               While learning programming I have gone through many languages and technologies that make development eassier.
               As a coder I have gained experience in web development while using HTML, CSS, Bootstrap, PhP and Jquery etc.
               On the other hand for application development I have learned Java, hibernate and spring etc. For mobile app development
               I have learned android app development using Android studio. For being a better programmer I am seeking some good but 
               simple projects.</p>
          <a href="#">Read More</a>
        </div>

        <div class="column right">
          <div class="bars">
            <div class="info">
              <span>HTML</span>
              <span>90%</span>
            </div>
            <div class="line html"></div>
          </div>

          <div class="bars">
            <div class="info">
              <span>CSS</span>
              <span>70%</span>
            </div>
            <div class="line css"></div>
          </div>

          <div class="bars">
            <div class="info">
              <span>Java Script</span>
              <span>70%</span>
            </div>
            <div class="line js"></div>
          </div>

          <div class="bars">
            <div class="info">
              <span>PhP</span>
              <span>90%</span>
            </div>
            <div class="line php"></div>
          </div>

          <div class="bars">
            <div class="info">
              <span>MySql</span>
              <span>90%</span>
            </div>
            <div class="line mysql"></div>
          </div>

          <div class="bars">
            <div class="info">
              <span>Java</span>
              <span>50%</span>
            </div>
            <div class="line java"></div>
          </div>

          <div class="bars">
            <div class="info">
              <span>Android</span>
              <span>70%</span>
            </div>
            <div class="line android"></div>
          </div>

          </div>
          
      </div>
    </section>

    
<!--contact section starts-->

<section class="contact" id ="contact">
  <div class="max-width">
    <h2 class="title">Contact Me</h2>
    <div class="contact-content">
      <div class="column left">
        <div class="text">Get in Touch</div>
        <p style="font-family:cursive">If you have any query regarding how to get my services or if have any problem
        in any services I provided you please contact me.
        My response may not be quite fast but definetly you will not return bare hands.
        </p>
        <div class="icons">
          <div class="row">
            <i class='fas fa-user-circle' style='font-size:36px'></i>
            <div class="info">
              <div class="head">Name</div>
              <div class="sub-title">Mani Bhushan Pandey</div>
            </div>
          </div>
          <div class="row">
            <i class='far fa-address-card' style='font-size:36px'></i>
            <div class="info">
              <div class="head">Address</div>
              <div class="sub-title">Samastipur, Bihar</div>
            </div>
          </div>
          <div class="row">
            <i class='far fa-envelope-open' style='font-size:36px'></i>
            <div class="info">
              <div class="head">Email</div>
              <div class="sub-title">mbpgene@gmail.com</div>
            </div>
          </div>
        </div>
      </div>
      <div class="column right">
          <div class="text">Message Me</div>
          <form action="" method="POST">
            <div class="field">
              <div class="field name">
                <input type="text" name="name" placeholder="Name" required>
              </div>
  
              <div class="field email">
                <input type="email" name="email" placeholder="Email" required>
              </div>
              
              
            </div>
            <div class="field">
              <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="field textarea">
              <textarea cols="30" rows="10" name="projectdesc" placeholder="Describe project.." required></textarea>
            </div>
            <div class="button">
              <button type="submit" name="submit">Send Message</button>
            </div>
          </form>
        </div>
        </div>
        
  

    
    
    </div>
  </div>
</section>

<!-- footer section starts -->

<footer>
  <span>Created By<a href="#"> ManiBhushan </a> <span class="fa fa-copyright"></span> 2021 all right reserved.</span>
</footer>

<script type="text/javascript">

if (window.history.replaceState){
    window.history.replacement(null, null, window.location.href);

}

</script>

</body>
<script src="script.js"></script>
</html>

