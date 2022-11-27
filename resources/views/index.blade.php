@extends('layouts.main')
@section('content')

    <main class="container-fluid fade show bg-light bg-gradient" style="--bs-bg-opacity: .75;">
        <div class="row min-vh-100">
            <div class="col-md-6 m-auto">
                <img class="img-fluid rounded" src="{{asset('images/main.jpg')}}" alt="Flowers">
            </div>
            <div style="font-family: 'Comic Sans MS', serif;" class="col-md-6 text-justify m-auto lh-lg">
                Думаете куда сходить на выходных? Хотите чего-то нового и интересного?
                Входные билеты на разные закрытые мероприятия только у нас.
                Мы сотрудничаем с большим количеством приватных площадок, работающих только оффлайн.
                Подключайтесь к нам и вы не пожалеете!
            </div>
        </div>
    </main>

@endsection
