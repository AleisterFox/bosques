<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Molcajete" />
    <meta name="description" content="">

    <meta name="Keywords" content="">

    <meta name="robots" content="all" />
    <meta property="og:title" content="Bosques Colegios" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="img/icono.png" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:site_name" content="Bosques Colegios" />
    <meta name="msapplication-TileColor" content="rgb(16, 48, 55)">
    <meta name="theme-color" content="rgb(16, 48, 55)">
    <link rel="canonical" href="">

    <?php include 'elementos/estilos.php' ?>

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CommunityHealth",
            "name": "Bosques Colegios",
            "image": "https://audiologiaintegral.com.mx/img/logo.png",
            "@id": "",
            "url": "https://audiologiaintegral.com.mx/",
            "telephone": "7531394249",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Mariano Matamoros 158",
                "addressLocality": "Lázaro Cárdenas",
                "postalCode": "60950",
                "addressCountry": "MX"
            },
            "sameAs": [
                "https://www.facebook.com/apoyosauditivosintegrales",
                "https://www.instagram.com/audiologiaintegrallzc"
            ]
        }
    </script>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>Bosques Colegios</title>
</head>

<body>


    <?php include 'elementos/whats.php' ?>

    <!-- <div class="loader__screen" id="loader">
    <div class="heartbeatloader">
      <svg class="svgdraw" width="100%" height="100%" viewBox="0 0 150 400" xmlns="http://www.w3.org/2000/svg">
        <path class="path" d="M 0 200 l 40 0 l 5 -40 l 5 40 l 10 0 l 5 15 l 10 -140 l 10 220 l 5 -95 l 10 0 l 5 20 l 5 -20 l 30 0" fill="transparent" stroke-width="4" stroke="black"></path>
      </svg>
      <div class="innercircle"></div>
      <div class="outercircle"></div>
    </div>

  </div> -->

    <?php include 'elementos/header.php' ?>

    <main>
        <section id="contacto">
            <h1>Contacto</h1>
            <a href="index.php" class="button secondary">Inicio</a>
        </section>
        <section id="contacto-info">
            <div class="container">
                <div class="campus">
                    <h3>Campus Juan Caballero y Osio</h3>
                    <p>Maternal y Kínder</p>
                    <p>(442) 223 0266 / 295 512 </p>
                    <p>kinderjuancaballero@colegiosbosques.edu.mx</p>
                </div>

                <div class="campus">
                    <h3>Campus Milenio III</h3>
                    <p>Kínder y Primaria</p>
                    <p>(442) 253 3297 & 253 3298</p>
                    <p>primariamilenio@colegiosbosques.edu.mx</p>
                </div>

                <div class="campus">
                    <h3>Campus Arcos</h3>
                    <p>Primaria</p>
                    <p>(442) 213 9390 & 248 5211</p>
                    <p>primariaarcos@colegiosbosques.edu.mx</p>
                </div>

                <div class="campus">
                    <h3>Campus Real</h3>
                    <p>Secundaria y Preparatoria</p>
                    <p>(442) 217 9834 & 295 5113</p>
                    <p>admisiones@colegiosbosques.edu.mx</p>
                </div>
            </div>
        </section>
        <section id="formulario-contacto">
            <h2>Informes Colegios Bosques</h2>
            <p>En Colegios Bosques estamos para servirle, favor de llenar el siguiente
                formulario para enviarle los informes correspondientes.</p>
            <form action="" id="formulario">
                <div class="datos">
                    <input type="text" name="name" id="name" placeholder="Nombre padre o tutor*" required>
                    <input type="email" name="email" id="email" placeholder="Email*" required>
                    <input type="tel" name="phone" id="phone" placeholder="Teléfono" required>
                    <input type="text" name="student" id="student" placeholder="Nombre alumno*" required>
                    <input type="number" class="no-spinners" name="age" id="age" placeholder="Edad alumno*" required>
                    <select name="level" id="level">
                        <option value="">Nivel Educativo</option>
                        <option value="">Maternal</option>
                        <option value="">Kinder</option>
                        <option value="">Primaria</option>
                        <option value="">Secundaria</option>
                        <option value="">Preparatoria</option>
                    </select>
                    <input type="number" class="no-spinners" name="grade" id="grade" placeholder="Grado*" required>
                    <input type="number" step="0.1" class="no-spinners" name="note" id="note" placeholder="Promedio general*" required>
                    <input type="text" name="school" id="school" placeholder="Escuela de procedencia*" required>
                    <input type="text" name="city" id="city" placeholder="Estado-Municipio de procedencia*" required>
                </div>
                <div class="medio-contacto">
                    <p>Medio por el que nos conoció*</p>

                    <div class="radio-opt">
                        <input type="radio" id="recomendaciones" name="opcion" value="recomendaciones">
                        <label for="recomendaciones">Recomendaciones</label>
                    </div><br>

                    <div class="radio-opt">
                        <input type="radio" id="internet" name="opcion" value="internet">
                        <label for="internet">Internet</label>
                    </div><br>

                    <div class="radio-opt">
                        <input type="radio" id="facebook" name="opcion" value="facebook">
                        <label for="facebook">Facebook</label>
                    </div><br>

                    <div class="radio-opt">
                        <input type="radio" id="instagram" name="opcion" value="instagram">
                        <label for="instagram">Instagram</label>
                    </div><br>

                    <div class="radio-opt">
                        <input type="radio" id="otro" name="opcion" value="otro">
                        <label for="otro">Otro</label>
                    </div><br>
                </div>
                <div class="cita">
                    <p class="nb">¿Desea una cita?*</p>
                    <p>Presencial - Conocer las instalaciones y modelo educativo. <br>
                        Videollamada - Conocer el modelo educativo.</p>
                    <div class="radio-opt">
                        <input type="radio" id="presencial" name="cita" value="presencial">
                        <label for="presencial">Si - Presencial</label>
                    </div><br>

                    <div class="radio-opt">
                        <input type="radio" id="videollamada" name="cita" value="videollamada">
                        <label for="videollamada">Si - Videollamada</label>
                    </div><br>

                    <div class="radio-opt">
                        <input type="radio" id="no" name="cita" value="no">
                        <label for="no">no</label>
                    </div><br>
                </div>
                <textarea name="message" id="message" placeholder="Mensaje*" required></textarea>
                <div class="form-bottom">
                    <button type="submit" class="button">Enviar</button>
                    <a href="javascript:void(0);" onclick="limpiarFormulario()">BORRAR FORMULARIO</a>
                </div>
            </form>
        </section>
    </main>

    <?php include 'elementos/footer.php' ?>
    <script src="js/loader.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        function limpiarFormulario() {
            const formulario = document.getElementById("formulario");
            if (formulario) {
                formulario.reset();
            } else {
                console.error('El formulario con el ID especificado no fue encontrado.');
            }
        }
    </script>
</body>


</html>