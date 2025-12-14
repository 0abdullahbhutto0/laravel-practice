<x-layout heading='Login'>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Sign in</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    
                    <x-form-field class="sm:col-span-4">
                       <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                               <x-form-input id="email" 
                                    placeholder="abc@123.com"
                                    :value="old('email')" 
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
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
           <x-form-submit-button type="submit">Login</x-form-submit-button>
        </div>
    </form>

</x-layout>
