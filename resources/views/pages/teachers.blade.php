@extends('layout.index')

@section('html')
    <main class="main">
        <div class="index-teacher" id="index-teacher">
            <div class="container index-teacher__container">
                <h2 class="title index-teacher__title">Преподаватели</h2>
                <x-teachers :teachers="$teachers" />
            </div>
        </div>
    </main>
@endsection
