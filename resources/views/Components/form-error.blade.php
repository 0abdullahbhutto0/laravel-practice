@props(['name'])

@error($name)
    <p class="text-red-500 font-light m-2">{{ $message }}</p>
@enderror
