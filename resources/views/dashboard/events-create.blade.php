@extends('dashboard.layout')

@section('title')
Событие
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('/adminpanel/css/air-datepicker.css') }}">
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form class="form" action="{{ route('events-store') }}" method="post">
          <div class="form-group mb-3">
            <label for="title">Название</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="date">Дата</label>
            <input type="text" name="date" id="date" class="form-control datepicker">
          </div>
          <div class="form-group mb-3">
            <label for="date">Примечание</label>
            <textarea name="text" id="text" class="form-control"></textarea>
          </div>
          <div class="form-group mb-3">
            <label for="quantity">Количество мест</label>
            <input type="number" name="quantity" id="quantity" class="form-control input-number">
          </div>

          @csrf
          <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>

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

@section('script')
<script src="{{ asset('/adminpanel/js/air-datepicker.js') }}"></script>
@endsection