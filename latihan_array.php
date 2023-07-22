<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
            // membuat array menggunakan function array
            $arrBuah = array("Mangga", "Jeruk", "Apel", "Anggur");

            // membuat array menggunakan tanda kurung siku
            $arrMovies = ["Dragon Ballz", "King Kong", "Star Wars", "Kungfu Panda", "Doraemon"];

            // membuat array dengan mengakses ke index
            $arrHobbies[0] = "Traveling";
            $arrHobbies[1] = "Hiking";
            $arrHobbies[2] = "Nonton";

            echo $arrBuah[1];
            echo "<br>";
            echo "Jumlah array buah : ". count($arrBuah);
            echo "<br>";
            echo $arrMovies[0];
            echo "<br>";
            echo "Jumlah array movies : ". count($arrMovies);
            echo "<br>";
            echo $arrHobbies[1];
            echo "<br>";
            echo "Jumlah array hobbies : ". count($arrHobbies);
            echo "<br>";
            echo "<br>";

            echo "Menampilkan seluruh element array menggunakan for loop";
            echo "<br>";
            for ($i=0; $i < count($arrBuah) ; $i++) { 
                echo $arrBuah[$i];
                echo "<br>";
            }
            echo "<br>";

            echo "Menampilkan seluruh element array menggunakan foreach sebelum proses penghapusan";
            echo "<br>";
            foreach ($arrMovies as $item) {
                echo $item;
                echo "<br>";
            }
            echo "<br>";

            unset ($arrMovies[3]);

            echo "Menampilkan seluruh element array menggunakan foreach setelah proses penghapusan";
            echo "<br>";
            foreach ($arrMovies as $item) {
                echo $item;
                echo "<br>";
            }
            echo "<br>";

            $arrMovies[3] = "How To Train Your Dragon";

            echo "Menampilkan seluruh element array menggunakan foreach setelah proses penambahan";
            echo "<br>";
            foreach ($arrMovies as $item) {
                echo $item;
                echo "<br>";
            }
            echo "<br>";

            echo "Menampilkan seluruh element array menggunakan for loop";
            echo "<br>";
            print_r($arrMovies);
            for ($i=0; $i < count($arrMovies) ; $i++) { 
                echo $arrMovies[$i];
                echo "<br>";
            }
            echo "<br>";
            
            $arrMovies[] ="I am Legend Part 2";

            echo "Menampilkan seluruh element array menggunakan for loop";
            echo "<br>";
            for ($i=0; $i < count($arrMovies) ; $i++) { 
                echo $arrMovies[$i];
                echo "<br>";
            }
            echo "<br>";

            echo "Menampilkan seluruh element array menggunakan while";
            echo "<br>";
            $a = 0;
            while ($a < count($arrHobbies)) {
                echo $arrHobbies[$a];
                echo "<br>";
                $a++;
            }
            echo "<br>";

            $arrHobbies[2] = "Berkebun";

            echo "Menampilkan seluruh element array menggunakan while";
            echo "<br>";
            $a = 0;
            while ($a < count($arrHobbies)) {
                echo $arrHobbies[$a];
                echo "<br>";
                $a++;
            }
            echo "<br>";

            $arrBuku = [
                "Judul" => "Petualangan Doraemon dengan Mesin Waktu",
                "Pengarang" => "Fujiko F Fujio",
                "Harga" => "Rp. 75.000"
            ];

            echo $arrBuku["Judul"];
            echo "<br>";

            $arrMultiBuku = [
                [
                    "Judul" => "Petualangan Doraemon dengan Mesin Waktu",
                    "Pengarang" => "Fujiko F Fujio",
                    "Harga" => "Rp. 75.000"
                ],
                [
                    "Judul" => "Belajar Survival di Gunung",
                    "Pengarang" => "Dede Inoen",
                    "Harga" => "Rp. 250.000"
                ],
                [
                    "Judul" => "Kiat Kiat Berlari Half Marathon dengan Kecepatan Tinggi",
                    "Pengarang" => "Agus Samudro",
                    "Harga" => "Rp. 150.000"
                ]
            ];
        ?>

        <h1>List Buku Terpopuler Saat Ini</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($arrMultiBuku as $item)
                    {
                ?>
                <tr>
                    <td class="nomor"><?= $no; ?></td>
                    <td><?= $item['Judul']; ?></td>
                    <td><?= $item['Pengarang']; ?></td>
                    <td><?= $item['Harga']; ?></td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>