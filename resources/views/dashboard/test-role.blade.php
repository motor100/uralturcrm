@extends('dashboard.layout')

@section('title')
Пользователи
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

      <!-- Кастомная директива Blade для проверки роли пользователя -->
      @role('manager')
      Project Manager Panel
      @endrole 
      @role('web-developer')
      Web Developer Panel
      @endrole

      </div>
    </div>

</div>

@endsection