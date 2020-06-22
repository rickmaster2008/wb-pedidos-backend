@extends('layouts.app', ['activePage' => '', 'titlePage' => __('PDF Viewer')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <h3>Debes seleccionar un archivo. El archivo seleccionado se subirá y se transformará para ser mostrado en el catálogo interactivo</h3>
      </div>
    </div>
    <br><br>
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form method="post" enctype="multipart/form-data" action="{{route('pdfviewer-store')}}">
          @csrf
          <input type="file" name="pdf" placeholder="Buscar archivo" />
          <button type="submit" class="btn btn-primary">Subir</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection