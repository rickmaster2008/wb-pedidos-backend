@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Pedido {{$detpes[0]['MNSERIE']}}-{{$detpes[0]['MNROPED']}}</h4>
            </div>
            <div class="card-body table-responsive">
              <div class="row">
                <div class="col-6 text-left">
                  @if ($cabpe['estado'] == 'pendiente')
                  <a href="{{route('editar_cabpe', ['mnserie' => $detpes[0]['MNSERIE'], 'mnroped' => $detpes[0]['MNROPED']])}}" class="btn btn-primary">
                      <span><i class="material-icons">edit</i></span>
                      <span>Editar</span>
                    </a>
                  @endif
                </div>
                <div class="col-6 text-right">
                  @if ($cabpe['estado'] == 'pendiente')
                  <form 
                  action="{{route('enviar_email', ['mnserie' => $detpes[0]['MNSERIE'], 'mnroped' => $detpes[0]['MNROPED']])}}"
                  method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="btn btn-info" value="Finalizar" />
                </form>
                  @endif
                </div>
              </div>
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>MNSERIE</th>
                  <th>MNROPED</th>
                  <th>MITEM</th>
                  <th>MCODART</th>
                  <th>MUNIDAD</th>
                  <th>MCANTIDAD</th>
                  <th>MFACTOR</th>
                  <th>MPRECIO</th>
                  <th>MVALVEN</th>
                  <th>MCODDFA</th>
                </thead>
                <tbody>
                  @foreach ($detpes as $detpe)
                  <tr>
                    <td>{{$detpe['MNSERIE']}}</td>
                    <td>{{$detpe['MNROPED']}}</td>
                    <td>{{$detpe['MITEM']}}</td>
                    <td>{{$detpe['MCODART']}}</td>
                    <td>{{$detpe['MUNIDAD']}}</td>
                    <td>{{$detpe['MCANTIDAD']}}</td>
                    <td>{{$detpe['MFACTOR']}}</td>
                    <td>{{$detpe['MPRECIO']}}</td>
                    <td>{{$detpe['MVALVEN']}}</td>
                    <td>{{$detpe['MCODDFA']}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- {{$pedidos->links()}} --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection