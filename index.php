<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Dev</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-[#16181D]">
        <!-- About me -->
        <section class="bg-[url(/assets/Background_Intro.png)] bg-cover bg-center h-200 flex justify-center items-center">
            <!-- centralizando -->
            <div class="flex flex-col items-center p-8 space-y-15 w-full max-w-screen-lg">
                <!-- Foto -->
                <div class="h-24 w-24 border-3 border-solid border-[#E3646E] rounded-full">
                    <img class="h-full w-full rounded-full object-cover border-3 border-solid rounded-[500px]" src="assets/perfil.jpeg" alt="Foto Sabrina Souza">
                </div>
                <!-- texto -->
                <div class="w-200 space-y-6 text-center">
                    <p class="text-gray-400 font-[inconsolata] text-[20px] leading-[120%]">
                        Hello World! Meu nome é <span class="text-[#E3646E]">Sabrina Souza</span> e sou
                    </p>
                    <h1 class="font-[asap] font-bold text-[56px] leading-[120%] text-gray-100">
                        Desenvolvedora PHP
                    </h1>
                    <p class="mx-auto font-[maven pro] text-[14px] leading-[140%] text-gray-400 w-165">
                        Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
                    </p>
                </div>
                <!-- techs -->
                <div class="flex space-x-4 mt-10">
                    <div class="bg-[#82BC4F] text-black rounded-md px-2 py-1 font-semibold text-xs">GitHub</div>
                    <div class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</div>
                    <div class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</div>
                    <div class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</div>
                    <div class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</div>
                </div>
            </div>
        </section>
        <!-- meu trabalho -->
        <section class="">
            <!-- titulos -->
            <div class="text-center mb-15">
                <h1 class="text-[#E3646E] mb-5 text-[20px] font-[inconsolata]">Meu trabalho</h1>
                <p class="text-white font-bold text-[24px] font-[asap]">Veja os projetos em destaque</p>
            </div>
            <!-- projetos -->
            <div class="mx-auto w-350">
                <div class="grid grid-cols-2 gap-4">

                    <div class="flex bg-[#292C34] p-2 rounded-[12px] border-1 justify-between space-x-3 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900">
                        <div class="w-2/4">
                            <img class="h-full w-full rounded-lg object-cover" src="assets/image.png" alt="Travelgram">
                        </div>
                        <div class="w-3/4 space-y-3">
                            <h3 class="text-gray-300 font-bold font-[asap] text-[16px]">Travelgram</h3>
                            <p class="text-gray-400 font-[maven pro] text-[14] leading-[140%]">Rede social onde as pessoas mostram  os registros de suas viagens pelo mundo</p>
                            <div class="flex space-x-2 mt-18">
                                <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                                <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                                <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                                <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex bg-[#292C34] p-2 rounded-[12px] border-1 justify-between space-x-3 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900">
                        <div class="w-2/4">
                            <img class="h-full w-full rounded-lg object-cover" src="assets/image-1.png" alt="Receita">
                        </div>
                        <div class="w-3/4 space-y-3">
                            <h3 class="text-gray-300 font-bold font-[asap] text-[16px]">Página de receita</h3>
                            <p class="text-gray-400 font-[maven pro] text-[14] leading-[140%]">Página com o passo a passo de uma receita para cupcakes</p>
                            <div class="flex space-x-2 mt-18">
                                <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                                <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                                <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                                <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 border-1 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900">
                        <div class="w-2/4">
                            <img class="h-full w-full rounded-lg object-cover" src="assets/image-2.png" alt="Tech News">
                        </div>
                        <div class="w-3/4 space-y-3">
                            <h3 class="text-gray-300 font-bold font-[asap] text-[16px]">Tech News</h3>
                            <p class="text-gray-400 font-[maven pro] text-[14] leading-[140%]">Homepage de um portal de notícias sobre a área da tecnologia</p>
                            <div class="flex space-x-2 mt-18">
                                <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                                <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                                <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                                <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 border-1 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900">
                        <div class="w-2/4">
                            <img class="h-full w-full rounded-lg object-cover" src="assets/Thumbnail_Project-04.png" alt="Imagem Projeto">
                        </div>
                        <div class="w-3/4 space-y-3">
                            <h3 class="text-gray-300 font-bold font-[asap] text-[16px]">Refund</h3>
                            <p class="text-gray-400 font-[maven pro] text-[14] leading-[140%]">Um sistema para pedido e acompanhamento de reembolso</p>
                            <div class="flex space-x-2 mt-18">
                                <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                                <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                                <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                                <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 border-1 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900">
                        <div class="w-2/4">
                            <img class="h-full w-full rounded-lg object-cover" src="assets/Thumbnail_Project-06.png" alt="Imagem Projeto">
                        </div>
                        <div class="w-3/4 space-y-3">
                            <h3 class="text-gray-300 font-bold font-[asap] text-[16px]">Página de turismo</h3>
                            <p class="text-gray-400 font-[maven pro] text-[14] leading-[140%]">Página com as principais informações para quem quer viajar para Busan</p>
                            <div class="flex space-x-2 mt-18">
                                <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                                <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                                <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                                <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 border-1 hover:border-solid hover:border-gray-200 shadow-lg shadow-slate-900">
                        <div class="w-2/4">
                            <img class="h-full w-full rounded-lg object-cover" src="assets/Thumbnail_Project-05.png" alt="Imagem Projeto">
                        </div>
                        <div class="w-3/4 space-y-3">
                            <h3 class="text-gray-300 font-bold font-[asap] text-[16px]">Zingen</h3>
                            <p class="text-gray-400 font-[maven pro] text-[14] leading-[140%]">Landing Page completa e responsiva de um aplicativo de Karaokê</p>
                            <div class="flex space-x-2 mt-18">
                                <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                                <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                                <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                                <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contato -->
    </body>
</html>