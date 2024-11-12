<form method="POST" class="flex flex-col gap-8">
    <div class="flex flex-col gap-4">
        <h2 class="font-['Rammetto_One'] text-[#E5E2E9] text-2xl">Crie sua conta</h2>

        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                    <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
                </svg>
            </div>
            <div class="flex gap-4">
                <input type="text" id="nome" name="nome" placeholder="Nome"
                    class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />
            </div>
        </div>

        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                    <path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path>
                </svg>
            </div>
            <div class="flex gap-4">
                <input type="email" id="email" name="email" placeholder="Email"
                    class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />
            </div>
        </div>

        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                    <path d="M48,56V200a8,8,0,0,1-16,0V56a8,8,0,0,1,16,0Zm92,54.5L120,117V96a8,8,0,0,0-16,0v21L84,110.5a8,8,0,0,0-5,15.22l20,6.49-12.34,17a8,8,0,1,0,12.94,9.4l12.34-17,12.34,17a8,8,0,1,0,12.94-9.4l-12.34-17,20-6.49A8,8,0,0,0,140,110.5ZM246,115.64A8,8,0,0,0,236,110.5L216,117V96a8,8,0,0,0-16,0v21l-20-6.49a8,8,0,0,0-4.95,15.22l20,6.49-12.34,17a8,8,0,1,0,12.94,9.4l12.34-17,12.34,17a8,8,0,1,0,12.94-9.4l-12.34-17,20-6.49A8,8,0,0,0,246,115.64Z"></path>
                </svg>
            </div>
            <div class="flex gap-4">
                <input type="password" id="senha" name="senha" placeholder="Senha"
                    class="w-full h-12 bg-transparent rounded-md pl-11 py-3 border border-[#1A1B2D] focus:border-[#892CCD] outline-none" />
            </div>
        </div>

    </div>
    <button type="submit" class="bg-[#892CCD] w-full h-12 rounded">Criar</button>
</form>