<x-app-layout>

    <x-backend.breadcrumb>
        <li class="text-gray-900 dark:text-gray-300 hover:text-gray-400 ">
            <div class="!mr-0 flex items-center text-lg font-medium">
                <a href="{{ route('dashboard') }}" class=""><svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg></a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300 hover:text-gray-400 ">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                <a href="{{ route('about.index') }}" class=""> About Info </a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                Create
            </div>
        </li>
    </x-backend.breadcrumb>

    <x-backend.main-container>

        <form class="flex flex-col justify-center items-center h-full" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user" value="{{ Auth::user()->name }}">
            <div class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] md:max-w-[400px] bg-clip-border shadow-3xl shadow-shadow-500 w-full !p-6 3xl:p-![18px] bg-white undefined">

                <div class="mb-3">
                    <label for="section_desc" class="text-sm text-navy-700 dark:text-gray-500 font-bold">section_desc</label>
                    <input type="text" id="section_desc" name="section_desc" value="{{ old('section_desc') }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="section_desc" />
                </div>

                <div class="mb-3">
                    <label for="section_heading" class="text-sm text-navy-700 dark:text-gray-500 font-bold">section_heading</label>
                    <input type="text" id="section_heading" name="section_heading" value="{{ old('section_heading') }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="section_heading" />
                </div>

                <div class="mb-3">
                    <label for="body" class="text-sm text-navy-700 dark:text-gray-500 font-bold">body</label>
                    <input type="text" id="body" name="body" value="{{ old('body') }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="body" />
                </div>

                <div class="mb-3">
                    <label for="article_heading" class="text-sm text-navy-700 dark:text-gray-500 font-bold">article_heading</label>
                    <input type="text" id="article_heading" name="article_heading" value="{{ old('article_heading') }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="article_heading" />
                </div>

                <div class="mb-3">
                    <label for="article_body" class="text-sm text-navy-700 dark:text-gray-500 font-bold">article_body</label>
                    <input type="text" id="article_body" name="article_body" value="{{ old('article_body') }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="article_body" />
                </div>

                <div class="mb-3">
                    <label for="author" class="text-sm text-navy-700 dark:text-gray-500 font-bold">author</label>
                    <input type="text" id="author" name="author" value="{{ old('author') }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="author" />
                </div>

                <div class="mb-3">
                    <label for="cover" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Image</label>
                    <input type="file" id="cover" name="cover">
                    <x-backend.error-msg name="cover" />
                </div>

                <button type="submit" class="middle none center rounded-lg bg-blue-500 py-1 px-6 font-sans text-ss font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">Add</button>

            </div>
            
        </form>

    </x-backend.main-container>
</x-app-layout>