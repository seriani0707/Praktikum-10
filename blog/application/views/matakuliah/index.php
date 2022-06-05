<div class="col-md-12">
    <h3>
        Daftar Matakuliah
    </h3>
    <table border="1" width="50%">
        <thead>
            <tr>
                <th>No</th>
                <th>sks</th>
                <th>nama</th>
                <th>kode</th>
              
                
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_matkul as $matkul) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $matkul->sks ?></td>
                    <td><?= $matkul->nama ?></td>
                    <td><?= $matkul->kode ?></td>
                 

                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>