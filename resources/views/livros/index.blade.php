<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem de livross</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Listagem de livros</h1>
      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">livros</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>#</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($editoras as $editora)
                <tr>
                  <td>
                      {{$editora->id}}
                  </td>
                  <td>
                    {{$editora->nome}}
                  </td>
                  <td>
                     {{$editora->email}}
                  </td>
                  <a href = "/editora/{{ $editora->id }}">Detalhes</a>
                  <td></td>
              </tr>
              @endforeach
            </tbody>
            </table>

        </div>

        </div>

      </div>

    </div>

    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>
