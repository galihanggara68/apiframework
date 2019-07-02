<?php
require_once "../config/Base Class/Layout.php";
$layout = new Layout("MainLayout");
?>

<?php $layout->section("title", function(){ ?>
	My Astaga!
<?php }); ?>

<?php $layout->section("header", function($homePage){ ?>
	<h1 class="font-weight-normal" style="font-size:32pt"><?= reset(explode("\n", $homePage["header"]->description)) ?></h1>
	<p class="lead font-weight-normal" style="font-size: 12pt"><?= end(explode("\n", $homePage["header"]->description)) ?></p>
	<a href="#" class="btn btn-lg btn-block btn-primary  modal-trigger col-md-4 offset-4" data-toggle="modal" data-target="#formDaftar" >Daftar Sekarang</a>
<?php }, "homePage"); ?>

<?php $layout->section("slider", function($homePage){ ?>
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="filter:blur(5px)" class="d-block w-100" src="./resources/img/<?= $homePage["header"]->image ?>" alt="First slide">
	  <div style="top:230" class="carousel-caption d-md-block text-center">
		<p><?= $homePage["header"]->description ?></p>
		<p><a href="#" class="btn btn-lg btn-block btn-primary  modal-trigger col-md-4 offset-4" data-toggle="modal" data-target="#formDaftar">Daftar Sekarang</a></p>
	  </div>
    </div>
	<?php foreach($homePage["sliders"] as $slider): ?> 
		<div class="carousel-item">
		  <a href="<?= $slider->link ?>"><img class="d-block w-100" src="./resources/img/<?= $slider->image ?>" alt="First slide"></a>
		  <div class="carousel-caption d-md-block text-center">
			<p><?= $slider->description ?></p>
		  </div>
		</div>
	<?php endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php }, "homePage"); ?>
	
<?php $layout->section("headline_img", function($homePage){ ?>
	<?= print_r($homePage["header"]) ?>
<?php }, "homePage"); ?>

<?php $layout->section("content-head", function(){ ?>
	<h3 class="font-weight-light text-center text-dark text-capitalize">Berbagai produk digital yang tersedia di <span class="font-weight-bold">My Astaga</span></h3>
<?php }); ?>

<?php $layout->content(function($items){ ?>


<div class="modal fade"  id="formDaftar" tabindex="-1" role="dialog" aria-labelledby="formDaftar" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable h-100 mt-5">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Form Daftar</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe width="100%" height="400" scrolling="no" style="position: relative; height: 100%; border: none" src="http://astaga.otoreport.com/formagen.php?id=3fe4664a96f04aa20ce0dda56c329cf39f555d1765259b588e5b44f6029dcfc2c7c27abc8e08a77896004b4d4800ac6b-14"></iframe>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center products">
		<?php foreach($items["products"] as $product): ?>
		<div class="card text-center border-0 col-md-3 col-xs-3 col-sm-3">
		  <div class="card-body">
			<img class="w-md-50 p-2 img-product" src="./resources/img/products/blue-scheme/<?= $product->image ?>" class="position-relative p-3" />
			<a href="#" class="btn btn-lg btn-block btn-outline-primary  modal-trigger" data-toggle="modal" data-target="#productModal" data-type="<?= $product->type ?>"><?= $product->title ?></a>
		  </div>
		</div>
		<?php endforeach; ?>
		<!-- <button class="btn btn-lg btn-primary  row col-8">Pelajari Lebih Lanjut</button> -->
	</div>
<?php }); ?>

<?php $layout->section("modals", function($data){ ?>
	<div class="modal fade"  id="productModal" tabindex="-1" role="dialog" aria-labelledby="pulsaModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 id="productModalTitle" class="modal-title"></h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="overflow:hidden">
				    <div class="text-center">
            		    <div id="modal_loading" class="spinner-border text-primary" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                    </div>
					<div class="navigators d-flex justify-content-between align-items-center">
						<i id="modalLeft" class="fa fa-chevron-circle-left col-md-z text-blue"></i>
						<div class="navs-tabs col-md-10">
							<ul class="nav nav-pills active" id="productModalNavs" role="tablist" style="overflow-y:scroll !important; max-height: 85%;">
							</ul>
						</div>
						<i id="modalRight" class="fa fa-chevron-circle-right col-md-z"></i>
					</div>
					<div class="tab-content" id="productModalTabContent">
						
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade"  id="basicModal" tabindex="-1" role="dialog" aria-labelledby="pulsaModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Pulsa Regular</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
					<div class="modal-footer">
	
					</div>
				</div>
			</div>
		</div>
<?php }); ?>

<?php $layout->section("download-now", function(){ ?>
	<div class="mx-auto mt-5">
		<h4 class="font-weight-bold text-center">Download Aplikasi My Astaga, Gratis</h4>
		<a class="text-light col-md-2 offset-md-5 btn btn-primary" target="_blank"  href="https://play.google.com/store/apps/details?id=com.otoreport.astagareload&hl=en&showAllReviews=true">
		    <i style="font-size:30px" class="fab fa-google-play"></i>
		</a>
		<img class="mx-auto w-50 d-block" src="./resources/img/download.jpg" />
	</div>
<?php }); ?>

<?php $layout->section("testimoni", function(){ ?>
	<h4 class="display-4 text-center">Testimoni</h4>
	<div id="testimoni-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			
		</div>
	</div>
<?php }); ?>

<?php $layout->section("news", function(){ ?>
	<h4 class="display-4 text-center mt-5">News</h4>
	<div id="news-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">

		</ol>
		<div class="carousel-inner">
			
		</div>
	</div>
<?php }); ?>

<?php $layout->section("scripts", function(){ ?>
	<script type="text/javascript" src="./resources/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./resources/js/app.js"></script>
	
<?php }); ?>

<?php $layout->render(); ?>