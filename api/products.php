<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "lazada";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET["id"]))
    {
        $id  = $_GET["id"];
        $query = "SELECT * FROM tb_products WHERE id = $id";
    }else if(isset($_GET["category"]))
    {
        $category  = $_GET["category"];
        $query = "SELECT * FROM tb_products WHERE category = '$category'";
    }else{
        $query = "SELECT * FROM tb_products";
    }
    
    $result = mysqli_query($conn, $query);
    $data = array();

     while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
    }

    $response = [
            "status" => 200,
            'message' => 'Data berhasil diambil',
            "data" => $data
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
    
}

?>