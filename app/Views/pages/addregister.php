<div class="container"></div>
<div class="row"></div>
<div class="col"></div>
<!DOCTYPE html>
<html lang="en">
<style>
.kotak {

    height: 40px;
    width: 50%;
    border: 2px solid #778899;
    border-radius: 5px;
}

.fonttext {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}

.topnav {
    float: right;
    margin-right: 60px;
}
</style>

</ <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADD REGISTER </title>
</head>

<body>
    <form action="/pages/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="card rounded-3">
            <img src="https://i.pinimg.com/564x/25/52/ee/2552ee7bd710d6b588dfa1b1cc51b5f7.jpg" height="200"
                style=" border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
            <div id="heading">
            </div>
            <div id=" heading">
                <h1 class="my-3">&nbsp;&nbsp;&nbsp;Form Add Register Participant</h1>
                <?= $validation->listErrors(); ?>
                <div class=" topnav">
                    <div class="col-sm-10">
                        <a href=" /pages/register; ?" class=" btn btn-warning mb-3">Back</a>
                    </div>
                </div>
            </div>
            <div id="Form Register">
                <fieldset class="form-group">
                    <form>
                        <div class="form-group row"><label for="nama"
                                class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama Peserta
                                &emsp;&emsp;&emsp;&emsp; &emsp;
                                :</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 500px; border: 1px solid #808080" class="form-control
                                <?= ($validation->hasError('namapeserta')) ? 'is-invalid' : ''; ?>" id="namapeserta"
                                    name="namapeserta" placeholder="Nama Lengkap" autofocus
                                    value="<?= old('namapeserta'); ?>"><br>
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('namapeserta'); ?>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="nim" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NIM
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp; :</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 500px; border: 1px solid #808080" class="form-control"
                                    id="nim" name="nim" placeholder="NIM" value="<?=old('nim'); ?>"><br>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="email" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Email &emsp;&emsp;&emsp;&emsp;&emsp; &emsp; &emsp; &emsp; :</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 500px; border: 1px solid #808080" class="form-control"
                                    id="email" name="email" placeholder=" Email" value="<?=old('email')?>"><br>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="telp" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nomor
                                Telepon &emsp; &emsp;&emsp;&emsp; :</label>
                            <div class="col-sm-10">
                                <input type="number" style="width: 500px; border: 1px solid #808080"
                                    class="form-control" id="telp" name="telp" placeholder="Nomor Telepon"
                                    value=" <?=old('telp'); ?>"><br>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="institusi" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Institusi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 500px; border: 1px solid #808080" class="form-control"
                                    id="institusi" name="institusi" placeholder="Instutisi"
                                    value="<?= old('institusi'); ?>"><br>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label>
                            <div class="col-sm-10">
                                <input type="text" style="width: 500px; border: 1px solid #808080" class="form-control"
                                    id="alamat" name="alamat" placeholder="Alamat" value="<?=old('alamat'); ?>"><br>
                            </div>
                        </div>
                        <fieldset class=" form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jenis
                                    Event &emsp;&emsp;&emsp;&emsp; &emsp; &emsp; :</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskegiatan"
                                            id="jeniskegiatan" value="Webinar" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Webinar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskegiatan"
                                            id="jeniskegiatan" value="Seminar">
                                        <label class="form-check-label" for="gridRadios2">
                                            Seminar
                                        </label><br><br>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label for="namaevent" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Nama
                                Event &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label><br>
                            <div class="col-sm-10">
                                <input type="text" style="width: 500px; border: 1px solid #808080" class="form-control"
                                    id="namavent" name="namakegiatan" placeholder="Nama Event"
                                    value="<?= old('namakegiatan'); ?>"><br><br>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <label for="fotoktm" class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Foto
                                KTM &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label><br><br>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input <?= ($validation->hasError('fotoktm')) ? 'is-invalid' : ''; ?>"
                                        id="fotoktm" name="fotoktm" value="<?=old('fotoktm'); ?>">
                                    <div class=" invalid-feedback">
                                        <?= $validation->getError('fotoktm'); ?>

                                        <button class=" custom-file-label" for="fotoktm">Choose
                                            File</button><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <div class="col-sm-15">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"
                                    class="btn btn-primary">Save</button>
                            </div>
                        </div>


                </fieldset>
    </form>
</body>
</div>
</div>
</div>