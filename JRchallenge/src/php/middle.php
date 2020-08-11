<?php
    session_start();
    class ChicSofa{
        public $nume;
        public $pret;
        public $pret_redus;
        public $number_rating;
        public $poza1;
        public $poza2;
        public $poza3;
        public $poza4;
        public $poza5;
        public $poza6;
        public $poza7;
        public $number_stars;
        public $email;
        public $cartnumber;
        function __construct($nume, $pret, $pret_redus, $number_rating, $poza1, $poza2, $poza3, $poza4, $poza5, $poza6, $poza7, $cartnumber, $email){
            $this->nume = $nume;
            $this->pret= $pret;
            $this->pret_redus = $pret_redus;
            $this->number_rating = $number_rating;
            $this->poza1 = $poza1;
            $this->poza2 = $poza2;
            $this->poza3 = $poza3;
            $this->poza4 = $poza4;
            $this->poza5 = $poza5;
            $this->poza6 = $poza6;
            $this->poza7 = $poza7;
            $this->number_stars = $number_stars;
            $this->cartnumber = $cartnumber;
            $this->email = $email;
        }
    }

    $obiect = new ChicSofa("Chic Sofa", "$1,499", "$1,999", 0, "images/chic_sofa/1.PNG", "images/chic_sofa/2_550x678.png","images/chic_sofa/3.png", "images/chic_sofa/4.jpg", "images/chic_sofa/5.jpg", "images/chic_sofa/6.jpg", "images/chic_sofa/7.jpg", 0, 0, "email");
    $_SESSION['counter'] = (!$_SESSION['counter']) ? 0 : $_SESSION['counter'];
    if($_POST['submit'] && isset($_POST['star'])) {
        $_SESSION['counter']++;
        $obiect->number_rating =  $_SESSION['counter'];
        $obiect->number_stars += $_POST['star'];
        if($obiect->number_stars == 1){
            echo "<script type='text/javascript'>alert(' Thank you for the $obiect->number_stars star review!');</script>";
        }
        if($obiect->number_stars > 1){
            echo "<script type='text/javascript'>alert(' Thank you for the $obiect->number_stars stars review!');</script>";
        }
    }
    else{
        $obiect->number_rating =  $_SESSION['counter'];
    }
    $obiect->cartnumber = $_POST['quantity'];
    $obiect->email = $_POST['email'];
