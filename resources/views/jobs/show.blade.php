<x-layout :heading="'Job Detail'">
    <h1 class="text-2xl text-green-400 m-4">Hello From Job!</h1>
    <h1 class="font-bold text-lg m-4"><strong>{{ $job['title'] }}</strong></h1>
    <p class="font-light text-sm m-4">This job pays {{ $job['salary'] }}</p>
    <p class="font-medium text-sm m-4">This job was posted by {{ $employer['title'] }}.</p>
    <p class="m-4">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>

</x-layout>
