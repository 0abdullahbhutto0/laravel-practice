@props(['active' => false])
@props(['type'=> 'a'])
<a class="{{ $active ? 'bg-gray-700 text-gray-100' : 'text-gray-600 hover:bg-gray-400 hover:text-black' }} rounded-md px-3 py-2 text-sm font-medium nav-link"
    {{ $attributes }}>{{ $slot }}</a>

<!--
<a class="{{ $type=='a' ? 'bg-gray-700 text-gray-100' : 'text-gray-600 hover:bg-gray-400 hover:text-black' }}" {{ $attributes }}>{{ $slot }}</a>
-->