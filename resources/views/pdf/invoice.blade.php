<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  </head>
  <body>

    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>Reporte de todas las categorías</h1>
          
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">Nombre</th>
            <th class="unit">Descripción</th>
            <th class="total">Condición</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categorias as $categoria)
            <tr>
                <td>
                    {{ $categoria->nombre}}
                </td>
                <td>
                    {{ $categoria->descripcion}}
                </td>
                <td>
                    {{ $categoria->condicion}}
                </td>
            </tr>
          @endforeach

        </tbody>
        
      </table>
  </body>
</html>