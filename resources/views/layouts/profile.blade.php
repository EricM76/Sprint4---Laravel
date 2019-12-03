
<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Imagen de Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center mb-3">cambia un avatar</h5>
        <!-- genera la variable con el id recibido -->

        <!-- abre la pagina cambiarAvatar pasando el nombre del archivo para el campo 'avatar' y el id correspondiente por $_GET-->
            <a href="/cuenta/perfilDesconocido.png"><img src="storage/images/avatar/perfilDesconocido.png" style="width:80px"></a>
            <a href="/cuenta/perfilHombre.png"><img src="storage/images/avatar/perfilHombre.png" style="width:80px"></a>
            <a href="/cuenta/perfilMujer.png"><img src="storage/images/avatar/perfilMujer.png" style="width:80px"></a>
            <a href="/cuenta/avatar01.png"><img src="storage/images/avatar/avatar01.png" style="width:80px"></a>
            <a href="/cuenta/avatar02.png"><img src="storage/images/avatar/avatar02.png" style="width:80px"></a>
            <a href="/cuenta/avatar03.png"><img src="storage/images/avatar/avatar03.png" style="width:80px"></a>
            <a href="/cuenta/avatar04.png"><img src="storage/images/avatar/avatar04.png" style="width:80px"></a>
            <a href="/cuenta/avatar05.png"><img src="storage/images/avatar/avatar05.png" style="width:80px"></a>
            <a href="/cuenta/avatar06.png"><img src="storage/images/avatar/avatar06.png" style="width:80px"></a>
            <a href="/cuenta/avatar07.png"><img src="storage/images/avatar/avatar07.png" style="width:80px"></a>
            <a href="/cuenta/avatar08.png"><img src="storage/images/avatar/avatar08.png" style="width:80px"></a>
            <a href="/cuenta/avatar09.png"><img src="storage/images/avatar/avatar09.png" style="width:80px"></a>
            <a href="/cuenta/avatar10.png"><img src="storage/images/avatar/avatar10.png" style="width:80px"></a>
            <a href="/cuenta/avatar11.png"><img src="storage/images/avatar/avatar11.png" style="width:80px"></a>
            <a href="/cuenta/avatar12.png"><img src="storage/images/avatar/avatar12.png" style="width:80px"></a>
            <a href="/cuenta/avatar13.png"><img src="storage/images/avatar/avatar13.png" style="width:80px"></a>
            <a href="/cuenta/avatar14.png"><img src="storage/images/avatar/avatar14.png" style="width:80px"></a>
            <a href="/cuenta/avatar15.png"><img src="storage/images/avatar/avatar15.png" style="width:80px"></a>
            <a href="/cuenta/avatar16.png"><img src="storage/images/avatar/avatar16.png" style="width:80px"></a>
            <a href="/cuenta/avatar17.png"><img src="storage/images/avatar/avatar17.png" style="width:80px"></a>
            <a href="/cuenta/avatar18.png"><img src="storage/images/avatar/avatar18.png" style="width:80px"></a>
            <a href="/cuenta/avatar19.png"><img src="storage/images/avatar/avatar19.png" style="width:80px"></a>
            <a href="/cuenta/avatar20.png"><img src="storage/images/avatar/avatar20.png" style="width:80px"></a>
            <a href="/cuenta/avatar21.png"><img src="storage/images/avatar/avatar21.png" style="width:80px"></a>
            <a href="/cuenta/avatar22.png"><img src="storage/images/avatar/avatar22.png" style="width:80px"></a>
            <a href="/cuenta/avatar23.png"><img src="storage/images/avatar/avatar23.png" style="width:80px"></a>
            <a href="/cuenta/avatar24.png"><img src="storage/images/avatar/avatar24.png" style="width:80px"></a>

          <div class="d-flex mt-5">
            <div class="d-flex justify-content-center col-12">
              <form class="form" action="/cuenta" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{-- @method("PUT") --}}
                <h5 class="mt-3">O sube tu propia imagen</h5>
                <div class="input-group mt-3">
                  <div class="custom-file">
                    <input id="inputGroupFile01" type="file" class="custom-file-input" name="imagen">
                    <label class="custom-file-label" for="inputGroupFile01">elegir foto de perfil</label>
                  </div>
                  <button class="btn btn-primary ml-2" type="submit">Aceptar</button>
                </div>
              </form>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
