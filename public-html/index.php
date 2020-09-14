<?php
$website = 'http://www.zavrel.net'
?>


<!DOCTYPE html>  
<head>  
 <title>Hello World!</title>
</head>

<body>  
 <h1>Hello World!</h1>
<a href="<?php echo $website ?>"><?php echo "Zavrel consulting $website" ?></a>
<?php
$truevalue = true;
$falsevalye = false;
?>
<p><?php echo "This is the true value : $truevalue" ?> </p>


<p>
    <?php
    $coutries = ['France', 'Spain', 'UK', 'Italy'];
    print_r($coutries[0]);
    echo $coutries[2];
    ?>
</p>

<p>
    <?php
    $age = array(
        'John' => 35,
        'Paul' => 24,
        'George' => 27
    );
    print_r($age)
    ?>
</p>
<p>
    <?php
    echo $age['John']
?>
</p>

<script>
    var cars = ["Mercedes", "Volvo", "BMW", "Tesla"];
    for (i in cars) {
        console.log("The current car is " + cars[i]);
    }
</script>

<?php
    $cars = ["Mercedes", "Volvo", "BMW", "Tesla"];
    foreach ($cars as $i) {
        echo "The current car is $i <br>";
    }
?>
<p>
    <?php
        class CarBluePrint {
            // Here goes properties and methods
            public function __construct($newColor, $newMake) {
            $this->color = $newColor;
            $this->make = $newMake;
        }
            // Setter method
            public function setColor($newColor) {
                $this ->color = $newColor;
            }
            // getter method
            public function getColor() {
                return "<br>New Color is: " . $this->color . "<br>";
            }
        }
        $firstRealCar=  new CarBluePrint('green', 'Volvo');

        var_dump($firstRealCar);

        echo $firstRealCar ->color;

        
        echo $firstRealCar->getColor();

        $SecondRealCar = new CarBluePrint('Brown', 'Mercedes');
        echo $SecondRealCar->getColor();
        var_dump($SecondRealCar);
    ?>


</p>

<p>
    <?php 
        class SportCarBluePrint extends CarBluePrint {
            public function __construct($newColor, $newMake, $newSpoiler) {
                parent::__construct($newColor, $newMake);
                $this->Spoiler = $newSpoiler;
            }
            public function activateSpoiler() {
                return "<br> <strong> SPOILER ACTIVE </strong> <br>";
            }
        
        }

        $firstSportCar = new SportCarBluePrint("Cyan", "Porsche", "Tail");
        $firstSportCar->setColor("Pink");
        var_dump($firstSportCar);
        echo $firstSportCar->activateSpoiler();
    ?>



</p>

<p>
    <?php
        function divideOneByNumber($number) {
            if ($number == 0) {
                throw new Exception("Division by zero is not allowed");
            }
            return 1/$number;
        }
        try{
            echo "The result of division is " . divideOneByNumber(3);
        }
        catch(Exception $e) {
            echo 'Message ' . $e->getMessage();
        }
    ?>
</p>
<?php ?>
</body>