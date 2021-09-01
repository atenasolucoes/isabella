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
                    <li>
                        <a data-toggle="modal" data-target="#exampleModalCenter1" href="#" class="scroll">Sobre o Curso</a>
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
                        <img src="images/imagem-isa.png" class="" alt="">
                    </div>
                    <div class="col-lg-2 ">

                    </div>
                    <div class="slider-info col-lg-5 col-md-4 text-right ">
                        <div class="agileinfo-logo mt-5">
                            <h2 data-aos="fade-down">
                                <img src="images/logo-curso.png" alt="">
                            </h2>
                        </div>
                        <h3 class="txt-w3_agile" data-aos="fade-down">Com Isabella Ornellas </h3>
                        <p class="text-white">
                         <strong>Sexta</strong> (22/10) das 19h &agrave;s 22h<br /><strong>S&aacute;bado</strong> (23/10) das 08:00 às
                            18:00<br /><strong>Domingo</strong> (24/10) das 09:00 às 17:00
                        </p>
                        <a class="btn mt-4 mr-2 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Sobre o curso</a>
                        <a class="btn mt-4 text-capitalize" data-aos="fade-up" href="#depo" data-toggle="" data-target="#depo" role="button">Ver os depoimentos

                        </a>
                    </div>
                    <div class="col-lg-5 col-md-8 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
                        <h5><i class="fas mr-2 fa-laptop"></i>Faça já sua inscrição</h5>
                        @if($errors->any())
                        <div class="bg-azul p-4">
                            @foreach($errors->all() as $message)
                            <p>{{$message}}</p>
                            @endforeach
                        </div>
                        @endif
                        <form class="mt-4 form-row" method="POST" action="{{route('registrar')}}">
                            @csrf
                            <div class=" col-sm-6">
                                <input class="form-control" type="text" name="name" placeholder="Nome Completo" required="" />
                                <input class="form-control" type="email" name="email" placeholder="Email" required="" />
                                <input class="form-control" type="text" name="telefone" placeholder="Telefone" required="" />
                                <input class="form-control" type="text" name="profissao" placeholder="Profissão" required="" />
                            </div>
                            <div class="col-sm-6">

                                <input class="form-control" type="text" name="endereco" placeholder="Endereço" required="" />
                                <input class="form-control" type="text" name="bairro" placeholder="Bairro" required="" />
                                <input class="form-control" type="text" name="cidade" placeholder="Cidade" required="" />
                                <input class="form-control" type="password" name="password" placeholder="Senha" required="" />
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirme Senha" required="" />
                                <input class="form-control text-capitalize" type="submit" value="Cadastrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </header>
    <!-- //header -->
<section class="banner-bottom py-2 bg-azul" id="duvidas">
    <div class="container py-md-3 bg-light" style="border-radius: 30px; ">
    <p class="text-center"><h3 class="text-center">DÚVIDAS FREQUENTES</h3></p>
    <p class="text-center">Para quem o Curso de Oratória COMO FALAR EM PÚBLICO é destinado?</p>
    <hr>
<p style="text-align: center;"><strong><em>"O nosso curso &eacute; destinado a qualquer pessoa que deseje melhorar a sua
            comunica&ccedil;&atilde;o."</em></strong></p>
<p style="text-align: center;">📌</p>
<p style="text-align: center;">Palestrantes, Advogados, Pol&iacute;ticos, L&iacute;deres, Gestores, Empreendedores,
    Comerciantes, Vendedores, Profissionais da &aacute;rea de sa&uacute;de, Jornalistas, Professores, Estudantes
    universit&aacute;rios, Influenciadores digitais... ou seja, Voc&ecirc; que deseja evoluir!</p>
<p style="text-align: center;"><strong>Esse curso &eacute; para voc&ecirc;!</strong></p>
<p style="text-align: center;">Venha dar um passo a mais na sua vida profissional e pessoal. Aprimore suas
    t&eacute;cnicas de comunica&ccedil;&atilde;o e persuas&atilde;o.</p>
<p style="text-align: center;">🎤🎬</p>
<p style="text-align: center;"><strong>CURSO COMO FALAR EM P&Uacute;BLICO - ORAT&Oacute;RIA COM ISABELLA
        ORNELLAS</strong></p>
    </div>
