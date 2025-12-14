<x-layout :heading="'Edit Job'">
    <h1 class="text-xl">{{ $job->title }}</h1>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit a Job.</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Just some details you want to change.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label>Title</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                               <x-form-input id="title" 
                                    value="{{ $job->title }}" 
                                    type="text"
                                    name="title"
                                    required />
                            </div>
                            <x-form-error name='title'></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label>Salary</x-form-label>
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input id="salary" 
                                    value="{{ $job->salary }}" 
                                    type="text"
                                    name="salary"
                                    required />
                            </div>
                        </div>
                        <x-form-error name='salary'></x-form-error>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center gap-x-6">
                <button form="delete-form" class="text-red-600 sm">Delete</button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-submit-button type="submit">Update</x-form-submit-button>
            </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE');
    </form>

</x-layout>
