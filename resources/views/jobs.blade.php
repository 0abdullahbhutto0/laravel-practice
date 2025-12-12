<x-layout>
    <h1 class="text-2xl text-green-400 m-4">Hello From Jobs!</h1>
    <div class="space-x-4 flex flex-wrap">
        @foreach ($jobs as $job)
            <a class="font-bold text-lg text-zinc-600 w-42 m-4 border border-gray-400 rounded-lg px-4 py-4"
                href="job/{{ $job['id'] }}"><i style="font-size: 1rem" class="text-blue-300">{{ $job->employer->title }}<br></i><strong>
                    {{ $job['title'] }}</strong></a>
        @endforeach
    </div>
</x-layout>
