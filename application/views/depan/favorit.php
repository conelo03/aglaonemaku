<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aglaonema Favoritku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bcontent {
            margin-top: 10px;
        }
    </style>
</head>
<body class="bgrnd" style="background-image: url(https://i.imgur.com/swZSbCZ.jpg); background-size: 100% 100%; background-attachment: fixed; font-family: Georgia, 'Times New Roman', Times, serif"> <br>
    <div class="container bcontent">
        <center><h1 style="color: white; height: 50px; border-radius: 8px; font-weight: bold;">Aglaonema Favoritku</h1></center><br>
        
        <hr />
        <?php foreach($aglaonema as $a): ?>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-sm-3 p-4">
                    <img class="img-fluid" src="<?= base_url('assets/img/'.$a['gambar_agl']) ?>" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="card-body">
                        <h3 class="card-title"><?= $a['nama_agl'] ?></h3>
                        <p class="card-text" style="font-size: large;"><?= $a['desc_agl'] ?>
                        </p>
                        <!-- <a href="#" class="btn btn-primary">View Profile</a> -->
                    </div>
                </div>
                <div class="col-sm-3 p-4 text-center">
                    
                    <?php if($star == $a['id_agl']): ?>
                        <a href="<?= base_url('User/favoritku/unfav/'.$a['id_agl']) ?>">
                            <img class="img-fluid pt-5" src="<?= base_url('assets/img/star3.png') ?>" style="max-width: 60px" alt=""></a>
                    <?php else:?>
                        <a href="<?= base_url('User/favoritku/fav/'.$a['id_agl']) ?>">
                            <img class="img-fluid pt-5" src="<?= base_url('assets/img/star1.png') ?>" style="max-width: 60px" alt="">
                        </a>
                    <?php endif; ?>
                    
                    <h5><?= $a['jumlah_fav'] ?></h5>
                </div>
            </div>
        </div>
        <br>
        <?php endforeach; ?>
        
    </div>
</body>
</html>