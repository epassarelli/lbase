<div>
    <x-header>
        Nosotros
    </x-header>

    <!-- Carousel tw-elements -->

    <div id="carouselDarkVariant" class="relative" data-te-carousel-init data-te-carousel-slide>
        <!-- Carousel indicators -->
        <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 md:flex list-none justify-center p-0 hidden" data-te-carousel-indicators>
            <button data-te-target="#carouselDarkVariant" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none hover:bg-blue-700" aria-current="true" aria-label="Slide 1"></button>
            <button data-te-target="#carouselDarkVariant" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none hover:bg-blue-700" data-te-slide-to="1" aria-label="Slide 1"></button>
            <button data-te-target="#carouselDarkVariant" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none hover:bg-blue-700" data-te-slide-to="2" aria-label="Slide 1"></button>
        </div>

        <!-- Carousel items -->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!-- First item -->
            <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                <img src="https://kouro.webpass.online/assets/uploads/7/slider1.jpg " class="block w-full" alt="Motorbike Smoke" />
            </div>
            <!-- Second item -->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item>
                <img src="https://kouro.webpass.online/assets/uploads/7/slider2.jpg " class="block w-full" alt="Mountaintop" />
            </div>
            <!-- Third item -->
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item>
                <img src="https://kouro.webpass.online/assets/uploads/7/slider3.jpg " class="block w-full" alt="Woman Reading a Book" />
            </div>
        </div>

        <!-- Carousel controls - prev item-->
        <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-25 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselDarkVariant" data-te-slide="prev">
            <span class="inline-block h-10 w-8 dark:grayscale">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-10 w-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <!-- Carousel controls - next item-->
        <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-25 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselDarkVariant" data-te-slide="next">
            <span class="inline-block h-10 w-8 dark:grayscale">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-10 w-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </div>

    <!-- Kouro Linea  -->
    <div class="container mx-auto py-12">
        <div class="max-w-7xl mx-auto md:px-8">
            <div class="grid md:grid-cols-2 gap-10">
                <div class="md:bg-gray-600 rounded-lg">
                    <img src="https://kouro.webpass.online/assets/uploads/7/local1.jpg" alt="Kouro Tienda" class="border-white border-8 rounded-lg shadow-lg w-full h-full md:-translate-x-10 md:translate-y-10">
                </div>
                <div class="m-auto">
                    <h2 class="text-2xl md:text-3xl font-semibold">¿Cómo surge <strong class="font-extrabold">Kouro Linea Fina</strong> y con qué propósito?</h2>
                    <p class="text-lg text-justify md:text-xl mt-10">A principio de los 90, Kouro fue comenzó con la confección de productos xxxx en forma artesanal que se comercialiban xxxx. En una segunda etapa, se creó o abrió el local</p>
                </div>
            </div>
        </div>
    </div>
</div>