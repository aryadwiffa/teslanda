<?php
$arr = ["bkd" => 
        [
            "eselon" => [
                [
                "nama" => "wahyu",
                "alamat" => "malang"
                ],
            ],
            "jfu" => [
                [
                "nama" => "agung",
                "alamat" => "malang"
                ]
            ],
        ],
        "Dinas Pendidikan" => [
                "jfu" => [
                [
                "nama" => "bawon",
                "alamat" => "malang"
                ]
                ],
        ]
];
echo "<pre>";
print_r($arr);

$a = each($arr);
echo $a[0]."<br>";

foreach ($arr as $a => $val){
    foreach ($val as $b => $c){
        foreach ($c as $d => $value){
                echo $value['nama'] ." adalah pegawai ".$b." ".$a."<br>";    
         }
    }
}
?>