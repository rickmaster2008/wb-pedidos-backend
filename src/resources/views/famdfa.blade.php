@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">FAMDFA</h4>
              <p class="card-category">Lista de descuentos</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>MCODDFA</th>
                  <th>MDESCRIP</th>
                  <th>MPOR_DFA</th>
                </thead>
                <tbody>
                  @foreach ($famdfas as $famdfa)
                  <tr>
                    <td>{{$famdfa['MCODDFA']}}</td>
                    <td>{{$famdfa['MDESCRIP']}}</td>
                    <td>{{$famdfa['MPOR_DFA']}}</td>
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