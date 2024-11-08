<section class="h-12 w-full flex justify-between items-center">

    <h2 class="text-2xl font-['Rammetto_One'] text-[E5E2E9]"><?= currentRoute('meusFilmes') ? 'Meus Filmes' : 'Explorar' ?></h2>

    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7A7B9F" viewBox="0 0 256 256">
                <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
        </span>

        <div class="flex gap-4">
            <input type="text" id="explorar" name="explorar" placeholder="Pesquisar Filmes"
                class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />

            <?php if(currentRoute('meusFilmes')): ?>
                <div class="border-l border-[#1A1B2D]"></div>
                <a class="text-center text-base text-white bg-[#892CCD] w-28 h-12 rounded-md flex items-center justify-center gap-2 px-5 py-3 cursor-pointer hover:bg-[#A85FDD] hover:shadow-[0_4px_10px_rgba(137,44,205,0.5)]"
                    href="/novoFilme">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                    </svg>
                    Novo
                </a>
            <?php endif; ?>
        </div>

    </div>

</section>