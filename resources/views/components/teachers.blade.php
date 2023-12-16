@props(['teachers'])

<ul class="index-teacher__list">
    @foreach ($teachers as $teacher)
        <li class="index-teacher__item style-item">
            <div class="index-teacher__image">
                <img class="index-teacher__img" src="{{ $teacher->image?->path }}" alt="" width="100%">
            </div>
            <div class="index-teacher__name">{{ $teacher->name }}</div>
            <ul class="index-teacher__info">
                <li class="index-teacher__info_item">
                    <strong>О себе:</strong> {{ $teacher->about }}
                </li>
                <li class="index-teacher__info_item">
                    <strong>Опыт работы:</strong> {{ Carbon\Carbon::parse($teacher->exp)->age }}
                </li>
            </ul>
        </li>
    @endforeach
</ul>