@extends('dashboard.layout')

@section('title')
Клиент
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

        <div class="client-info">
          <p>{{ $client->name }}</p>
          <p>{{ $client->phone }}</p>
          <p>{{ $client->note }}</p>
        </div>
      </div>
    </div>

</div>

@endsection

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[7].classList.add('active');
</script>