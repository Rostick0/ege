@extends('layout.index')

@section('html')
    <main class="main">
        <div class="index-lesson" id="index-lesson">
            <div class="container index-lesson__container">
                <h2 class="title index-lesson__title">Уроки</h2>
                <x-lessons :lessons="$lessons" />

            </div>
        </div>
    </main>
@endsection
