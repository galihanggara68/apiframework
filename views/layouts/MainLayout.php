<html>
<head>
	<title><?= $this->section("title") ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link rel="icon" href="./resources/img/favicon.ico" type="image/x-icon">
	<link href="./resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="./resources/css/app.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<div class="position-relative overflow-hidden text-center text-light bg-transparent header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="navbar-brand">
					<h4 class="my-0 mr-md-auto font-weight-normal">
						<a href="./index" class="text-dark text-decoration-none">
							<img src="./resources/img/icon.png" width="40" height="40" />
							<span>Penjualan</span>
						</a>
					</h4>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarNav">
					<ul class="navbar-nav">
					    <li class="nav-item"><a class="nav-link text-dark" href="./carabergabung">Cara Bergabung</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="./about">Tentang Kami</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="./contact">Hubungi Kami</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="http://report.myastaga.com">Member Area</a></li>
					</ul>
				</div>
			</nav>

		
		<?= $this->section("slider") ?>

	</div>
	
	<div class="container">
		<?= $this->section("content-head") ?>

		<?= $this->content() ?>
		
		<?= $this->section("download-now") ?>

		<?= $this->section("testimoni") ?>

		<?= $this->section("news") ?>
	</div>

		<footer class="pt-4 mt-5 pt-md-5 container-fluid bg-white">
			<div class="row justify-content-md-center">
				<div class="col-12 col-md ml-5 d-none d-md-block">
					<img class="mb-2 mr-2" src="./resources/img/icon.png" alt="" width="24" height="24" /><span class="h4">My Astaga!</span>
					<p><?= $this->getItem("contact")["alamat"]->description ?></p>
				</div>
				<div class="col-6 col-md">
					<h5>Informasi</h5>
					<p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?= $this->getItem("contact")["telepon"]->description ?>"><?= $this->getItem("contact")["telepon"]->description ?></a></p>
					<p style="word-wrap:break-word;"><i class="fas fa-envelope"></i> <?= $this->getItem("contact")["email_footer"]->description ?></p>
					<p><i class="fas fa-clock"></i> <?= $this->getItem("workingHours") ?></p>
				</div>
				<div class="col-6 col-md">
					<h5>Social Media</h5>
					<ul class="list-unstyled text-small">
					<li class="px-2"><a class="text-muted" href="http://facebook.com/<?= $this->getItem("contact")["facebook"]->description ?>" target="_blank"><i class="fab fa-facebook mr-2"></i><?= $this->getItem("contact")["facebook"]->description ?></a></li>
					<li class="px-2"><a class="text-muted" href="http://instagram.com/<?= $this->getItem("contact")["instagram"]->description ?>" target="_blank"><i class="fab fa-instagram mr-2"></i><?= $this->getItem("contact")["instagram"]->description ?></a></li>
					<li class="px-2"><a class="text-muted" href="http://twitter.com/<?= $this->getItem("contact")["twitter"]->description ?>" target="_blank"><i class="fab fa-twitter mr-2"></i><?= $this->getItem("contact")["twitter"]->description ?></a></li>
					</ul>
				</div>
			</div>
		</footer>
		
	<footer class="text-center border-top py-3 bg-light">
		<p>
		<img src="./resources/img/icon.png" alt="" width="24" height="24" />
		&copy; Copyright DMS Co. 2019
		</p>
	</footer>
	<?= $this->section("modals") ?>
	<?= $this->section("scripts") ?>
	<script id='chat-24-widget-code' type="text/javascript">
  !function (e) {
    var t = {};
    function n(c) { if (t[c]) return t[c].exports; var o = t[c] = {i: c, l: !1, exports: {}}; return e[c].call(o.exports, o, o.exports, n), o.l = !0, o.exports }
    n.m = e, n.c = t, n.d = function (e, t, c) { n.o(e, t) || Object.defineProperty(e, t, {configurable: !1, enumerable: !0, get: c}) }, n.n = function (e) {
      var t = e && e.__esModule ? function () { return e.default } : function () { return e  };
      return n.d(t, "a", t), t
    }, n.o = function (e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, n.p = "/packs/", n(n.s = 0)
  }([function (e, t) {
    window.chat24WidgetCanRun = 1, window.chat24WidgetCanRun && function () {
      window.chat24ID = "dde80e8ea624459bd90fac24b1874564", window.chat24io_lang = "en";
      var e = "https://livechat.chat2desk.com", t = document.createElement("script");
      t.type = "text/javascript", t.async = !0, fetch(e + "/packs/manifest.json?nocache=" + (new Date()).getTime()).then(function (e) {
        return e.json()
      }).then(function (n) {
        t.src = e + n["widget.js"];
        var c = document.getElementsByTagName("script")[0];
        c ? c.parentNode.insertBefore(t, c) : document.documentElement.firstChild.appendChild(t);
        var o = document.createElement("link");
        o.href = e + n["widget.css"], o.rel = "stylesheet", o.id = "chat-24-io-stylesheet", o.type = "text/css", document.getElementById("chat-24-io-stylesheet") || document.getElementsByTagName("head")[0].appendChild(o)
      })
    }()
  }]);

</script>
</body>
</html>