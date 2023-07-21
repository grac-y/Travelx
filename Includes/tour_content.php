<div class="tour_card_row">
    <div class="image_container">
        <img src="../Images/<?php echo $image; ?>" alt="">
    </div>
    <div class="content_container">
        <h1><?php echo $trip_name; ?></h1>
        <span><?php echo $nights . " Nights-" . $days . " Days"; ?></span>

        <h2>Inclusions</h2>
        <ul>
            <li><i class="fa-regular fa-building"></i>
                Accomodation
            </li>
            <li>
                <i class="fa-solid fa-car-side"></i>
                Travel
            </li>
            <li>
                <i class="fa-solid fa-utensils"></i>
                Meal
            </li>
            <li>
                <i class="fa-solid fa-binoculars"></i>
                Sightseeing
            </li>
        </ul>
        <div class="amount">
            <div class="rent">Rs. <?php echo $price; ?>/-</div>
            <div class="rent_unit">per person</div>
        </div>
        <div class="button_container">
            <a href="#" onclick="book('<?php echo $trip_name; ?>')" >Book Now</a>
        </div>
    </div>
</div>