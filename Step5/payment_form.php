<h3>Sign up and buy a quote now! Only $535.00!</h3>
<form action="charge.php" method="POST">
	<input type="hidden" name="single_purchase" value="single_purchase" />
	<input type="password" name="password" placeholder="Password" />
	<script
	src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	data-key="<?php echo $stripe['publishable_key']; ?>"
	data-description="One Wilde quote"
	data-amount="53500">
	</script>
</form>
<hr />
<?php require_once('./login_form.php'); ?>
<hr />
<form action="charge.php" method="post">
	<h3>Sign up to get a new quote every day! Just $400 a month!</h3>
	<input type="hidden" name="subscription_purchase" value="subscription_purchase" />
	<input type="password" name="password" placeholder="Password" />
	<script
	src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	data-key="<?php echo $stripe['publishable_key']; ?>"
	data-description="Wilde monthly subscription"
	data-amount="40000">
	</script>
</form>
