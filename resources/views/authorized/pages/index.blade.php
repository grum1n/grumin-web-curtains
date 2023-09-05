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
                {{ __('Pages') }} 
            </div>
        </li>
    </x-backend.breadcrumb>

    <x-backend.main-container>
    
    <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">

                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">&nbsp;</th>
                                <th class="px-4 py-3 w-40 text-right">
                                    <a 
                                        href="{{ route('pages.create') }}" 
                                        class="middle none center rounded-lg bg-blue-500 py-1 px-6 font-sans text-ss font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" 
                                        data-ripple-light="true">
                                        {{ __('Add new') }} 
                                    </a>
                                </th>
                            </tr>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800">
                                <th class="px-4 py-3"> {{ __('Gallery Categories') }}</th>
                                <th class="px-4 py-3 w-32 text-right">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @if(count($pages) == 0)
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3" colspan="2">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">No data.</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            @endif
                            @if(count($pages) > 0)
                                @foreach($pages as $page)
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">
                                                    {{ $page->id }}. {{ $page->name }}
                                                    @if($page->content_layout_name != 0) 
                                                        <span class="pl-4">(content: {{ $page->content_layout_name }} )</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="flex gap-4 px-4 py-3 text-xs ">
                                        <a href="{{ route('pages.edit', $page) }}" class="flex justify-center items-center px-4 py-1 leading-tight font-sans cursor-pointer uppercase text-green-700 bg-green-100 hover:bg-green-200 rounded-lg dark:bg-green-700 dark:text-green-100">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="post" onsubmit="return confirm('Are you sure to delete this category?');">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit"
                                                class="flex justify-center items-center px-4 py-1 leading-tight cursor-pointer text-red-700 uppercase bg-red-100 hover:bg-red-200 rounded-lg dark:bg-red-700 dark:text-red-100"
                                                >
                                                 {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3"></span>
                </div>
            </div>
        </div>
  
    </x-backend.main-container>

</x-app-layout>