<div class="card">
  <div class="card-body">
    <h4 class="card-title">Busca tu factura</h4>

    <div class="table-responsive">

      <table id="tablafacturas" class="table table-striped table-bordered text-nowrap align-middle">
        <thead>

          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 263.038px;">ID</th>
            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 297.237px;">NOMBRE</th>
        
            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 56.125px;">FECHA</th>
          </tr>

        </thead>
        <tbody>
          <?php foreach ($listaFactura as $factura) { ?>
            <tr class="odd">
              <td class="sorting_1">
                <div class="d-flex align-items-center gap-6">
                  <a href="../assets/facturas/<?php echo $factura->getNombre(); ?>" target="_blank"><i class="fa-regular fa-file-pdf fa-xl"></i></a>
                  <h6 class="mb-0"> <?php echo $factura->getId(); ?> </h6>
                </div>
              </td>
              <td><?php echo $factura->getNombre(); ?></td>
              <td><?php echo $factura->getFecha(); ?></td>

            </tr>
          <?php } ?>

        </tbody>

      </table>
    </div>
  </div>
</div>