<div class="col-12">
  <div class="card mb-0">
    <div class="card-body">
      <div class="card-body">
        <div class="d-flex mb-3 align-items-center">
          <h4 class="card-title mb-0">Carga de archivos predeterminada</h4>
          <div class="ms-auto flex-shrink-0">
            <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code37-modal">
              <i class="fa-solid fa-file"></i>
            </button>
            <!-- Code Modal -->
            <div id="view-code37-modal" class="modal fade" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="exampleModalLabel">
                    Carga de archivos predeterminada
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">

                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
        </div>
        <!-- <p class="mb-3 card-subtitle">
          To use add
          <mark>
            <code>.form-control-file</code>
          </mark> class to the
          input
        </p> -->
        <form class="mt-3" action="?controller=Admin&action=savefacturas" method="POST" enctype="multipart/form-data">
          <input class="form-control" type="file" name="facturas[]" id="formFile" multiple accept=".pdf">
          <br>
          <div class="d-md-flex align-items-center">
            <div class="ms-auto mt-3 mt-md-0">
              <button type="submit" class="btn btn-primary hstack gap-6">
                <i class="fa-solid fa-paper-plane"></i>
                Enviar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<br>
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title mb-4">Facturas Seleccionadas</h4>
      <ul id="facturas-preview" class="list-group"></ul>
    </div>
  </div>
</div><script>
  document.getElementById('formFile').addEventListener('change', function(event) {
    const files = event.target.files;
    const facturasPreview = document.getElementById('facturas-preview');

    // Limpiar la visualización previa
    facturasPreview.innerHTML = '';

    // Arreglo para almacenar referencias a los elementos de archivo seleccionados
    const fileElements = [];

    // Mostrar cada factura seleccionada
    Array.from(files).forEach(file => {
      const facturaItem = document.createElement('li');
      facturaItem.className = 'list-group-item d-flex justify-content-between align-items-center';
      facturaItem.textContent = file.name;

      // Icono de eliminación
      const deleteIcon = document.createElement('span');
      deleteIcon.className = 'badge bg-danger rounded-pill';
      deleteIcon.innerHTML = '<i class="fas fa-trash-alt"></i>';

      // Eliminar el elemento al hacer clic en el icono
      deleteIcon.addEventListener('click', function() {
        // Eliminar el elemento de la lista de facturas seleccionadas
        facturaItem.remove();
        // Eliminar el archivo correspondiente del arreglo de archivos seleccionados
        const index = fileElements.indexOf(facturaItem);
        if (index !== -1) {
          files.splice(index, 1);
          // Actualizar el valor del input file para eliminar el archivo
          event.target.value = '';
        }
      });

      facturaItem.appendChild(deleteIcon);
      facturasPreview.appendChild(facturaItem);

      // Guardar referencia al elemento de archivo seleccionado
      fileElements.push(facturaItem);
    });
  });

</script>
