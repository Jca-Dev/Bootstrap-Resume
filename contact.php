<?php


if($_POST["projectsummary"]) {


mail("john.arscott@hotmail.com", "Employment Interest",


$_POST["insert your message here"]. "From: an@email.address");


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Skills, Web Developer, HTML, CSS, Javascript, Python, Agile, Heroku, Resume, CV, Full Stack">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>John</title>
</head>
<body>
    <header>
        <div class="row no-gutters">
            <a class="col-md-4 logo" href="02-index.html"></a>
            <div class="col-md-8">
                <div class="row no-gutters bg-color-name-title">
                    <div class="col heading">
                        <h1 class="name">Johnothan Arscott</h1>
                        <h2 class="title"> Trainee Full Stack Developer</h2>
                        <h3 class="quote"> "There is always room to learn more."</h3>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col">
                        <ul id="nav" class="list-inline menucontainer">
                            <li class="col-6 col-sm-3 list-inline-item ui-menu-color-home menuitem">
                                <a href="index.html" class="hvr-sweep-to-bottom"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                            </li>
                            <li class="col-6 col-sm-3 list-inline-item ui-menu-color-resume menuitem">
                                <a href="resume.html" class="hvr-sweep-to-bottom"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Resume</span></a>
                            </li>
                            <li class="col-6 col-sm-3 list-inline-item ui-menu-color-contact menuitem">
                                <a href="contact.html" class="hvr-sweep-to-bottom"><i class="fa fa-comment-o" aria-hidden="true"></i><span>Contact</span></a>
                            </li>
                            <li class="col-6 col-sm-3 list-inline-item ui-menu-color-download menuitem">
                                <a href="assets/cv/jca-dev.pdf" target="_blank" class="hvr-sweep-to-bottom"><i class="fa fa-download" aria-hidden="true"></i><span>Download CV</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="container-fluid">
        <div class="row bg-color-contact">
            <div class="col">
                <h3 class="contact-heading uppercase text-center">Interested in employing me?</h3>
                <h5 class="uppercase text-center">Lets create something amazing!</h5>

                <div class="center-form">
                    <form method=”POST” action="contact.php">
                        <input type="text" name="name" id="fullname" class="form-control" placeholder="Name" required />
                        <input type="email" name="email" id="emailaddress" class="form-control" placeholder="Email" required />
                        <textarea rows="5" name="projectsummary" id="projectsummary" class="form-control" placeholder="Enter vacancey information e.g job title, job description, salary, benifits and a little message." required></textarea>
                        <div class="form-row text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-secondary">Send your interest</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
    <footer class="container-fluid">
        <div id="footer-details" class="row">
            <div class="col-sm-4">
                <h5 class="uppercase general-sub">About</h5>
                <p class="inline-block">
                    Trainee Full Stack Web Developer. Skilled in everything from HTML to Heroku. The capacity for
                    structural and design thinking. Lover of Agile methodology.
                </p>
            </div>
            <div class="col-sm-4">
                <h5 class="uppercase general-sub">Download</h5>
                <p class="inline-block">
                    Need a printable version of my CV? Download it here.
                    <a href="assets/cv/jca-dev.pdf" target="_blank" class="cv-pdf">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <span class="sr-only">Download link.</span>
                    </a>
                </p>
            </div>
            <div class="col-sm-4">
                <h5 class="uppercase general-sub">Social</h5>
                <ul class="list-inline social-links">
                    <li class="list-inline-item">
                        <a target="_blank" href="https://www.facebook.com/MrLazyCloud">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://www.linkedin.com/in/jca-dev/">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>