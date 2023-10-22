{{-- <master>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</master>
 --}}


<x-layouts.empty>
<div class="min-h-full flex">


    <x-auth.auth-sidebar 
        image="https://cdn.dribbble.com/users/3809802/screenshots/6884319/task_ii_4x.png?compress=1&resize=1600x1200&vertical=top"
        imageALT="Beautiful desing"
    />

    <x-auth.auth-session-status class="mb-4" :status="session('status')" />
    <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

    <section class="flex flex-col flex-1">

        <x-auth.auth-nav 
            url="/register" 
            text="Don't have an account?" 
            urlText="Register here!" 
        />
        
        <main class="mx-auto flex flex-col flex-auto justify-center py-12 px-4 sm:px-6 lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">

            
            <x-auth.auth-heading title="Reset your password" />
            
        

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                <div>
                    <p>Enter the email address associated with your account, and we'll send you a link to reset your password.</p>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div>
 

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                        {{ __('Reset password') }}
                    </button>
                    <p>Need help? Read this <a class="text-pink-400" href="https://wise.com/help/articles/2554205/ive-forgotten-my-password">Help Center article.</a>
                </div>
            </form>

        </div> 
        </main>

    </section>


</div>
</x-layouts.empty>
    