<?php 
    $title = '01- Hello World';
    $description  = 'How to show text, insert html even with variables';

    include 'template/header.php';
    
        echo "<h3>Hello Wold PHP!</h3>";
        print('<p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint velit eos aperiam repellendus qui minus nemo sunt. Rem, repellat reiciendis</p> <br>');

        echo('<br>echo con parametro');
    include 'template/footer.php';
