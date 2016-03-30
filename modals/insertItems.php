<link rel="stylesheet" href="css/modalStyles.css">

<div class="modal fade insert-item-Modal" tabindex="-1" role="dialog">
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
                        <label for="sifra_artikla">ID Artikla: </label>
                        <input type="text" class="form-control" placeholder="Vnesite šifro artikla"
                               id="sifra_artikla">
                    </div>
                    <div class="form-group">
                        <label for="ime_artikla">Ime: </label>
                        <input type="text" class="form-control" placeholder="Vnesite naziv artikla"
                               id="ime_artikla">
                    </div>
                    <div class="form-group">
                        <label for="cena_artikla">Priimek: </label>
                        <input type="text" class="form-control" placeholder="Vnesite ceno artikla"
                               id="cena_artikla">
                    </div>

                    <div class="form-group">
                        <label for="kolicina_artikla">Priimek: </label>
                        <input type="text" class="form-control" placeholder="Vnesite količino artikla"
                               id="kolicina_artikla">
                    </div>
                    <input type="button" value="Dodaj" name="insertItem" class="btn btn-default">
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