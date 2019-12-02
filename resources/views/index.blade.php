<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" charset="utf-8"></script>
       <title>SocialTruek</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            @font-face{
                font-family: Nunito;
                src: url(../fonts/Nunito-Regular.ttf);
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 80vh;
                margin: 0;
            }

            .full-height {
                height: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: relative;
                right: 0px;
                top: 18px;
            }

            .content {
                margin-top: 15vh;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 1vw;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .btn{
                padding: 5px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class=" flex-center">
                <div class="col-sm-12">
                    <img class="img-fluid" src="images/logo.png" alt="" width="350vw">
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}"><button class="btn btn-outline-primary">Sitio Web</button></a>
                    @else

                        <a href="{{ route('login') }}"><button class="btn btn-outline-primary">Iniciar Sesion</button></a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button class="btn btn-outline-primary">Registrarse</button></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="container text-center">
            <a class="m-1" href="" data-toggle="modal" data-target="#questions">Preguntas frecuentes</a>
            <a class="m-1" href="" data-toggle="modal" data-target="#condiciones">Condiciones</a>
            <a class="m-1" href=""data-toggle="modal" data-target="#datos">Politica de datos</a>
            <a class="m-1" href=""data-toggle="modal" data-target="#cookies">Policita de cookies</a>
        </div>
        <div class="modal fade" id="questions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Preguntas Frecuentes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h6>¿Que es Social Trueck?</h6><p>SocialTrueck es una red social creada especificamente para personas interesadas en el trueque de objetos, productos y servicios.</p>
                <h6>¿Que necesito para empezar a utilizar SocialTrueck?</h6><p>Sencillo. Antes que nada necesitaras registrarte en la pagina para poder realizar los trueques. Una vez registrado, tendras acceso completo a la pagina. Tendras que subir fotos de los productos/servicios a cajear y colocarles un valor en 'trueckcoins'. Posteriormente, empieza a investigar e indagar sobre los productos que mas te interesen para truequear y una vez seleccionado un producto especifico, tendras la posibilidad de ponerte en contacto por el otro "truequeador" para realizar el cambio. En caso de no estar conforme con el valor de estimado producto, tendras la posibilidad de regatear.</p>
                <h6>¿Que son los trueckcoins?</h6><p>Es el sistema de monedas virtuales usadas en el sitio para darle valor a los productos publicados. El mismo será dado por cada trukeador considerando siguiente paridad: 1 truekoins = 100 pesos argentinos.</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Condiciones-->
        <div class="modal fade" id="condiciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Condiciones</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5>Productos Permitidos</h5>
                <p> En Social Trueck se podra truequear cualquier objeto siempre y cuando este no sea de origen dudoso, tengra libre comercializacion permitida por el Estado Argentino.
                <h5>Productos prohibidos</h5>
                <p>Es importante mencionar que, si bien, en nuestra pagina los productos a truequear
                pueden ser de diferente indole, hay productos y objetos que se cuentran prohibidos. Estos son: Armas, municiones y material explosivo, Estupefacientes y sustancias prohibidas,
                Propiedad robada, Medicamentos, sustancias y productos para la salud, huesos, órganos
                y residuos humanos, Flora y fauna autoctona del lugar, Millas o puntos de compañías
                aéreas, Listas de correo y base de datos personales, Productos o servicios para adultos,
                Documentos legales y personales, Patrimonio histórico, cultural, arqueológico y
                paleontológico, Programas o servicios para hackear dispositivos electrónicos, Loterías y
                rifas, Productos entregados por el gobierno, Manuales, cursos en formato impreso o
                digital y guías de estudio, Productos que requieren homologación o autorización de
                organismos estatales, Seguros, Vehículos sin documentación y productos para vehículos
                que infrinjan leyes del Estado, Membresías o suscripciones.</p>
                <h5>¿Quienes pueden utilizar esta aplicacion?</h5> <p>Social Trueck solamente puede ser utilizado por mayores de 18 años.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal politica de datos-->
        <div class="modal fade" id="datos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Politica de Datos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>La información personal de los usuarios es muy importante para nosotros, por eso se utilizan todos los medios administrativos y técnicos a nuestro alcance así como todos los resguardos legales necesarios para asegurar la protección de los datos personales y la privacidad. La presente Política de Privacidad se aplica a toda información personal de los USUARIOS obtenida como consecuencia de la utilización del sitio web</p>
                <h5>¿Que tipo de datos recolectamos?</h5>
                <p><b>Información y contenido que nos proporcionas: </b> Recopilamos el contenido, las comunicaciones y otros datos que proporcionas cuando usas nuestros Productos. Por ejemplo, cuando te registras para crear una cuenta, creas o compartes contenido, y envías mensajes a otras personas o te comunicas con ellas. Esto puede incluir información en el contenido, o sobre él, que proporcionas (como los metadatos), por ejemplo, la ubicación de una foto o la fecha de creación de un archivo. También puede incluir el contenido que ves a través de las funciones que proporcionamos, como la cámara, para que podamos realizar acciones como sugerirte máscaras y
                filtros que quizá te gusten, así como darte consejos sobre cómo usar los formatos de cámara. Nuestros sistemas tratan automáticamente el contenido y las comunicaciones que tú y otras personas
                proporcionan para analizar el contexto y lo que incluyen en relación con los propósitos que se describen
                a continuación. Obtén más información sobre cómo controlar quién puede ver el contenido que
                compartes.</p>
                <p><b>Redes y conexiones: </b>Recopilamos información sobre las personas, las páginas, las cuentas, y cómo interactúas a través de nuestros Productos con las personas con las que más te comunicas o los grupos de los que formas parte. También recopilamos información de contacto si eliges subirla, sincronizarla o importarla desde
                un dispositivo (como una libreta de direcciones, un registro de llamadas o un historial de SMS), que usamos para fines como ayudarte a encontrar personas que quizá conoces y para otros fines que se
                describen a continuación.</p>
                <p><b>Tu uso: </b>Recopilamos información sobre cómo usas nuestros Productos, como los tipos de contenido que ves o con los que interactúas, las funciones que utilizas, las acciones que llevas a cabo, las personas o cuentas con las que interactúas, y la hora, la frecuencia y la duración de tus actividades. Por ejemplo, registramos cuándo estás usando y cuándo usaste por última vez nuestros Productos, y qué publicaciones, videos y otro tipo de contenido ves en nuestros Productos.-Información sobre transacciones realizadas en nuestros Productos. Esto quiere decir que cuando relices un trueque o una donacion especifica, recopilaremos la informacion, tales como, la cuenta en si y la autenticación; y detalles de facturación, envío y contacto
                <p><b>La actividad de otros usuarios y la información que proporcionan sobre ti: </b> También recibimos y analizamos contenido, comunicaciones e información que nos proporcionan otras personas al usar nuestros Productos. Esto puede incluir información sobre ti, como en el caso de que otras personas compartan o comenten una foto tuya, te envíen un mensaje o suban, sincronicen o importen tu información de contacto.</p>
                <h5>Finalidad</h5>
                <p>En cumplimiento de lo establecido en los arts. 2, 7 y 8 de la Ley 25.326 de Protección de Datos Personales de la República Argentina y, en concordancia con lo establecido en las legislaciones de protección de datos personales de los demás países latinoamericanos, <b>Social Trueck</b> no solicitará información que sea incompatible con la finalidad del sitio web o de sus servicios, ni que directa o indirectamente revele datos sensibles de los usuarios, como ser datos que revelan origen racial y étnico, opiniones políticas, convicciones religiosas, filosóficas o morales, afiliación sindical, información referente a la salud o a la vida sexual.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal politica de cookies-->
        <div class="modal fade" id="cookies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Politica de Cookies</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5>¿Qué son las cookies?</h5><p>Las cookies son pequeños archivos de texto que contienen una cadena de caracteres. Esta cadena se
                puede insertar en tu ordenador o dispositivo móvil y sirve para identificar de forma exclusiva tu navegador o tu dispositivo. </p>
                <h5>¿Por qué nuestros servicios usan estas tecnologías?</h5><p>Nuestros servicios usan estas tecnologías para distribuir, medir y mejorar nuestros servicios de diversas      maneras.También nos permiten comprender mejor el uso que se realiza de un sitio web o un servicio en cuestión, nos ayudan a recordar tus preferencias, hacen que tu navegación entre las distintas páginas resulte más eficaz y, por lo general, mejoran la experiencia de uso de nuestros servicios. Asimismo, gracias a las cookies, el contenido de marketing que se muestra en internet resulta más relevante y está relacionado en mayor medida con los intereses de cada persona.</p>
                <h5>¿Cuánto tiempo permanecerán las cookies en mi dispositivo?</h5><p>El tiempo que una cookie permanece en un ordenador o dispositivo varía en función de si se trata de una cookie permanente o de sesión. Las cookies de sesión solo permanecen en el dispositivo hasta que
                se detiene la navegación. Sin embargo, las permanentes se conservan en el ordenador o dispositivo móvil hasta que caducan o se eliminan.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
