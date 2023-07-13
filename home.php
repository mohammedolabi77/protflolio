<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mohammed Olabi</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../MohammedOlabi.com/css/bootstrap.min.css">
        <link rel="stylesheet" href="../MohammedOlabi.com/css/all.min.css">
        <link rel="stylesheet" href="../MohammedOlabi.com/css/my_css.css">
        <!-- my css files  -->

        <!-- google fonts  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
        <link rel="icon" href="images/logo.png" type="icon">
    </head>

    <?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1,-4);
?>
    <div class="side-nav">
        <div class="position-absolute ">
            <a href="#" class="side-link  <?= $page == "home" ? 'active' : '' ?>"><img src="images/home.png"
                    alt="home"><span class="hover-label">Home</span></a>
            <a href="pages/about.php" class="side-link <?= $page == "about" ? 'active' : '' ?> "><img
                    src="images/about me.png" alt="about"><span class="hover-label">About</span></a>
            <a href="pages/servecis.php" class="side-link <?= $page == "servecis" ? 'active' : '' ?>"><img
                    src="images/services.png" alt="Servecis"><span class="hover-label">Servecis</span></a>
            <a href="pages/skills.php" class="side-link <?= $page == "skills" ? 'active' : '' ?>"><img
                    src="images/skills.png" alt="Skills"><span class="hover-label">Skills</span></a>
            <a href="pages/projects.php" class="side-link <?= $page == "projects" ? 'active' : '' ?>"><img
                    src="images/projects.png" alt="Projects"><span class="hover-label">Projects</span></a>
            <a href="pages/resume.php" class="side-link <?= $page == "resume" ? 'active' : '' ?>"><img
                    src="images/resume.png" alt="resume"><span class="hover-label">Resume</span></a>
            <a href="pages/contact.php" class="side-link <?= $page == "contact" ? 'active' : '' ?>"><img
                    src="images/contact me.png" alt="Contact-me"><span class="hover-label">Contact</span></a>
        </div>
    </div>
    <?php 
include "pages/$page.php";
?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/my_js.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
    var typed = new Typed('#auto', {
        strings: ['Mohammed Olabi', 'Full Stack Web Developer', '2 Years coding Experience'],
        typeSpeed: 120,
        backSpeed: 60,
        loop: true
    });
    </script>

</html>