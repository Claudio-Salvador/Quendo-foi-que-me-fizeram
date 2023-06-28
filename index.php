<!DOCTYPE html>
<html>
<head>
    <title>Quando Foi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="header">
                <h2 class="animation a1">QUANDO FOI?</h2>
                <h4 class="animation a2">Descubra aquilo que ninguém se atreve a perguntar, <strong>Quando foi que eu fui feito?</strong></h4>
            </div>
            <form>
                <div class="form">
                    <label for=""><strong>SUA DATA DE NASCIMENTO</strong></label>
                    <input type="date" class="form-field animation a3" max="<?php echo date('Y-m-d', strtotime('-1 year')); ?>">
                    <br>
                    <label for=""><strong>TEMPO DE GESTAÇÃO</strong></label>
                    <input type="number" class="form-field animation a4" placeholder="Tempo de gestação" min="6">
                    <p class="animation a5"><a href="#">Compartilhar</a></p>
                    <button class="animation a6">Calcular</button>
                </div>
            </form>
        </div>
        <div class="right">
   

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
