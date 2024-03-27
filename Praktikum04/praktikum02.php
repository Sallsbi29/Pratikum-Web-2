<div class="card-body">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Belanja Online</title>
  </head>
  <body>
  <h2>Belanja Online</h2> <hr>
    <table style="margin: 5px 0 0 20px; width: 100%;">
        <tr>
            <td>
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-3 col-form-label text-right"><b>Customer</b></label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="customer" name="customer" type="text" placeholder="Nama Customer" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-right"><b>Pilih Produk</b></label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-3 col-form-label text-right"><b>Jumlah Beli</b></label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-3 col-8">
                        <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form> 
            </td>
            <td style="width: 230px;"></td>
            <td>
                <!-- Daftar Harga -->
                <div class="container">
                <table class="table" style="width: 75%;">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th colspan="3" scope="col">Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV</td>
                            <td>:</td>
                            <td>Rp4.200.000</td>
                        </tr>
                        <tr>
                            <td>KULKAS</td>
                            <td>:</td>
                            <td>Rp3.100.000</td>
                        </tr>
                        <tr>
                            <td>MESIN CUCI</td>
                            <td>:</td>
                            <td>Rp3.800.000</td>
                        </tr>
                    </tbody>
                    <tfoot class="bg-primary text-white">
                        <tr>
                            <th colspan="3" scope="col">Harga Dapat Berubah Setiap Saat</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
    </table>

    <!-- Script PHP menghitung total belanja -->
    <?php
    if(isset($_POST['customer']) && isset($_POST['produk']) && isset($_POST['jumlah'])) {
      
        $harga = 0;
        $produk = $_POST['produk'];
        $jumlah = (int)$_POST['jumlah'];
        
        
        switch($produk) {
            case 'tv':
                $harga = 4200000;
                break;
            case 'kulkas':
                $harga = 3100000;
                break;
            case 'mesin cuci':
                $harga = 3800000;
                break;
            default:
                $harga = 0;
        }
        
     
        $total = $harga * $jumlah;
        echo '<div class="container">';
        echo '<p>Customer: ' . $_POST['customer'] . '</p>';
        echo '<p>Produk Pilihan: ' . ucfirst($produk) . '</p>';
        echo '<p>Jumlah Beli: ' . $jumlah . '</p>';
        echo '<p>Total Belanja: Rp ' . number_format($total, 0, ',', '.') . '</p>';
        echo '</div>';
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <
    
</div>