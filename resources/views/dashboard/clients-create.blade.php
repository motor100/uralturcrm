@extends('dashboard.layout')

@section('title')
Клиент
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

        <form class="form" action="{{ route('clients-store') }}" method="post">
          <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" maxlength="250" required>
          </div>
          <div class="form-group mb-3">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" name="phone" id="phone" maxlength="20" required>
          </div>
          <div class="form-group mb-3">
            <label for="note">Примечание</label>
            <textarea class="form-control" name="note" id="note"></textarea>
          </div>

          @csrf
          <button type="submit" class="btn btn-primary">Добавить</button>
        </form>

      </div>
    </div>

</div>

@endsection

<script>
  // Изменение цвета активного пункта меню
  let navLink = document.querySelectorAll('.nav-sidebar .nav-item > .nav-link');
  navLink[7].classList.add('active');
</script>