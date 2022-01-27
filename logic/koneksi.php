<?php
try {
    $pdo_conn = new PDO(
        //Development Connection
        'mysql:host=localhost;dbname=db_rusun',
        'root',
        '',

        //Remote Database Connection
        // 'mysql:host=t;dbname=',
        // '',
        // '',
        array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
    );
} catch (PDOException $e) {
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
    die();
}
