<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

       <a href="<?= BASE_URL('index.php?/Ujian/tambah'); ?>" class="btn btn-Primary">Tambah Data</a>

              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">

            <table class="table"
        <thead>
            <tr>
                <th scope="col">No</th>
            <th scope="col">ID_Soal</th>
            <th scope="col">Dosen</th>
            <th scope="col">Jumlah_Soal</th>
            </tr>
        </thead>
        <tbody>
          <!--Pharsing Data-->
        <?php 
        $no = 1;
        foreach($test as $aku) { ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $aku->id_soal; ?></td>
      <td><?php echo $aku->dosen; ?></td>
      <td><?php echo $aku->jumlah_soal; ?></td>
    </tr>
    <?php } ?>
        </tbody>
    </table>
               </div>
        </div>
    </div>
</div>
    
</body>
</html>