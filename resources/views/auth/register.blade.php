

<x-front.master-layout title="Signup | elitg.com">
    <section class="relative py-36 flex items-center bg-[url('../../assets/images/cta.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">

                    <a href="/"><img src="{{ asset('assets/images/elitg-logo.png') }}" class="mx-auto block w-20 object-contain" alt="Logo"></a>
                    
                    <x-validation-errors class="mb-4 mt-4" />

                    <h5 class="my-6 text-xl font-semibold">Signup</h5>

                    <form method="POST" action="{{ route('register') }}" class="text-start">
                        
                        @csrf

                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <label class="font-semibold" for="name">{{ __('Name') }}</label>
                                <input value="{{ old('name') }}" name="name" id="name" type="text" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Harry">
                            </div>

                            <div class="mb-4">
                                <label class="font-semibold" for="LoginEmail">{{ __('Email') }}</label>
                                <input value="{{ old('email') }}" name="email" id="email" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="name@example.com">
                            </div>

                            <div class="mb-4">
                                <label class="font-semibold" for="password">{{ __('Password') }}</label>
                                <input value="{{ old('password') }}" name="password" id="password" type="password" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Password:">
                            </div>

                            <div class="mb-4">
                                <label class="font-semibold" for="confirm">{{ __('Confirm Password') }}</label>
                                <input value="{{ old('password_confirmation') }}" name="password_confirmation" id="password_confirmation" type="password" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Password:">
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-4">
                                    <div class="flex items-center w-full mb-0">
                                        <input name="terms" id="terms" required  class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox">
                                        <label class="form-check-label text-slate-400" for="term">I Accept <a target="_blank" href="/terms-and-condition" class="text-indigo-600">Terms And Condition</a></label>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-4">
                                <input type="submit" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Register">
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Already have an account ? </span> <a href="{{ route('login') }}" class="text-black dark:text-white font-bold inline-block">Sign in</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front.master-layout>