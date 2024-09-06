<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador de Palabras</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Contador de Palabras</h3>
          </div>
          <div class="card-body">
            <form action="contadorpalabras.php" method="post">
              <div class="mb-3">
                <label for="frase" class="form-label">Frase</label>
                <textarea name="frase" class="form-control" placeholder="Ingresa una frase" rows="4" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Contar Palabras</button>
              </div>
            </form>
          </div>
        </div>

        <?php
          if (isset($_POST['frase'])) {
            $frase = $_POST['frase'];
            
            // Contando las palabras
            $numero_palabras = str_word_count($frase);

            echo "
              <div class='alert alert-success mt-4'>
                La frase ingresada contiene <strong>{$numero_palabras}</strong> palabras.
              </div>
            ";

            echo "<div class='alert alert-success mt-4'>
                Ejercicio hecho por Gustavo Sánchez U20190561
              </div>";
          }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
