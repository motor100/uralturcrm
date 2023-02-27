@extends('dashboard.layout')

@section('title')
Уведомление
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

        <form class="form mb-5" action="" method="get">
          <div class="form-group mb-3">
            <label for="q">Поиск</label>
            <input type="text" class="form-control input-number" name="q" id="q" maxlength="200" required>
          </div>
        </form>

        <form class="form" action="{{ route('notifications-store') }}" method="post">
          <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" class="form-control" disabled required value="Иван Иванов">
          </div>
          <div class="form-group mb-3">
            <label for="date">Дата</label>
            <input type="text" name="date" id="date" class="form-control datepicker" required>
          </div>
          <div class="form-group mb-3">
            <label for="date">Примечание</label>
            <textarea name="text" id="text" class="form-control" required></textarea>
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
