<div class="container"></div>
<div class="row"></div>
<div class="col"></div>
<div class="card rounded-3">
    &emsp; <h1 class="mt-2">&nbsp;&nbsp;&nbsp;Register Participant</h1>
</div>
<br>
&emsp; <a href="/pages/addregister" class="btn btn-primary mb-3">Add Register</a>
<br>
<?php if(session()->getFlashdata('pesan')) :?>
<div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
</div>
<?php endif; ?> <table class="table">&nbsp;&nbsp;&nbsp;<br>

    <thead>
        <tr align="center">
            <th scope="col">NO</th>
            <th scope="col">ID PESERTA</th>
            <th scope=" col">NAMA</th>
            <th scope="col">NIM</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELP</th>
            <th scope="col">INSTITUSI</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">JENIS EVENT</th>
            <th scope="col">NAMA EVENT</th>
            <th scope="col">FOTO KTM</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0001; ?>
        <?php foreach($registerpeserta as $p) : ?>

        <tr align="center">
            <th scope="row"><?= $i++; ?></th>
            <td><?= $p['idregister']; ?></td>
            <td><?= $p['namapeserta']; ?></td>
            <td><?= $p['nim']; ?></td>
            <td><?= $p['email']; ?></td>
            <td><?= $p['telp']; ?></td>
            <td><?= $p['institusi']; ?></td>
            <td><?= $p['alamat']; ?></td>
            <td><?= $p['jeniskegiatan']; ?></td>
            <td><?= $p['namakegiatan']; ?></td>
            <td><img src=" /img/<?= $p['fotoktm']; ?>" alt="" width=" 100">
            </td>
            <td class="vertical-center">
                <a href=" /pages/editregis/<?=$p['idregister']; ?>" class=" btn btn-warning mb-3">Edit</a>
            </td>
            <td class=" vertical-center"> <a onclick=" return confirm('Apakah anda yakin akan menghapus data ini?')"
                    href="/pages/delete/<?=$p['idregister']; ?>" class="btn btn-danger"> Delete</a>
            </td>

        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>