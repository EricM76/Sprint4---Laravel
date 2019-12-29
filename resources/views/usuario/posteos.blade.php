
<div class="card-columns">
    @foreach ($posteos as $posteo)
    <div class="col mb-4">
        <div class="card">
        <img src="/storage/images/products/{{$posteo->image1}}" class="card-img-top" alt="...">
          <div class="card-body">
              <div></div>
          <h5 class="card-title">{{$posteo->title}}</h5>
          <h6>{{$posteo->value}} truekoins</h6>
          </div>
          <div class="p-2 text-center">
            <a href="/editarProduct/{{$posteo->id}}"> <button class="btn btn-sm btn-outline-success">Editar</button></a>
            <a href=""> <button class="btn btn-sm btn-outline-danger">Eliminar</button></a>
          </div>
        </div>
      </div>
    @endforeach
</div>
