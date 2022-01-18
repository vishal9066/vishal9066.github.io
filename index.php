<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&family=WindSong&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/social_icons.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <title>Vishal Kurmi</title>
</head>
<body>
    <!-- <nav id="navbar">
        <div id="logo">
            <img src="img/logo.png" alt="Vishal">
        </div>
        <ul>
            <li class="item"><a href=#>Home</a></li>
            <li class="item"><a href=#abt>About</a></li>
            <li class="item"><a href=#prt>Portfolio</a></li>
            <li class="item"><a href=#>Blog</a></li>
            <li class="item"><a href=#cont>Contact Me</a></li>
        </ul>
    </nav> -->
    <header>
        <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo"><strong>Trozon</strong>Sec</div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#abt">About</a></li>
                <li><a href="#prt">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#cont">Contact Me</a></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
    </header>
    <div class="main">
    <div class="home">
        <h1 class="h1-primary">Hello, I'am <span class="highlight">Vishal Kurmi</span>,</h1>
        <h1 class="h1-primary">I'am a <span class="highlight auto-input"></span>.</h1> 
        <button class="btn" onclick="location='https://www.google.com/search?q=trozon%20technologies&sxsrf=ALeKk034PntJNZ27oXblR68TEVzFoR4EZg%3A1627919875419&ei=AxYIYeaHGc6y9QPmw4KICA&oq=trozontechnologies&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyCgguEMcBENEDEA0yBAgAEA0yBAgAEA0yCgguEMcBEK8BEA0yBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA06BwgjELADECc6BwgAEEcQsAM6EAguEMcBENEDELADEMgDEEM6EAguEMcBEKMCELADEMgDEEM6BwgjELACECc6BggAEAcQHjoFCAAQzQJKBQg4EgExSgQIQRgAUJIPWNEkYKE1aAFwAngAgAGJAogB9Q2SAQUwLjEuN5gBAKABAcgBD8ABAQ&sclient=gws-wiz&ved=0ahUKEwimlZaP2pLyAhVOWX0KHeahAIEQ4dUDCA4&uact=5'">Read More..</button>
    </div>
    </div>

    <section class="content" id="abt">
    <!-- <h1 class="h1-primary">About</h1> -->
    <div id="about">
        <div class="left_img">ABOUT ME</div>
        <div class="right_text">
            <p class="para">I am an IT graduate with an interest in Cyber Security & Web Development. Seeking
            a Job to apply my experience and skills to grow more in this field. Hardworking
            and determined to find an optimal way so as to improve the productivity and
            profitability of an organization.</p>  
            <p class="para">You can also call me a product designer, experience designer, interaction, UI, UX or by any other market defined function-title. I'm also a multi-disciplinary maker with over 10 years of experiences in wide range of design disciplines, manager, advisor, entrepreneur, front-end developer, music enthusiast, traveler, photographer and more.</p>
            <p class="para">I don’t like to define myself by the work I’ve done. I define myself by the work I want to do. Skills can be taught, personality is inherent. I prefer to keep learning, continue challenging myself, and do interesting things that matter.</p>
			<p class="para">Fueled by high energy levels and boundless enthusiasm, I’m easily inspired and more then willing to follow my fascinations wherever they take me. I’m passionate, expressive, multi-talented spirit with a natural ability to entertain and inspire. I’m never satisfied to just come up with ideas. Instead I have an almost impulsive need to act on them.</p> 
			<p class="para">My abundant energy fuels me in the pursuit of many interests, hobbies, areas of study and artistic endeavors. I’m a fast learner, able to pick up new skills and juggle different projects and roles with relative ease.</p>
			            
        </div>
    </div>
    </section>
    <section class="content" id="prt">
    <h1 class="h1-primary">PORTFOLIO</h1>
    <div id="portfolio">
        <!-- <div class="left_content">ferjfejreh</div> -->
        <div id="port">
            <img src="img/resume.jpg" alt="resume">
        </div>
        <!-- <div class="right_img">PORTFOLIO</div> -->
    </div>
    </section>


    <section class="content" id="cont">
    <h1 class="h1-primary">CONTACT Me</h1>
    <div id="contact">
        <div class="left_img" id="ct_hire"><span class="animate__animated animate__slower animate__jello animate__infinite">Hire me..</span></div>
        <div class="right_content">
            <div id="form">
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="pno">Phone Number:</label>
                <input type="text" name="pno" id="pno">
                <label for="msg">Message:</label>
                <textarea type="text" name="msg" id="msg"></textarea>
                <button class="btn" id="ct_btn" type="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </section>

    <section id="footer">
        <div class="foot">
        <div id="ftr_copy">Vishal Kurmi &#169; 2021</div>
        <div id="ftr_content">
            <div class="footer-social-icons">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/vishalkurmi9066/" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/trozonsec" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/trozonsec" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCp6fQ19mdjpJTmbfsRRJO4Q" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/vishal-kurmi-80558112b/" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/vishal9066" class="social-icon"> <i class="fa fa-github"></i></a></li>
                </ul>
            </div>
        </div>      
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".auto-input", {
        strings: ["Security Researcher", "Full Stack Web Developer", "Ethical Hacker"],
        typeSpeed: 30,
        loop: true,
        backDelay: 900,
        backSpeed: 20,

    })
</script>
</body>
</html>