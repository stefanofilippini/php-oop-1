<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        public $title;
        public $director;
        public $actor;
        public $year;

        function __construct($title,$director,$actor,$year) {
            $this->title = $title;
            $this->director = $director;
            $this->actor = $actor;
            $this->year = $year;
        }
        
        // verifico se il film è publicato in questo anno
        public function setYear() {
            if($this->year == date('Y')){
                return "<h2>In programmazione</h2>";
            } else if($this->year < date('Y')){
                return "<h2>Non più in programmazione</h2>";
            } else{
                return "<h2>Non ancora in programmazione</h2>";
            }
        }

    };

    //publicazione di vari film

    $movie1 = new Movie('Avatar', 'James Cameron', 'Sam Worthington', 2009);
    var_dump($movie1);

    echo $movie1->setYear() . "<hr>";

    $movie2 = new Movie('Jack Reacher', 'Christopher McQuarrie', 'Tom Cruise', 2022);
    var_dump($movie2);

    echo $movie2->setYear() . "<hr>";

    $movie3 = new Movie('Harry potter', 'Chris Columbus', 'Daniel redcliffe', 2031);
    var_dump($movie3);

    echo $movie3->setYear() . "<hr>";
?>