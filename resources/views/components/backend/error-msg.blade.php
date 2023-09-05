@props(['name'])

<div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
    @error($name)
        <p class="text-sm text-red-500 pt-2">{{ $message }}</p>
    @enderror
</div>