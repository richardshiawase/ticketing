<?php
require_once "Ticket.php";
require_once "Request.php";
require_once "User.php";
require_once "Admin.php";
require_once "Database.php";

$ticket = new Ticket();
$request = new Request();
$user = new User();
$admin = new Admin();
$db = new Database();

$admin->setUsername("FP");
$admin->setId(1);
$admin->setNama("Fredrick Panjaitan");
$user->setUsername("Andi Ujang");
$request->setId("000111");
$request->setCategory("Computer");
$request->setDescription("Komputer rusak monitornya");
$user->setRequest($request);
$ticket->setId(101);
$ticket->setRequest($request);
$ticket->setAdmin($admin);
$ticket->setUser($user);
$id = $admin->getId();
$uname = $admin->getUsername();
$nama = $admin->getNama();

$db->executeQuery("INSERT INTO admin VALUES ('$id','$uname','$nama')");

echo "Nama User: ".$ticket->getUser()->getUsername()."<br>";
echo "Request Number: ".$ticket->getRequest()->getId()."<br>";
echo "Request Category : ".$ticket->getRequest()->getCategory()."<br>";
echo "Request Description: ".$ticket->getRequest()->getDescription()."<br>";
echo "Ticket yang dikeluarkan: ".$ticket->getId()." untuk request dengan nomor "
    .$ticket->getRequest()->getId()."<br>";
echo "Ticket dikerjakan oleh : ".$ticket->getAdmin()->getNama();


// var_dump($user->getRequest());
echo "<html><head><title>Ticketing System</title></head><body>";



?>