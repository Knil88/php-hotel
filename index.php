<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Hotel</title>
</head>
<body>
   
    <?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Bello',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4.' '.'chilometri'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Fa Schifooo',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2..' '.'chilometri' 
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Fa Proprio Schifo',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1..' '.'chilometri'
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Mica Pizza e Fichi',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5.' '.'chilometri'
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Fa Proprio Schifo',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50..' '.'chilometri'
        ],
        
    
    ];
    if(isset($_GET['con_parcheggio']) && $_GET['con_parcheggio'] == 1) {
        $hotels = array_filter($hotels, function($hotel) {
            return $hotel['parking'] == true;
        });
    }
    
    if(isset($_GET['senza_parcheggio']) && $_GET['senza_parcheggio'] == 1) {
        $hotels = array_filter($hotels, function($hotel) {
            return $hotel['parking'] == false;
        });
    }

      

  ?>
  <form action="" method="get">
    <label>
        <input type="checkbox" name="con_parcheggio" value="1">
        Mostra solo gli hotel con parcheggio
    </label>
    <label>
        <input type="checkbox" name="senza_parcheggio" value="1">
        Mostra solo gli hotel senza parcheggio
    </label>
    <div class="c">
    <input type="submit" value="Filtra" >
    </div>
</form>

  <table class="table table-dark text-center">
  <thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza Centro</th>

    </tr>
  </thead>
  <tbody>
    <?php
        foreach($hotels as $hotel){
           

            if ($hotel['parking'] === true) {
                $hotel['parking'] = 'Disponibile';
            }
            else{
                $hotel['parking'] = 'Non Disponibile';
            }
            echo  '<tr></tr>';
            foreach($hotel as $key => $value){
                echo '<td>' . $value . '</td>';
                }
        }
      

       
    ?>
   
     
     
    </tr>
    <tr>
      
    </tr>
    <tr>
      
     
    </tr>
  </tbody>
</table>
    
   
      
</body>
</html>