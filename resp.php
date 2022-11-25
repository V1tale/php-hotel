<?php 
$parkingGET = $_GET ["parking"];
$voteGET = $_GET ["vote"]; 
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

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
    <main>
        <div class="container">
            <a href="index.php">Torna alla Home</a>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Distanza dal centro</th>
      <th scope="col">Voto</th>
    </tr>
  </thead>
  <tbody>
      <?php for ($i=0; $i < count($hotels); $i++) {
          $thisHotel = $hotels[$i];
          if ($parkingGET == "true" && $thisHotel["parking"] == true) {?>
          <tr>
            <td>
             <?php echo $thisHotel["name"] ?>
            </td>
            <td>
             <?php echo $thisHotel["description"] ?>
            </td>
            <td>
            <?php if ($thisHotel["parking"] == true) {                   
                 echo "Si";
            }else {
                echo "No";
            } ?>
            </td>
            <td>
             <?php echo $thisHotel["distance_to_center"]." km" ?>
            </td>
            <td>
             <?php echo $thisHotel["vote"] ?>
            </td>
        </tr>
    <?php } elseif ($parkingGET == "false") { ?>
        <tr>
            <td>
             <?php echo $thisHotel["name"] ?>
            </td>
            <td>
             <?php echo $thisHotel["description"] ?>
            </td>
            <td>
            <?php if ($thisHotel["parking"] == true) {                   
                 echo "Si";
            }else {
                echo "No";
            } ?>
            </td>
            <td>
             <?php echo $thisHotel["distance_to_center"]." km" ?>
            </td>
            <td>
             <?php echo $thisHotel["vote"] ?>
            </td>
        </tr>
     <?php } } ?>
  </tbody>
</table>
        </div>
        </div>
    </main>
</body>
</html>