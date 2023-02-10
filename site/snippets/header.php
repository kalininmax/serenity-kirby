<header id="header" class="fixed-top d-flex align-items-center">
	<div class="container d-flex align-items-center justify-content-between">

		<div class="logo">
			<h1 class="text-light"><a href="<?= $site->url() ?>">Serenity</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav id="navbar" class="navbar">
			<ul>
				<?php foreach($site->children()->listed() as $sitePage): ?>
					<li <?= e($sitePage->hasChildren(), 'class="dropdown"') ?>>
						<?php if($sitePage->template() == 'about'): ?>
							<a <?php e($sitePage->isActive(), 'class="active"') ?>><span>About</span> <i class="bi bi-chevron-down"></i></a>
							<ul>
								<li><a <?php e($sitePage->isActive(), 'class="active" ') ?>href="<?= $sitePage->url() ?>"><?= $sitePage->title() ?></a></li>
								<?php foreach($sitePage->children() as $innerPage): ?>
									<li><a <?php e($innerPage->isActive(), 'class="active" ') ?>href="<?= $innerPage->url() ?>"><?= $innerPage->title() ?></a></li>
								<?php endforeach ?>
							</ul>
						<?php else: ?>
							<a <?php e($sitePage->isActive(), 'class="active" ') ?>href="<?= $sitePage->url() ?>"><?= $sitePage->title() ?></a>
						<?php endif ?>
					</li>
				<?php endforeach ?>

				<li><a class="getstarted" href="/about">Get Started</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>

	</div>
</header>