<form action="http://www.croadz.com" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="rzp_test_KXP2xmawzPRh8K"
        data-amount="10000"
        data-buttontext="Pay with Razorpay"
        data-name="PHPExpertise.com"
        data-description="Test Txn with RazorPay"
        data-image="http://www.croadz.com/images/portfolio/parexgroup.jpg"
        data-prefill.name="Harshil Mathur"
        data-prefill.email="allan@croadz.com"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>