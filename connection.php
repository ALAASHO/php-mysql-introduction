<?php

function openConnection(){

   // Try to figure out what these should be for you
    $dbhost    = "localhost";
    $dbuser    = "alaa";
    $dbpass    = "123456789"; // Password
    $db        = "BECODE"; // DataBase name

    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Why we do this here


       return $pdo;
}
openConnection();


  /*
$dsn = 'mysql:host=localhost;dbname=BECODE';
$user = 'alaa';
$password = '123456';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
echo "super";


/*
#DataSourceSettings#
#LocalDataSource: BECODE@localhost
#BEGIN#
<data-source source="LOCAL" name="BECODE@localhost" uuid="81c8736e-85f7-40a8-a8b4-bade49eb3bd4"><database-info product="MariaDB" version="10.4.8-MariaDB-1:10.4.8+maria~bionic" jdbc-version="4.2" driver-name="MariaDB Connector/J" driver-version="2.4.1" dbms="MARIADB" exact-version="10.4.8" exact-driver-version="2.4"><extra-name-characters>#@</extra-name-characters><identifier-quote-string>`</identifier-quote-string></database-info><case-sensitivity plain-identifiers="exact" quoted-identifiers="exact"/><driver-ref>mariadb</driver-ref><synchronize>true</synchronize><jdbc-driver>org.mariadb.jdbc.Driver</jdbc-driver><jdbc-url>jdbc:mariadb://localhost:3306/BECODE</jdbc-url><secret-storage>master_key</secret-storage><user-name>alaa</user-name><schema-mapping><introspection-scope><node kind="schema" qname="@"/></introspection-scope></schema-mapping></data-source>
#END#
*/







