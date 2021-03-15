<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Formulir Nilai Siswa</h1>
    </div>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
 
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Mata Kuliah</label>
                <select class="form-select form-control" class="form-control" name="matkul">
                    <option selected>Pilih Mata Kuliah :</option>
                    <option value="PEMWEB">Pemrograman Web 2</option>
                    <option value="DATABASE">Basis Data</option>
                    <option value="STATISKA">Statiska</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> Nilai UTS</label>
                    <input type="text" name="uts" value="" class="form-control">
                </div>
 
                
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">nilai Tugas</label>
                    <input type="text" name="tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-success btn-sm btn-block">
 
            </form>
            </div>
 
            <?php
            $_nama = $_GET['nama'];
            $_nim = $_GET['nim'];
            $_matkul = $_GET['matkul'];
            $_uts = $_GET['uts'];
            $_uas = $_GET['uas'];
            $_tugas = $_GET['tugas'];
            $_listnilai = array($_uts, $_uas, $_tugas);
            $_totalnilai = array_sum($_listnilai);
            //kondisi
            if($_totalnilai >= 85)
            {
                $_huruf = "A";
            }
            elseif ($_totalnilai >= 70){
                $_huruf = "B";
            }
            elseif ($_totalnilai >= 60){
                $_huruf = "C";
            }
            elseif ($_totalnilai < 40){
                $_huruf = "E";
            }
            $_simpan = $_GET['proses'];
            ?>
 
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?php echo $_nama; ?></li>
                    <li class="list-group-item">Nim : <?php echo $_nim; ?></li>
                    <li class="list-group-item">Mata Kuliah: <?php echo $_matkul; ?></li>
                    <li class="list-group-item">Nilai UTS : <?php echo $_uts; ?></li>
                    <li class="list-group-item">Nilai UAS : <?php echo $_uas; ?></li>
                    <li class="list-group-item">Nilai Tugas <?php echo $_tugas; ?></li>
                    <li class="list-group-item">Nilai Total:  <?php echo $_totalnilai; ?></li>
                    <li class="list-group-item">Nilai : <?php echo $_huruf; ?></li>
                    
                    
                </ul>
                </div>
 
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Kurang dari 40 </li>
                    
                    
                </ul>
                </div>
 
        </div>
        
    </div>
</body>
</html>