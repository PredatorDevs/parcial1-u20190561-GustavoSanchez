<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora Simple</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Calculadora Simple</h3>
          </div>
          <div class="card-body">
            <form action="calculadorasimple.php" method="post">
              <div class="mb-3">
                <label for="numero1" class="form-label">Número 1</label>
                <input type="number" name="numero1" class="form-control" placeholder="Ingresa el primer número" required>
              </div>
              <div class="mb-3">
                <label for="numero2" class="form-label">Número 2</label>
                <input type="number" name="numero2" class="form-control" placeholder="Ingresa el segundo número" required>
              </div>
              <div class="mb-3">
                <label for="operacion" class="form-label">Operación</label>
                <select name="operacion" class="form-select" required>
                  <option value="suma">Suma</option>
                  <option value="resta">Resta</option>
                  <option value="multiplicacion">Multiplicación</option>
                  <option value="division">División</option>
                </select>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Calcular</button>
              </div>
            </form>
          </div>
        </div>

        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];
            $resultado = null;

            switch ($operacion) {
              case 'suma':
                $resultado = $numero1 + $numero2;
                break;
              case 'resta':
                $resultado = $numero1 - $numero2;
                break;
              case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
              case 'division':
                if ($numero2 != 0) {
                  $resultado = $numero1 / $numero2;
                } else {
                  $resultado = "Error: División por cero no permitida.";
                }
                break;
            }

            echo "
              <div class='alert alert-info mt-4'>
                El resultado de la {$operacion} es: <strong>{$resultado}</strong>.
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
