<?php

$masyvas = [
    "Klase" => [
        "5B" => [
            "Vardas" => [
               1=> "Simas",
               2=> "Kornelijus",
               3=> "Giedrius",
               4=> "Ieva",
               5=>  "Gerda",
               6=> "Agne",
               7=> "Laura",
               8=> "Rokas",
               9=> "Ignas",
               10=> "Erika"
            ],
            "Pavardė" => [
                1=> "Habdankas",
                2=> "Gaiziunas",
                3=> "Stankevicius",
                4=> "Pavardenyte",
                5=> "Nuosedyte",
                6=> "Juskyte",
                7=> "Stankeviciute",
                8=> "Petrauskas",
                9=> "Linkas",
                10=> "Lingyte"
            ],
            "Kontrolinių darbų įvertinimai" => [
                $ivertinimai = array(5, 9, 10)
            ],
            "Duomenų formavimo data" => [
                $data = date("Y-m-d H:i:s")
            ]

        ]
    ]
];
$vidurkis = array_sum($ivertinimai) / count($ivertinimai);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masyvas_uzduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="my-table d-flex">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Klasė</th>
                <th scope="col">Kodas</th>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Kontrolinių darbų vidurkis</th>
                <th scope="col">Duomenų formavimo data</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][1]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][1]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][2]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][2]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][3]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][3]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][4]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][4]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][5]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][5]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][6]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][6]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][7]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][7]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][8]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][8]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][9]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][9]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            <tr>
                <th scope="row">5B</th>
                <td><?php echo rand(1000,5000); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Vardas"][10]); ?></td>
                <td><?php echo strtoupper($masyvas["Klase"]["5B"]["Pavardė"][10]); ?></td>
                <td><?php echo $vidurkis; ?></td>
                <td><?php echo $data; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>


