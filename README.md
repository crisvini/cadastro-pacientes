Desafio de criação de um sistema de cadastro de pacientes para a vaga de desenvolvedor fullstack pleno da Carefy.

https://laravel.com/docs/10.x/sail#installing-composer-dependencies-for-existing-projects
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs

dar um composer install e um npm i

./vendor/bin/sail up -d
