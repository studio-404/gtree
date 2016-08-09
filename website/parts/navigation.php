<section>
	<nav class="navigation">
		<ul>
		<?php
		if($this->params[0]=="profile"):
			?>
			<li>
				<a href="<?=$c::WEBSITE?>profile/addpost" <?=(!isset($this->params[1]) || $this->params[1]=="addpost") ? "class=\"active\"" : ""?>>
					<i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;
					განცხადებების მართვა
				</a>
			</li>
			<li>
				<a href="<?=$c::WEBSITE?>profile/messages" <?=(isset($this->params[1]) && $this->params[1]=="messages") ? "class=\"active\"" : ""?>>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
					შეტყობინებები
				</a>
			</li>
			<li>
				<a href="<?=$c::WEBSITE?>profile/favourites" <?=(isset($this->params[1]) && $this->params[1]=="favourites") ? "class=\"active\"" : ""?>>
					<i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;
					ფავორიტები
				</a>
			</li>
			<li>
				<a href="<?=$c::WEBSITE?>profile/savedsearch" <?=(isset($this->params[1]) && $this->params[1]=="savedsearch") ? "class=\"active\"" : ""?>>
					<i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp;
					შენახული ძიება
				</a>
			</li>
			<li>
				<a href="<?=$c::WEBSITE?>profile/user" <?=(isset($this->params[1]) && $this->params[1]=="user") ? "class=\"active\"" : ""?>>
					<i class="fa fa-user" aria-hidden="true"></i>&nbsp;
					პროფილი
				</a>
			</li>
			<?php
		else:
			?>
			<li><a href="<?=$c::WEBSITE?>category/auto" <?=(isset($this->params[1]) && $this->params[1]=="auto") ? "class=\"active\"" : ""?>>ავტო</a></li>			
			<li><a href="<?=$c::WEBSITE?>category/property" <?=(isset($this->params[1]) && $this->params[1]=="property") ? "class=\"active\"" : ""?>>უძრავი ქონება</a></li>
			<li><a href="<?=$c::WEBSITE?>category/jobs" <?=(isset($this->params[1]) && $this->params[1]=="jobs") ? "class=\"active\"" : ""?>>სამუშაო</a></li>
			<li><a href="<?=$c::WEBSITE?>category/service" <?=(isset($this->params[1]) && $this->params[1]=="service") ? "class=\"active\"" : ""?>>მომსახურება</a></li>
			<li><a href="<?=$c::WEBSITE?>category/pets" <?=(isset($this->params[1]) && $this->params[1]=="pets") ? "class=\"active\"" : ""?>>ცხოველები</a></li>

			<?php
		endif;
		?>		
		</ul>
	</nav>
</section>