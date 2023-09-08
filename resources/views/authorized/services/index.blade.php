<x-app-layout>

    <x-backend.breadcrumb>
        <li class="text-gray-900 dark:text-gray-300 hover:text-gray-400 ">
            <div class="!mr-0 flex items-center text-lg font-medium">
                <a href="{{ route('about.index') }}" class=""><svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg></a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                {{ __('Services') }} 
            </div>
        </li>
    </x-backend.breadcrumb>

    <x-backend.main-container>
        @if(session()->exists('message'))
            <div class="p-4  bg-gradient-to-r from-emerald-950 to-lime-800 text-green-100" x-data="{ showFlushMessage: true }" x-show="showFlushMessage" x-init="setTimeout(() => showFlushMessage = false, 3000)">
                {{ session('message')}}
            </div>
        @endif
    </x-backend.main-container>

    <x-backend.main-container>

        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">

                    @if(count($services) == 0)
                    <table class="w-full">
                        <thead>
                            
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="w-full flex justify-between gap-4 px-4 py-3 text-xs ">
                                    <div class="px-4 py-1">
                                        {{ __('Services Info') }}
                                    </div>
                                    <div class="flex justify-end gap-4">
                                        <a href="{{ route('services.create') }}" class="middle none center rounded-lg bg-blue-500 py-1 px-6 font-sans text-ss font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                            {{ __('Add new') }}
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3" colspan="2">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">No data.</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif

                    @if(count($services) > 0)
                        @foreach($services as $service)
                            <table class="w-full">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                                        <th class="w-full flex justify-between gap-4 px-4 py-3 text-xs ">
                                            <div class="px-4 py-1">
                                                {{ __('Service Info') }}
                                            </div>
                                            <div class="flex justify-end gap-4">
                                                <a href="{{ route('services.edit', $service) }}" class="flex justify-center items-center px-4 py-1 font-sans cursor-pointer uppercase text-green-700 bg-green-100 hover:bg-green-200 rounded-lg dark:bg-green-700 dark:hover:bg-green-600 dark:text-green-100">
                                                    {{ __('Edit') }}
                                                </a>
                                                <form action="{{ route('services.destroy', $service) }}" method="post" onsubmit="return confirm('Are you sure to delete this services info?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="flex justify-center items-center px-4 py-1 cursor-pointer text-red-700 uppercase bg-red-100 hover:bg-red-200 rounded-lg dark:bg-red-700 dark:hover:bg-red-600 dark:text-red-100">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 flex gap-2 items-center text-sm">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Section description') }} :</span><span class="pl-2">{{ $service->section_desc }}</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Section heading') }} :</span><span class="pl-2">{{ $service->section_heading }}</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Body') }} :</span><span class="pl-2">{{ $service->body }}</span>
                                        </td>
                                    </tr>

                                    @if($service->article_heading != 0)
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Article heading') }} :</span><span class="pl-2">{{ $service->article_heading }}</span>
                                        </td>
                                    </tr>
                                    @endif
                                    @if($service->article_body != 0)
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Article body') }} :</span><span class="pl-2">{{ $service->article_body }}</span>
                                        </td>
                                    </tr>
                                    @endif

                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Author') }} :</span><span class="pl-2">{{ $service->author }}</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('Image url') }} :</span><span class="pl-2">{{ $service->cover }}</span>
                                        </td>
                                    </tr>

                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <span class="font-semibold uppercase text-blue-300">{{ __('User') }} :</span><span class="pl-2">{{ $service->user }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    @endif


                </div>
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3"></span>
                </div>
            </div>
        </div>

    </x-backend.main-container>

</x-app-layout>