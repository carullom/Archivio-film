<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

        <div class="row text-center  my-3">
            <h1>Inserisci film</h1>
        </div>

        <div class="row"> 

            <div class="col-12">
    
            <form action="<?= base_url('store') ?>"  method="POST">
            <div class="form-row">
                <div class="form-group mt-3">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required >
                </div>
                <div class="form-group mt-3">
                    <label for="genre">Genere</label>
                    <input type="text" class="form-control" id="genre" name="genre" required >
                </div>
                </div>
                <div class="form-group mt-3">
                    <label for="genre">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description"  required >
                </div>
                <div class="text-center">
                    <button type="submit" class="btn m-3 btn-primary">Invia</button>
                </div>
                </form>
            </div>
        </div>
<?= $this->endSection() ?>        
  