<script setup>
const xtassetUrl = assetUrl;
const pathImage = xtassetUrl;
</script>
<template>
    <section id="service" class="2xl:py-[80px] py-[70px] bg-[#f6f8ff] relative dark:bg-[#120f1c]">
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img :src="`${pathImage}themes/personalLanding/assets/img/shape/shape-6.png`" alt="shape" class="absolute w-12 h-12 top-28 right-40">
        </div>
        <div class="banner text-center mb-[30px] px-6" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <span class="text-[14px] text-[#777] dark:text-[#ddd]">EL MEJOR SERVICIO DE TI</span>
            <h2
                class="text-center mt-[5px] 2xl:text-[35px] xl:text-[33px] lg:text-[30px] md:text-[26px] sm:text-[24px] text-[22px] font-bold dark:text-[#ddd]">
                SOLUCIONES
                <span class="text-[#0188ee]">TECNOLOGICAS</span>
            </h2>
        </div>
        <div class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] 
                    lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] max-[320px]:px-[12px] px-6">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 gap-[30px]">
                <div class="transition-all rounded flex justify-start items-start" data-aos="fade-up"
                    data-aos-duration="2000" data-aos-delay="300">
                    <div class="pr-6 border-r border-[#0188ee] max-[480px]:hidden">
                        <h6 class="2xl:text-[50px] lg:text-[40px] text-[35px] font-bold text-[#0188ee] 2xl:w-[60px] xl:w-[60px] lg:w-[50px] w-[40px] opacity-80">01</h6>
                    </div>
                    <div class="pl-6 border-l dark:border-[#27213b]">
                        <div class="flex">
                            <img :src="`${pathImage}themes/vristo/images/product/movile-inbox-cuate.svg`" style="width: 100%; height: auto;" alt="service-1">
                        </div>
                        <h4 class="text-[20px] pt-6 font-bold dark:text-[#0188ee]">Software de Facturación</h4>
                        <p class="pt-2 text-[#777] dark:text-[#ddd] text-[15px] leading-[28px]">
                            Ofrecemos el Facturador Pro 3 en opciones de alquiler mensual o anual. Esta solución te permite acceder a 
                            herramientas avanzadas de facturación sin la necesidad de realizar una inversión inicial elevada.
                        </p>
                    </div>
                </div>
                <div class="transition-all rounded flex justify-start items-start" data-aos="fade-up"
                    data-aos-duration="2000" data-aos-delay="300">
                    <div class="pr-6 border-r border-[#0188ee] max-[480px]:hidden">
                        <h6 class="2xl:text-[50px] lg:text-[40px] text-[35px] font-bold text-[#0188ee] 2xl:w-[60px] xl:w-[60px] lg:w-[50px] w-[40px] opacity-80">02</h6>
                    </div>
                    <div class="pl-6 border-l dark:border-[#27213b]">
                        <div class="flex">
                            <img :src="`${pathImage}themes/vristo/images/product/app-development-amico.svg`" alt="service-2">
                        </div>
                        <h4 class="text-[20px] pt-6 font-bold dark:text-[#0188ee]">Desarrollo a medida</h4>
                        <p class="pt-2 text-[#777] dark:text-[#ddd] text-[15px] leading-[28px]">
                            Creamos soluciones de software personalizadas que se adaptan a las necesidades específicas de tu negocio. 
                            Nuestro enfoque flexible y ágil garantiza que obtengas la herramienta perfecta para optimizar tus procesos.
                        </p>
                    </div>
                </div>
                <div class="transition-all rounded flex justify-start items-start" data-aos="fade-up"
                    data-aos-duration="2000" data-aos-delay="300">
                    <div class="pr-6 border-r border-[#0188ee] max-[480px]:hidden">
                        <h6 class="2xl:text-[50px] lg:text-[40px] text-[35px] font-bold text-[#0188ee] 2xl:w-[60px] xl:w-[60px] lg:w-[50px] w-[40px] opacity-80">03</h6>
                    </div>
                    <div class="pl-6 border-l dark:border-[#27213b]">
                        <div class="flex">
                            <img :src="`${pathImage}themes/vristo/images/product/learning-amico.svg`" alt="service-3">
                        </div>
                        <h4 class="text-[20px] pt-6 font-bold dark:text-[#0188ee]">Software Académico</h4>
                        <p class="pt-2 text-[#777] dark:text-[#ddd] text-[15px] leading-[28px]">
                            Ofrecemos una plataforma para la gestión académica, que incluye la publicación de cursos, módulos y clases, así como la opción de añadir comentarios por clase .Además, cuenta con un blog para compartir novedades y herramientas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="flex justify-center">
            <div>
                <a href="#contact" type="button"
                        class=" text-white bg-[#0188ee] hover:bg-[#f11600] no-underline font-medium rounded-full 
                        text-sm px-8 py-2.5 mr-2 hidden 2xl:block xl:block lg:block
                        shadow-lg transition duration-500 ease-in-out hover:-translate-y-1 hover:scale-110">
                        Obtenga una cotización
                </a>
            </div>
        </div>
        <div class="2xl:border-b 2xl:pt-12 lg:border-b dark:2xl:border-[#27213b] dark:lg:border-b dark:lg:border-[#27213b] 
            lg:pt-12 pt-0 flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] 
            lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] px-6"
            data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
        </div>
    </section>
</template>