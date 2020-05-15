<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Golbon Rose</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/IMG_7399.JPG.favicon.ico" rel="shortcut icon" />
	<link href="Styles/commonstyles.css?v1" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&amp;family=Oswald:wght@300;400;500;600;700&amp;family=Source+Code+Pro:wght@200;300;400&amp;display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/179f3e5755.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <a href="#home"><img  class="brand" src="images/logo.JPG"></a>
        <div class="toggle" href="#" id="navAccordian">
            <i class="fas fa-bars"></i>
        </div>

        <div class="right">
            <div class="link-wrapper">
                <a href="#home" class="navlink" id="home">Home</a>
	            <a href="#about" class="navlink">About</a>
	            <a href="images/golbonr rose resume.pdf" class="navlink" target="_blank">Resume</a>
                <a href="#portfolio" class="navlink">Portfolio</a>
                <a href="/blog.php" class="navlink" id="hide"> Blog</a>
	            <a href="#contact" class="navlink"> Contact</a>
        </div>
    </div>

    <script>
        const navAccordian= document.querySelector ('#navAccordian');
        navAccordian.addEventListener('click',(e)=> {
        navAccordian.parentElement.classList.toggle('active')
        })
    </script>

    </div>



    <div class="hero-section" id="home">
        <div class="content-wrapper">
            <h1>Hi, I&#39;m Golbon Rose!</h1>
            <h3>Freelancer. Cat-lover. Writer. Passionate about innovation and creativity.</h3>

            <div class="btn"><a href="#about">LEARN MORE </a></div>
        </div>
    </div>

    <div class="about" id="about">
        <div class="bio-wrapper">
            <div class="bio">
                <div class="headshot"><img class="head-shot" src="images/darlaandi.jpg" /></div>

                <div class="bio-text">
                    <h1>About Me</h1>
                    <p>I am a first-generation immigrant, born in Tehran, Iran. I moved to Washington state in 2001, and was raised in Redmond,WA for 11 years, before relocating to the Texas Panhandle. Between now and then, I have been back and forth between WA and TX.</p>
                    <p>When I was a child, my interest in pixel art, along with my Hilary Duff obsession lead me to teach myself web-development and design. I was always on fansites and knew I had to make one.</p>
                    <p>I picked up coding again Fall 2019, after years and fell in love with it all over again. I am currently working towards my full-stack development certification through Bootega Devcamp.</p>
                    <p>I recently discovered how much I love the creative aspects of business, and bringing a vision to life. My goal is to serve clients , through creativity, strategy, and craftsmanship. My strengths include implementation, client relations, and QA.</p>
                    <p>I love running, creating craft beverages, writing, singing, reading, spending time with my loved ones(including my cats, Darla and Frodo), and watching tv.</p>
                </div>
            </div>
        </div>

        <div class="column-wrapper">
            <div class="column">
                <p>What I do:<br />branding, strategy,<br />
                front-end development,<br/>
                website management</p>
            </div>

            <div class="column">
                <p>What I Don&#39;t Do:<br />
                content-writing,<br />graphic design,<br />
                social media management,<br />
                SEO, SEM</p>
            </div>
        </div>
    </div>

    <div class="portfolio" id="portfolio">
        <h1>There doesn&#39;t seem to be much here yet...</h1>
        <h3><a href="#contact">Help me change that!</a></h3>
    </div>

    <div class="contact-section" id="contact">
        <div class="contact_form">
            <h1>Get in touch.</h1>
            <form action="contact-form.php" method="POST">
            <p>Name:</p>
            <input name="name" type="text" />
            <p>Email Address:</p>
            <input name="email" type="text" />
            <p>Message:</p>
            <textarea cols="25" name="message" rows="6"></textarea><br />
            <input class="s-btn" type="submit" value="Send" /></form>
        </div>
    </div>

<footer>
    <div class="footer-wrapper">
        <div class="footer-nav-links">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="images/golbonr rose resume.pdf">Resume</a>
            <a class="nav-link" href="#portfolio" target="_blank">Portfolio</a>
            <a class="nav-link" href=" #contact">Contact</a>
        </div>

    <div class="copy-right-wrapper">
        <h1 class="title">Golbon Rose</h1>
        <h5>&copy; <script>
                document.write (new Date().getFullYear())
        </script> Golbon Rose | All rights reserved</h5>
    </div>

    <div class="social-media-wrapper">
        <a href= "http://www.instagram.com/rosethecodeher"><i class="fab fa-instagram"></i></a>
        <a href="http://www.linkedin.com/in/golbonrose"><i class="fab fa-linkedin"></i></a>
        <a href= "http://www.github.com/rosethecodeher" ><i class="fab fa-github"></i></a>
    </div>
</footer>
</body>
</html>
