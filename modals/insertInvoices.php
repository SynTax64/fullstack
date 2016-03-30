<link rel="stylesheet" href="css/modalStyles.css">

<div class="modal fade insert-invoice-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Dodajte artikel</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="id_racuna">ID Artikla: </label>
                        <input type="text" class="form-control" placeholder="Vnesite ID računa"
                               id="id_racuna">
                    </div>
                    <div class="form-group">
                        <label for="id_zaposlenega_racuna">Ime: </label>
                        <input type="text" class="form-control" placeholder="Vnesite naziv zaposlenega"
                               id="id_zaposlenega_racuna">
                    </div>
                    <div class="form-group">
                        <label for="id_artikla_racuna">Priimek: </label>
                        <input type="text" class="form-control" placeholder="Vnesite ID artikla"
                               id="id_artikla_racuna">
                    </div>

                    <div class="form-group">
                        <label for="kolicina_artikla_racun">Priimek: </label>
                        <input type="text" class="form-control" placeholder="Vnesite količino artiklov"
                               id="kolicina_artikla_racun">
                    </div>
                    <input type="button" value="Dodaj" name="insertInvoice" class="btn btn-default">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Prekliči</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>