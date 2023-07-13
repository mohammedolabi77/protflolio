<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1,-4);
?>
<div class="side-nav">
    <div class="position-absolute ">
        <a href="../index.php" class="side-link  <?= $page == "index" ? 'active' : '' ?>"><img src="../images/home.png"
                alt="home"><span class="hover-label">Home</span></a>
        <a href="../pages/about.php" class="side-link <?= $page == "about" ? 'active' : '' ?> "><img
                src="../images/about me.png" alt="about"><span class="hover-label">About</span></a>
        <a href="../pages/servecis.php" class="side-link <?= $page == "servecis" ? 'active' : '' ?>"><img
                src="../images/services.png" alt="Servecis"><span class="hover-label">Servecis</span></a>
        <a href="../pages/skills.php" class="side-link <?= $page == "skills" ? 'active' : '' ?>"><img
                src="../images/skills.png" alt="Skills"><span class="hover-label">Skills</span></a>
        <a href="../pages/projects.php" class="side-link <?= $page == "projects" ? 'active' : '' ?>"><img
                src="../images/projects.png" alt="Projects"><span class="hover-label">Projects</span></a>
        <a href="../pages/resume.php" class="side-link <?= $page == "resume" ? 'active' : '' ?>"><img
                src="../images/resume.png" alt="resume"><span class="hover-label">Resume</span></a>
        <a href="../pages/contact.php" class="side-link <?= $page == "contact" ? 'active' : '' ?>"><img
                src="../images/contact me.png" alt="Contact-me"><span class="hover-label">Contact</span></a>
    </div>
</div>