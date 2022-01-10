<?= $this->extend('layout') ?>

    <?= $this->section('content') ?>


        <div class="row mt-3 text-center">
            <div class="col-12 ">
                <?php if ($films != []): ?>
                <table class="table table-dark">
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
                   
                    <?php else: ?>
                        <h2> Nessun film trovato</h2>
                    <?php endif; ?>   
                </div>
            </div>
        </div>

    <?= $this->endSection() ?>