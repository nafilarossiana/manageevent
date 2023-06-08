<!DOCTYPE html>
<html lang="en">
<style>
#colorform {
    text-align: center;
    background-color: #d1d1d1;
    font-family: Georgia, 'Times New Roman', Times, serif
}

.kotak {

    height: 20px;
    border: 2px solid #778899;
    border-radius: 5px;
}

#field {
    border: 3px solid #778899;
    border-radius: 10px;
    background: #f0efeb;
    background-image: url(hiasan1-removebg.jpg);
    background-position: right;

    background-repeat: no-repeat;
}

input[type=text],
[type=number] {
    width: 50%;
}

.fonttext {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}

#tepi {
    border: 2px solid #778899;
    border-radius: 5px;
}

.border {
    border-color: #778899;
}

#colortabel {
    color: #778899;
    font-family: Georgia, 'Times New Roman', Times, serif
}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - 09040621069</title>
</head>

<body>
    <form>
        <fieldset id="field">
            <div id="heading">
                <h1 id="colorform" ">Formulir Pendaftaran Siswa</h1>
    </div>

    <div id=" Formulir Pendaftaran">

                    <label for="nama" class="fonttext">Nama Calon Siswa &emsp; &emsp; &emsp;: </label>
                    <input class="kotak" type="text" name="nama"><br><br>
                    <label for="TTL" class="fonttext">Tempat/Tanggal Lahir&emsp; &emsp;: </label>
                    <input class="kotak" type="tempat" name="alamat">
                    <input class="kotak" type="date" name="kalender"><br><br>
                    <label for="agama" class="fonttext">Agama &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;: </label>
                    <select class="kotak" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                    </select><br><br>

                    <label for="alamat" class="fonttext">Alamat &emsp; &emsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                    <textarea id="tepi" type="text" name="alamat" maxLength="150" cols="45" rows="5"></textarea><br><br>

                    <label for="telpon" class="fonttext">No Telp/HP &emsp;&emsp;&emsp;&emsp; &emsp;&emsp; :</label>
                    <input class="kotak" type="number" id="no" name="number" value=""><br><br>


                    <label for="jenis kelamin" class="fonttext">Jenis Kelamin &emsp; &emsp; &emsp;&emsp;&emsp;:</label>
                    <input type="radio" name="jk" value="Laki">Laki-Laki
                    <input type="radio" name="jk" value="perempuan">Perempuan<br><br>

                    <label for="hobi" class="fonttext">Hobi&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
                        :</label>
                    <input type="checkbox" id="hobi" name="hobii" value="Membaca">Membaca
                    <input type="checkbox" id="hobi2" name="hobii2" value="Menulis">Menulis
                    <input type="checkbox" id="hobi3" name="hobii3" value="Olahraga">Olahraga<br><br>

                    <label for="foto" class="fonttext">Pas Foto&emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp;: </label>
                    <input type="file" id="foto" name="foto" value="Pilih File"><br><br>
                    <input type="submit" value="Submit" style="background: #d1d1d1; border-color: whitesmoke;">

        </fieldset>
        </div><br><br>
    </form>
    <div id="heading">
        <h1 id="colortabel">Data Pendaftaran Siswa</h1>
    </div>

    <div id="table">
        <table border="4" cellspacing="0" cellpadding="11" style="border-color: #778899;">
            <tr bgcolor=#d1d1d1>
                <th rowspan="2">Nama</th>
                <th colspan="2">Lahir</th>
                <th rowspan="2">No Telp</th>
                <th rowspan="2">Agama</th>
            </tr>
            <tr class="tabel" bgcolor=#d1d1d1 align="center">

                <th>Tempat</th>
                <th>Tanggal</th>
            </tr>
            <tr>
                <td align="center">Ahmad</td>
                <td align="center">Surabaya</td>
                <td align="center">1 Januari 2001</td>
                <td align="center">081712615</td>
                <td align="center">Islam</td>
            </tr>
            <tr>
                <td align="center">Yusuf</td>
                <td align="center">Semarang</td>
                <td align="center">3 Januari 2002</td>
                <td align="center">083619276</td>
                <td align="center">Islam</td>
            </tr>


        </table>
    </div>
</body>

</html>