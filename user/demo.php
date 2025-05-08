<!-- Razorpay Payment Gateway Implimentation  -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
        function pay_now() {
            var amt = jQuery('#amt').val();
            var name = jQuery('#name').val();
            var enroll = jQuery('#enrollment').val();
            var course_type = jQuery('#select1').val();
            var course_name = jQuery('#select2').val();
            var semester = jQuery('#semester').val();
            var category = jQuery('#category').val();
            var student_type = jQuery('#student_type').val();
            var mobile = jQuery('#mobile').val();
            var address = jQuery('#address').val();
            var fname = jQuery('#fname').val();
            var dob = jQuery('#dob').val();
            var gender = jQuery('#gender').val();
            var physical = jQuery('#physical_dis').val();
            var email = jQuery('#email').val();
            var city = jQuery('#city').val();
            var state = jQuery('#state').val();
            var zip = jQuery('#zip').val();
            var year = jQuery('#year').val();
            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + amt + "&name=" + name +"&enroll=" + enroll+"&course_type="+course_type+"&course_name="+course_name+"&semester="+semester+"&category="+category+"&student_type="+student_type+"&mobile="+mobile+"&address="+address+"&fname="+fname+"&dob="+dob+"&gender="+gender+"&physical="+physical+"&email="+email+"&city="+city+"&state="+state+"&zip="+zip+"&year="+year,
                success: function(result) {
                    var options = {
                        "key": "rzp_live_r8oKZCmRglt9xp", // test =  rzp_test_eTpcUPwLzCbf2q  // live =  rzp_live_r8oKZCmRglt9xp
                        "amount": amt * 100,
                        "currency": "INR",
                        "name": "Guru Govind  Boy's Hostel",
                        "description ": "Test Transaction",
                        "image": "https://www.ecommerce-nation.com/wp-content/uploads/2019/02/razorpay.webp",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: 'payment_id='+response.razorpay_payment_id,
                                success: function(result) {
                                    window.location.href = "../hostelproject/report-generate/viewfeereceipt.php?payment_id="+response.razorpay_payment_id;   
                                }
                            });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });
        }
</script>
