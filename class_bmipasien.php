<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Form Isi BMI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/71524f2999.js" crossorigin="anonymous"></script>

    <style>
        .fa-child{
            padding: 2.5px;
        }
        .fa-bell{
            padding: 1.5px;
        }
        .cm{
            padding-left: 7px;
        }
        body{
            background-image: url('undraw_Calculator_0evy.svg');
            background-size: cover;
        }
    </style>

</head>
<body>
    <!-- Form -->
    <div class="container">
        <div class="card m-2">
            <div class="card-body">
                <form action="class_bmipasien.php" method="POST">
                    <div class="row mb-4 mt-2 text-center">
                    <h2>Body Mass Index Calculator</h2>
                    </div>
                    <div class="row mb-2 mt-2">
                        <div class="col-sm">
                            <label for="nama" class='form-label'>Nama</label>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-person-circle"></i></div>
                                <input type="text" name="nama" id="nama" class='form-control'>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2">
                        <div class="col-sm">
                            <label for="berat" class='form-label'>Berat Badan</label>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-child"></i></div>
                                <input type="text" name="berat" id="badan" class='form-control'>
                                <div class="input-group-text">Kg</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2">
                        <div class="col-sm">
                            <label for="tinggi" class='form-label'>Tinggi Badan</label>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                            <div class="input-group-text"><i class="fas fa-street-view"></i></div>
                            <input type="text" name="tinggi" id="tinggi" class='form-control'>
                            <div class="input-group-text cm">Cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2">
                        <div class="col-sm">
                            <label for="umur" class='form-label'>Umur</label>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-text"><i class="far fa-bell"></i></div>
                                <input type="text" name="umur" id="umur" class='form-control'>
                                <div class="input-group-text">Th</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <label for="kelamin">Jenis Kelamin</label>
                        </div>
                        <div class="col-sm">
                            <div class="form-check">
                                <input type="radio" name="kelamin" id="kelamin" class='form-check-input' value="Laki-Laki">
                                <label for="kelamin" class='form-check-label'>Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="kelamin" id="kelamin" class='form-check-input' value="Perempuan">
                                <label for="kelamin" class='form-check-label'>Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                    <div class="col-sm">
                    
                    </div>
                    <div class="col-sm">
                        <input type="submit" value="Submit" name="proses" class='btn btn-primary'>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Form -->
    <!-- Table Hasil -->
<?php
    $bmi = new BmiPasien($_POST['nama'], $_POST['umur'], $_POST['kelamin'], $_POST['berat'], $_POST['tinggi']);
?>    
<div class="container">
    <div class="card">
        <div class="card-body">
        <h2 class='text-center mt-4'>Hasil Body Mass Index</h2>
        <div class="table-responsive">
        <table class='table'>
             <thead>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Berat</th>
                <th scope="col">Tinggi</th>
            </thead>
            <tbody>
                <tr scope='row'>
                    <td>1</td>
                    <td><?php echo $bmi->nama; ?></td>
                    <td><?php echo $bmi->umur; ?></td>
                    <td><?php echo $bmi->jenis_kelamin; ?></td>
                    <td><?php echo $bmi->berat; ?></td>
                    <td><?php echo $bmi->tinggi; ?></td>
                </tr> 
                <tr scope='row'>
                    <th colspan="5">Hasil</th>
                    <th><?php echo $bmi->hasilBMI(); ?></th>
                </tr>
                <tr scope='row' class='table-merah table-hijau table-kuning'>
                    <th colspan="5" class='align-middle'>Status</th>
                    <th class='align-middle'><?php echo $bmi->statusBMI(); ?></th>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>
    

</div>
    
    <!-- Akhir Table Hasil -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>

<?php
class BmiPasien{
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat;
    public $tinggi;

    public function __construct($nama, $umur, $jenis_kelamin, $berat, $tinggi)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function hasilBMI(){
        $tinggi_kuadrat = pow($this->tinggi/100,2);
        return number_format($this->berat/$tinggi_kuadrat,2,'.',' ');
    }

    public function statusBMI(){
        if (self::hasilBMI() < 18.5) {
            echo 'Kurang Ideal';
            echo '<style> .table-merah{
                background-color: red;
            }</style>';
        }
        elseif (self::hasilBMI() <= 24.9){
            echo 'Normal';
            echo '<style> .table-merah{
                background-color: green;
            }</style>';
        }
        elseif (self::hasilBMI() <= 29.9){
            echo 'Kelebihan Berat Badan';
            echo '<style> .table-merah{
                background-color: yellow;
            }</style>';
        }
        elseif (self::hasilBMI() > 30){
            echo 'Kegemukan';
            echo '<style> .table-merah{
                background-color: red;
            }</style>';
        }
    }

}

?>