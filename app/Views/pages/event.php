<div class="container"></div>
<div class="row"></div>
<div class="col"></div>
<a class=" btn btn-primary mt-3" href="/pages/addevent" role="button">Add Event</a>
<h1 class="mt-2">Daftar Kegiatan</h1>
<?php if(session()->getFlashdata('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
</div>
<?php endif; ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Poster</th>
            <th scope="col">Jenis</th>
            <th scope="col">&emsp; &emsp; &emsp; &emsp; &emsp;Nama</th>
            <th scope="col">&emsp;Date</th>
            <th scope="col">Time Start</th>
            <th scope="col">Time Finish</th>
            <th scope="col">&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;Lokasi</th>
            <th scope="col">&emsp; &emsp; &emsp; &emsp;Benefit</th>
            <th scope="col">&emsp; &emsp;Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($kegiatan as $k) : ?>
        <th scope="row"><?= $i++; ?>
        </th>
        <td><img src="/img/<?= $k['poster']; ?>" alt="" width="100" class=" poster">
        <td align="center">
            <?= $k['jenis']; ?>
        </td>
        <td align="center">
            <?= $k['nama']; ?></td>
        <td>
            <?= $k['date']; ?></td>
        <td>
            <?= $k['time']; ?></td>
        <td>
            <?= $k['time2']; ?></td>
        <td>
            <?= $k['lokasi']; ?></td>
        <td>
            <?= $k['benefit']; ?></td>
        <td>
            <a href="/pages/editevent/<?= $k['id']; ?>" class="btn btn-warning">Edit</a>
            <form action="/pages/deleteevent/<?= $k['id']; ?> " method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type=" submit" class="btn btn-danger"
                    onclick=" return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
            </form>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>
</div>