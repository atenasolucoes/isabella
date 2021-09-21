<!DOCTYPE html>
<html lang="en">

<head>
    <title>Curso de Oratória com Isabella Ornellas</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Curso de oratoria, Isabella Ornellas" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- animation css files -->
    <link rel="stylesheet" href="css/animation-aos.css">
    <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- //animation css files -->

    <!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
    <link href="css/estilo.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //google fonts -->

</head>

<body>

    <!-- header -->
    <header class="index-banner">
        <!-- nav -->
    <nav class="main-header ">
            <div id="brand" data-aos="zoom-in-up">
                <div id="logo">
                    <a href="./">
                        <img src="images/logo-menu-branca.png" class="" alt="" style="width: 250px; max-width:100%">
                    </a> 

                </div>

            </div>
            <div id="menu">
                <div id="menu-toggle">
                    <div id="menu-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul class="text-center text-capitalize nav-agile" data-aos="zoom-in-up">
                    <li>
                        <a href="/" class="active">home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Curso de Oratória
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a data-toggle="modal" data-target="#exampleModalCenter1"  class="dropdown-item" href="#" style="color:black;">Sobre o Curso</a>
                          <a data-toggle="modal" data-target="#exampleModalCenter2" class="dropdown-item" href="#" style="color:black;">Conteúdo do curso</a>
                          <a data-toggle="modal" data-target="#exampleModalCenter3" class="dropdown-item" href="#" style="color:black;">Formas de pagamento</a>
                      </div>
                  </li>
                  <li>
                    <a data-toggle="modal" data-target="#sobreisabella" role="button" href="#" class="scroll">Sobre
                    Isabella Ornellas</a>
                </li>

                {{-- <li>
                    <a href="#parceiros" class="scroll">Parceiros</a>
                </li> --}}
                <li>
                    <a href="#contato" class="scroll">Contato</a>
                </li>

                <li>
                    @if(Auth::check())
                    <a href="/home"><button type="button" class="btn w3ls-btn" aria-pressed="false">
                        Área do Participante
                    </button></a>
                    @else
                    <button type="button" class="btn w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModalCenter2">
                        Área do Participante
                    </button>
                    @endif
                </li>
                <li></li>
            </ul>
        </div>
    </nav>
    <!-- //nav -->
    <!-- banner -->
    <div class="banner layer" id="home">
        <div class="container-fluid">
            <div class="row banner-text">
                <div class="imagem-isa d-none d-lg-block">
                    <img src="images/imagem-isa3.png" class="" alt="" style="width:550px;">
                </div>
                <div class="col-lg-4 ">

                </div>
                <div class="slider-info col-lg-6 col-md-4 text-right ">
                    <h3 class="txt-w3_agile" data-aos="fade-down">Parabéns!</h3>
                    <p class="text-white" style="font-size: 24px;">
                   Você acaba de adquirir um curso de excelência em comunicação!
                 </p>
                 <p><span style="color: #ffffff;">Seu curso ser&aacute; nos dias 22, 23 e 24 de outubro.</span></p>
<p><span style="color: #ffffff;">SEX (22/10) das 19h &agrave;s 22h</span><br /><span style="color: #ffffff;">S&Aacute;B (23/10) das 08:00 as 18:00</span><br /><span style="color: #ffffff;">DOM (24/10) das 09:00 as 17:00</span></p><br>
<p style="font-size: 12px;"><span style="color: #ffffff;">Observa&ccedil;&atilde;o: Nosso curso segue os protocolos sanit&aacute;rios preventivos contra o novo coronav&iacute;rus, por esse motivo, &eacute; imprescind&iacute;vel o uso de m&aacute;scara durante o curso. Disponibilizaremos &aacute;lcool em gel para higieniza&ccedil;&atilde;o das m&atilde;os. O local onde o curso ser&aacute; realizado segue criteriosamente os protocolos sanit&aacute;rios de higieniza&ccedil;&atilde;o e desinfec&ccedil;&atilde;o do ambiente.</span></p>
             </div>
              <div class="col-lg-2 ">

                </div>
              
          
        </div>
    </div>
</div>
<!-- //banner -->
</header>
<!-- //header -->


