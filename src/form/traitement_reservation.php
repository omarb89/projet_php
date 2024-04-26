<?php
use Src\Classes\Customer;

require_once (__DIR__ . "/../../bootstrap.php");
use Src\Classes\Reservation;

var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $name = htmlspecialchars($name);
    $email = $_POST['email'] ?? '';
    $email = htmlspecialchars($email);
    // Création d'un obet réservation
    $reservation = new Reservation();
    $reservation->setPaymentMethod('Paypal')
        ->setArrivalDate(htmlspecialchars($_POST['start_date']))
        ->setDepartureDate(htmlspecialchars($_POST['end_date']));
    $customer = new Customer();
    $customer->setName(htmlspecialchars($_POST['end_date']));

    var_dump($reservation);
    // Faire appel à l'entityManager
    $entityManager->persist($reservation);
    $entityManager->flush();
    echo "Utilisateur enregistré avec succès.";
}


// function bookRoom($userId, $roomId, $startDate, $endDate)
// {
//     try {
//         // Récupération de l'utilisateur
//         $user = $entityManager->find('User', $userId);

//         // Vérification si l'utilisateur existe
//         if (!$user) {
//             throw new Exception("Utilisateur introuvable avec l'ID : $userId");
//         }

//         // Récupération de la chambre
//         $room = $entityManager->find('Room', $roomId);

//         // Vérification si la chambre existe
//         if (!$room) {
//             throw new Exception("Chambre introuvable avec l'ID : $roomId");
//         }

//         // Création d'une nouvelle réservation
//         $startDateObj = new \DateTime($startDate);
//         $endDateObj = new \DateTime($endDate);

//         // Persistance de la nouvelle réservation dans la base de données
//         $entityManager->beginTransaction();

//         $booking = new Booking($user, $room, $startDateObj, $endDateObj);
//         $entityManager->persist($booking);
//         $entityManager->flush();

//         $entityManager->commit();
//     } catch (Exception $e) {
//         $entityManager->rollback();
//         // Gérer l'exception, par exemple en la journalisant ou en la renvoyant
//         throw $e;
//     }
// }
