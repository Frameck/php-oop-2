<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPrime.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/ProductAlimentare.php";
require_once __DIR__ . "/classes/Paypal.php";
require_once __DIR__ . "/classes/CartaCredito.php";


// creo due istanze di utenti
$user1 = new User(9723, 'Mario', 'Rossi');
$userPrime = new UserPrime(6382, 'Giuseppe', 'Verdi');

// stampo sulla pagina
echo "<h3 style='margin-bottom: 0'>Creo le istanze degli utenti</h3>";
echo "<pre>";
print_r($user1);
echo "<br>";
print_r($userPrime);
echo "<br>";
echo "</pre>";


// creo due istanze di prodotti
$product = new Product(7, 'Borraccia', 20);
$productAlimentare = new ProductAlimentare(15, 'Mele', 2, 'Frutta');

// stampo sulla pagina
echo "<h3 style='margin-bottom: 0'>Creo le istanze dei prodotti</h3>";
echo "<pre>";
print_r($product);
echo "<br>";
print_r($productAlimentare);
echo "<br>";
echo "</pre>";


// creo due istanze di meteodi di pagamento
$paypal = new Paypal(35437);
$cartaCredito = new CartaCredito(42621, 1234567812345678, '31/12/2021');

// stampo sulla pagina
echo "<h3 style='margin-bottom: 0'>Creo le istanze dei metodi di pagamento</h3>";
echo "<pre>";
print_r($paypal);
echo "<br>";
print_r($cartaCredito);
echo "<br>";
echo "</pre>";


// agggiungo i prodotti al primo utente
$user1->addToCart($product);
$user1->addToCart($productAlimentare);
// agggiungo i metodi di pagamento al primo utente
$user1->addMetPagamento($paypal);
$user1->addMetPagamento($cartaCredito);

// stampo sulla pagina
echo "<h3 style='margin-bottom: 0'>User 1 con prodotti aggiunti</h3>";
echo "<pre>";
print_r($user1);
echo "<br>";
echo "</pre>";


// agggiungo i prodotti al secondo utente
$userPrime->addToCart($product);
$userPrime->addToCart($productAlimentare);
// agggiungo i metodi di pagamento al secondo utente
$userPrime->addMetPagamento($paypal);
$userPrime->addMetPagamento($cartaCredito);

// stampo sulla pagina
echo "<h3 style='margin-bottom: 0'>User Prime con prodotti aggiunti</h3>";
echo "<pre>";
print_r($userPrime);
echo "<br>";
echo "</pre>";



?>