<div id="plan_trip">
    <div class="main_form">
        <span class="close" onclick="off()">x</span>
        <div class="form">
            <div class="form_left">
                <h3>How It Works</h3>
                <ul class="list">
                    <li>Tell us details of your holiday plan.</li>
                    <li>After you submit the form, one of our travel experts will get back to you with customised holiday package based on your requirement, within 24 hours.</li>
                    <li>Grab the deal and start packing your bags for an indelible holiday with us.</li>
                </ul>
                <div class="social_icon">
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="call_section">
                    <p>
                        <i class="fa-solid fa-phone"></i>
                        Call Us for details
                    </p>
                    <h4>
                        <a href="">+91-9263577777</a>
                    </h4>
                </div>
            </div>
            <div class="form_right">
                <h2>Request a <span>QUOTE</span></h2>
                <form name="plantripform" onsubmit="return plantrip_validate()" action="./Includes/plantrip_check.php" method="post">
                    <div class="full">
                        <div class="half">
                            <label for="fname">Full Name<span>*</span></label>
                            <input type="text" name="fullname" id="fullname" placeholder="Your name..">
                        </div>
                        <div class="half">
                            <label for="fname">Country<span>*</span></label>
                            <select name="country" id="country">
                                <option value>Select Country</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                    </div>
                    <div class="full">
                        <label for="lname">Email ID<span>*</span></label>
                        <input type="email" name="gmail" id="gmail" placeholder="Email">
                    </div>
                    <div class="full">
                        <label for="tour_description">Tour Description<span>*</span></label>
                        <textarea name="description" id="description" placeholder="Enter Your Tour Description"></textarea>
                    </div>
                    <div class="full">
                        <div class="half">
                            <label for="travel_date">Travel Dates<span>*</span></label>
                            <input type="date" name="travel_date" id="travel_date" placeholder="Travel Dates">
                        </div>
                        <div class="half">
                            <label for="stay">Duration of Stay<span>*</span></label>
                            <input type="date" name="stay" id="stay" placeholder="Duration of the Stay">
                        </div>
                    </div>
                    <div class="full">
                        <div class="half">
                            <label for="person">No. of person<span>*</span></label>
                            <input type="text" name="person_no" id="person_no" placeholder="No. of person">
                        </div>
                        <div class="half">
                            <label for="contact">Contact No.<span>*</span></label>
                            <input type="text" name="contact" id="contact" placeholder="Contact No.">
                        </div>
                    </div>
                    <div class="full">
                        <div class="submit">
                            <input type="submit" value="Submit" name="plantrip_submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>