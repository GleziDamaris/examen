<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Inicio de sesión</title>
</head>
<body class="d-flex justify-content-center vh-100 align-items-center">
    <form action = "lib/login.php" method="POST">
        <div>
            <label for ="" class = "form-label">CIUDAD</label>
        </div>

        <select class="form-select" aria-label="Default select example" id="ciudad">
        <option selected> </option>
        <option value="1">Cancún</option>
        <option value="2">Playa Del Carmen</option>
        <option value="3">Mérida</option>
        </select>

        <div class="d-flex justify-content-center align-items-center">
            <input type = "submit" value ="CONSULTAR" class = "btn btn-primary">
        </div>
    </form>
</body>
</html>