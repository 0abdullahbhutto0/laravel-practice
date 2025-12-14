<x-layout heading='Register'>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Register as an Employer</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Just some details about you</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="title">Name</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input id="name" 
                                    placeholder="Jane Doe" 
                                    type="text"
                                    name="name"
                                    required />
                            </div>
                            <x-form-error name='name'></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                       <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                               <x-form-input id="email" 
                                    placeholder="abc@123.com" 
                                    type="email"
                                    name="email"
                                    required />
                            </div>
                        </div>
                        <x-form-error name='email'></x-form-error>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                       <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                               <x-form-input id="password" 
                                    placeholder="Use a strong password." 
                                    type="password"
                                    name="password"
                                    required />
                            </div>
                        </div>
                        <x-form-error name='password'></x-form-error>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                       <x-form-label for="password_confirmation">Repeat Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                               <x-form-input id="password_confirmation" 
                                    placeholder="Retype your password." 
                                    type="password"
                                    name="password_confirmation"
                                    required />
                            </div>
                        </div>
                        <x-form-error name='password_confirmation'></x-form-error>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
           <x-form-submit-button type="submit">Register</x-form-submit-button>
        </div>
    </form>

</x-layout>
