<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "ql_khach_hang";

try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "
  create table khach_hang(
    ma_khach_hang int not null primary key auto_increment,
    ten_dem varchar(50) not null,
    ten varchar(50) not null,
    dia_chi varchar(255) not null,
    email varchar(50) not null,
    dien_thoai varchar(15) not null
  );
  create table san_pham(
    ma_san_pham int not null primary key auto_increment,
    mo_ta varchar(255) not null ,
    so_luong int not null,
    don_gia double not null,
    ten_sp varchar(50) not null
  );
  create table hoa_don(
    ma_hoa_don int not null primary key auto_increment,
    ngay_mua_hang date not null,
    ma_khach_hang int not null,
    foreign key(ma_khach_hang) references khach_hang(ma_khach_hang) ,
    trang_thai varchar(30) not null
    );
       
  create table hoa_don_chi_tiet(
    ma_hoa_don_chi_tiet int not null primary key auto_increment,
    ma_hoa_don int not null,
    foreign key (ma_hoa_don) references hoa_don(ma_hoa_don),
    ma_san_pham int not null,
    foreign key (ma_san_pham) references san_pham(ma_san_pham),
    so_luong int not null
    );";
  $conn->exec($sql);
  echo "Created successfully";
} catch (PDOException $e) {
  echo "Created failed: " . $e->getMessage();
}
$conn = null;
