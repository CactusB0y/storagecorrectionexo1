<div class="container">
    <h1>Bienvenue dans le Back Office</h1>
    <a class="btn btn-primary" href="/files/create">Ajouter un fichier</a>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Src</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                    <tr>
                        <th scope="row">{{$file->id}}</th>
                        <td>
                            <img height="50px" src="{{asset('storage/img/'.$file->src)}}" alt="">
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>