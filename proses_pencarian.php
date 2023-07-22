<?php
    $data_buku = [
        [
            "judul" => "Tutorial Pemrograman Web PHP dan MySQL",
            "penulis" => "Ronald  Renold Roland",
            "harga" => "Rp. 250.000,-",
            "cover" => "gambar1.jpg"
        ],
        [
            "judul" => "Petualangan Son Go Ku di Planet Namec",
            "penulis" => "Thomas Grey",
            "harga" => "Rp. 100.000,-",
            "cover" => "gambar2.jpg"
        ],
        [
            "judul" => "Jago Pemrograman Game Engine Menggunakan Unity 3D",
            "penulis" => "Jefry Way",
            "harga" => "Rp. 350.000,-",
            "cover" => "gambar3.jpeg"
        ],
        [
            "judul" => "Keterampilan Jago Survival di Alam Liar",
            "penulis" => "Dede Inoen",
            "harga" => "Rp. 500.000,-",
            "cover" => "gambar4.jpeg"
        ]
    ];

    if ($_POST) {
        $item_cari = $_POST['input_judul'];
        $array_hasil_pencarian = array();

        $i = 0;
        foreach ($data_buku as $item) {
            if (strstr($item['judul'], $item_cari)) {
                $array_hasil_pencarian[$i]['judul'] = $item['judul'];
                $array_hasil_pencarian[$i]['penulis'] = $item['penulis'];
                $array_hasil_pencarian[$i]['harga'] = $item['harga'];
                $array_hasil_pencarian[$i]['cover'] = $item['cover'];
                $i++;
            } // end of if
        } // end of foreach

        if (count($array_hasil_pencarian)==0){
            $paramBooks = "";
        } else {
            $paramBooks = json_encode($array_hasil_pencarian);
        }

        header("Location: index.php?books=" . $paramBooks . "&judul=" . $item_cari);
    } // end of post
?>