<!--here we fetch the primary color for the Buttons and the Background-->
<?php $color = $site->bgcolor();  ?>

<style type="text/css">
	.btn-primary,
	.btn-primary:hover,
	.btn-primary:focus,
	.btn-primary:active,
	.btn-primary:active:focus {
		background: <?= $color ?>;
	}

	.bg-primary {
		background: <?= $color ?>;
	}
</style>
