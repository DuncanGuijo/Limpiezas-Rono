<header>
    <nav class=" flex-column justify-center lg:flex lg:flex-row items-center font-montserrat shadow-md">
        <div class="hidden items-center mb-10 lg:mb-5 lg:flex">
            <a href="index.php"><img class="mx-4 h-44 cover" src="public/img/navbar-logo.jpg" alt="logo"></a>
        </div>
        <div class="flex items-center absolute lg:mb-5 lg:hidden md:hidden">
            <a href="index.php"><img class="lg:mx-4 w-40 lg:h-44 cover" src="public/img/navbar-logo.jpg" alt="logo"></a>
        </div>
        <button id="toggle-menu" class="flex text-center justify-end w-full py-4 m-auto lg:hidden">
            <svg class="h-12 w-12 self-end mr-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <ul id="nav-menu" class="justify-center align-middle py-2 lg:flex lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14 hidden">
            <li class="<?= $page == "index" ? "text-blue-400" : "text-gray-900" ?> mb-2 text-center  hover:text-blue-400 transition ease-in-out duration-300 hover:scale-105 lg:mb-0 <?= $page == "index" ? "text-lg" : "" ?>">
                <a href="index.php">Inicio</a>
            </li>
            <li class="<?= $page == "services" ? "text-blue-400" : "text-gray-900" ?> mb-2 text-center hover:text-blue-400 transition ease-in-out duration-300 hover:scale-105 lg:mb-0 <?= $page == "services" ? "text-lg" : "" ?>">
                <a href="services.php">Servicios</a>
            </li>
            <li class="<?= $page == "contact" ? "text-blue-400" : "text-gray-900" ?> mb-2 text-center hover:text-blue-400 transition ease-in-out duration-300 hover:scale-105 lg:mb-0 <?= $page == "contact" ? "text-lg" : "" ?>">
                <a href="contact.php">Contacto</a>
            </li>
            <li class="<?= $page == "contact" ? "text-blue-400" : "text-gray-900" ?> mb-2 text-center mb-8 hover:text-blue-400 transition ease-in-out duration-300 hover:scale-105 lg:mb-0 lg:hidden md:hidden <?= $page == "contact" ? "text-lg" : "" ?>">
                <a href="contact.php">Presupuesto</a>
            </li>
            <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-300 hidden lg:block">
                <a id="budget" href="contact.php?presupuesto">Solicitar presupuesto</a>
            </button>
        </ul>
    </nav>
</header>

<script>
    
</script>
