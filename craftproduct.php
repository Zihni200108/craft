
<?php include('header.php') ?>
<div class="filter-button hide-on-large-only" onclick="$('body').addClass('fixed-screen'); $('.filter-content').removeClass('hide-on-med-and-down');$('.filter-content .btn-cancel').show();$(this).hide();"> <i class="fa fa-filter"></i> Filter</div>
<main>
	<div class="container">
		<div class="row">
			<div class="grid-example col l3">
				<aside class="filter-content hide-on-med-and-down">
					<div class="left-aside">
						<div class="left-category">
							<p class="nav-kategory"><a href=""><span>HOME /<span class="txt-orange"> KURSI</span></a></p>
							<p><a href="">KATEGORI</a></p>
							<p><a href="">MEJA(24)</a></p>
							<p><a href="">KABINET(34)</a></p>
							<p><a href="" class="kategory-active">KURSI(22)</a></p>
							<p><a href="">LEMARI(12)</a></p>
							<p><a href="">AKSESORIS(26)</a></p>		
						</div>
						<div class="row">
							<div class="grid-example col l12 m3 s3 ">
								<div class="filter">
									<p>Harga</p>
									<form>
										<input id="input-harga" placeholder="dari" type="text" name="">
										<a>s/d</a>
										<input id="input-harga" placeholder="hingga" type="text" name="">
										<button type="submit" class="btn btn-warning full-width">Terapkan Filter</button>
										<button type="button" id="button-cancel" class="btn-cancel full-width btn btn-default" style="display:none; margin-top:10px;" onclick="$('body').removeClass('fixed-screen'); $('.filter-content').addClass('hide-on-med-and-down');$('.filter-content .btn-cancel').hide();$('.filter-button').show();">Cancel</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
			<content>
				<div class="grid-example col l9">
					<div class="slide-craft">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img src="assets/img/banner_slide.png"></a>
							<a class="carousel-item" href="#two!"><img src="assets/img/banner_slide.png"></a>
							<a class="carousel-item" href="#three!"><img src="assets/img/banner_slide.png"></a>
						</div>
					</div>
					<nav>

						<div class="nav-wrapper">
							<ul id="nav-mobile" class="left .show-on-medium-and-down">
								<li class="list"><a href="sass.html"><i class="material-icons">format_list_bulleted</i></a></li>
								<li class="apps"><a href="sass.html"><i class="material-icons">apps</i></a></li>
								<li class="search"><a href="javascript:;" onclick="open_search()"><i class="material-icons">search</i></a></li>
								<li class="input-craft"><input placeholder="Placeholder" id="first_name" type="text" class="validate"></li>
							</ul>

							<select class="browser-default">
								<option value="" disabled selected>Show : 9</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
						</div>
					</nav>
					<ul class="sidenav" id="mobile-nav-2">
						<li class="list"><a href="sass.html"><i id="list" class="material-icons">format_list_bulleted</i></a></li>
						<li class="apps"><a href="sass.html"><i id="apps" class="material-icons">apps</i></a></li>
						<li class="search"><a href="sass.html"><i class="material-icons">search</i></a></li>
						<li class="input-craft"><input placeholder="Placeholder" id="first_name" type="text" class="validate"></li>
					</ul>
					<div class="row">
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/singa1.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/pot4.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/gbr3.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/pot22.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/tv.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/gbr3.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/rusa1.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/pot4.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="produk-terpopuler">
								<div class="thumbnail">
									<a href=""><img src="assets/img/rusa1.png"></a>
								</div>
								<div class="content">
									<a href=""><h3>Alfred Royal Vintage Design
									Upholstered Arm Chair</h3></a>
									<a href=""><strong style="">Rp 129.000</strong></a>
								</div>
							</div>
						</div>
					</div>
					<div class="page">
						<ul class="pagination">
							<li class="active"><a href="sass.html">1</a></li>
							<li class="second-active"><a href="sass.html">2</a></li>
							<li class="waves-effect"><a href="sass.html">3</a></li>
							<li class="waves-effect"><a href="sass.html">4</a></li>
						</ul>
					</div>
				</div>
			</content>
		</div>
	</div>
</main>
<?php include('footer.php') ?>