</section>

    <!-- banner bottom -->
    <section class="banner-bottom py-5" id="depo">
        <div class="container py-md-3">
            <p class="text-center">
                <h3 class="text-center">DEPOIMENTOS</h3>
                <hr>
            </p>
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <video width="100%" height="100%" controls style="border-radius: 30px; ">
                        <source src="videos/01.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-sm-6 mt-2">
                    <video width="100%" height="100%" controls style="border-radius: 30px; ">
                        <source src="videos/02.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-sm-6 mt-2">
                    <video width="100%" height="100%" controls style="border-radius: 30px; ">
                        <source src="videos/03.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-sm-6 mt-2">
                    <video width="100%" height="100%" controls style="border-radius: 30px; ">
                        <source src="videos/04.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            {{-- <h4 class="text-center" data-aos="zoom-in">Parceiros</h4>
            <ul class="list-unstyled pt-5 partners-icon text-center">
                <li data-aos="fade-up">
                    <img src="images/parceiros/grafica.jpg" style="width:250px">
                </li>
                <li data-aos="fade-up">
                    <img src="images/parceiros/uninassau.jpg" style="width:250px">
                </li>
                <li data-aos="fade-up">
                    <img src="images/parceiros/israel.jpg" style="width:250px">
                </li>
                <li data-aos="fade-up">
                    <img src="images/parceiros/empreendedoras.jpg" style="width:250px">
                </li>
                <li data-aos="fade-up">
                    <img src="images/parceiros/barbara.jpg" style="width:100px">
                </li>
                <li data-aos="fade-up">
                    <img src="images/parceiros/atena.png" style="width:250px">
                </li>
            </ul> --}}
        </div>
    </section>
    <!-- //banner bottom -->






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
                            (74) 98803-1102 | (87) 99971-9632
                        </p>
                    </div>
                    <!-- <div class="footer-text">
					<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat.
					 Lorem ipsum dolor sit amet, consectetur elit.</p>
				</div> -->
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="#"><i class="fab mr-1 fa-facebook-f"></i>facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><i class="fab mr-1 fa-twitter"></i>twitter</a></li>
                        <li class="google"><a href="#"><i class="fab mr-1 fa-instagram"></i>Instagram</a></li>
                        <li class="linkedin"><a href="#"><i class="fab mr-1 fa-linkedin-in"></i>linkedin</a></li>
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
                        <div class="col-sm-6">
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
                <p>🎤 PARCELE EM AT&Eacute; 6X SEM JURIS COM O SEU CART&Atilde;O DE CR&Eacute;DITO,</p>
                <p><strong>PREÇO À VISTA - R$ 590,00</strong></p>
                        </div>
                        <div class="col-sm-12">
                            <p>🎤 PAGAMENTO PELO SITE</p>
                            <p>CLICK AQUI:</p>
                            <a href="/login" class="btn btn-primary"> Acesse aqui</a>
                        </div>

                        <div class="col-sm-12">
                            <hr>
                            <p>🎤 PAGAMENTO &Agrave; VISTA</p> <br>
                            <p>Para pagamento à vista, estamos disponibilizando duas contas para depósito ou transferência bancária e PIX</p>
                            <p>✅ PIX - CELULAR - 74988031102</p>
                            <p>✅Bradesco /Ag&ecirc;ncia 3045 /Conta Corrente 45707-8</p>
                            <p>✅Caixa Econ&ocirc;mica Federal / Ag&ecirc;ncia 0080 / Oper&ccedil;&atilde;o 13 / Conta Poupan&ccedil;a 160 252-5</p>
                            <p>Favorecido: Isabella Ornellas Soares</p>
                            <p>100% de satisfa&ccedil;&atilde;o garantida!</p>
                            <p>🛑 &Eacute; NECESS&Aacute;RIO ENVIAR O COMPROVANTE DE PAGAMENTO PARA VALIDA&Ccedil;&Atilde;O DA
                                INSCRI&Ccedil;&Atilde;O PELO WHATSAPP (87) 99622-1031</p>
                        </div>
                        
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

                    Mãe, jornalista, mestre de cerimônia, assessora de comunicação, radialista, palestrante e
                    empreendedora. Especialista em
                    Gestão empresarial e Marketing, Diretora da agência Atualiz@ Comunicação - voltada para cursos e
                    palestras. É formada em
                    Jornalismo em Multimeios pela UNEB. É Coach de Comunicação e Master Practitioner em PNL (Programação
                    Neurolinguística).
                    Palestrante na área de Excelência em Comunicação e Atendimento; Mídia Training, Marketing Pessoal,
                    Empreendedorismo
                    Criativo e Oratória. <br>
                    Com quase 20 anos de atuação, Isabella possui vasto conhecimento na área jornalística. Atuou por 15
                    anos em filiadas da
                    Rede Globo, onde desempenhou as funções de Chefe de Redação e Reportagem e Coordenadora dos portais
                    G1 e
                    GloboEsporte.com, além de repórter, produtora executiva e apresentadora.
                    <br>
                    Atualmente apresenta dois programas na Rádio Tropical Sat, em Juazeiro: Ligação Direta Primeira
                    Edição e Revista com
                    Isabella Ornellas, onde aborda temas de interesses locais e nacionais. Por dois anos esteve a frente
                    dos programas
                    Atualiz@ com Isabella Ornellas e Vida&Saúde, ambos na Rádio Ponte FM, da Rede Novo Tempo, em
                    Petrolina- PE.
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Vertically centered Modal -->

    <!-- video Modal Popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                            <li data-target="#demo" data-slide-to="5"></li>
                            <li data-target="#demo" data-slide-to="6"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/depoimentos/01.jpg" alt="depoimento">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/depoimentos/02.jpg" alt="depoimento">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/depoimentos/03.jpg" alt="depoimento">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/depoimentos/04.jpg" alt="depoimento">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/depoimentos/05.jpg" alt="depoimento">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/depoimentos/06.jpg" alt="depoimento">
                            </div>
                            <div class="carousel-item ">
                                <img src="/images/depoimentos/07.jpg" alt="depoimento">
                            </div>

                        </div>

                        <!-- Left and right controls -->


                    </div>
                    <a class="btn btn-dark" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="btn btn-dark" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //video Model Popup -->

    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-azul">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><img src="images/logo-curso.png" alt="" style="width: 200px"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Realize seu login</h5>
                        <form action="{{route('logar')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="mb-2">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="" required="">

                            </div>
                            <div class="form-group">
                                <label class="mb-2">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="password">
                            </div>

                            <button type="submit" class="btn btn-light btn-block bg-rosa submit mt-2 text-white">Entrar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//Login-->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
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