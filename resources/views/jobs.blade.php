<x-layout>
    <h1 class="text-2xl text-green-400 m-4">Hello From Jobs!</h1>
    @foreach($jobs as $job)
        <ul>
            <li>
                <a class="font-bold text-lg hover:underline text-blue-400 m-4" href="job/{{$job['id']}}"><strong>{{ $job['title'] }}</strong></a>
            </li>
        </ul>
    @endforeach
</x-layout>
