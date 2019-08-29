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
                  <a href="{{route('home', ['estado' => 'pendiente'])}}" class="btn btn-sm btn-outline-primary">{{ __('Pendientes') }}</a>
                  <a href="{{route('home', ['estado' => 'procesado'])}}" class="btn btn-sm btn-outline-secondary">{{ __('Procesados') }}</a>
                  <a href="{{route('home')}}" class="btn btn-sm btn-outline-info">{{ __('Todos') }}</a>
                </div>
              </div>
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>MNSERIE</th>
                  <th>MNROPED</th>
                  <th>MPERIODO</th>
                  <th>MCODVEN</th>
                  <th>MCODCLI</th>
                  <th>MTOPVENTA</th>
                  <th>MDCTO</th>
                  <th>MNETO</th>
                  <th>DETALLE</th>
                </thead>
                <tbody>
                  @foreach ($pedidos as $pedido)
                  <tr>
                    <td>{{$pedido['MNSERIE']}}</td>
                    <td>{{$pedido['MNROPED']}}</td>
                    <td>{{$pedido['MPERIODO']}}</td>
                    <td>{{$pedido['MCODVEN']}}</td>
                    <td>{{$pedido['MCODCLI']}}</td>
                    <td>S/ {{$pedido['MTOPVENTA']}}</td>
                    <td>S/ {{$pedido['MDCTO']}}</td>
                    <td>S/ {{$pedido['MNETO']}}</td>
                  <td><a href="{{route('detpe', ['mnserie' => $pedido['MNSERIE'], 'MNROPED' => $pedido['MNROPED']])}}"><i class="material-icons">remove_red_eye</i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$pedidos->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush