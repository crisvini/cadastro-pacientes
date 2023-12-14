# Sistema de cadastro de pacientes com tags personalizadas.

Projeto desenvolvido com as seguintes tecnologias:
- [Laravel](https://laravel.com/)
- [Livewire](https://livewire.laravel.com/)
- [TailwindCSS](https://tailwindcss.com/)
- [Flowbite](https://flowbite.com/)
- [TALLSTACKUI](https://tallstackui.com/)

**Necessário ter docker para executar o projeto

Passos para executar:

1 - Clonar o projeto;

2 - Entrar na pasta do projeto e executar os seguintes comandos na ordem a seguir:

    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php83-composer:latest \
        composer install --ignore-platform-reqs

    ./vendor/bin/sail up -d

    ./vendor/bin/sail composer install

    ./vendor/bin/sail npm i

    ./vendor/bin/sail artisan migrate:fresh
        
    ./vendor/bin/sail npm run dev

3 - Abrir o navegador e inserir "localhost" no campo;

4 - Explorar o projeto!;
