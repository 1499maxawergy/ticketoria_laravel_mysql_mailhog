@extends('layouts.main')
@section('content')
    <main class="container-fluid fade show bg-light bg-gradient" style="--bs-bg-opacity: .75; min-height: 90vh">
        <br><br>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Как происходит резервирование билетов?</h5>
                </div>
                <p class="mb-1">Резервирование происходит на ваш аккаунт, никакие документы не нужны.<strong> Крайне важно указать ваш ФИО</strong> при регистрации (или поменять перед заказом ФИО на ваш в личном кабинете), так как, если при проверке билетов ваш ФИО не совпадет, то <strong>вы не сможете попасть на событие</strong></p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Как мне предоставить билет, купленный через вашу систему?</h5>
                </div>
                <p class="mb-1">Ничего сложного, вам просто нужно зайти в личный кабинет и показать сотруднику данные, а также показать на соответствие ваш Паспорт (РФ или СНГ)</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Когда нужно оплачивать билет(-ы)?</h5>
                </div>
                <p class="mb-1">Вы оплачиваете билет по факту предъявления резервирования, наши сотрудники принимают безналичный и наличный расчет (Только карты российских банков)</p>
            </a>
        </div>
    </main>
@endsection
