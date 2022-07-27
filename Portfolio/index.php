<?php
$hostname="localhost";
$db_user="root";
$db_pass="";
$db_name="counter";
$connection=mysqli_connect($hostname, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()){
    die("Error connecting to the Database");
}
$visitor_ip=$_SERVER['REMOTE_ADDR'];

$query="SELECT * FROM counter_table WHERE ip_address='$visitor_ip";
$result=mysqli_query($connection, $query);
if (!$result){
    die("Retriving Query Error<br>".$query);
}
$total_visitors=mysqli_num_rows($result);
if($total_visitors<1){
    $query="INSERT INTO counter_table(ip_address) VALUE('$visitor_ip')";
    $result=mysqli_query($connection, $query);
}

$query="SELECT * FROM counter_table";
$result=mysqli_query($connection, $query);
if (!$result){
    die("Retriving Query Error<br>".$query);
}
$total_visitors=mysqli_num_rows($result);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">
    <meta name="msapplication-tap-highlight" content="no">

    <title>My Resume</title>

    <link href="port.css" rel="stylesheet">
    <link href="" rel="">
</head>

<body>
    <script>$(window).scroll(function () {
            if ($(document).scrollTop() > 100) {
                $('nav').addClass('animate');
            } else {
                $('nav').removeClass('animate');
            }
        })</script>
    <div class="background-color-layer" style="background-image: url('./img/edited.jpg')">
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#resNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img class="hlm" src="./img/hlm logo.jpeg"></a>
            <a href="#" class="navbar-brand" style="padding:15px;">Humans Like Machine</a>
        </div>
        <div class="collapse navbar-collapse" id="resNav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#aboutme">About Me</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#achivement">Achivements</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#language">Languages and Hobbies</a></li>
                <li><a href="#social">Socials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <script type="text/javascript" src="https://popupsmart.com/freechat.js"></script>
    <script> window.start.init({ title: "Hi there ✌️", message: "How may we help you? Just send us a message now to get assistance.", color: "#9C58CE", position: "right", placeholder: "Enter your message", withText: "Write with", viaWhatsapp: "Or write us directly via Whatsapp", gty: "Go to your", awu: "and write us", connect: "Connect now", button: "Write us", device: "everywhere", logo: "https://d2r80wdbkwti6l.cloudfront.net/sCWJpjIDN3jGoJlfCPkwDsiIHMkjsjE8.jpg", person: "https://d2r80wdbkwti6l.cloudfront.net/5lEfKPADmPWPNFzfVcy2uUFHA9HsHSJo.jpg", services: [{ "name": "whatsapp", "content": "+919156806641" }, { "name": "sms", "content": "+919156806641" }, { "name": "telegram", "content": "+918080058890" }, { "name": "mail", "content": "shreyash3wakte@gmail.com" }, { "name": "phone", "content": "+918080058890" }] })</script>
    <main class="content-wrapper">
        <header class="white-text-container section-container">
            <div class="text-center">
                <h1>I am Shreyash Wakte</h1>
                <p>Web designer, Programmer and Data scientist</p>
                <p>
                    <a class="fa-icon fa-icon-2x" href="https://www.facebook.com/shreyash.wakte" title="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="fa-icon fa-icon-2x" href="https://twitter.com/" title="">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="" class="fa-icon fa-icon-2x"
                        href="https://www.instagram.com/invites/contact/?i=iofn5jqulzgn&utm_content=30twpvv" title="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="fa-icon fa-icon-2x" href="https://www.linkedin.com/in/shreyash-wakte-8a5170222/" title="">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <section id="aboutme">
                        <div class="card">
                            <div class="card-block">
                                <h2>About me</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p><img src="./img/passport photo.jpg" class="img-responsive" alt=""></p>
                                    </div>
                                    <div class="col-md-8">

                                        <p>I am a Computer Engineer from H.V.P.M College of Engineering, I am a
                                            certified
                                            Java Programmer and also know Python programming.</p>
                                        <p>I have a very good experience in Machine learning, I have completed around 5
                                            Project based on the Machine learing algorithm.</p>
                                        <P>My objective is Seeking a challenging position in a reputed organization
                                            where I
                                            can learn new skills, expand my knowledge, and leverage my learnings.</P>
                                        <p>I am verygood at problem solving and team work, I am a fast learner and can
                                            adapt
                                            to any situation very easyly.</p>
                                        <a
                                            href="https://drive.google.com/file/d/1GK_mK7b2Mo3FjJV64gmvwVQy0Lo2Hx5N/view?usp=sharing">
                                            <button type="submit" class=" btn btn-primary" onclick="">Download
                                                CV</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="projects">
                        <div class="card">
                            <div class="card-block">
                                <h2>Projects</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="./img/spam-email-icon.jpg" class="img-responsive" alt="">
                                        <h3 class="h5">Spam Email Detection</h3>
                                        <p>March 2022</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="./img/images (3).jpg" class="img-responsive" alt="">
                                        <h3 class="h5">Text Emotion Detection</h3>
                                        <p>May 2022</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="./img/iris species.jpg" class="img-responsive" alt="">
                                        <h3 class="h5">Iris Species Detection</h3>
                                        <p>April 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="achivement">
                        <div class="card">
                            <div class="card-block">
                                <h2>Achivements</h2>
                                <div class="work-experience">
                                    <small class="date">2021</small>
                                    <h3 class="h5 date-title">Golden Badge-
                                        <a href="https://www.hackerrank.com/shreyash3wakte"
                                            title="Create professionnal website">HackerRank</a>
                                    </h3>
                                    <p>Scored 5 Star Golden Badge in problem solving in java.</p>
                                </div>

                                <div class="work-experience">
                                    <small class="date">2017-2015</small>
                                    <h3 class="h5 date-title">Elite+Silver Certified - <a
                                            href="https://archive.nptel.ac.in/noc/Ecertificate/?q=NPTEL21CS56S2309018303206179"
                                            title="">NPTEL</a></h3>

                                    <p>76% in NPTEL Programming in java online
                                        Certification.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="education">
                        <div class="card">
                            <div class="card-block">
                                <h2>Education</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="education-experience">
                                            <small class="date">2023-2019</small>
                                            <h3 class="h5 date-title">B.E(Computer Science and Engineering)</h3>
                                            <p>H.V.P.M College of Engineering, Amravati</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="education-experience">
                                            <small class="date">2019-2018</small>
                                            <h3 class="h5 date-title">Higher Secondary Certificate (HSC)</h3>
                                            <p>Shri Shivaji College of Art, Commerce and Science, Akola</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="education-experience">
                                            <small class="date">2017-2016</small>
                                            <h3 class="h5 date-title">Secondary School Certificate(SSC)</h3>
                                            <p>School of Scholars, Kk, Akola</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="language">
                        <div class="card">
                            <div class="card-block">
                                <h2>Language</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="language-experience">
                                            <h3 class="h5">Java <small>Fluent</small></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="language-experience">
                                            <h3 class="h5">Python <small>Fluent</small></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="language-experience">
                                            <h3 class="h5">HTML/Css <small>Beginner</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="card">
                        <div class="card-block">
                            <h2>HOBBIES AND INTERESTS</h2>
                            <ul>
                                <li>I enjoy listening music and solving puzzles</li>
                                <li>I like to play video games which improve my focus and helps in
                                    quick decision making.</li>
                                <li>Like problem solving and I am a quick learner.</li>
                            </ul>
                        </div>
                    </div>
                    <section id="social">
                        <div class="card">
                            <div class="card-block">
                                <h2>Social Network</h2>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="social-buttons"><a href="https://twitter.com/" title=""><span
                                                    class="social-round-icon fa-icon"><i
                                                        class="fa fa-facebook"></i></span>@Shreyas_wakte</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="social-buttons"><a
                                                href="https://www.linkedin.com/in/shreyash-wakte-8a5170222/"
                                                title=""><span class="social-round-icon fa-icon"><i
                                                        class="fa fa-linkedin"></i></span>Shreyash Wakte</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="social-buttons"><a href="https://dribbble.com/" title=""><span
                                                    class="social-round-icon fa-icon"><i
                                                        class="fa fa-instagram"></i></span>@shreyash_wakte03</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="contact">
                        <div class="card">
                            <div class="card-block">
                                <h2>Contact</h2>
                                <form action="" class="reveal-content">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"
                                            placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class=" btn btn-primary">Send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section id="counter">
                        <div class="card">
                            <div class="card-block">
                                <h2>
                                    No. of Visits
                                </h2>
                                <h3>
                                    <?php echo $total_visitors; ?>
                                </h3>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </main>
</body>

</html>