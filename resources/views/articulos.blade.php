@extends ('layouts.admin')
@section ('contenido')

<div class="btn-group col-xs-12" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-info col-xs-4" data-toggle="modal" data-target="#myModal">Nuevo</button>
  <button type="button" class="btn btn-warning col-xs-4">Buscar</button>
  <button type="button" class="btn btn-danger col-xs-4">PDF</button>
</div><br><hr>
  <div class="row">

    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
        <thead>
          <tr>
                    <th>#</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Descripción</th>
                    <th>Imagén</th>
                    <th>Estado</th>
          </tr>
        </thead>
        <tbody>
        @php ($i = 0)
          @foreach($articulos as $articulo)
            @php ($i++)
              <tr>
                <th>{{$i}}</th>
                <th>{{$articulo->codigo}}</th>
                <th>{{$articulo->nombre}}</th>
                <th>{{$articulo->stock}}</th>
                <th>{{$articulo->descripcion}}</th>
                <th>{{$articulo->imagen}}</th>
                <th>{{$articulo->estado}}</th>
              </tr>
          @endforeach

        </tbody>
    </table>
  </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Nuevo Artículo</h3>
        <h5 class="text-center">Complete el siguiente formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('articulo.save')}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
          <label for="">Nombre categoría:</label><br>
          <select name="categoria" id="" class="form-control">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->idcategoria}}">{{$categoria->nombre}}</option>
            @endforeach
          </select>
          <label for="" >Código:</label><br>
          <input type="text" class="form-control" require name="codigo"> 
          <label for="">Nombre:</label><br>
          <input type="text" class="form-control" require name="nombre">
          <label for="">Stock:</label><br>
          <input type="text" class="form-control" require name="stock">
          <label for="">Descripción:</label><br>
          <textarea name="descripcion" id="" cols="30" rows="4" class="form-control" require ></textarea>
          <label for="">Nombre:</label><br>
          <input type="file" class="form-control" require name="imagen">
          <label for="">Estado:</label><br>
          <input type="text" class="form-control" require name="estado">  
          
          
          
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div></div>
  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection