@extends ('layouts.admin')
@section ('contenido')
<div class="row">
<div class="col-xs-12">
    <form action="{{route('guardar.categorias')}}" method="post">
    {{ csrf_field() }}
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Nueva Categoría</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Nombre:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="nombre">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Descripción:</label>

                <textarea name="descripcion" id="" cols="20" rows="2" class="form-control"></textarea>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Condición:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="number" class="form-control pull-right" id="reservationtime" name="condicion">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                <a class="btn btn-info col-xs-4" href="{{ route('reporte')}}">Reporte de todas las categorías</a>
                <button type="submit" class="btn btn-success col-xs-4" style="float: right;margin:1rem;">Guardar</button>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        </form>
</div> 
<div class="row">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Condición</th>
                <th>
                  <form action="{{route('buscar.categoria')}}" class="form" method="post">
                    {{ csrf_field() }}
                    <input type="text" placeholder="buscar" class="input form_control" name="nombre">
                    <button class="btn btn-info" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>   
                  </form>
                </th>  
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td id="nombre">{{ $categoria->nombre}}</td>
                <td id="descripcion">{{ $categoria->descripcion}}</td>
                <td id="condicion">{{ $categoria->condicion}}</td>
                <td id="id">{{ $categoria->idcategoria}}</td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-warning update" id="update"  >Update</button>
                    <button type="button" class="btn btn-danger delete" id="delete">Delete</button>
                  </div>
                </td>
                <!--data-toggle="modal" data-target="#myModal"-->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

   <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" id="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          X
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Cambiar datos de la Categoría
        </h4>
    </div>
    <div class="modal-body">
     <form action="{{ route('categoria.update')}}" class="form" method="post">
     {{ csrf_field() }}
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="i_nombre" class="form-control" ><br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="t_descripcion" cols="10" rows="3" class="form-control"></textarea><br>
        <label for="condicion">Condición:</label>
        <input type="number" name="condicion" id="i_condicion" class="form-control"><br>
        <input type="hidden" name="id" id="i_id">
        <button type="submit" class="btn btn-info col-xs-12">Actualizar</button>
     </form>
    </div>
    <div class="modal-footer">
      <br>
      <hr>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>

   <!-- Modal Delete-->
   <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
          <form action="{{ route('categoria.delete')}}" class="form" method="post">
          {{ csrf_field() }}
              <h3>Está seguro de eliminar esté elemento?</h3>
              <input type="hidden" name="id" id="d_id">
              <button type="submit" class="btn btn-info col-xs-4">Eliminar</button>
              <button type="button" class="btn btn-warning col-xs-4" data-dismiss="modal">Cancelar</button>
          </form>
        </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>

@endsection