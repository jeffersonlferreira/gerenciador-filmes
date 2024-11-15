<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Index</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</head>

<body class="font-['Nunito_Sans'] bg-[#0F0F1A] text-[#E4E5EC]">
    <header>
        <nav class="mx-auto flex justify-between px-6 h-20 items-center bg-[#131320]">
            <img src="assets/Logo.svg" alt="Logo" class="w-12 h-12">
            <ul class="flex items-center gap-6">
                <li class="px-3 h-10 rounded-md flex items-center justify-center gap-2 hover:bg-[#131320] text-[#7A7B9F] <?= active(); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <path d="M229.52,74.21a8,8,0,0,0-7.13-2A44,44,0,0,0,168,41.67a44,44,0,0,0-80,0,44,44,0,0,0-54.4,30.51,8,8,0,0,0-9.4,9.65L54.76,211.67A16,16,0,0,0,70.34,224H185.66a16,16,0,0,0,15.58-12.33L231.79,81.83A8,8,0,0,0,229.52,74.21ZM76,56a27.68,27.68,0,0,1,13.11,3.26,8,8,0,0,0,11.56-5.34,28,28,0,0,1,54.66,0,8,8,0,0,0,11.56,5.34A28,28,0,0,1,207,76.54l-38.56,11-34.49-13.8a16,16,0,0,0-11.88,0L87.57,87.56,49,76.54A28,28,0,0,1,76,56ZM70.34,208,42.91,91.44l37.85,10.81L94.86,208ZM145,208H111L96.75,101.12,128,88.62l31.25,12.5Zm40.66,0H161.14l14.1-105.75,37.85-10.81Z"></path>
                    </svg>
                    <a href="/">Explorar</a>
                </li>
                <li class="px-3 h-10 rounded-md flex items-center justify-center gap-2 hover:bg-[#131320] text-[#7A7B9F] <?= active('meusFilmes'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path>
                    </svg>
                    <a href="/meusFilmes">Meus Filmes</a>
                </li>
            </ul>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-4 border-r border-[#1A1B2D] px-3">
                    <span>Olá, <?= auth()->nome ?></span>
                    <img src="assets/image/Perfil.jpg" alt="User Image" class="w-8 h-8 rounded-md border border-[#7435DB]">
                </div>
                <a href="/logout" class="w-8 h-8 bg-[#1A1B2D] rounded-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7A7B9F" viewBox="0 0 256 256">
                        <path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path>
                    </svg>
                </a>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-xl py-16 flex flex-col items-center justify-center gap-8 px-8 xl:px-0">

        <?php if ($mensagem = flash()->get('mensagem')): ?>

            <div id="message" class="fixed top-24 right-4 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                </div>
                <div class="ms-3 text-sm font-normal"><?= $mensagem ?></div>
            </div>

        <?php endif; ?>

        <?php require "../views/{$view}.view.php"; ?>

    </main>

    <script>
        setTimeout(() => {
            const messageDiv = document.getElementById('message');
            if (messageDiv) {
                messageDiv.style.opacity = '0'; // Transição suave para opacidade 0
                setTimeout(() => messageDiv.style.display = 'none', 500); // Aguarda a transição e oculta
            }
        }, 5000);
    </script>

</body>

</html>