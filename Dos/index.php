<?php
  include_once('session.php');
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>


   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
  <title>Freelancer - Hector Hugo Rivera Gonzalez</title>
  <meta name="description" content="Freelancer Hector Hugo Rivera Gonzalez">
  <meta name="author" content="Hector Hugo Rivera Gonzalez">
  <meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript,Freelancer,Hector,Hugo,Rivera,Gonzalez,.NET,C#,HTML5,JAVA,JAVA J2SE,SEO,AJAX,MYSQL,SQL SERVER">
   <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
   <link rel="stylesheet" type="text/css" href="css/wow-alert.css">
   <!-- Script
   ================================================== -->
  <script src="js/modernizr.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="js/wow-alert.js"></script>
  <script>
  
function refreshCaptcha() {
  event.preventDefault();
  $("#captcha_code").attr('src','captcha_code.php');
}
  
  </script>
   <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="favicon.png" >

</head>

<body onload="iniciar()">

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader"></div>    
    </div><!--preloader end-->

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="m-nav">

         <a class="mobile-btn" href="#m-nav" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Inicio</a></li>
            <li><a class="smoothscroll" href="#about">Acerca de mí</a></li>
            <li><a class="smoothscroll" href="#resume">Resumen</a></li>
            <li><a class="smoothscroll" href="#portfolio">Portafolio</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonios</a></li>
            <li><a class="smoothscroll" href="#contact">Contacto</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline wow zoomIn">Soy <!--<span>-->Héctor Hugo Rivera González<!--</span>--></h1>
            <h3 class="wow fadeInUp">Y soy un apasionado <span>analista programador </span>,<span>Front-End y Back-End Developer</span><a class="smoothscroll" href="#about">Acerca de mí</a>.</h3>
            <hr />
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="fa fa-angle-double-down"></i></a>
      </p>

      <div class="header-overlay"></div>

   <!-- Social Section
   ================================================== -->
   <div id="social">
      <div class="row social-container">
            <ul class="social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-github"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
      </div>

   </div> <!-- Social End -->

   </header> <!-- Header End -->

   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row bio-container">
        <div class="twelve columns bio-inner">
         <div class="six columns bio-left"> 
         <div class="pp-container">

            <img class="profile-pic wow zoomIn"  src="images/avatar.jpg" alt="" />
              <h2>Héctor Hugo Rivera González</h2>
              <h3>Front-End y Back-End Developer</h3>              
            </div> <!-- Profile Picture -->
         </div>


         <div class="six columns main-col wow fadeIn">
          <div class="arrow-left"></div>

            <p>Desarrollar sitios web de gran calidad y con excelente funcionalidad para facilitar el manejo de la información de la empresa.
            </p>

          <div class="row">            
            <div class="six columns download">
                <p>
                  <a href="#contact" class="button"><i class="fa fa-paper-plane"></i>Contáctame</a>
                  <a href="resume.pdf" class="button" target="_blank"><i class="fa fa-download"></i>Descargar currículo</a>
                </p>
            </div> <!-- Download Buttons --> 
      </div>

         </div> <!-- end .main-col -->
      </div>
      </div>


   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">
    <h1 class="section-title wow fadeInDown">Resumen</h1>
      <!-- Education
      =============================================== -->
      <div class="row education">

         <div class="three columns header-col">
            <h2><span>Educación</span></h2>
         </div>

      <div class="nine columns main-col">
         <div class="education-timeline">
            <ul class="timeline wow fadeInUp">
              <li class="timeline-event">
                <label class="timeline-event-icon"></label>
                <div class="timeline-event-copy">
                  <p class="timeline-event-thumbnail">Mayo 2014 - Diciembre 2015</p>
                  <h3><a href="http://www.uttecamac.edu.mx/">Universidad Tecnológica de Tecámac</a></h3>
                 <!--<h4></h4>-->
                  <p><strong> Ing. Tecnologías de la Información y Comunicación</strong><br>
                     Actualmente me encuentro realizando mi estadía para titularme como Ing. En TIC.</p>
                </div>
              </li>
              <li class="timeline-event">
                <label class="timeline-event-icon"></label>
                <div class="timeline-event-copy">
                  <p class="timeline-event-thumbnail">Septiembre 2011 - Mayo 2014</p>
                  <h3><a href="http://www.uttecamac.edu.mx/">Universidad Tecnológica de Tecámac</a></h3>
                  <!--<h4>A Level</h4>-->
                  <p><strong> TSU Tecnologías de la Información y Comunicación: área Sistemas Informáticos</strong> 
                  <br>Cuento con título y cedula profesional. No.09079768</p>
                </div>
              </li>
              <li class="timeline-event">
                <label class="timeline-event-icon"></label>
                <div class="timeline-event-copy">
                  <p class="timeline-event-thumbnail">Enero 2004 - Diciembre 2007</p>
                  <h3>CONALEP GAM II</h3>
                  <!--<h4>O Level</h4>-->
                  <p><strong>Técnico-Bachiller Informático</strong><br>
                     Complete mi carrera como Informático en el conalep GAM II</p>
                </div>
              </li>
            </ul>  
         </div> <!-- Education Timeline End --> 
      </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ========================================= -->
      <div class="row work">

         <div class="three columns header-col">
            <h2><span>Empleos</span></h2>
         </div>

         <div class="nine columns main-col">

         <div class="work-timeline">
            <ul class="timeline">
              <li class="timeline-event">
                <label class="timeline-event-icon"></label>
                <div class="timeline-event-copy">
                  <p class="timeline-event-thumbnail">Agosto 2015 - Presente</p>
                  <h3><a href="http://masoko.mx/">Masoko Publicidad</a></h3>
                  <h4>Becario Programador</h4>
                  <p>Me encuentro realizando mi estadía profesional para poderme titular como Ing. En TIC. </p>
                </div>
              </li>
              <li class="timeline-event">
                <label class="timeline-event-icon"></label>
                <div class="timeline-event-copy">
                  <p class="timeline-event-thumbnail">Enero 2014 - Mayo 2014</p>
                  <h3><a href="http://alfaweb.mx/">ALFAWEB</a></h3>
                  <h4>Analista Programador</h4>
                  <p> Diseñe y programe páginas  web desde cero desde el análisis y diseño de la base de datos MYSQL (STORED PROCEDURES y TRIGGERS) documentación UML y validaciones finales en la empresa ALFAWEB  en PHP, JQUERY, Y AJAX Diseñe y programe la página de la empresa Muebles jeesvi.</p>
                </div>
              </li>
              <li class="timeline-event">
                <label class="timeline-event-icon"></label>
                <div class="timeline-event-copy">
                  <p class="timeline-event-thumbnail">Marzo 2009 - Diciembre 20010</p>
                  <h3><a href="http://www.portaltransparencia.gob.mx/pot/contrataciones/consultarContrato.do?method=consultaContrato&id.idContrato=CSP/AUT/DAE/264/2008&_idDependencia=11171">IPN</a></h3>
                  <h4>Desarrollador en Sistemas .NET</h4>
                  <p>Me desempeñé el puesto de Analista Programador en .Net en el Instituto Politécnico Nacional en el proyecto S.I.G.U.E.  Desde 01 de marzo del 2009 a 10 de diciembre del 2010.Desarollando el proyecto S.I.G.U.E en VB.NET y C# con SQLSERVER 2008. </p>
                </div>
              </li>
            </ul>  
         </div> <!-- Work Timeline End --> 
         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      =============================================== -->
      <div class="row skill">

         <div class="three columns header-col">
            <h2><span>Habilidades</span></h2>
         </div>

         <div class="nine columns main-col">

            <p>Tengo conocimientos avanzados e intermedios de los siguientes lenguajes de programación 
            </p>

        <div class="bars">

           <ul class="skills">
            <li><span class="bar-expand android wow fadeInLeft"></span><em>Android</em></li>
            <li><span class="bar-expand photoshop wow fadeInLeft"></span><em>Photoshop</em></li>
            <li><span class="bar-expand JavaJ2SE wow fadeInLeft"></span><em>Java J2SE</em></li>
            <!--li><span class="bar-expand wordpress wow fadeInLeft"></span><em>Wordpress</em></li>-->
            <li><span class="bar-expand php wow fadeInLeft"></span><em>PHP5</em></li>
            <li><span class="bar-expand css wow fadeInLeft"></span><em>CSS3</em></li>
            <li><span class="bar-expand html5 wow fadeInLeft"></span><em>HTML5</em></li>
            <li><span class="bar-expand jquery wow fadeInLeft"></span><em>jQuery</em></li>
            <li><span class="bar-expand javascript wow fadeInLeft"></span><em>JavaScript</em></li>
          </ul>

        </div><!-- end skill-bars -->

      </div> <!-- main-col end -->

      </div> <!-- End skills -->

      <!-- Awards
      =============================================== -->
      <div class="row awards">

         <div class="three columns header-col">
            <h2><span>Certificaciones</span></h2>
         </div>

         <div class="nine columns main-col">

            <p>Cuento con las siguientes certificaciones. 
            </p>

        <div class="award-list">

           <ul>
             <li class="wow fadeIn">
                <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
                <h3>Diploma</h3>
                <h5>CCNA Exploration: Network Fundamentals CISCO.</h5>
                <h4>UTTEC</h4>
             </li>
             <li class="wow fadeIn">
                <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
                <h3>Diploma</h3>
                <h5>CCNA Exploration: Routing Protocols and Concepts CISCO.</h5>
                <h4>UTTEC</h4>
             </li>
             <li class="wow fadeIn">
                <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
                <h3>Diploma</h3>
                <h5>Programación Avanzada en Java J2EE</h5>
                <h4>CIC’S IPN</h4>
             </li>
              <li class="wow fadeIn">
                <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
                <h3>Diploma</h3>
                <h5>Programación Avanzada en PHP</h5>
                <h4>CIC’S IPN</h4>
             </li>
             <li class="wow fadeIn">
              <!--trophy-->
                <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
                <h3>Diploma</h3>
                <h5>Diseñador Gráfico</h5>
                <h4>CCPM</h4>
             </li>

          </ul>

        </div><!-- end awards list -->

      </div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1 class="section-title wow fadeInDown">Algunos de mis trabajos</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf wow fadeIn">

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/nafap.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Desarrollo web de brief estratégico</h5>
                              <p>Vista Previa</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="images/artup.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Desarrollo web Arturo tu Albañil</h5>
                              <p>Vista Previa</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="http://placehold.it/300x300">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Portfolio Title</h5>
                              <p>Webdesign</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="http://placehold.it/300x300">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Portfolio Title</h5>
                              <p>Photography</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="images/subesp.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Proyecto SIGUE(SAES)</h5>
                              <p>Vista Previa</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="http://placehold.it/300x300">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Portfolio Title</h5>
                              <p>Photography</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="http://placehold.it/300x300">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                         <h5>Portfolio Title</h5>
                              <p>Illustrration</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="http://placehold.it/300x300">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Portfolio Title</h5>
                              <p>Web Development</p>
                       </div>
                        </div>
                        <div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
                     </a>

                  </div>
              </div>  <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
        =============================================== -->

         <div id="modal-01" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="images/nafa.png" alt="" />

          <div class="description-box">
            <h4>Desarrollo web de brief estratégico</h4>
            <p>En la actual estadía estoy desarrollando los módulo de compra de servicio del paquete SEO.</p>
               <span class="categories"><i class="fa fa-tag"></i>Diseño y programación</span>
          </div>

            <div class="link-box">
               <a href="http://masoko.mx/formularios/paquetesSEO/" class="button">Visitar trabajo</a>
             <a class="popup-modal-dismiss button btn-close">Cerrar</a>
            </div>

        </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="images/artu.png" alt="" />

          <div class="description-box">
            <h4>Arturo tu albañil</h4>
            <p>Diseñe y programe completamente este sitio web.</p>
               <span class="categories"><i class="fa fa-tag"></i>Diseño y programación</span>
          </div>

            <div class="link-box">
               <a href="http://arturotualbanil.esy.es/" class="button">Visitar trabajo</a>
             <a class="popup-modal-dismiss button btn-close">Cerrar</a>
            </div>

        </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="http://placehold.it/640x427" alt="" />

          <div class="description-box">
            <h4>This is title</h4>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Diseño y programación</span>
          </div>

            <div class="link-box">
               <a href="#" class="button">Live Demo</a>
             <a class="popup-modal-dismiss button btn-close">Close</a>
            </div>

        </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="http://placehold.it/640x427" alt="" />

          <div class="description-box">
            <h4>This is title</h4>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
          </div>

            <div class="link-box">
               <a href="#" class="button">Live Demo</a>
             <a class="popup-modal-dismiss button btn-close">Close</a>
            </div>

        </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="images/subes.png" alt="" />

          <div class="description-box">
            <h4><a href="http://www.portaltransparencia.gob.mx/pot/contrataciones/consultarContrato.do?method=consultaContrato&id.idContrato=CSP/AUT/DAE/264/2008&_idDependencia=11171">Proyecto SIGUE(SAES)</a></h4>
            <p>Me desempeñé el puesto de Analista Programador en .Net en el Instituto Politécnico Nacional en el proyecto S.I.G.U.E.  Desde 01 de marzo del 2009 a 10 de diciembre del 2010.Desarollando el proyecto S.I.G.U.E en VB.NET y C# con SQLSERVER 2008.</p>
               <span class="categories"><i class="fa fa-tag"></i>Analista Programador</span>
          </div>

            <div class="link-box">
               <a href="http://www.saes.ipn.mx/ns.html" class="button">Visitar trabajo</a>
             <a class="popup-modal-dismiss button btn-close">Cerrar</a>
            </div>

        </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="http://placehold.it/640x427" alt="" />

          <div class="description-box">
            <h4>This is title</h4>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
          </div>

            <div class="link-box">
               <a href="#" class="button">Live Demo</a>
             <a class="popup-modal-dismiss button btn-close">Close</a>
            </div>

        </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="http://placehold.it/640x427" alt="" />

          <div class="description-box">
            <h4>This is title</h4>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Illustration</span>
          </div>

            <div class="link-box">
               <a href="#" class="button">Live Demo</a>
             <a class="popup-modal-dismiss button btn-close">Close</a>
            </div>

        </div><!-- modal-07 End -->

         <div id="modal-08" class="popup-modal mfp-hide">

          <img class="scale-with-grid" src="http://placehold.it/640x427" alt="" />

          <div class="description-box">
            <h4>This is title</h4>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Webdesign, Photography</span>
          </div>

            <div class="link-box">
               <a href="#" class="button">Live Demo</a>
             <a class="popup-modal-dismiss button btn-close">Close</a>
            </div>

        </div><!-- modal-01 End -->


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">
            <h1 class="wow fadeInLeft">
              <span><i class="fa fa-paper-plane fa-5x pull-left fa-fw"></i></span>
            </h1>
         </div>

         <div class="seven columns">            
            <h2 class="wow zoomIn">Contratarme para su proyecto</h2>
            <p> Soy un programador Freelancer,  pero también estoy disponible para ser contratado.</p>

         </div>

         <div class="three columns action wow fadeIn">

            <a href="#contact" class="button">Contáctame Ahora</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">
      <div class="text-container">
         <div class="row">
          <div class="twelve columns flex-container">
            <h1 class="section-title wow fadeInDown">Testimonios de clientes</h1>

            <div id="testimonial-slides" class="owl-carousel">
              <div> 
                <blockquote><p>Una gran persona que confió en el.</p>
                 <cite>Arturo tu Albañil</cite>
              </blockquote> 
              </div> <!-- Single testimonial -->

              <div> 
                <blockquote><p>Termino con éxito los proyectos que le solicite.</p>
                 <cite>juan francisco alfonso arteaga <a href="www.alfaweb.mx">ALFAWEB</a></cite>
              </blockquote> 
              </div> <!-- Single testimonial -->

             <!-- <div> 
                <blockquote><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                 <cite> John Doe</cite>
              </blockquote> 
              </div>--> <!-- Single testimonial -->

            </div> <!-- Owl Carousel End --> 

          </div> <!-- Testimonial-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

      <div class="row section-head">
          <div class="twelve columns">
              <h1 class="section-title wow fadeInDown">ENVIAR MENSAJE</h1>
              <p class="lead"></p>
          </div>
      </div> <!-- Section head --> 

      <div class="row">
          <div class="five columns">
             <div class="form-container wow fadeIn">
               <!-- form -->

               <form action="#" method="post" id="contactForm" name="contactForm">
                  <fieldset>

                        <div>
                     <input type="text" placeholder="Nombre del contacto" value="" size="35" id="contactName" name="contactName">
                        </div>

                        <div>
                     <input type="email" placeholder="Correo del contacto" value="" size="35" id="contactEmail" name="contactEmail">
                        </div>

                        <div>
                     <input type="text" placeholder="Asunto" value="" size="35" id="contactSubject" name="contactSubject">
                        </div>

                        <div>
                           <textarea cols="5" rows="5" placeholder="Mensaje" id="contactMessage" name="contactMessage"></textarea>
                        </div>
                        <div>
                          <input type="text" name="captcha" id="captcha" placeholder="captcha">    
                          <img id="captcha_code" src="captcha_code.php" /><button  class="btn btn-info" onclick="refreshCaptcha();">Renovar Captcha</button>
                        </div>
                        <div>
                         <!-- contact-warning -->
                        <div id="message-warning">Error</div>
                           <button class="submit">Enviar</button>
                           <span id="image-loader">
                              <img alt="" src="images/loader.gif">
                           </span>
                        </div>
                        <div>
                           <div id="mail-status">
                        </div>
                    </div>
                 </fieldset>
                </form> <!-- Form End -->
                         <!-- contact-success -->
                         <div id="message-success">
                                <i class="fa fa-check"></i>Su mensaje fue enviado , ¡Gracias!<br>
                         </div>
            </div>  <!-- Form Container End -->

          </div>

      <div class="seven columns">
<!--         <h1><span>Find me on Google Map</span></h1> -->
         <!-- Start Google Map -->
         <div id="map">
         </div>
         <!-- End -->
      </div> <!-- Row ends-->


      </div> <!-- Row ends-->



   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Freelancer - Héctor Hugo Rivera González &copy; Copyright 2015,todos los derechos reservados</li>
               
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="fa fa-chevron-up"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->

   <script src="js/jquery-2.1.1.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
<script>
function iniciar() {
var mapOptions = {
center: new google.maps.LatLng(19.6624855,-98.9981917),
zoom: 16,
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("map"),mapOptions);
//marcador con la ubicación de la Universidad
var place = new google.maps.LatLng(19.6622095,-98.9979758);
var marker = new google.maps.Marker({
        position: place
        , title: 'Freelancer Hector Hugo Rivera Gonzalez'
        , map: map
        , });
}              
</script>

   <script src="js/gmaps.js"></script>
   <script src="assets/owl-carousel/owl.carousel.min.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/jquery.nicescroll.min.js"></script>
   <script src="js/script.js"></script>

</body>

</html>