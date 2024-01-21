<?php $page = 'contact'; ?>

<?php require('head.php'); ?>

<body>
    <section class="bg-white pt-5">
        <?php require('navbar.php'); ?>
    </section>
    <!-- CONTACTA CON NOSOTROS START-->
    <section class="p-5 flex justify-center m-0 md:mb-5">
        <div class="container m-auto relative" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('public/img/contact/background.jpg'); background-size: cover; height: 80%;">
            <div class="container h-max mx-auto px-4 py-4">
                <h1 class="font-semibold font-bebas-neue  text-blue-600 text-xl md:text-5xl text-center leading-normal mb-10">
                    Contacto
                </h1>
                <form id="form" class="font-montserrat" enctype="multipart/form-data">
                    <div class="mb-6 m-auto relative lg:w-1/3 md:w-1/3">
                        <div class="mb-4 shadow-sm">
                            <select name="subject" id="subject" class="block p-2 w-full mb-2 border rounded-md shadow-sm bg-white focus:ring-blue-500 focus:border-gray-700">
                                <option value="Presupuesto">Presupuesto</option>
                                <option value="Trabaja con nosotros">Trabaja con nosotros</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                        <div class="mb-4 shadow-sm">
                            <input type="text" name="name" placeholder="Nombre" class="border p-2 w-full mb-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-gray-700">
                        </div>
                        <div class="mb-4 shadow-sm">
                            <input type="text" name="phone" placeholder="Teléfono" class="border p-2 w-full mb-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-gray-700">
                        </div>
                        <div class="mb-4 shadow-sm">
                            <input type="email" id="email" name="email" placeholder="Email" class="border p-2 w-full mb-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-gray-700">
                        </div>
                        <div class="mb-4 shadow-sm">
                            <textarea placeholder="Mensaje" id="message" name="message" class="border p-2 w-full mb-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-gray-700"></textarea>
                        </div>
                        <div class="mb-4 shadow-sm">
                            <input type="file" id="attachment" name="attachment" class="border p-2 w-full mb-2 border-gray-300 bg-white rounded-md focus:ring-blue-500 focus:border-gray-700">
                        </div>
                        <div class="mb-4 shadow-sm">
                            <button id="send-email" name="send-email" type="submit" class="bg-blue-900 mb-5 hover:bg-blue-700 text-white px-4 py-2 rounded-md w-full">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="p-5 flex justify-center mb-5 md:mb-20">
        <div class="container m-auto text-center relative">
            <h1 class="font-semibold font-bebas-neue text-xl md:text-5xl text-center leading-normal mb-5 lg:mb-10 md:mb-10 text-blue-600">Contáctanos</h1>
            <p class="font-montserrat">
                No dudes en contactar con nosotros! Desde este formulario puedes solicitar
                presupuesto y estaremos encantados de responderte lo antes posible. Para
                cualquier otra duda o bien si tienes experiencia en el sector y quieres trabajar
                con nosotros, envíanos tu currículum y te llamaremos.
            </p>
        </div>
    </section>
    <!-- CONTACTA CON NOSOTROS END -->
    <?php require('footer.php'); ?>