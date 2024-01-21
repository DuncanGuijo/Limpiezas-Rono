<?php $page = 'index'; ?>

<?php require('head.php'); ?>

<body>
    <section class="bg-white pt-5">
        <?php require('navbar.php'); ?>
    </section>
    <section class="bg-white py-5 md:mb-10 bg-cover" style="background-image: url('public/img/inicio/background.jpg'); height: 300px;">
    </section>

    <!-- QUIENES SOMOS START -->
    <section id="about_us" class="bg-white mt-8 px-8 lg:mt-0 md:mb-10 md:mt-0">
        <div class="container max-w-screen-xl mx-auto h-full px-4 flex flex-col justify-center">
            <div class="w-full text-center">
                <h1 class="font-bold font-bebas-neue text-blue-600 text-2xl md:text-6xl leading-normal mb-5">Bienvenidos a Limpiezas Rono</h1>
            </div>
            <div class="w-full text-center font-montserrat">
                <p class="text-center drop-shadow-lg py-1 text-md md:text-xl">
                    Somos una empresa de servicios de limpieza y mantenimiento ubicada en Barcelona con más de 25 años de experiencia gracias a la fidelización de nuestros clientes.<br>
                </p>
                <p class="text-center drop-shadow mt-5 text-md md:text-xl">
                    Ofrecemos atención personalizada en cada presupuesto así como nuestro compromiso de calidad con dedicación y responsabilidad.<br>
                </p>
                <p class="text-center  drop-shadow mt-5 font-semibold py-1 text-md md:text-xl">
                    Limpiamos para usted.
                </p>
            </div>
        </div>
    </section>
    <!-- QUIENES SOMOS END -->

    <!-- SERVICIOS DE LIMPIEZA START -->
    <section id="services" class="bg-blue-400 mb--px4">
        <svg class="w-full h-16 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,100 C20,60 40,80 60,100 C10,200 150,0 100,100 L1000,0 L0,0 Z" />
        </svg>
        <div class="container max-w-screen-xl mx-auto px-4 py-4">
            <h1 class="font-bold font-oswald uppercase mt-8 text-white text-xl md:text-5xl text-center leading-normal lg:mt-20 lg:mb-20">
                Servicios de limpieza
            </h1>
            <div class="mb-20 w-full grid-cols-1 px-4 grid place-items-center md:grid-cols-2 lg:grid-cols-5 gap-10">
                <a class="w-64 h-64" href="services.php?#domestico">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Servicio doméstico</h4>
                        <div class="flex justify-center p-4 content-center">
                            <img clas="text-center" src="public/img/icons/icon-mocho-100-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#comunidad">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Limpieza de comunidades</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-edificio-96-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#parkings">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Limpieza de parkings</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-coche-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#oficinas">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Limpieza de oficinas y locales</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-oficina-96-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#cristales">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Limpieza de cristales</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-cristales-w.png"></img>
                        </div>
                    </div>
                </a>
            </div>
            <h1 class="font-bold font-oswald uppercase text-white text-xl md:text-5xl text-center leading-normal mt-8 lg:mt-20 lg:mb-20">
                Servicios especiales
            </h1>
            <div class="mb-20 w-full grid-cols-1 px-4 grid place-items-center md:grid-cols-2 lg:grid-cols-5 gap-10">
                <a class="w-64 h-64" href="services.php?#abrillantados">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Abrillantados de suelos</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-limpio-96-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#ozono">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Tratamientos de ozono y Desinfección de Superficies</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-ozono-96-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#desinfeccion">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Desinfección de superfícies</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-desinfeccion-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#graffitis">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Eliminación de graffitis</h4>
                        <div class="flex justify-center content-center">
                            <img clas="text-center" src="public/img/icons/icon-graffiti-96-w.png"></img>
                        </div>
                    </div>
                </a>
                <a class="w-64 h-64" href="services.php?#locales">
                    <div class="text-center shadow-sm p-4 w-64 h-64 transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <h4 class="font-semibold text-lg md:text-2xl text-white mb-6">Vaciado de locales</h4>
                        <div class="flex justify-center content-center mt-16">
                            <img clas="text-center" src="public/img/icons/icon-carga-96-w.png"></img>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>
    <svg class="w-full h-16 text-blue-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0,100 C20,60 40,80 60,100 C40,140 90,60 100,100 L100,0 L0,0 Z" />
    </svg>
    <!-- SERVICIOS DE LIMPIEZA END -->

    <!-- POLÍTICA DE EMPRESA START -->
    <section id="politicy" class="md:mb-5">
        <div class="container max-w-screen-xl mx-auto mb-10 lg:mb-20 px-4 py-4">
            <h2 class="font-bebas-neue font-semibold uppercase text-blue-600 text-xl md:text-5xl text-center leading-normal mt-8 lg:mt-20 lg:mb-20">
                Limpiezas en Barcelona
            </h2>
            <p class="text-center font-montserrat pt-2 mt-5 text-md md:text-xl">
                Limpiezas Rono es una empresa fundada en el corazón de Hostafrancs,
                Sants-Montjuïc, en el año 1999.
            </p>
            <p class="text-center font-montserrat pt-2 mt-5 text-md md:text-xl">
                En estos 25 años de trayectoria, Limpiezas Rono se ha convertido en
                una de las empresas de limpieza líder en Barcelona y L’Hospitalet de
                Llobregat. Durante un cuarto de siglo, hemos trabajado para intentar
                solucionar todos los problemas de limpieza con agilidad y eficacia.
            </p>
            <p class="text-center font-montserrat pt-2 mt-5 text-md md:text-xl">
                Según las necesidades de cada cliente, ya sean empresas o particulares,
                encontramos la fórmula idónea para satisfacer sus exigencias a un
                precio ajustado al servicio.
            </p>
            <p class="text-center font-montserrat pt-2 mt-5 text-md md:text-xl">
                Nuestro grupo humano hace que nuestros clientes estén satisfechos
                con el trato recibido así como con el servicio prestado. Contamos con
                una plantilla de profesionales altamente cualificada, debidamente
                formada y con las herramientas y maquinaria homologadas necesarias
                para cada servicio.
            </p>
            <p class="text-center font-montserrat pt-2 mt-5 text-md md:text-xl">
                Nuestra metodología de trabajo respeta el entorno y la naturaleza.
                Usamos productos ecológicos biodegradables para preservar el medio
                ambiente, no haciendo uso de productos agresivos ni corrosivos.
            </p>
            <p class="text-center font-montserrat pt-2 mt-5 text-md md:text-xl">
                Atendemos urgencias con diligencia y hacemos seguimiento,
                supervisión y control periódicos de todos los trabajos para ofrecer el
                mejor servicio a nuestros clientes.
            </p>
        </div>
    </section>
    <!-- POLÍTICA DE EMPRESA END -->

    <!-- TRABAJA CON NOSOTROS START -->
    <section id="work" class="bg-blue-800 py-2 md:mb-5">
        <div class="container max-w-screen-xl mx-auto px-4 py-2">
            <h2 class="font-semibold font-oswald uppercase text-white mb-5 text-xl md:text-5xl text-center leading-normal">
                Trabaja con nosotros
            </h2>
            <p class="text-center font-montserrat text-sm text-white py-1 mb-5 text-md md:text-xl">
                ¿Te gustaría trabajar con nosotros?
                Desde Limpiezas Rono apostamos por gestionar el talento impulsando un modelo de crecimiento, tanto para nuestra compañía como para nuestros profesionales.
                Creemos que el ambiente laboral es indispensable para optimizar la productividad y tener un entorno motivado y comprometido.
                ¿Tienes experiencia en el sector?
            </p>
            <div class="flex justify-center text-center mb-5 font-montserrat">
                <a href="contact.php" class="text-white cursor-pointer font-semibold">
                    <button class="bg-blue-500 text-white font-semibold py-2 px-2 rounded hover:bg-blue-600 transition duration-300">
                        ¡Envíanos tu CV!
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- TRABAJA CON NOSOTROS END -->

    <!--  INFO CONTACTO START -->
    <section id="info" class="py-5 md:mb-5">
        <h2 class="text-blue-600 mb-2 font-bebas-neue uppercase font-semibold text-xl md:text-5xl text-center leading-normal lg:mb-20">
            Información de contacto
        </h2>
        <div class="container font-montserrat max-w-screen-xl h-fit mx-auto px-4 py-4 flex mb-5 lg:mb-20">
            <!-- MOBILE -->
            <div class="w-full h-60 grid  grid-cols-1 place-items-center gap-10 items-center lg:hidden">
                    <div class="flex items-center mb-2 justify-center  lg:w-60">
                        <img class="w-6 lg:w-auto" src="public/img/icons/icon-tel-w.png" alt="Icono 1">
                        <p class="text-sm font-semibold ml-2">934246203</p>
                    </div>
                    <div class="flex items-center mb-2 justify-center lg:w-60">
                        <img class="w-6 lg:w-auto" src="public/img/icons/icon-email-w.png" alt="Icono 2">
                        <p class="text-sm font-semibold ml-2">gestion@limpiezas-rono.com</p>
                    </div>
                    <div class="flex items-center mb-2 justify-center">
                        <img class="w-6 lg:w-auto" src="public/img/icons/icon-ubi-w.png" alt="Icono 3">
                        <p class="text-sm font-semibold ml-2">C/ de Sant Roc 27, 08014 Barcelona</p>
                    </div>
                    <div class="flex items-center mb-2 justify-center">
                        <img class="w-6 lg:w-auto" src="public/img/icons/icon-reloj-w.png" alt="Icono 4">
                        <div class="text-sm font-semibold ml-2">09:00 - 14:00 / 15:00 - 18:00</div>
                    </div>
            </div>
            <!-- LG MD -->
            <div class="hidden w-full lg:m-5 lg:w-11/12 lg:flex md:flex flex-col justify-center items-center">
                <div class="flex lg:flex-wrap m-5 w-full mb-8 justify-center">
                    <div class="flex items-center mb-2 w-full lg:w-60">
                        <img src="public/img/icons/icon-tel-w.png" alt="Icono 1">
                        <p class="text-sm font-semibold ml-2">934246203</p>
                    </div>
                    <div class="flex items-center mb-2 justify-center w-full lg:w-60">
                        <img src="public/img/icons/icon-email-w.png" alt="Icono 2">
                        <p class="text-sm font-semibold ml-2">gestion@limpiezas-rono.com</p>
                    </div>
                </div>
                <div class="flex flex-column lg:flex-row m-5 w-full justify-center">
                    <div class="flex items-center mb-2 w-60 justify-center">
                        <img src="public/img/icons/icon-ubi-w.png" alt="Icono 3">
                        <p class="text-sm font-semibold ml-2">C/ de Sant Roc, 27, Sants-Montjuïc, 08014 Barcelona</p>
                    </div>
                    <div class="flex items-center mb-2 w-72  justify-center">
                        <img src="public/img/icons/icon-reloj-w.png" alt="Icono 4">
                        <p class="text-sm font-semibold ml-2 w-32">09:00 - 14:00 / </p>
                        <p class="text-sm font-semibold ml-2 w-32">15:00 - 18:00</p>
                    </div>
                </div>
            </div>
        
            <!-- -->
            <div class="hidden w-full m-auto lg:block md:block">
              <div id="map" class="relative m-auto" style="width:400px;height:400px;"></div>
            </div>
        </div>
    </section>
    <!--  INFO CONTACTO END -->

    <?php require('footer.php'); ?>

</body>

</html>