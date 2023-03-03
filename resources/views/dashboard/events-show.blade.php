@extends('dashboard.layout')

@section('title')
{{ $event->title }}
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

        <div class="event-description mb-3">
          <div class="event-date">{{ $event->date }}</div>
          <div class="event-quantity">{{ $event->quantity }} мест</div>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th class="number-column" scope="col">№</th>
              <th class="name-column" scope="col">Имя</th>
              <th scope="col">Телефон</th>
              <th scope="col">Предоплата</th>
              <th>Бронь</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1</td>
              <td>
                <a href="/dashboard/clients/1">Иван Иванов</a>
              </td>
              <td>+7(123) 456-78-90</td>
              <td>ok</td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>
                <a href="/dashboard/clients/2">Петров Петр Петрович</a>
              </td>
              <td>+7(123) 456-78-90</td>
              <td></td>
              <td>ok</td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>
                <a href="/dashboard/clients/3">Семенов Семен</a>
              </td>
              <td>+7(123) 456-78-90</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <button class="plus-button mb-3">
          <i class="fas fa-plus"></i>
        </button>

        <button class="btn btn-primary d-block mb-3">Обновить</button>
        <button class="btn btn-success d-block mb-3">Печать</button>

      </div>
    </div>

</div>

<!-- 
<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[7].classList.add('active');
</script>
 -->

@endsection