<!-- banner bottom -->
                <!--footer -->
                <footer id="contato">
                    <section class="footer footer_w3layouts_section_1its py-5 ">
                        <div class="container py-md-4">
                            <div class="footer-grid_section text-center" data-aos="zoom-in">
                                <div class="footer-title mb-3">
                                    <a href="#"><img src="images/logo-menu-branca.png" alt=""></a>
                                </div>
                                <div class="text-center">
                                    <p>
                                        <i class="fab fa-whatsapp" style="font-size: 30px;"></i>
                                    </p>
                                    <p>
                                        (74) 98803-1102 | (87) 99622-1031
                                    </p>
                                </div>
                    <!-- <div class="footer-text">
					<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat.
					 Lorem ipsum dolor sit amet, consectetur elit.</p>
                    </div> -->
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="https://www.facebook.com/cursodeoratoria1-101187468956197/"><i class="fab mr-1 fa-facebook-f"></i>facebook</a></li>
                        <li class="google"><a href="https://instagram.com/cursodeoratoria1?utm_medium=copy_link"><i class="fab mr-1 fa-instagram"></i>Instagram</a></li>
                        <li class="linkedin"><a href="https://www.linkedin.com/in/isabella-ornellas-988542b5"><i class="fab mr-1 fa-linkedin-in"></i>linkedin</a></li>
                    </ul>
                </div>


            </div>
        </section>
    </footer>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p class="">© {{{date('Y')}}} | by <a href="http://atenaagencia.com"> Atena Agência</a>
        </p>
    </div>
    <!-- //copyright -->

    <!-- Vertically centered Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><img src="images/logo.png" alt="" style="width: 200px"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            O Curso de Oratória com a jornalista Isabella Ornellas traz as mais atuais técnicas de comunicação e persuasão, através de ferramentas do Coach e da Programação Neurolinguística (PNL).
                            O nosso Curso de  Oratória tem a metodologia TPD, que refere-se ao conteúdo teórico, atividades práticas e desafios, com os quais os participantes irão construir conhecimentos sólidos de oratória e comunicação de excelência.
                            Um curso inovador, atual, que incentiva a autoestima, a autorresponsabilidade e, principalmente, a mudança de percepção sobre o poder inquestionável de uma boa comunicação. 
                            Você merece fazer parte desta turma! <a href="{{route('login')}}">Inscreva-se!</a>
                        </div>
                        {{--   <div class="col-sm-6">
                            <!-- <img src="images/banner.jpg" class="img-fluid mb-3" alt="Modal Image" /> -->
                            Além de ser sinônimo de retórica, a oratória é mais do que uma arte para falar em público, é
                            uma ferramenta, por assim
                            dizer, de informar, influenciar ouvintes, espectadores e em alguns casos telespectadores é
                            um conjunto de técnicas que
                            visam ao ato de falar em público mais adequado.
                            <br>
                            O Curso de Oratória, com a jornalista Isabella Ornellas, traz como diferencial técnicas de
                            Coaching e PNL. Através da
                            teoria, de práticas e desafios, os participantes irão construir conhecimentos sólidos de
                            oratória e comunicação de
                            excelência.
                            <br>
                            Um curso inovador, diferente do que existe atualmente no mercado. Que incentiva a
                            autoestima, a autorresponsabilidade e
                            principalmente a mudança de percepção das pessoas sobre o poder inquestionável de uma boa
                            comunicação. Você merece fazer
                            parte dessa turma
                        </div>
                        <div class="col-sm-6">
                            O curso contempla: <br>
                            <br>
                            🎯Oratória em meios virtuais (Novo Normal),<br>
                            🎯Principais técnicas de Oratória,<br>
                            🎯Apresentação em Público,<br>
                            🎯Comunicação e Vendas,<br>
                            🎯Controle do medo,<br>
                            🎯Marketing pessoal,<br>
                            🎯Linguagem corporal,<br>
                            🎯Dicção e impostação da voz,<br>
                            🎯Leitura expressiva,<br>
                            🎯Clareza e objetividade no discurso,<br>
                            🎯 Técnica V.A.I,<br>
                            🎯 Técnica TPD - Teoria, Prática e Desafio<br><br>

                            E ainda:<br>
                            Material didático com apostila completa,<br>
                            Sorteios,<br>
                            Brindes,<br>
                            Coffebreack,<br>
                            🥇Certificado de 20h
                        </div>
                        <div class="col-sm-12">
                            <hr>
                            <p>Aproveite!!! Rumo ao sucesso!!🎤🎥⚓🎬🧠🌀</p>
                            <p>Estamos com pre&ccedil;os promocionais!</p>
                            <p>De R$ 700,00</p>
                            <p><strong>Por apenas R$ 660,00</strong></p>
                            <p>🎤 PARCELE EM AT&Eacute; 6X SEM JUROS COM O SEU CART&Atilde;O DE CR&Eacute;DITO,</p>
                            <p><strong>PREÇO À VISTA - R$ 590,00</strong></p>
                        </div>
                        <div class="col-sm-12">
                            <p>🎤 PAGAMENTO PELO SITE</p>
                            <p>CLICK AQUI:</p>
                            <a href="{{route('login')}}" class="btn btn-primary"> Acesse aqui</a>
                        </div>

                        <div class="col-sm-12">
                            <hr>
                            <p>🎤 PAGAMENTO &Agrave; VISTA</p> <br>
                            <p>Para pagamento à vista, estamos disponibilizando duas contas para depósito ou transferência bancária e PIX</p>
                            <p>✅ PIX - CELULAR - 74988031102</p>
                            <p>✅Bradesco /Ag&ecirc;ncia 3045 /Conta Corrente 45707-8</p>
                            <p>✅Caixa Econ&ocirc;mica Federal / Ag&ecirc;ncia 0080 / Operação 13 / Conta Poupan&ccedil;a 160 252-5</p>
                            <p>Favorecido: Isabella Ornellas Soares</p>
                            <p>100% de satisfa&ccedil;&atilde;o garantida!</p>
                            <p>🛑 &Eacute; NECESS&Aacute;RIO ENVIAR O COMPROVANTE DE PAGAMENTO PARA VALIDA&Ccedil;&Atilde;O DA
                            INSCRI&Ccedil;&Atilde;O PELO WHATSAPP (87) 99622-1031</p>
                        </div> --}}
                        
                    </div>
                    .
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div> 
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><img src="images/logo.png" alt="" style="width: 200px"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body container-fluid">
                    <div class="row">

                        <div class="col-sm-12">
                            O curso contempla: <br>
                            <br>
                            🎯Oratória em meios virtuais (Novo Normal),<br>
                            🎯Principais técnicas de Oratória,<br>
                            🎯Apresentação em Público,<br>
                            🎯Comunicação e Vendas,<br>
                            🎯Controle do medo,<br>
                            🎯Marketing pessoal,<br>
                            🎯Linguagem corporal,<br>
                            🎯Dicção e impostação da voz,<br>
                            🎯Leitura expressiva,<br>
                            🎯Clareza e objetividade no discurso,<br>
                            🎯 Técnica V.A.I,<br>
                            🎯 Técnica TPD - Teoria, Prática e Desafio<br><br>

                            E ainda:<br>
                            Material didático com apostila completa,<br>
                            Sorteios,<br>
                            Brindes,<br>
                            Coffebreack,<br>
                            🥇Certificado de 20h
                        </div>
                        
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><img src="images/logo.png" alt="" style="width: 200px"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body container-fluid">
                    <div class="row">

                     <div class="col-sm-12">
                        <hr>
                        <p>Aproveite!!! Rumo ao sucesso!!🎤🎥⚓🎬🧠🌀</p>
                        <p>Estamos com pre&ccedil;os promocionais!</p>
                        <p>De R$ 700,00</p>
                        <p><strong>Por apenas R$ 660,00</strong></p>
                        <p>🎤 PARCELE EM AT&Eacute; 6X SEM JUROS COM O SEU CART&Atilde;O DE CR&Eacute;DITO,</p>
                        <p><strong>PREÇO À VISTA - R$ 590,00</strong></p>
                    </div>
                    <div class="col-sm-12">
                        <p>🎤 PAGAMENTO PELO SITE</p>
                        <p>CLICK AQUI:</p>
                        <a href="{{route('login')}}" class="btn btn-primary"> Acesse aqui</a>
                    </div>

                    <div class="col-sm-12">
                        <hr>
                        <p>🎤 PAGAMENTO &Agrave; VISTA</p> <br>
                        <p>Para pagamento à vista, estamos disponibilizando duas contas para depósito ou transferência bancária e PIX</p>
                        <p>✅ PIX - CELULAR - 74988031102</p>
                        <p>✅Bradesco /Ag&ecirc;ncia 3045 /Conta Corrente 45707-8</p>
                        <p>✅Caixa Econ&ocirc;mica Federal / Ag&ecirc;ncia 0080 / Operação 13 / Conta Poupan&ccedil;a 160 252-5</p>
                        <p>Favorecido: Isabella Ornellas Soares</p>
                        <p>100% de satisfa&ccedil;&atilde;o garantida!</p>
                        <p>🛑 &Eacute; NECESS&Aacute;RIO ENVIAR O COMPROVANTE DE PAGAMENTO PARA VALIDA&Ccedil;&Atilde;O DA
                        INSCRI&Ccedil;&Atilde;O PELO WHATSAPP (87) 99622-1031</p>
                    </div>Certificado de 20h
                </div>


            </div>

        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
    </div>
</div>


<div class="modal fade" id="sobreisabella" tabindex="-1" role="dialog" aria-labelledby="sobreisabella" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><img src="images/logo.png" alt="" style="width: 200px"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">

              Mãe, esposa, jornalista, mestre de cerimônia, assessora de comunicação, radialista, palestrante e empreendedora. Especialista em Gestão empresarial e Marketing, Diretora da agência Atualiz@ Comunicação - voltada para assessoria de imprensa, cursos e palestras. É formada em Jornalismo em Multimeios pela UNEB. É Coach de Comunicação e Master Practitioner em PNL (Programação Neurolinguística). Palestrante na área de Excelência em Comunicação e Atendimento; Mídia Training, Marketing Pessoal, Empreendedorismo Criativo e Oratória. 
              Com 20 anos de atuação, Isabella possui vasto conhecimento na área jornalística. Trabalhou por 15 anos em filiadas da Rede Globo, onde desempenhou as funções de repórter, apresentadora, produtora executiva, Chefe de Redação e Reportagem e Coordenadora dos portais G1 e GloboEsporte.com.
              Atualmente apresenta o programa de entrevistas Revista na Rádio Tropical Sat.
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
    </div>
</div>
</div>
<!-- //Vertically centered Modal -->

<!-- js -->
{{-- <script src="js/jquery-2.2.3.min.js"></script> --}}
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- //js -->

