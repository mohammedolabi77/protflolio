    <?php 
    include "../includes/header.php";
    ?>
    <style>
.resume-cont.active {
    display: flex !important;
    transition: 0.5s;
}

.CV-cont.active {
    display: flex !important;
    transition: 0.5s;
}

.resume-cont {
    display: none;
}

.CV-cont {
    display: none;
}
    </style>

    <body class="text-bg-dark  z-index-0">
        <!-- top nav start  -->
        <nav class="navbar navbar-dark bg-dark stiky-top">
            <div
                class="container-fluid justify-content-sm-start justify-content-lg-start justify-content-md-start justify-content-center g-0 gx-2">
                <a class="navbar-brand" href="#">
                    <img src="../images/logo.png" alt="Logo" width="90" height="auto"
                        class="d-inline-block align-text-bottom mb-0 logo">
                    <span class="text-center"
                        style="display:flex; position:relative; left:80px; margin-top:-45px">Mohammed
                        Olabi/Resume</span>
                </a>
            </div>
        </nav>
        <!-- side nav start  -->
        <?php 
    include "../includes/side-nav.php";
    ?>

        <!-- About Section Start -->
        <div class="container n1">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center mb-2">
                        <div class="col-8 mb-5 col-lg-4 col-md-6 ">
                            <img src="../images/about_me.png" class="photo d-flex d-xl-none d-lg-none d-md-none ">
                            <img width="350px" class="d-xl-flex d-lg-flex d-md-flex d-sm-none"
                                src="../images/about_me.png" alt>
                        </div>
                        <div class="col-11 col-lg-8 col-md-6">
                            <h2 class="welcom mb-3">Welcom To My CV</h2><br>
                            <p>
                                As a web developer, I'm excited to share my resume with you, showcasing my skills,
                                experience, and passion for creating
                                innovative and user-friendly web solutions. With a solid foundation in front-end and
                                back-end development, coupled with
                                a creative mindset, I strive to deliver high-quality websites that not only meet
                                clients' expectations but also exceed
                                them.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- My Projects Start  -->
        <div class="containerr n2 row " style="padding-top: 90px;">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-around">
                    <h2 class="about-me text-center">
                        <span class="about-mee " id="resume" style="cursor: pointer;" onclick="showCv()">
                            Resume
                        </span>
                    </h2>
                    <h2 class="about-me text-center">
                        <span class="about-mee active" id="cv" style="cursor: pointer;" onclick="showCv()">
                            CV
                        </span>
                    </h2>
                </div>
                <!-- #################### CV START ###################### -->
                <div class="row CV-cont active " id="cv-cont">
                    <!-- worning title  -->
                    <div class="d-flex  d-sm-flex d-md-flex d-lg-none Worning">
                        <p>Make Sure You are use larg Screen in order to display the CV</p>
                    </div>
                    <!-- global container  -->
                    <div class="text-cv-cont d-none d-lg-flex">
                        <!-- head of cv  -->
                        <div class="header">
                            <div class="img-cont">
                                <span class="angle-bottom"></span>
                                <img src="../images/my_photo2sm.png" alt>
                                <span class="angle-right"></span>
                            </div>
                            <div class="brand-name">
                                <span class="first-name">Mohammed</span>
                                <span class="last-name">Ammar Olabi</span>
                                <span class="title">Full Stack Web Developer</span>
                            </div>
                            <div class="contact-info">
                                <span>
                                    <p>mohammedolabi77@gmail.com </p><img src="../images/email.png" alt>
                                </span>
                                <span>
                                    <p>+963 988 758 938 </p><img src="../images/phone.png" alt>
                                </span>
                                <span>
                                    <p>WWW.Mohammed Olabi.com</p><img src="../images/location.png" alt>
                                </span>
                            </div>
                        </div>
                        <!-- global text container  -->
                        <div class="sm-cont-text">
                            <!-- left side  -->
                            <div class="left-cv-cont">
                                <div class="sec-cont">
                                    <h3>About Me</h3>
                                    <p>As a full-stack developer proficient in HTML, CSS, JavaScript, Bootstrap, PHP,
                                        and MySQL, my
                                        objective is to leverage my
                                        skills and experience to contribute to the development of innovative web
                                        solutions. I am
                                        passionate about creating
                                        user-friendly and visually appealing websites and applications that provide
                                        seamless user
                                        experiences.
                                        I am committed to staying up-to-date with emerging technologies and industry
                                        trends. My goal
                                        is to continually enhance
                                        my skill set and embrace new tools and frameworks to deliver cutting-edge
                                        solutions.
                                        As a team player with excellent communication skills, I thrive in collaborative
                                        environments
                                        where I can contribute my
                                        expertise and learn from others. I am dedicated to delivering high-quality code,
                                        meeting
                                        project deadlines, and
                                        exceeding client expectations.
                                        In summary, I am a versatile and driven full-stack developer seeking
                                        opportunities to
                                        leverage my expertise in HTML,
                                        CSS, JavaScript, Bootstrap, PHP, and MySQL to develop impactful web solutions.
                                    </p>
                                </div>
                                <div class="sec-cont">
                                    <h3>Personal Skills</h3>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Communication</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Problem-solving</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Attention to Detail</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Time Management</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Adaptability</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Problem-Solving</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Teamwork and Collaboration</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Client-Focused Approach</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Continuous Learning</span><br>
                                    <span><span class="arrow"> &rangle; </span>&nbsp
                                        &nbsp
                                        Creativity</span><br>
                                </div>
                                <!-- personal skills  -->
                                <div class="sec-cont">
                                    <h3>Professional Skills</h3>
                                    <label>Html</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width:100%">100%</div>
                                    </div>
                                    <label>CSS</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 99%">90%</div>
                                    </div>
                                    <label>JS</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 60%">60%</div>
                                    </div>
                                    <label>PHP</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 80%">80%</div>
                                    </div>
                                    <label>MySQL</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 90%">90%</div>
                                    </div>
                                    <label>Bootstrap</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width:100%">100%</div>
                                    </div>
                                    <label>Laravel</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 15%">15%</div>
                                    </div>
                                    <label>Git</label>
                                    <div class="progress" role="progressbar" aria-label="Animated striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 15%">15%</div>
                                    </div>
                                </div>
                            </div>
                            <!-- right side  -->
                            <div class="right-cv-cont">
                                <div class="sec-cont">
                                    <h3>Experience</h3>
                                    <h4>- Front End Web Development</h4>
                                    <!-- <span>Self Learninng</span> -->
                                    <p>As a front-end web development, I can leverage HTML5, CSS3, and JavaScript to
                                        create
                                        engaging and interactive user
                                        interfaces. With HTML5, I can structure the content of web pages and utilize
                                        semantic
                                        elements for improved
                                        accessibility. CSS3 empowers me to apply stunning styles, animations, and
                                        responsive
                                        layouts, enhancing the visual
                                        appeal and adaptability of websites. JavaScript enables dynamic functionalities
                                        like
                                        form validation, DOM manipulation,
                                        and event handling, bringing interactivity to life. By integrating Bootstrap, a
                                        popular
                                        front-end framework, I can
                                        expedite development with its pre-designed components and responsive grid
                                        system.
                                        Additionally, I can utilize JSON APIs
                                        to retrieve and manipulate data from external sources, enabling seamless
                                        integration of
                                        dynamic content into web
                                        applications.
                                    </p>
                                    <h4>- Back End Web Development</h4>
                                    <!-- <span>Self Learninng</span> -->
                                    <p>As a backend web developer, I have expertise in PHP, Laravel, and MySQL database.
                                        Using
                                        PHP, I can build robust and
                                        scalable web applications, handle server-side operations, and implement complex
                                        functionalities. Laravel, a powerful PHP
                                        framework, allows me to streamline development with its extensive libraries, MVC
                                        architecture, and built-in security
                                        features. With MySQL, I can design and manage databases, store and retrieve data
                                        efficiently, and ensure data integrity.
                                        Together, these technologies enable me to create dynamic web applications,
                                        handle user
                                        authentication, implement CRUD
                                        operations, and optimize database performance for seamless and reliable user
                                        experiences.
                                    </p>
                                </div>
                                <div class="sec-cont">
                                    <h3>Education</h3>
                                    <h4>Electronic Enginner</h4>
                                    <span>University Of Aleppo</span>
                                    <p>I'm stil studying at university and i'v majored in web development while i'm
                                        studying in my university
                                    </p>
                                </div>
                                <div class="sec-cont">
                                    <h3 class=" pt-1">Languages</h3>
                                    <label>Arabic</label>
                                    <div class="progress-stacked">
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                    </div>
                                    <label>English</label>
                                    <div class="progress-stacked">
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                        <div class="progress" role="progressbar" aria-label="Segment three"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            aa
                                            <div class="progress-bar bg-info"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #################### CV END   ###################### -->

                <!-- #################### Resume START ###################### -->
                <div class="row resume-cont" id="resume-cont">
                    <div class="d-flex  d-sm-flex d-md-flex d-lg-none Worning">
                        <p>Make Sure You are use larg Screen in order to display the Resume</p>
                    </div>
                    <div class="resume-title d-none d-lg-flex">
                        <div class="left-side-res">
                            <div class="self-info-cont">
                                <img src="../images/my_photo2sm.png" alt="">
                                <span class="name">Mohammed Ammar Olabi</span>
                                <span class="title">Full Stack Web Developer</span>
                                <div class="contact-info">
                                    <span>
                                        <p>mohammedolabi77@gmail.com </p>
                                        <img src="../images/email.png" alt>
                                    </span>
                                    <span>
                                        <p>+963 988 758 938 </p>
                                        <img src="../images/phone.png" alt>
                                    </span>
                                    <span>
                                        <p>WWW.Mohammed Olabi.com</p>
                                        <img src="../images/location.png" alt>
                                    </span>
                                </div>
                            </div>
                            <div class="section-cont">
                                <h3><Span><img src="../images/skills.png" alt=""></Span><span>Skills</span></h3>
                                <label>Html</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 99%">99%
                                    </div>
                                </div>
                                <label>CSS</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 99%">90%
                                    </div>
                                </div>
                                <label>JS</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 60%">60%
                                    </div>
                                </div>
                                <label>PHP</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 80%">80%
                                    </div>
                                </div>
                                <label>MySQL</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 90%">90%
                                    </div>
                                </div>
                                <label>Bootstrap</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 95%">95%
                                    </div>
                                </div>
                                <label>Laravel</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 15%">15%
                                    </div>
                                </div>
                                <label>Git</label>
                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 15%">15%
                                    </div>
                                </div>
                            </div>
                            <div class="section-cont">
                                <h3><Span><img src="../images/lang.png" alt=""></Span><span>Languages</span></h3>
                                <label>Arabic</label>
                                <div class="progress-stacked">
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                </div>
                                <label>English</label>
                                <div class="progress-stacked">
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Segment three"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        aa
                                        <div class="progress-bar bg-info"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-cont">
                                <h3><Span><img src="../images/edication.png" alt=""></Span><span>Education</span></h3>
                                <h4>Electrical Enginner</h4>
                                <h5>University of Aleppo</h5>
                                <p>I'm stil studying at university and i'v majored in web development while i'm
                                    studying in my university
                                </p>
                            </div>
                        </div>
                        <div class="right-side-res">
                            <div class="section-cont">
                                <h3><Span><img src="../images/resume.png" alt=""></Span><span>Summary</span></h3>
                                <div>
                                    Highly skilled and motivated web developer with expertise in front-end and back-end
                                    technologies. Proficient in HTML,
                                    CSS, JavaScript, and Bootstrap for creating responsive and visually appealing user
                                    interfaces. Strong knowledge of PHP
                                    and MySQL for server-side development, database management, and dynamic content
                                    generation. Experienced in working with
                                    JSON data and integrating APIs for seamless data exchange. Detail-oriented and
                                    committed to delivering high-quality code
                                    and exceptional user experiences. Adept at problem-solving, collaborating in teams,
                                    and continuously learning new
                                    technologies. <br>
                                    <span class="bold">
                                        Here some of my projects:
                                    </span> <br>
                                    <a href="https://labtech-sy.com/">&nbsp labtech-sy</a><a
                                        href="../Projects/RB-Agent/">&nbsp RB-Agent</a><a
                                        href="Projects/Medilab/index.html">&nbsp Medilab</a><a href=""></a>
                                </div>
                            </div>
                            <div class="section-cont">
                                <h3><Span><img src="../images/services.png" alt=""></Span><span>Experience</span></h3>
                                <div>
                                    I'm full-stack PHP web developer, I possess a diverse skill set encompassing HTML,
                                    CSS, JavaScript, Bootstrap, JSON,
                                    API integration, PHP, and MySQL. With a strong background in front-end and back-end
                                    development, I have the ability to
                                    handle the complete web development process from start to finish.
                                    <h4>front-end development:</h4>
                                    I excel at creating visually appealing and responsive user
                                    interfaces using HTML, CSS, and
                                    JavaScript. I have experience in building intuitive and engaging websites that
                                    provide an exceptional user experience. I
                                    am well-versed in utilizing CSS frameworks like Bootstrap to ensure consistent
                                    styling and layout across different
                                    devices and screen sizes.
                                    <h4>back-end development:</h4>
                                    On the back-end side, I have a deep understanding of PHP and its frameworks like
                                    Laravel or CodeIgniter. I can design
                                    and develop robust server-side applications, handle database interactions, and
                                    implement complex business logic. With
                                    MySQL, I am proficient in database management, including schema design, query
                                    optimization, and data manipulation. <br>
                                    <h5>Additionally...</h5>
                                    I have expertise in working with JSON data and integrating APIs. I can
                                    effectively communicate with
                                    external systems, retrieve and process data, and ensure seamless data exchange
                                    between different platforms. This enables
                                    me to create dynamic and interactive web applications that utilize external services
                                    and resources.<br>

                                    Throughout my career, I have honed my problem-solving skills, allowing me to
                                    identify and resolve issues efficiently. I
                                    am comfortable working with version control systems like Git, ensuring smooth
                                    collaboration and code management within
                                    development teams.<br>
                                    <h5>Furthermore...</h5>
                                    I value effective communication and collaboration. I understand the
                                    importance of understanding project
                                    requirements and working closely with designers, frontend developers, and other
                                    stakeholders. I strive to deliver
                                    high-quality code, meet project deadlines, and contribute to the overall success of
                                    web development projects.<br>

                                    Continual learning and staying up-to-date with the latest web technologies are
                                    integral to my professional growth. I
                                    actively seek opportunities to enhance my skills, explore new frameworks, and
                                    embrace emerging trends in the dynamic
                                    field of web development.
                                </div>
                            </div>

                            <div class="section-cont">
                                <h3><span>My Web Site</span>
                                </h3>
                                <div class="my-web">
                                    <div class="contact-info border-0">
                                        <span>
                                            <p>Mohammed Olabi@Linkedin </p>
                                            <img src="../images/linkedin.png" alt>
                                        </span>
                                        <span>
                                            <a href="https://www.facebook.com/profile.php?id=100024686372042"
                                                target="_blank">
                                                <p>Mohammed Ammar Olabi </p>
                                            </a>
                                            <img src="../images/facebook.png" alt="facebook" class="social">
                                        </span>
                                        <span>
                                            <a href="https://t.me/+963988758938" target="_blank">
                                                <p>Mohammed Olabi... </p>
                                            </a>
                                            <img src="../images/telegram.png" alt="facebook" class="social">
                                        </span>
                                        <span>
                                            <a href="https://www.youtube.com/channel/UCyCC8sRE4FHZtBnssiENm_A"
                                                target="_blank">
                                                <p>Mohammed Olabi </p>
                                            </a>
                                            <img src="../images/youtube.png" alt="facebook" class="social">
                                        </span>
                                        <span style="width: 100% !important; margin-top: 0px;">
                                            <p class="fw-bold pe-5">Scan The Next QR To
                                                Visit My
                                                Website
                                                &xrArr; </p>
                                        </span>
                                    </div>
                                    <img src="../images/qr.jpg" alt="">
                                </div>
                            </div>
                            <!-- #################### Resume End ###################### -->
                        </div>
                    </div>
                </div>
                <!-- #################### Resume END ###################### -->
            </div>
        </div>


        <script>
        function showCv() {
            document.querySelector('#cv').classList.toggle('active');
            document.querySelector('#cv-cont').classList.toggle('active');
            document.querySelector('#resume').classList.toggle('active');
            document.querySelector('#resume-cont').classList.toggle('active');
        }
        </script>

        <!-- Contactme Start  -->

        <?php 
    include "../includes/footer.php";
    ?>