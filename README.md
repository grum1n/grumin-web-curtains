
#   model-migration-controller-resource-request

    php artisan make:model Page -mcr -R

    php artisan make:model Contact -mcr -R

    php artisan make:model Gallery -mcr -R

    php artisan make:model Message -mcr -R

#   components

    php artisan make:component Backend/Header

    php artisan make:component Backend/Sidebar

    php artisan make:component Backend/MainContainer

    php artisan make:component Backend/Breadcrumb

    php artisan make:component Backend/ErrorMsg

#    colors

    //*  dashboard:

    //natural-300
    //amber-200
    //teal-500
    //teal-950
-----------------

#   install 

    https://jetstream.laravel.com/introduction.html

    composer require laravel/jetstream
    php artisan jetstream:install livewire

    npm install
    npm run build
    npm run dev
