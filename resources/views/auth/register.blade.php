@extends('layouts.app')

@section('header')
    <title>Dom - вход</title>
    <meta name="description" content="DOM GROUP  - сервис, с которым ремонт будет приносить больше пользы и удовольствия. Здесь вы сможете найти дизайнера интерьера, отделочников и мебельщиков.">
@endsection

@section('content')
    <div class="container text-black w-full lg:w-5/6 h-svh -mt-20 flex items-center justify-center mx-auto box-border">
        <div class="flex flex-col justify-center bg-black bg-opacity-40 lg:w-2/5 mx-auto rounded">


            <h1 class="text-center text-2xl mt-8">Регистрация</h1>

            @error('name')
            <div class="mx-4 mb-4">
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Проверьте правильность ввода данных</span>
                </div>
            </div>

            @enderror
            @error('email')
            <div class="mx-4 mb-4">
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Проверьте правильность ввода email</span>
                </div>
            </div>
            @enderror

            @error('password')
            <div class="mx-4 mb-4">
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Что-то не так с паролем</span>
                </div>
            </div>
            @enderror

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <register-component></register-component>

                        <div class=" w-full">
                            <div class="flex justify-evenly items-center">
                                <button type="submit" class="btn btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
