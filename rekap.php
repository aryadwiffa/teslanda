<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>February 2020</title>
  </head>
  <body>
  <h1 class="text-center">Rekap Keuangan Bulan Februari</h1>

    <table class="table text-center">
    <thead class="thead-dark">
        <tr>
            <th rowspan=2>No</th>
            <th rowspan=2>Nama Akun</th>
            <th colspan=28>Jumlah</th>
            <th></th>
        </tr>
        <tr class="table-secondary">
            <?php
            for ($i = 1; $i <= 29; $i++) {
                echo  "<th class='bg-warning'>$i <br>Feb</th>" ;
            }?> 
        </tr>
        
    </thead>
        <?php
        include 'connect.php';
        $data = mysqli_query($connect, "SELECT * FROM acc_m_akun m LEFT JOIN acc_trans_detail t ON m.id = t.m_akun_id WHERE t.tanggal LIKE '2020-02-%' GROUP BY m.nama;");
        $no=1 ;
        $date=10;
        ?>
        <tbody>
                  <?php foreach ($data as $a) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $a['nama'] ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-01')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td> 
                      <td><?php if ($a['tanggal'] == date('2020-02-02')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-03')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-04')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-05')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-06')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-07')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-08')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-09')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-10')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-11')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-12')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-13')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-14')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-15')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-16')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-17')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-18')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-19')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-20')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-21')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-22')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-23')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-24')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-25')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-26')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-27')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-28')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      <td><?php if ($a['tanggal'] == date('2020-02-29')) { ?>
                        <?= number_format($a['debit']-$a['kredit']) ?>
                      <?php }else {echo 0;} ?></td>
                      </tr>
                      <?php } ?>
                </tbody>
    </table>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
