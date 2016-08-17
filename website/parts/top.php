<section class="mask" onclick="website.popup('close')"></section>
<section class="popup">
	<section class="header">განცხადების დამატება <i class="fa fa-times" aria-hidden="true" onclick="website.popup('close')"></i></section>
	<section class="content">
		<form action="" method="get">
			<label>კატეგორია</label>
			<section class="select-box" id="icat1">
				<div class="selected">
					<span>აირჩიეთ</span> <i class="fa fa-arrow-down" aria-hidden="true"></i>
				</div>
				<select class="selector" data-selectbox="icat1" data-status="closed">
					<optgroup label="ავტო"> 
						<option>BMW</option>
						<option>BMW</option>
						<option>BMW</option>
					</optgroup>
					<optgroup label="ავტო">
						<option>უძრავი ქონება</option>
						<option>უძრავი ქონება</option>
						<option>უძრავი ქონება</option>
					</optgroup>
				</select>
			</section>			

			<label>საკვანძო სიტყვა: </label>
			<input type="text" name="search" value="">
			

			<label>ოპერატიული მეხსიერება:</label>
			<section class="checkboxes-rounded active r" id="p1" onclick="website.checkboxCheckRounded('r','p1')">
				<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
				<section class="t">1 გეგაბაიტი</section>
			</section>

			<section class="checkboxes-rounded r" id="p2" onclick="website.checkboxCheckRounded('r','p2')">
				<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
				<section class="t">2 გეგაბაიტი</section>
			</section>

			<section class="checkboxes-rounded r" id="p3" onclick="website.checkboxCheckRounded('r','p3')">
				<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
				<section class="t">12 გეგაბაიტი</section>
			</section>


			<label>მონიტორის ზომა: </label>
			<section class="checkboxes active" id="pp1" onclick="website.checkboxCheck('pp1')">
				<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
				<section class="t">17 დიუმი</section>
			</section>
			<section class="checkboxes" id="pp2" onclick="website.checkboxCheck('pp2')">
				<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
				<section class="t">18 დიუმი</section>
			</section>

			<label>ადგილმდებარეობა: <em>( გადაადგილეთ მარკერი )</em></label>
			<section class="range">
				<input type="text" name="" id="lat" value="41.689747753270375" disabled="disabled" />
				<input type="text" name="" id="lng" value="44.79520250251619" disabled="disabled" />
			</section>
			<section class="addMapCordinates" id="addMapCordinates"></section>

        	<section class="buttons" style="margin-top: 20px;">
				<p class="button">
					განცხადების დამატება
				</p>				
			</section>
		</form>
	</section>
</section>
<header>
	<section class="logo"><i class="fa fa-barcode" aria-hidden="true"></i></section>
	<section class="top-nav">
		<nav class="desktop">
			<ul>
				<li class="home">
					<a href="<?=$c::WEBSITE?>" <?=(!isset($this->params[0]) || $this->params[0]=="home") ? "class=\"active\"" : ""?> data-title="<?=$lang->index("home")?>"><i class="fa fa-home" aria-hidden="true"></i></a>
				</li>
				

				<?=$cache->index("topMenu")?>
				
				
				<li>
					<a href="javascript:void(0)" <?=(isset($this->params[0]) && $this->params[0]=="addpost") ? "class=\"active\"" : ""?> onclick="website.popup('open')"><?=$lang->index("addpost")?></a>
				</li>
			</ul>
		</nav>
		<nav class="mobile" data-status="closed" onclick="website.mobileNavClick()">
			<p><i class="fa fa-bars" aria-hidden="true"></i></p>
			<ul></ul>
		</nav>
	</section>
</header>