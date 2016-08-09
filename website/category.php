<?php
@include("website/parts/top.php");
@include("website/parts/search.php");
@include("website/parts/navigation.php");
?>
<main>
		<section class="filter">
			<section class="box">
				<h2><i class="fa fa-list" aria-hidden="true"></i> კატეგორია</h2>
				<p class="chosen">
					<a href="">ავტო</a>
				</p>
				<p class="chosen">
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					<a href="">მერსედესი</a>
				</p>
				<nav class="sub-category">
					<ul>
						<li><a href="">ალფა რომეო</a></li>
						<li><a href="">BMW</a></li>
						<li><a href="">მერსედესი</a></li>
					</ul>
				</nav>
			</section>

			<section class="box">
				<h2><i class="fa fa-search-plus" aria-hidden="true"></i> გაფართოებული ძებნა</h2>
				<form action="" method="get">
					<p class="chosen">
						ნანახია: <span>526</span> განცხადება
					</p>
					<label>საკვანძო სიტყვა: </label>
					<input type="text" name="search" value="" />
					

					<label>ფასი:</label>
					<section class="range">
						<input type="text" name="" value="" placeholder="დან" />
						<input type="text" name="" value="" placeholder="მდე" />
					</section>

					<label>ოპერატიული მეხსიერება:</label>
					<section class="checkboxes-rounded active r" id="r1" onclick="website.checkboxCheckRounded('r','r1')">
						<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
						<section class="t">1 გეგაბაიტი</section>
					</section>

					<section class="checkboxes-rounded r" id="r2" onclick="website.checkboxCheckRounded('r','r2')">
						<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
						<section class="t">2 გეგაბაიტი</section>
					</section>

					<section class="checkboxes-rounded r" id="r3" onclick="website.checkboxCheckRounded('r','r3')">
						<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
						<section class="t">12 გეგაბაიტი</section>
					</section>


					<label>მონიტორის ზომა: </label>
					<section class="checkboxes active" id="c1" onclick="website.checkboxCheck('c1')">
						<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
						<section class="t">17 დიუმი</section>
					</section>
					<section class="checkboxes" id="c2" onclick="website.checkboxCheck('c2')">
						<section class="b"><i class="fa fa-check" aria-hidden="true"></i></section>
						<section class="t">18 დიუმი</section>
					</section>
					<section class="buttons">
						<a href="" class="button">
							<i class="fa fa-search" aria-hidden="true"></i> ძებნა
						</a>

						<a href="<?=$c::WEBSITE?>map?search=as" class="button" target="_blank">
							<i class="fa fa-map-marker" aria-hidden="true"></i> ძებნა რუკით
						</a>

						<a href="" class="button">
							<i class="fa fa-bookmark" aria-hidden="true"></i> ძიების დამახსოვრება
						</a>

						
					</section>
				</form>
				
			</section>
		</section>
		<section class="product-list">
			<section class="catproduct">
				<section class="img">
					<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" width="100%" alt=""/>
					<p class="info">
						<i class="fa fa-camera-retro" aria-hidden="true"></i> 
						5
					</p>
				</section>
				<section class="content">
					<p class="price">250 GEL</p>
					<p class="title"><a href="">ტყავის დივანი ძალიან იაფად</a></p>
					<p class="stars">
							<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i>
							<i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i>
							<i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>
					</p>
					<p class="description">იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში ...</p>
					<a href="<?=$c::WEBSITE?>view/5151515" class="readmore">
						<i class="fa fa-info" aria-hidden="true"></i> ნახე მეტი
					</a>
				</section>
			</section>

			<section class="catproduct">
				<section class="img">
					<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" width="100%" alt=""/>
					<p class="info">
						<i class="fa fa-camera-retro" aria-hidden="true"></i> 
						5
					</p>
				</section>
				<section class="content">
					<p class="price">250 GEL</p>
					<p class="title"><a href="">ტყავის დივანი ძალიან იაფად</a></p>
					<p class="stars">
							<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i>
							<i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i>
							<i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>
					</p>
					<p class="description">იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში ...</p>
					<a href="<?=$c::WEBSITE?>view/5151515" class="readmore">
						<i class="fa fa-info" aria-hidden="true"></i> ნახე მეტი
					</a>
				</section>
			</section>

			<section class="catproduct">
				<section class="img">
					<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" width="100%" alt=""/>
					<p class="info">
						<i class="fa fa-camera-retro" aria-hidden="true"></i> 
						5
					</p>
				</section>
				<section class="content">
					<p class="price">250 GEL</p>
					<p class="title"><a href="">ტყავის დივანი ძალიან იაფად</a></p>
					<p class="stars">
							<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i>
							<i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i>
							<i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>
					</p>
					<p class="description">იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში ...</p>
					<a href="<?=$c::WEBSITE?>view/5151515" class="readmore">
						<i class="fa fa-info" aria-hidden="true"></i> ნახე მეტი
					</a>
				</section>
			</section>

			<section class="catproduct">
				<section class="img">
					<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" width="100%" alt=""/>
					<p class="info">
						<i class="fa fa-camera-retro" aria-hidden="true"></i> 
						5
					</p>
				</section>
				<section class="content">
					<p class="price">250 GEL</p>
					<p class="title"><a href="">ტყავის დივანი ძალიან იაფად</a></p>
					<p class="stars">
							<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i>
							<i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i>
							<i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>
					</p>
					<p class="description">იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში ...</p>
					<a href="<?=$c::WEBSITE?>view/5151515" class="readmore">
						<i class="fa fa-info" aria-hidden="true"></i> ნახე მეტი
					</a>
				</section>
			</section>

			<section class="catproduct">
				<section class="img">
					<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" width="100%" alt=""/>
					<p class="info">
						<i class="fa fa-camera-retro" aria-hidden="true"></i> 
						5
					</p>
				</section>
				<section class="content">
					<p class="price">250 GEL</p>
					<p class="title"><a href="">ტყავის დივანი ძალიან იაფად</a></p>
					<p class="stars">
							<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i>
							<i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i>
							<i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>
					</p>
					<p class="description">იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში ...</p>
					<a href="<?=$c::WEBSITE?>view/5151515" class="readmore">
						<i class="fa fa-info" aria-hidden="true"></i> ნახე მეტი
					</a>
				</section>
			</section>

			<section class="catproduct">
				<section class="img">
					<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" width="100%" alt=""/>
					<p class="info">
						<i class="fa fa-camera-retro" aria-hidden="true"></i> 
						5
					</p>
				</section>
				<section class="content">
					<p class="price">250 GEL</p>
					<p class="title"><a href="">ტყავის დივანი ძალიან იაფად</a></p>
					<p class="stars">
							<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i>
							<i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i>
							<i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i>
							<i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>
					</p>
					<p class="description">იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში იყიდება ტყავის დივანი ძალიან იაფად, არის ძალიან კარგ მდგომარეობაში ...</p>
					<a href="<?=$c::WEBSITE?>view/5151515" class="readmore">
						<i class="fa fa-info" aria-hidden="true"></i> ნახე მეტი
					</a>
				</section>
			</section>


		</section>
</main>
<div class="clear"></div>
<?php
@include("website/parts/bottom.php");
?>