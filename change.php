<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Taux de change</title>
</head>
<body>

<!----------------------- PHP CONDITIONS --------------------------->

<?php 
if(isset($_POST['submit'])){
    $calcul = $_POST['calcul'];
    $valueOne = $_POST['chooseMoneyOne'];
    $valueTwo = $_POST['chooseMoneyTwo'];
    $finalValue = $_POST['convertValue'];

    //------------------------------------- EUROS ------------------------------
if($valueOne=="yen" AND $valueTwo=="euro"){
    $finalValue = $calcul*0.0071;
    }
if($valueOne=="euro" AND $valueTwo=="yen"){
    $finalValue = $calcul*140.74;
    }
if($valueOne=="american-dollar" AND $valueTwo=="euro"){
    $finalValue = $calcul*0.96;
    }
if($valueOne=="euro" AND $valueTwo=="american-dollar"){
    $finalValue = $calcul*1.04;
    }
if($valueOne=="euro" AND $valueTwo=="livre"){
    $finalValue = $calcul*0.87;
    }
if($valueOne=="livre" AND $valueTwo=="euro"){
    $finalValue = $calcul*1.15;
    }
if($valueOne=="euro" AND $valueTwo=="yuan"){
    $finalValue = $calcul*6.99;
    }
if($valueOne=="yuan" AND $valueTwo=="euro"){
    $finalValue = $calcul*0.14;
    }
if($valueOne=="euro" AND $valueTwo=="congolese-francs"){
    $finalValue = $calcul*2086.44;
    }
if($valueOne=="congolese-francs" AND $valueTwo=="euro"){
    $finalValue = $calcul*0.00048;
    }
if($valueOne=="euro" AND $valueTwo=="euro"){
    $finalValue = $calcul*1;
    }

    //--------------------YEN--------------------------------

if($valueOne=="american-dollar" AND $valueTwo=="yen"){
    $finalValue = $calcul*135.43;
    }
if($valueOne=="yen" AND $valueTwo=="american-dollar"){
    $finalValue = $calcul*0.0074;
    }
if($valueOne=="yen" AND $valueTwo=="livre"){
    $finalValue = $calcul*0.0062;
    }
if($valueOne=="livre" AND $valueTwo=="yen"){
    $finalValue = $calcul*162.46;
    }
if($valueOne=="yen" AND $valueTwo=="yuan"){
    $finalValue = $calcul*0.05;
    }
if($valueOne=="yuan" AND $valueTwo=="yen"){
    $finalValue = $calcul*20.16;
    }
if($valueOne=="yen" AND $valueTwo=="congolese-francs"){
    $finalValue = $calcul*14.79;
    }
if($valueOne=="congolese-francs" AND $valueTwo=="yen"){
    $finalValue = $calcul*0.068;
    }
if($valueOne=="yen" AND $valueTwo=="yen"){
    $finalValue = $calcul*1;
    }

//---------------------------- DOLLARS ---------------------------------

if($valueOne=="american-dollar" AND $valueTwo=="american-dollar"){
    $finalValue = $calcul*1;
    }
if($valueOne=="american-dollar" AND $valueTwo=="livre"){
    $finalValue = $calcul*0.83;
    }
if($valueOne=="livre" AND $valueTwo=="american-dollar"){
    $finalValue = $calcul*1.2;
    }
if($valueOne=="american-dollar" AND $valueTwo=="yuan"){
    $finalValue = $calcul*6.72;
    }
if($valueOne=="yuan" AND $valueTwo=="american-dollar"){
    $finalValue = $calcul*0.15;
    }
if($valueOne=="american-dollar" AND $valueTwo=="congolese-francs"){
    $finalValue = $calcul*2002.5;
    }
if($valueOne=="congolese-francs" AND $valueTwo=="american-dollar"){
    $finalValue = $calcul*0.0005;
    }

//-----------------------------------------LIVRES--------------------------

if($valueOne=="livre" AND $valueTwo=="livre"){
    $finalValue = $calcul*1;
    }
if($valueOne=="livre" AND $valueTwo=="yuan"){
    $finalValue = $calcul*8.07;
    }
if($valueOne=="yuan" AND $valueTwo=="livre"){
    $finalValue = $calcul*0.12;
    }
if($valueOne=="livre" AND $valueTwo=="congolese-francs"){
    $finalValue = $calcul*2405.49;
    }
if($valueOne=="congolese-francs" AND $valueTwo=="livre"){
    $finalValue = $calcul*0.00042;
    }

    //--------------------------- yuan -----------------------------

if($valueOne=="yuan" AND $valueTwo=="yuan"){
    $finalValue = $calcul*1;
    }
if($valueOne=="yuan" AND $valueTwo=="congolese-francs"){
    $finalValue = $calcul*298.27;
    }
if($valueOne=="congolese-francs" AND $valueTwo=="yuan"){
    $finalValue = $calcul*0.0034;
    }

    //------------------------CONGO-------------------------

    if($valueOne=="congolese-francs" AND $valueTwo=="congolese-francs"){
        $finalValue = $calcul*0.0034;
        }

}
?>

<!---------------------------- HTML & PHP -------------------------------------->

    <h1 class="title">Convertisseur de monnaie</h1>


    <div id="cadre">
    <form action="" method="post"  class="grid">
        <br>

<select name="chooseMoneyOne" class="selectFirstMoney">
    <option value="euro">Euro</option>
    <option value="yen">Yen</option>
    <option value="american-dollar">Dollar Américain</option>
    <option value="livre">Livre sterling</option>
    <option value="yuan">Yuan</option>
    <option value="congolese-francs">Francs congolais</option>
</select>

        <input type="text" name="calcul" class="inputValueToChange" placeholder="Indiquez le montant à échanger">
        <br>

<select name="chooseMoneyTwo" class="selectSecondMoney">
    <option value="euro">Euro</option>
    <option value="yen"><?php echo $yen ?>Yen</option>
    <option value="american-dollar">Dollar Américain</option>
    <option value="livre">Livre sterling</option>
    <option value="yuan">Yuan</option>
    <option value="congolese-francs">Francs congolais</option>
</select>
        <input type="text" name="convertValue" class="result" readonly value="<?php echo $finalValue ?>"> <!-- Result pop here -->
        <input type="submit" name="submit" id="calculateButton" value="Calculer l'équivalent">
    </form>     
    </div>

</body>
</html>