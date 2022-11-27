@extends('layouts.main')
@section('content')
<main class="container-fluid fade show bg-light bg-gradient" style="--bs-bg-opacity: .75;">
    <div class="row min-vh-100">
        <div class="col-md-6 m-auto">
            <iframe class="container-fluid"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.3729499497217!2d37.61530535122988!3d55.75202328045771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a50b315e573%3A0xa886bf5a3d9b2e68!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0JrRgNC10LzQu9GM!5e0!3m2!1sru!2sru!4v1649174809948!5m2!1sru!2sru"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div style="font-family: 'Comic Sans MS', serif;" class="col-md-6 text-justify m-auto lh-lg p-5">
            <address>
                <b>ООО "ПриватМедиа"</b>
                <br>Москва, 103132
                <br>ул.Боровицкая, Кремль
                <br><b>Метро:</b>
                <br>Охотный ряд, Александровский сад
                <br><b>Координаты:</b>
                <br>55.751999,37.617734
                <br><b>Телефон:</b>
                <br><a href="tel:+78008888888">+7(800)-888-88-88</a>
            </address>
        </div>
    </div>
</main>
@endsection
