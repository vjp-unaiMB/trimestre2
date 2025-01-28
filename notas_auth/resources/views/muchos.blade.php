<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-auto">
          <h3>Alumno {{ $alumno -> nombre }} está cursando las materias</h3>
      
          <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
              <th>MATERIAS</th>
            </thead>
      
            <tbody>
              @foreach ($alumno -> materias as $registro)
                <tr>
                  <td>
                      {{ $registro -> nombre }}
                   </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>


      <div class="row justify-content-center">
        <div class="col-auto">
          <h3>La materia {{ $materia -> nombre }} la están cursando los alumnos</h3>
      
          <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
              <th>ALUMNOS</th>
            </thead>
      
            <tbody>
              @foreach ($materia -> alumnos as $registro)
                <tr>
                  <td>
                    {{ $registro -> nombre }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</body>
</html>