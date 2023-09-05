<x-app-layout>
    
    <x-backend.breadcrumb>
        <li class="text-gray-900 dark:text-gray-300 hover:text-gray-400 ">
            <div class="!mr-0 flex items-center text-lg font-medium">
                <a href="{{ route('dashboard') }}" class=""><svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg></a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                Dashboard 
            </div>
        </li>
    </x-backend.breadcrumb>

    <x-backend.main-container>
        pages
    </x-backend.main-container>

    <x-backend.main-container>
        <x-welcome />
    </x-backend.main-container>

    <x-backend.main-container>
        <x-card-examples />
    </x-backend.main-container>

</x-app-layout>