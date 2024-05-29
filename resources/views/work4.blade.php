<?php
    //Importamos las variables del formulario usamos @ para anular los avisos por error
    //que pueda generar la variable.
    @$name = addslashes($_POST['name']);
    @$email = addslashes($_POST['email']); 
    @$asunto = addslashes($_POST['subject']); 
    @$message = addslashes($_POST['message']);
    //Preparamos el mensaje de contacto
    $cabeceras = "From: $email\n" //La persona que envia el correo
     . "Reply-To: $email\n";
    $asunto = "Contacto desde la web de $name"; //El asunto
    $email_to = "mailme@bykike.com"; //cambiar por tu email
    $contenido = "$name con el correo electrónico $email, te ha enviado el siguiente mensaje:\n"
    . "\n"
    . "$message\n"
    . "\n";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>byKike.com</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Portafolio" name="description">
    <!--Fav-->
    <link href="images/favicon.png" rel="shortcut icon">

    <!--styles-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="estilos.css">

    <!-- Icomoon Fonts-->
    <script src="https://use.fontawesome.com/53f5892d67.js"></script>

    <link href="css/photos.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">

    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->

    <!--View Source is disabled!-->
		<script type="text/javascript">
			//<![CDATA[
			var show_msg = '0';
			if (show_msg !== '0') {
				var options = {view_src: "View Source is disabled!", inspect_elem: "Inspect Element is disabled!", right_click: "Right click is disabled!", copy_cut_paste_content: "Cut/Copy/Paste is disabled!", image_drop: "Image Drag-n-Drop is disabled!" }
			} else {
				var options = '';
			}

         	function nocontextmenu(e) { return false; }
         	document.oncontextmenu = nocontextmenu;
         	document.ondragstart = function() { return false;}

			document.onmousedown = function (event) {
				event = (event || window.event);
				if (event.keyCode === 123) {
					if (show_msg !== '0') {show_toast('inspect_elem');}
					return false;
				}
			}
			document.onkeydown = function (event) {
				event = (event || window.event);
				//alert(event.keyCode);   return false;
				if (event.keyCode === 123 ||
						event.ctrlKey && event.shiftKey && event.keyCode === 73 ||
						event.ctrlKey && event.shiftKey && event.keyCode === 75) {
					if (show_msg !== '0') {show_toast('inspect_elem');}
					return false;
				}
				if (event.ctrlKey && event.keyCode === 85) {
					if (show_msg !== '0') {show_toast('view_src');}
					return false;
				}
			}
			function addMultiEventListener(element, eventNames, listener) {
				var events = eventNames.split(' ');
				for (var i = 0, iLen = events.length; i < iLen; i++) {
					element.addEventListener(events[i], function (e) {
						e.preventDefault();
						if (show_msg !== '0') {
							show_toast(listener);
						}
					});
				}
			}
			addMultiEventListener(document, 'contextmenu', 'right_click');
			addMultiEventListener(document, 'cut copy paste print', 'copy_cut_paste_content');
			addMultiEventListener(document, 'drag drop', 'image_drop');
			function show_toast(text) {
				var x = document.getElementById("amm_drcfw_toast_msg");
				x.innerHTML = eval('options.' + text);
				x.className = "show";
				setTimeout(function () {
					x.className = x.className.replace("show", "")
				}, 3000);
			}
		//]]>
		</script>


  </head>
  <body>



    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img alt="logo" src="images/logo-big.png">
      </div>
    </div>

    <!--/.PRELOADER END--> 

    <!--HEADER -->
    <div class="header">

      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="{{ url('/') }}"><img alt="logo" class="logo-nav" src="images/logo.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a href="{{ url('/') }}">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about" class="active">
              <span>About</span>
            </a>
            <a data-scroll="" href="#work">
              <span>Some Works</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>

      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->

    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">

        <!--WORKS-->
        <section id="works">

            <div class="row">
              <img src="works/CatPRITECHigiene.jpg" height="100%" width="100%"/>
            </div>

        </section>
        <!--/.WORKS END-->



        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="">
              <img src="works/cathiguienedetalle.jpg" alt="work" height="100%" width="100%"/>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
                <div class="col-md-12">
                  <div class="wrap-about-work">
                    <div class="w-content-work">

                      <h3 class="title-small">
                       <span>Hygiene & disinfection</span>
                      </h3>
                      <p class="content-detail">
                      Catalogue design to showcase highly effective solutions capable of destroying 
                      viruses and bacteria in industrial spaces and public establishments.
                      <br><br>
                      The focus was on the combination of diagrams and environmental images, to offer 
                      an attractive and accessible presentation for customers.
                      </p>
                      
                    </div>
                  </div>
                </div>

              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->





        <!--WORK-->

        <!--Main works -->
        <section class="white-bg" id="services">
          <div class="container">


            <div class="row">
              <div class="col-md-4">
                <h3 class="title-small">
                  <span>Ease of navigations</span>
                </h3>
                <p class="content-detail">
                  This catalogue was very well received by customers, due to the ease of navigation
                  and the level of detail of the information provided.
                  <br><br>
                  Good development with catalogue design allows customers to get to know products and services in a 
                  clear and complete way. 
                  <br><br>
                  My goal is always to create innovative and effective design solutions that reinforce the visual 
                  identity of the brand and improve the user experience.
                </p>
              </div>
              <div class="col-md-8 content-right">
                <div class="row">
                    <div >
                      <img src='works/portadaCatHiguiene.jpg' width="70%">
                    </div>
                </div>
              </div>
            </div>

          </div>
        </section>



        <!-- MORE DESIGN -->

        @include('moredesign')

        <!--/.MORE DESIGN -->



        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Contact</span>
                </h3>
                <p class="content-detail">
                If I have aroused your curiosity and you want to know more about me, you can email me.</p>

              </div>
              <div class="col-md-9 content-right">
                
                <form  method="post" action="#contact">

                  <div class="group">
                    <input required type="text" name="name"><span class="highlight"></span><span class="bar"></span><label>Name</label>
                  </div>
                  <div class="group">
                    <input required type="email" name="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                  </div>
                  <div class="group">
                    <textarea required name="message"></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
                  </div>
                  <label for="verificacion" class="verif"></label>
                  <!-- <input name="verificacion" class="verif" /> -->
                  <input type="text" name="formtime" class="verif" value="<?php echo time(); ?>" />
                  <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">

                </form>

                <p id="contenido"></p>

                <?php
                    // Si hay valores en blanco no hacer nada y borrar lo que hay en #contenido.
                    if ($name == "" || $email == "" || $asunto == "" || $message == "") {
                       echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "";</script>';
                       } else {
                            if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

                                // Revisar el envío y según lo que pase mostrar mensaje.
                                echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "El formulario se envío con éxito";</script>';
                              } else {
                                echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "Fallo el envío del formulario.";</script>';
                              } 
                       }
                ?>   

              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->




        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="linkedin">
                <a href="https://www.instagram.com/bykikke/" target="_blank" data-hover="Instagram">Instagram</a>
              </li>
              <li class="twitter">
                <a href="https://twitter.com/byKike" target="_blank" data-hover="Twitter">Twitter</a>
              </li>
              <li class="unsplash">
                <a href="https://unsplash.com/es/@bykike" target="_blank" data-hover="Unsplash">Unsplash</a>
              </li>
            </ul>
          </div>



          <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <a href="http://www.bykike.com"><img src="images/logo-bottom.png" alt="crafted with love" class="center-block" /></a>
                </div>
              </div>
              <br>
              <center><font size=2>Made with ❤ bykike.com</font></center>
          </div>

        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>


    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>


  </body>
</html>
