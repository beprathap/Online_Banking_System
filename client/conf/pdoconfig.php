<?php
$DB_host = "bank.c5ijcpjn73cx.us-east-1.rds.amazonaws.com";
$DB_user = "admin";
$DB_pass = "Admin1234";
$DB_name = "internetbanking";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
