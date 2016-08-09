<?php
@include("website/parts/top.php");
@include("website/parts/search.php");
@include("website/parts/navigation.php");
?>
<main>
		<section class="login-form">
			<form action="" method="post">
				<h4><i class="fa fa-sign-in" aria-hidden="true"></i> <?=$lang->index("auth")?></h4>
				<label><?=$lang->index("mobnumber")?>: </label>
				<input type="text" name="username" value="" />
				<label><?=$lang->index("pass")?>: </label>
				<input type="password" name="password" value="" />
				<input type="submit" value="<?=$lang->index("signin")?>" />
				<div class="clear"></div>
				<section class="social-login">
					<p class="fb">
						<i class="fa fa-facebook-official" aria-hidden="true"></i> <?=$lang->index("auth")?>
					</p>
					<p class="gplus">
						<i class="fa fa-google-plus-square" aria-hidden="true"></i> <?=$lang->index("auth")?>
					</p>
				</section>
			</form>
		</section>
		<section class="register-form">
			<form action="" method="post">
				<h4><i class="fa fa-plus-circle" aria-hidden="true"></i> <?=$lang->index("registration")?></h4>
				<label><?=$lang->index("mobnumber")?>: </label>
				<input type="text" name="username" value="" />
				<label><?=$lang->index("namelname")?>: </label>
				<input type="text" name="namelname" value="" />
				<label><?=$lang->index("pass")?>: </label>
				<input type="password" name="password" value="" />
				<label><?=$lang->index("repass")?>: </label>
				<input type="password" name="re-password" value="" />
				<input type="submit" value="<?=$lang->index("registration")?>" />
			</form>
		</section>
</main>
<div class="clear"></div>
<?php
@include("website/parts/bottom.php");
?>