@extends('dashboard.layout')

@section('title')
{{ $event->title }}
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

        <div class="event-date">{{ $event->date }}</div>
        <div class="event-quantity">{{ $event->quantity }} мест</div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th class="number-column" scope="col">№</th>
              <th scope="col">Имя</th>
              <th scope="col">Предоплата</th>
              <th class="col">Бронь</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td>
                <a href="#"></a>
              </td>
              <td></td>
              <td class="table-button"></td>
            </tr>
          </tbody>
        </table>

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