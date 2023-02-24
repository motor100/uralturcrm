@extends('dashboard.layout')

@section('title')
Пользователи
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

      <!-- Кастомная директива Blade для проверки роли пользователя -->
      @role('project-manager')
      Project Manager Panel
      @endrole 
      @role('web-developer')
      Web Developer Panel
      @endrole

      </div>
    </div>

</div>

@endsection

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[7].classList.add('active');
</script>