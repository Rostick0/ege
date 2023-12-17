@extends('layout.index')

@section('html')
    <main class="main">
        <div class="auth container">
            <div class="auth__inner">
                <form class="auth-form" method="POST" action="{{ url()->current() }}">
                    @csrf
                    <label class="label">
                        <span>E-mail</span>
                        <input class="input" type="email" name="email" required>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="label">
                        <span>Имя</span>
                        <input class="input" type="text" name="name" required>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>
                    <label class="label">
                        <span>Пароль</span>
                        <input class="input" type="password" name="password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>
                    <button class="btn">Регистрация</button>
                </form>
                <a class="ui-color" href="{{ route('login') }}">Вход</a>
            </div>
        </div>
    </main>
@endsection
