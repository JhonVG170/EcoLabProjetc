<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>EcoLab</title>
</head>
<body>
    <div class="conteiner box" id="menu">
        <h1>EcoLab</h1>
        <p>protótipo</p>
        <nav>
            <li><a href="#1">op1</a></li>
            <li><a href="#2">op2</a></li>
            <li><a href="#3">op3</a></li>
            <li><a href="#4">op4</a></li>
            <li><a href="#5">op5</a></li>
        </nav>
    </div>
    <?php
        $num = 5; 
        for($i = 1; $i <= $num; $i++){
            echo '
            <div class="form-check form-switch">
                <label class="form-check-label" for="pc'.$i.'">Bancada-'.$i.'</label>
                <input class="form-check-input" type="checkbox" role="switch'.$i.'" name=Pc'.$i.'" id="switch'. $i .'">
            </div>';
        }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>