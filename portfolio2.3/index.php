
<!DOCTYPE html>
<html>
<?php include "template-parts/header.php"; ?>

<body> 

<div id="wrapper">

<!--------------------- Home ----------------------->
    <div id="home">
        <nav>
            <div class="toggle"><i class="fas fa-bars menu"></i></div>
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="#projectsh2" >Projects</a></li>
                <li><a href="#photosh2" >Photography</a></li>
                <li><a href="#abouth2" >About me</a></li>
                <li><a href="#contact" >Contact</a></li>
            </ul>
        </nav>

        <div id="intro-naam">
            <h1>Janeau Hoogvliets</h1> 
        </div>
        <div id="intro-skills">
            <h3 class="skills">Front-end Developer</h3> 
            <h3 class="skills">Designer</h3> 
            <h3 class="skills">Photographer</h3> 
        </div>

    </div>


<!--------------------- Projects ----------------------->

    <h2 id="projectsh2">Projects</h2>
    <div id="line3"></div>

    <div id="projects">
        <a href="brightcode.php">
            <div id="fotobr" class="fotos">
                <div class="hover-tekst"><p>We created a workshop programming for kids. If you're curious, go check it out!</p>
                    <p id="hover-tekst2"><b>#HTML5 #CSS3 #Jquery</b></p>
                </div>
                <div><p>Bright code</p><div id="line4"></div>
            </div></div>
        </a>
        <a href="magazijn.php">
            <div id="fotom" class="fotos">
                <div class="hover-tekst"><p>At the beginning of my study I had to define my role as a designer. Go check it out!</p>
                    <p id="hover-tekst2"><b>#HTML5 #CSS3 #Writingskills</b></p>
                </div>
                <div><p>Magazijn</p><div id="line5"></div>
            </div></div>
        </a>

        <a href="luca.php">
            <div id="fotol" class="fotos">
                <div class="hover-tekst"><p>Luca Madu needed a brand. We gave it to them. Check it out!</p>
                    <p id="hover-tekst2"><b>#HTML5 #CSS3 #Jquery #Photoshop #Illustrator</b></p>
                </div>
                <div><p>Luca Madu</p><div id="line9"></div>
            </div></div>
        </a>

        <a>
            <div id="fotoc" class="fotos">
                <div class="hover-tekst"><p></p>
                    <p id="hover-tekst3">More work coming soon</p>
                </div>
            </div></div>
        </a>
        
        <div class="clear"></div>

    </div>
    
<!--------------------- Photography ----------------------->


    <h2 id="photosh2">Photography</h2>
    <div id="line6"></div>
    <div id="photos">
        <a  href="images/winterplants.jpg" data-lightbox="image-1" data-title="Plants in the winter"><img class="photos-index" src="images/winterplants.jpg" alt=""></a>
        <a  href="images/trees.jpg" data-lightbox="image-1" data-title="That reflection..."><img class="photos-index" src="images/trees.jpg" alt=""></a>
        <a  href="images/art.jpg" data-lightbox="image-1" data-title="Cool art in the street of Leuven"><img class="photos-index" src="images/art.jpg" alt=""></a>
        <a  href="images/path.jpg" data-lightbox="image-1" data-title="Where does this path lead to?"><img class="photos-index" src="images/path.jpg" alt=""></a>
        <div class="clear"></div>
        <a href="photos.php"><h4>See more</h4></a>
        <div id="line7"></div>

    </div>

    <!--------------------- About me ----------------------->

    <h2 id="abouth2">About me</h2>
    <div id="line"></div>

    <div id="tekst-about">
        <div><p>My name is Janeau Hoogvliets, I'm 22 years old and I live in Sittard. My hobbies are gaming, watching movies, photography and hanging out with friends. I am 
                currently studying Communication & Multimedia Design at Zuyd Hogeschool in Maastricht. I discovered I love to visualize ideas. The power of images inspire me. Therefore the choices I make for my future career lies within projects such as building websites,
                photography etc.  <p>
        </div>
        <div><p> The knowledge of building websites for me is good but there is always room for improvement. I want to learn how to work with Wordpress
                so I can build the ultimate user experience. My goal is to transform ideas into unique, creative images. I really believe that "A picture says a thousand words". <p>
        </div>
        <div class="clear"></div>

        <h4>Tools I use</h4>
        <div id="line2"></div>

        <div id="tools-code">
            <img class="tools" src="images/html.png" alt="">
            <img class="tools" src="images/css.png" alt="">
            <img class="tools" src="images/jquery.png" alt="">
        </div>

        <div id="tools-adobe">
            <img class="tools" src="images/ps.png" alt="">
            <img class="tools" src="images/illu.png" alt="">
            <img class="tools" src="images/light.png" alt="">
        </div>

    </div>


<!--------------------- Contact ----------------------->


    <div id="contact">
        
        <div id="contact-h2">
            <h2>Contact</h2> 
            <div id="line8"></div>
        </div>
        <div id="contact-tekst">
            <p>Want to know more about my work? Contact me: <a id="mail-link" href="mailto:j.hoogvliets@live.nl?Subject=" target="_blank">j.hoogvliets@live.nl</a>
        </div>

        <div class="middle">
            <a class="btn" href="https://www.linkedin.com/in/janeau-hoogvliets-100275160/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a class="btn" href="https://www.instagram.com/janeau.photography/?hl=nl" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            
        </div>
        <div id="copyright">
            <p>&copy 2019 Janeau Hoogvliets </p>
        </div>
     </div>

     


</div>
		
	
			

	

</body>
</html> 



					

