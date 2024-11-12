<section class="flex gap-12 h-[490px]">

    <div class="flex flex-col items-center justify-center gap-3 bg-[#1A1B2D] w-96 rounded-md cursor-pointer" onclick="document.getElementById('fileInput').click()">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#A85FDD" viewBox="0 0 256 256">
            <path d="M224,144v64a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V144a8,8,0,0,1,16,0v56H208V144a8,8,0,0,1,16,0ZM93.66,77.66,120,51.31V144a8,8,0,0,0,16,0V51.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,77.66Z"></path>
        </svg>

        <span class="text-[#7A7B9F] text-base">Fazer upload</span>
    </div>

    <div class="w-[640px] ">

        <form method="POST" enctype="multipart/form-data" class="flex flex-col justify-between gap-10">

            <!-- Input file escondido -->
            <input type="file" id="fileInput" name="imagem" require class="hidden" />

            <div>

                <h2 class="mb-6 font-['Rajdhani'] text-xl font-bold">Novo filme</h2>

                <div class="flex flex-col gap-4">

                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                                <path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path>
                            </svg>
                        </div>
                        <div class="flex gap-4">
                            <input type="text" id="titulo" name="titulo" placeholder="titulo"
                                class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="relative w-1/2">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                                    <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                                </svg>
                            </div>
                            <div class="flex gap-4">
                                <input type="text" id="ano" name="ano" placeholder="ano"
                                    class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />
                            </div>
                        </div>

                        <div class="relative w-1/2">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                                    <path d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z"></path>
                                </svg>
                            </div>
                            <div class="flex gap-4">
                                <input type="text" id="categoria" name="categoria" placeholder="categoria"
                                    class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />
                            </div>
                        </div>
                    </div>

                    <textarea name="descricao" id="descricao" placeholder="Descrição"
                        class="w-full h-52 bg-transparent rounded-md border border-[#1A1B2D] focus:border-[#892CCD] outline-none px-4 py-3"></textarea>

                </div>

            </div>

            <div class="flex justify-end gap-8 items-center">

                <a href="/meusFilmes" class="text-center text-base text-[#7A7B9F] w-[86px] h-12 flex items-center justify-center gap-2 px-5 py-3 cursor-pointer">Cancelar</a>

                <button class="text-center text-base text-white bg-[#892CCD] w-[86px] h-12 rounded-md flex items-center justify-center gap-2 px-5 py-3 cursor-pointer hover:bg-[#A85FDD] hover:shadow-[0_4px_10px_rgba(137,44,205,0.5)]">salvar</button>

            </div>

        </form>

    </div>

</section>