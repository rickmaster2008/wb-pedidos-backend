@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Descuentos</h4>
              <p class="card-category">Puedes escoger un descuento a aplicar</p>
            </div>
            <div class="card-body table-responsive">
              <div class="row">
                  <div class="col-4 text-center">
                    <p>Detalle: {{$detpe['MNSERIE']}}-{{$detpe['MNROPED']}}</p>
                  </div>
                  <div class="col-4 text-center">
                    <p>Descuento actual: {{$famdfa['MCODDFA']}}</p>
                  </div>
                  <div class="col-4 text-center">
                    <p>Porcentaje: {{$famdfa['MDESCRIP']}}</p>
                  </div>
              </div>
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>MCODDFA</th>
                  <th>MDESCRIP</th>
                  <th>MPOR_DFA</th>
                  <th>ACCIÓN</th>
                </thead>
                <tbody>
                  @foreach ($famdfas as $famdfa)
                  <tr>
                    <td>{{$famdfa['MCODDFA']}}</td>
                    <td>{{$famdfa['MDESCRIP']}}</td>
                    <td>{{$famdfa['MPOR_DFA']}}</td>
                    <td>
                      <form 
                        action="{{route('update_cabpe', ['id' => $detpe['id'], 'MPOR_DFA' => $famdfa['MPOR_DFA'], 'MNSERIE' => $detpe['MNSERIE'], 'MNROPED' => $detpe['MNROPED']])}}"
                        method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="MCODDFA" value="{{$famdfa['MCODDFA']}}">
                        <input type="submit" class="btn btn-info" value="Aplicar" />
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$famdfas->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection