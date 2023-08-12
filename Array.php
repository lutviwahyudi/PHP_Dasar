<?php
    
    //membuat data didalam array values 
    $values = array(1,2,3,4);

    //mengubah data
    $values[0] = "lutvi";
    var_dump($values);

    //menampilkan data sesuai kotak indexnya
    var_dump($values[3]);

    //menambahkan data array
    $values[] = 5;
    var_dump($values);

    //menghitung data array 
    var_dump(count($values));

    //map array 
    $nama = array(
        
        'id' => 1,
        'nama' => "lutvi",
        'umur' => 30,
        'address' => array(
            'kota' => "depok",
            'kabupaten' => "jawa barat" 
        )
    
    );

    //ambil data dari lemari nama
    var_dump($nama);

    //ambil salah satu data dari lemari nama
    var_dump($nama["id"]);

    //ambil salah satu data array dalam array
    var_dump($nama["address"]["kota"]);

?>