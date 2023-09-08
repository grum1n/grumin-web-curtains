
#   controllers

    php artisan make:controller Frontend/HomeController

#   model-migration-controller-resource-request

    php artisan make:model Page -mcr -R

    php artisan make:model Contact -mcr -R

    php artisan make:model Gallery -mcr -R

    php artisan make:migration add_description_to_pages_table --table=pages

    php artisan make:model AboutPage -mcr -R

    php artisan make:model Service -mcr -R


#   components

    php artisan make:component Backend/Header

    php artisan make:component Backend/Sidebar

    php artisan make:component Backend/MainContainer

    php artisan make:component Backend/Breadcrumb

    php artisan make:component Backend/ErrorMsg

    php artisan make:component Frontend/Navbar

    php artisan make:component Frontend/Footer

    php artisan make:component Frontend/AppLogo

    php artisan make:component Frontend/Hero

    php artisan make:component Frontend/SmallHero

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

  <!-- @livewire('navigation-menu')
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif -->