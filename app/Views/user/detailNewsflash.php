<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Newsflash Details</h1>

    <!-- Table -->
    <?php $i = 1; ?>
    <?php foreach ($newsflash as $newsflash) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url('/img/' . $newsflash['images']); ?>" class="card-img user-details">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4>
                                            <?= $newsflash['judul']; ?>
                                        </h4>
                                    </li>

                                    <li class="list-group-item">
                                        <?= $newsflash['deskripsi']; ?>
                                    </li>
                                </ul>
                                <a href="<?= base_url('user/newsflash'); ?>" class="btn btn-dark col-3">Back</a>
                                <a href="<?= base_url('user/editNewsflash/' . $newsflash['id']); ?>" class="btn btn-warning col-3">Edit</a>

                                <form action="/user/detailNewsflash/<?= $newsflash['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?= $this->endSection(); ?>