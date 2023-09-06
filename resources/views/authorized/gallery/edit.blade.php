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
                <a href="{{ route('gallery.index') }}" class=""> Gallery </a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                Edit
            </div>
        </li>
    </x-backend.breadcrumb>

    <x-backend.main-container>

        <form class="flex flex-col justify-center items-center h-full" action="{{ route('gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            <p>{{ $gallery->id }}</p>
            @csrf
            @method('PUT')
            <input type="hidden" name="user" value="{{ Auth::user()->name }}">
            <div class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] md:max-w-[400px] bg-clip-border shadow-3xl shadow-shadow-500 w-full !p-6 3xl:p-![18px] bg-white undefined">

                <div class="mb-3">
                    <label for="title" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Title</label>
                    <input type="text" id="title" name="title" value="{{ $gallery->title }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="title" />
                </div>

                <div class="mb-3">
                    <label for="description" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Description</label>
                    <input type="text" id="description" name="description" value="{{ $gallery->description }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="description" />
                </div>

                <div class="mb-3">
                    <label for="cover" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Image: {{ $gallery->cover }}</label>
                    <input type="file" id="cover" name="cover" />
                    <x-backend.error-msg name="cover" />
                </div>

                <div class="mb-3">
                    <label for="status" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Status</label>
                    <select name="status" id="status"  class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 px-3 py-1 text-sm outline-none border-gray-200">
                        
                        <option value="{{ $gallery->status }}">{{ $gallery->status }}</option>
                        <option value="not active" {{ old('status') == 'not active' ? 'selected' : '' }}>Not active</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    </select>
                    <x-backend.error-msg name="status" />
                </div>

                <div class="mb-3">
                    <label for="page_id" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Page name</label>
                    <select name="page_id" id="page_id"  class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 px-3 py-1 text-sm outline-none border-gray-200">
                        
                        <option value="{{ $gallery->page_id }}">{{ $gallery->page_id }}</option>
                        @foreach($pages as $page)
                            <option value="{{ $page->id }}" {{ old('page_id') == $page->id ? 'selected' : '' }} class="text-navy-700 dark:text-gray-500">{{ $page->name }}</option>
                        @endforeach

                    </select>
                    <x-backend.error-msg name="page_id" />
                </div>


                <button type="submit" class="middle none center rounded-lg bg-blue-500 py-1 px-6 font-sans text-ss font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                    Update</button>

            </div>
            
        </form>

    </x-backend.main-container>
</x-app-layout>