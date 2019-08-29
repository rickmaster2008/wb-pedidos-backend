@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Pedidos</h4>
              <p class="card-category">Pedidos del mes</p>
            </div>
            <div class="card-body table-responsive">
              <div class="row">
                <div class="col-12 text-right">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Agregar vendedor') }}</a>
                </div>
              </div>
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>MCODVEN</th>
                  <th>MNOMBRE</th>
                  <th>MSITUAC</th>
                </thead>
                <tbody>
                  @foreach ($ccmvens as $ccmven)
                  <tr>
                    <td>{{$ccmven['MCODVEN']}}</td>
                    <td>{{$ccmven['MNOMBRE']}}</td>
                    <td>{{$ccmven['MSITUAC']}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$ccmvens->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection