<?php
require_once BASE_PATH . '/handlers/rooms.handlers.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/templates/footer.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';

head();
?>

 <link rel = "stylesheet" href = "/page/room/assets/css/style.css">

<main class = "containerR">
    <div class = "descriptionR">
        <h2>Available Hotel Rooms (as of <?php echo date("F j, Y"); ?>)</h2>

        <?php
        $availableRooms = [];
        $availableRoomsDetails = [];
        
        foreach($Rooms["rooms"] as $roomKey => $room){
            if($room["availability"]){
                $availableRooms[] = $room["name"];
                $availableRoomsDetails[] = $room;
            }
        }

        $roomList = implode(", ", $availableRooms);
        echo "<p><strong>Available Rooms: </strong> $roomList</p>";

        echo "<h3>Available Room Details: </h3>";
        echo "<div class ='room-grid'>";
        foreach($availableRoomsDetails as $room){
            echo "<div class = 'room-card'>";
            echo "<h4>" . strtoupper($room["name"]) . "</h4>";
            echo "<p>Capacity: {$room["capacity"]} people</p>";
            echo "<p>Price: ₱" . number_format($room["price"], 2, ".", ",") . "</p>";
            
            $amenities = explode(",", $room["amenities"]);
            echo "<p>Amenities: </p> <ul>";
            foreach($amenities as $amenity){
                echo "<li>$amenity</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
        echo "</div>";

        echo "<hr><h3>All Room Details</h3>";
        echo "<div class = 'room-grid'>";
        foreach($Rooms["rooms"] as $room){
            echo "<div class ='room-card'>";
            echo "<h4>" . strtoupper($room["name"]) . "</h4>";
            echo "<p>Capacity: {$room["capacity"]} people</p>";
            echo "<p>Availability: " . ($room["availability"] ? "AVAILABLE" : "NOT AVAILABLE") . "</p>";
            echo "<p>Price: ₱" . number_format($room["price"], 2, ".", ",") . "</p>";

            $amenities = explode(",", $room["amenities"]);
            echo "<p>Amenties: </p> <ul>";
            foreach($amenities as $amenity){
                echo "<li>$amenity</li>";
            }
            echo "</ul>";
            echo "</div>";
        }

        echo "</div>";

        ?>

        </div>
    </main>


<?php 
footer();
?>