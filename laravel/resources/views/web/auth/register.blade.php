<x-layouts.empty>
<div class="min-h-full flex">
    
    
    {{-- <x-auth.auth-sidebar 
        image="https://cdn.dribbble.com/users/2217210/screenshots/15046008/media/299bd6d81fe231dad36cfcbfbe652f02.jpg?compress=1&resize=1600x1200&vertical=top"
        imageALT="Beautiful desing"
    /> --}}

    <x-auth.auth-sidebar 
        image="https://cdn.dribbble.com/users/2217210/screenshots/14677772/media/74e6639ebe8e4092d8dc5fc6837eea77.jpg?compress=1&resize=1600x1200&vertical=top"
        imageALT="Beautiful desing"
    />
    {{-- TODO: Ask the author to give different colours for this --}}
    {{-- <x-auth.auth-sidebar 
        image="https://cdn.dribbble.com/users/2217210/screenshots/15046127/media/2d85dd5ea0f04b4c9fda88b089a156f2.jpg?compress=1&resize=1600x1200&vertical=top"
        imageALT="Beautiful desing"
    /> --}}

    {{-- <x-auth.auth-session-status class="mb-4" :status="session('status')" /> --}}
    <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />
    
    <section class="flex flex-col flex-1">

        <x-auth.auth-nav 
            url="/login" 
            text="Have have an account?" 
            urlText="Sign in here!" 
        />
        
        
        <main class="mx-auto flex flex-col flex-auto justify-center py-12 px-4 sm:px-6 lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">


            <x-auth.auth-heading title="Create new account" />

            <x-auth.auth-social-media-login />

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div>

                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                    You agree to our terms and services
                    </label>
                </div>

                
                </div>

                <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                    {{ __('Sign in') }}
                </button>
                </div>
            </form>

        </div> 
        </main>

    </section>
    
    
</div>
</x-layouts.empty>
    