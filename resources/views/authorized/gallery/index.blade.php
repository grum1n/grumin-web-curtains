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
                {{ __('Gallery') }}
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
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">&nbsp;</th>
                            <th class="px-4 py-3 w-40 text-right">
                                <a href="{{ route('gallery.create') }}" class="middle none center rounded-lg bg-blue-500 py-1 px-6 font-sans text-ss font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    Add new
                                </a>
                            </th>
                        </tr>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Gallery Images ( {{ count($images) }} )</th>
                            <th class="px-4 py-3 w-32 text-right">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if(count($images) == 0)
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
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3" colspan="2">
                                <div class="flex flex-wrap justify-center gap-4">
                                    @if(count($images) > 0)
                                        @foreach($images as $image)

                                        <div class="relative max-w-xs pt-6">
                                            <div class="relative inline-block w-full transform transition-transform duration-300 ease-in-out rounded-lg  shadow-md shadow-blue-400">
                                                <div class="relative flex h-60 justify-center overflow-hidden rounded-lg">
                                                    <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                                                        <img src="{{ asset('images/gallery/' . $image->cover) }}" alt="" />
                                                    </div>

                                                    <div class="absolute bottom-0 mb-3 flex justify-center">
                                                        <div class="flex space-x-5 overflow-hidden rounded-lg bg-white/70 px-4 py-1 shadow">
                                                            <p class="flex items-center font-medium text-gray-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                                </svg>

                                                            </p>

                                                            <p class="flex items-center font-medium text-gray-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                                </svg>

                                                            </p>

                                                            <p class="flex items-center font-medium text-gray-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                                </svg>

                                                            </p>
                                                        </div>
                                                    </div>

                                                    <form method="post" action="{{ route('gallery.destroy', $image) }}" class="absolute right-0 top-0 z-10 mr-3 mt-3">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" onclick="return confirm('Confirm to delete?')" class="inline-flex select-none rounded-full bg-red-500 hover:bg-red-700 p-1 text-sm font-medium text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('gallery.edit', $image) }}" class="absolute left-0 top-0 z-10 ml-3 mt-3 inline-flex select-none rounded-full bg-green-500 hover:bg-green-700 p-1 text-sm font-medium text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                </div>

                                                <div class="px-4">
                                                    <div class="mt-4 grid grid-cols-2">
                                                        <div class="flex items-center">
                                                            <div class="relative">
                                                                <h2 class="line-clamp-1 text-base font-medium text-gray-800 dark:text-gray-200 md:text-lg" title="New York">{{ $image->title }}</h2>
                                                                <p class="mt-2 line-clamp-1 text-sm text-gray-700 dark:text-gray-400" title="New York, NY 10004, United States">Image added : {{ $image->user }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2 border-t border-b border-gray-200 pt-3 h-32 line-clamp-1">
                                                        {{ $image->description }}
                                                    </div>

                                                    <div class="flex flex-col h-20">
                                                        <p class="my-2 line-clamp-1 text-sm text-gray-700 dark:text-gray-400 flex justify-between">
                                                            <span>Created at :{{ $image->created_at }}</span>
                                                            <span> card id :{{ $image->id }}</span>
                                                        </p>
                                                        @if($image->updated_at != $image->created_at)
                                                            <p class="my-2 line-clamp-1 text-sm text-gray-700 dark:text-gray-400 flex justify-start">
                                                                <span>Updated at :{{ $image->updated_at }}</span>
                                                            </p>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                    @endif
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end px-4 py-3 text-xs font-semibold tracking-wide text-gray-700 uppercase border-t dark:border-gray-300 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">{{ $images->links() }}</span>
            </div>
        </div>
    </x-backend.main-container>

</x-app-layout>