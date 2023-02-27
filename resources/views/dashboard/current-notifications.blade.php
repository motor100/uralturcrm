@extends('dashboard.layout')

@section('title')
Уведомления
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">
        <div class="current-notifications">
          <div class="notification-item">
            <div class="notification-item__name">
              <a href="/dashboard/clients/1" class="notification-item__link">Иван Иванов</a>
            </div>
            <div class="notification-item__text">Напомнить о поездке в театр</div>
            <div class="read-button">Прочитать</div>
          </div>
          <div class="notification-item">
            <div class="notification-item__name">
              <a href="/dashboard/clients/2" class="notification-item__link">Петров Петр Петрович</a>
            </div>
            <div class="notification-item__text">Рассказать о новом туре</div>
            <div class="read-button">Прочитать</div>
          </div>
          <div class="notification-item">
            <div class="notification-item__name">
              <a href="/dashboard/clients/3" class="notification-item__link">Семенов Семен</a>
            </div>
            <div class="notification-item__text">Рассказать о новом туре</div>
            <div class="read-button">Прочитать</div>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection