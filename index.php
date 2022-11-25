
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header></header>
    <main>
        <div class="container">
       <form action="resp.php" method="GET">
        <label for="parking">Filtra in base alla disponibilità di parcheggio</label>
        <select name="parking" id="parking">
            <option value="false">No</option>
            <option value="true">Si</option>
        </select>
        <label for="vote">Filtra in base al voto</label>
        <select name="vote" id="vote">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button>Find</button>
       </form>
    </main>
</body>
</html>