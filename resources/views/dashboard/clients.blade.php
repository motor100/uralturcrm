@extends('dashboard.layout')

@section('title')
Клиенты
@endsection

@section('dashboardcontent')

<div class="dashboard-home">

    <div class="content">
      <div class="container-fluid">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif

        <a href="{{ route('clients-create') }}" class="btn btn-success mb-3">Добавить</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="number-column" scope="col">№</th>
              <th scope="col">Имя</th>
              <th scope="col">Примечание</th>
              <th class="button-column"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($clients as $value)
              <tr>
                <th scope="row">{{ $value->id }}</th>
                <td>{{ $value->name }}</td>
                <td>{{ $value->note }}</td>
                <td class="table-button">
                  <a href="/dashboard/clients/{{ $value->id }}" class="btn btn-success">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="" class="btn btn-primary">
                    <i class="fas fa-pen"></i>
                  </a>
                  <form class="form" action="" method="get">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>

</div>

@endsection