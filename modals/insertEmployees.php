<link rel="stylesheet" href="css/modalStyles.css">


<div class="modal fade insert-Employee-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Dodajte zaposlenega</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="modals.php">
                    <div class="form-group">
                        <label for="ID_zaposlenega">ID Zaposlenega: </label>
                        <input type="text" class="form-control" placeholder="Vnesite ID zaposlenega (6 znakov)"
                               id="ID_zaposlenega" name="ID_zaposlenega">
                    </div>
                    <div class="form-group">
                        <label for="ime_zaposlenega">Ime: </label>
                        <input type="text" class="form-control" placeholder="Vnesite svoje ime"
                               id="ime_zaposlenega" name="ime_zaposlenega">
                    </div>
                    <div class="form-group">
                        <label for="priimek_zaposlenega">Priimek: </label>
                        <input type="text" class="form-control" placeholder="Vnesite svoj priimek"
                               id="priimek_zaposlenega" name="priimek_zaposlenega">
                    </div>
                    <input type="button" value="Dodaj" name="insertEmployee" class="btn btn-default">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Prekliči</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>