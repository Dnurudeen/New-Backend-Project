<?php
  include 'dbconnect.php';

  if(isset($_POST['submit'])){
    $name = $_POST['uname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $inputdata = mysqli_query($conn, "INSERT INTO `new_users`(`fullname`, `telephone`, `mailaddress`) VALUES ('$name', '$phone', '$email')");
  
    if ($inputdata == true){
      echo ("Registration Successful!");
    }else{
      echo ("Registration failed!");
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Server</title>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <!-- <script src="https://js.paystack.co/v1/inline.js"></script> -->
    <script src="https://checkout.flutterwave.com/v3.js"></script>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="username" name="uname">
        <input type="text" placeholder="phone" name="phone">
        <input type="email" placeholder="email" name="email">

        <input type="submit" name="submit" value="submit">
    </form>

    <!-- <div>
    <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:7063587002964672512" height="584" width="604" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
    </div>

    <div>
    <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="HORIZONTAL" data-vanity="nurudeen-daniju-b7b57619a" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://ng.linkedin.com/in/nurudeen-daniju-b7b57619a?trk=profile-badge">Nurudeen Daniju</a></div>
              
    </div>

    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63428.01790091705!2d3.306661361274093!3d6.489852969855766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c1aaf26ce7d%3A0x4d2fd698b58de1a3!2sSurulere%2C%20Ikeja%2C%20Lagos!5e0!3m2!1sen!2sng!4v1684142704986!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->

    <!-- <div>
    <form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="hidden" id="amount" value="1999" required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Order Now </button>
  </div>
</form>
    </div> -->

    <!-- <div>
    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
  <div>
    Your order is ₦3,400
  </div>
  <input type="hidden" name="public_key" value="FLWPUBK_TEST-SANDBOXDEMOKEY-X" />
  <input type="hidden" name="customer[email]" value="jessepinkman@walterwhite.org" />
  <input type="hidden" name="customer[name]" value="Jesse Pinkman" />
  <input type="hidden" name="tx_ref" value="bitethtx-019203" />
  <input type="hidden" name="amount" value="1" />
  <input type="hidden" name="currency" value="NGN" />
  <input type="hidden" name="meta[token]" value="54" />
  <input type="hidden" name="redirect_url" value="https://demoredirect.localhost.me/" />
  <button type="button" id="start-payment-button" onclick="makePayment()">Pay Now</button>
</form>
    </div> -->
</body>
</html>

<!-- <script>
    function makePayment() {
  FlutterwaveCheckout({
    public_key: "FLWPUBK_TEST-044e7163292b9b7d4f0d4db5022227c4-X",
    tx_ref: "titanic-48981487343MDI0NzMx",
    amount: 1,
    currency: "NGN",
    payment_options: "card, mobilemoneyghana, ussd",
    redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
    meta: {
      consumer_id: 23,
      consumer_mac: "92a3-912ba-1192a",
    },
    customer: {
      email: "rose@unsinkableship.com",
      phone_number: "08102909304",
      name: "Rose DeWitt Bukater",
    },
    customizations: {
      title: "The Titanic Store",
      description: "Payment for an awesome cruise",
      logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
    },
  });
}
</script> -->
<!-- <script>
    const got = require("got");

try {
    const response = await got.post("https://api.flutterwave.com/v3/payments", {
        headers: {
            Authorization: `Bearer ${process.env.FLW_SECRET_KEY}`
        },
        json: {
            tx_ref: "FLWPUBK_TEST-044e7163292b9b7d4f0d4db5022227c4-X",
            amount: "100",
            currency: "NGN",
            redirect_url: "https://webhook.site/9d0b00ba-9a69-44fa-a43d-a82c33c36fdc",
            meta: {
                consumer_id: 23,
                consumer_mac: "92a3-912ba-1192a"
            },
            customer: {
                email: "user@gmail.com",
                phonenumber: "080****4528",
                name: "Yemi Desola"
            },
            customizations: {
                title: "Pied Piper Payments",
                logo: "http://www.piedpiper.com/app/themes/joystick-v27/images/logo.png"
            }
        }
    }).json();
} catch (err) {
    console.log(err.code);
    console.log(err.response.body);
}
</script> -->

<!-- <script>
    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_f929791ee9d7cb83061fc2d5c68797dd6ccf143e', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}
</script> -->