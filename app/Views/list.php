<?= $this->extend('layout') ?>

    <?= $this->section('content') ?>
    
    <?php
                if(session()->getFlashdata('status'))
                {
                    echo "<h3 class='text-success'>".session()->getFlashdata('status')."</h3>";
                }
    ?>
        <div class="row mt-3 text-center">
        <?php if ($films != []): ?>
            <h1 class="my-4">Lista Film</h1>
            <div class="col-12">
            <div class="table-responsive mt-3">
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($films as $film) :?>
                            <tr>
                            <th scope="row"><?= $film['id']?></th>
                            <td><?= $film['title']?></td>
                            <td><?= $film['genre']?></td>
                            <td><?= $film['description']?></td>
                            <td><div class=" text-center">
                            <a href="<?= base_url('edit/'.$film['id']) ?>" class="btn btn-sm btn-primary m-1">Modifica</a>
                            <a href="<?= base_url('delete/'.$film['id']) ?>" class="btn btn-sm btn-danger m-1">Elimina</a>
                            </div></td>
                            </tr>
                            <?php endforeach ?>   
                            </tbody>
                </table>
            </div>
            </div>
            <?php else: ?>
                        <h1> Nessun film in archivio</h1>
            <?php endif; ?>

        </div>
<script>$("#myModal").modal()</script>
  

    <?= $this->endSection() ?>

    