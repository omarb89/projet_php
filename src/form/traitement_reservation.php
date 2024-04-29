<?php
use Src\Classes\Customer;
use Src\Classes\Reservation;
use Src\Classes\Room;

require_once (__DIR__ . "/../../bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client = $_POST['nom'] ?? '';
    $client = htmlspecialchars($client);
    $email = $_POST['email'] ?? '';
    $email = htmlspecialchars($email);
    $services = $_POST['services'] ?? [];
    $servicesString = implode(', ', $services);
    $roomName = $_POST['type_chambre'] ?? '';
    $roomName = htmlspecialchars($roomName);
    $totalPrice = htmlspecialchars($_POST['total_price'] ?? '0');
    $customer = new Customer();
    $customer->setName($client)->setFirstName($client)->setIdNumber(rand(0, 1000));
    $room = $entityManager->find(Room::class, 1);
    // Création d'un objet réservation
    $reservation = new Reservation();
    $reservation->setPaymentMethod('Paypal')
        ->setArrivalDate(htmlspecialchars($_POST['start_date'] ?? ''))
        ->setDepartureDate(htmlspecialchars($_POST['end_date'] ?? ''))
        ->setEmail($email)
        ->setPhone(htmlspecialchars($_POST['telephone'] ?? ''))
        ->setServices($servicesString)
        ->setRoom($room)
        ->setClient($customer)
        ->setTotalPrice($totalPrice);

    $entityManager->persist($reservation);
    $entityManager->flush();

    echo "Réservation réussie";
}