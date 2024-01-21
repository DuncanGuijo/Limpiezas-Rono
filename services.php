<?php $page = 'services'; ?>

<?php require('head.php'); ?>

<body class="bg-blue-100">
    <section class="bg-white pt-5">
        <?php require('navbar.php'); ?>
    </section>

    <section id="services" class="px-8 md:mb-5">
        <h1 class="text-blue-600 font-bold font-bebas-neue text-3xl md:text-6xl text-center leading-normal  mt-5 mb-5 lg:mt-20 lg:mb-20 md:mt-20 md:mb-20">
            NUESTROS SERVICIOS
        </h1>
        <div class="flex font-montserrat items-center justify-center" id="domestico">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl  text-blue-600">Servicio Doméstico</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Limpiezas Rono garantiza la limpieza del hogar siguiendo las indicaciones que nos transmite cada cliente para obtener resultados satisfactorios. Nos adaptamos a las necesidades de cada domicilio manteniendo la calidad y la rapidez en el servicio. Además de la limpieza general también ofrecemos servicio de colada y planchado en caso que lo requieran.
                    </p>
                    <button class="ml-3 px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/domestico.jpg" >
                </div>
            </div>
        </div>
        <div class="flex  font-montserrat items-center justify-center" id="comunidad">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="hidden lg:flex md:flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/comunidades.jpg" >
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Limpieza de Comunidades</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Realizamos la limpieza regular en fincas incluyendo entrada, vestíbulo, ascensor, rellanos y escaleras. Adecuamos los mantenimientos mensuales, trimestrales o semestrales dependiendo de las características de la finca y las demandas de nuestros clientes.
                    </p>
                    <button class="ml-3 lg:mr-3 md:mr-3 lg:self-end md:self-end px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center lg:hidden md:hidden ">
                    <img class="h-full"src="public/img/services/comunidades.jpg" >
                </div>
            </div>
        </div>
        <div class="flex font-montserrat items-center justify-center" id="parkings">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Limpieza de Parkings</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Los garajes es uno de los servicios con más demanda en la ciudad de Barcelona. El constante ir y venir de automóviles hace que, inevitablemente, millones de partículas provenientes de los humos se incrusten en las tuberías, suelos y paredes de los parkings. Nosotros realizamos la limpieza puntual o periódica de su garaje.
                    </p>
                    <button class="ml-3 px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/parkings.jpg" >
                </div>
            </div>
        </div>
        <div class="flex  font-montserrat items-center justify-center" id="oficinas">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="hidden lg:flex md:flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/oficinas.jpg" >
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Limpieza de Oficinas y Locales</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Las empresas desean tener sus puestos de trabajo impecables y en perfecto estado. Nosotros ofrecemos este servicio para despachos, locales coworking, oficinas, etc. Nos adaptamos a los horarios que nos transmitan para ir a realizar el servicio cuando mejor convenga a nuestros clientes.
                    </p>
                    <button class="ml-3 lg:mr-3 md:mr-3 lg:self-end px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center lg:hidden md:hidden">
                    <img class="h-full"src="public/img/services/oficinas.jpg" >
                </div>
            </div>
        </div>
        <div class="flex font-montserrat items-center justify-center" id="cristales">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Limpieza de Cristales</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Otro de los servicios en auge en la ciudad de Barcelona es la limpieza de ventanas, cristales y persianas. Disponemos del equipo técnico y la maquinaria adecuada para realizar este trabajo de manera profesional y con la máxima prontitud posible.
                    </p>
                    <button class="ml-3 lg:mr-3 md:mr-3 px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/cristales.jpg" >
                </div>
            </div>
        </div>
        <div class="flex  font-montserrat items-center justify-center" id="abrillantados">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="hidden lg:flex md:flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/abrillantado.jpg" >
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Abrillantados de Suelos</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Un suelo desgastado por el uso suele dar una impresión de descuidado y/o de abandonado. Nosotros orecemos el abrillantado de los suelos tanto a particulares como a empresas o bien comunidades. Realizamos un pequeño estudio con las características de cada superficie ya que los tratamientos varían según la composición de cada material.
                    </p>
                    <button class="ml-3 lg:self-end px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center  lg:hidden md:hidden">
                    <img class="h-full"src="public/img/services/abrillantado.jpg" >
                </div>
            </div>
        </div>
        <div class="flex font-montserrat items-center justify-center" id="ozono">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Tratamientos de Ozono y Desinfección de Superficies</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Este tratamiento es capaz de purificar, desinfectar y desodorizar tanto las superficies como el ambiente interior de habitaciones, salas, espacios cerrados, etc. Con este método, podemos obtener una mejora en la higiene ambiental de cualquier espacio sin dejar residuos químicos y respirar un aire purificado.
                    </p>
                    <button class="ml-3 lg:mr-3 md:lg-3 px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/superficies.jpg" >
                </div>
            </div>
        </div>
        <div class="flex font-montserrat items-center justify-center" id="graffitis">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="hidden lg:flex md:flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/graffitis.jpg">
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Eliminación de Graffitis</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Limpiamos y protegemos fachadas de todo tipo, ofreciendo distintos servicios con una amplia gama de productos especiales homologados que no son agresivos para el medioambiente y aptos para cualquier tipo de superficies.
                    </p>
                    <button class="ml-3 lg:self-end px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex lg:hidden md:hidden justify-center items-center ">
                    <img class="h-full"src="public/img/services/graffitis.jpg" >
                </div>
            </div>
        </div>
        <div class="flex font-montserrat items-center justify-center mb-20" id="locales">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 lg:w-4/5 md:w-4/5 bg-gradient-to-b from-blue-50">
                <div class="flex flex-col justify-center">
                    <h2 class="font-semibold m-3 lg:text-2xl md:text-2xl text-blue-600">Vaciado de Locales</h2>
                    <p class="lg:text-lg md:text-lg mb-4 p-3">
                        Ofrecemos el servicio de vaciado de pisos y locales en Barcelona según las necesidades de nuestros clientes, dejando el espacio en cuestión totalmente libre de objetos y limpio.
                    </p>
                    <button class="ml-3 lg:mr-3 md:mr-3 px-2 p-3 w-44 mb-5 border border-blue-200 bg-transparent text-blue-500 hover:bg-blue-600 hover:text-white hover:border-transparent transition duration-300 ease-in-out">
                        <a href="contact.php">Más información</a>
                    </button>
                </div>
                <div class="flex justify-center items-center ">
                    <img class="h-full"src="public/img/services/locales.jpg" >
                </div>
            </div>
        </div>
    </section>

    <?php require('footer.php'); ?>

</body>

</html>