<!-- animation js -->
<script src='js/aos.js'></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<!-- //animation js -->

<!-- testimonials  Responsiveslides -->
<script src="js/responsiveslides.min.js"></script>
<script>
        // You can also use"$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->

    <!-- sticky nav bar-->
    <script>
        $(() => {

            //On Scroll Functionality
            $(window).scroll(() => {
                var windowTop = $(window).scrollTop();
                windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top', '160px');
            });

            //Click Logo To Scroll To Top
            $('#logo').on('click', () => {
                $('html,body').animate({
                    scrollTop: 0
                }, 500);
            });

            /*
             //Smooth Scrolling Using Navigation Menu
             $('a[href*="#"]').on('click', function (e) {
               $('html,body').animate({
            	 scrollTop: $($(this).attr('href')).offset().top - 100
               }, 500);
               e.preventDefault();
             });
             */

            //Toggle Menu
            $('#menu-toggle').on('click', () => {
                $('#menu-toggle').toggleClass('closeMenu');
                $('ul').toggleClass('showMenu');

                $('li').on('click', () => {
                    $('ul').removeClass('showMenu');
                    $('#menu-toggle').removeClass('closeMenu');
                });
            });

        });
    </script>
    <!-- //sticky nav bar -->

    <script src="js/smoothscroll.js"></script><!-- Smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
			var defaults = {
				  containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			 };
           */

           $().UItoTop({
            easingType: 'easeOutQuart'
        });

       });
   </script>
   <!-- //end-smoth-scrolling -->

</body>

</html>