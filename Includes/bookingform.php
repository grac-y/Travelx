<div class="booking_enquiry" id="book-form">
    <div class="book_close">
        <span class="close" onclick="book_close()"><i class="fa-solid fa-circle-xmark"></i></span>
    </div>
    <div class="enquiry_container">
        <i class="fa-solid fa-map-location-dot"></i>
        <h2>Fill Booking Form Below</h2>
        <form action="../Includes/bookingform_check.php" method="post" class="enquiry_form">
            <div class="form_group">
                <label for="">Your Full Name</label>
                <input type="text" name="en_name" id="en_name">
            </div>
            <div class="form_group">
                <label for="">No. of Persons</label>
                <input type="number" name="en_persons" id="en_persons">
            </div>
            <div class="form_group">
                <div class="form_half">
                    <label for="">Departure Date</label>
                    <input type="date" name="en_departure" id="en_departure">
                </div>
                <div class="form_half">
                    <label for="">No. of Days</label>
                    <input type="number" name="en_days" id="en_days">
                </div>
            </div>
            <div class="form_group">
                <label for="">Trip Name</label>
                <input type="text" name="en_trip" id="en_trip">
            </div>
            <div class="form_group">
                <label for="">Email</label>
                <input type="email" name="en_email" id="en_email" required>
            </div>
            <div class="form_group">
                <label for="">Contact No</label>
                <input type="tel" name="en_contact" id="en_contact">
            </div>
            <div class="form_group">
                <button type="submit" name="en_submit" id="en_submit">Book Now</button>
            </div>
        </form>
    </div>
</div>