<?php get_header(); ?>

<section class="introduce">
	<div class="container">
		<div class="introduce-text">
			<h1>技術で価値を創造する</h1>
			<p>
				私たちは、企業が効率を最適化し、持続的な価値を生み出すため<br>の技術ソリューションを開発しています。
			</p>
			<a href="#" class="btn">詳細はこちら</a>
		</div>

	</div>
</section>

<section class="about">
	<div class="container about-inner">
		<div class="about-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/about-images.png" alt="about-images">
		</div>
		<div class="about-text">
			<h2>ABOUT</h2>
			<h3>会社情報</h3>
			<p>
				弊社では、WEBシステムを基にWEBサイト・LP・アプリ開発など幅広い分野の制作に対応しています。
			</p>
			<a href="#" class="btn">詳細はこちら</a>
		</div>
	</div>
</section>



<section class="services">
	<h2 class="section-title">SERVICES</h2>
	<div class=" container services-list">

		<div class="service-item">
			<div class="service-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/services1.png" alt="about-images">
			</div>
			<div class="service-text" style="align-content: space-evenly;">
				<h3>システム開発</h3>
				<p>システム開発は、お客様のニーズに合わせて最適なソフトウェアやシステムを提供し、業務の効率化と信頼性向上をサポートします。</p>
			</div>
		</div>

		<div class="service-item">
			<div class="service-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/services2.png" alt="about-images">
			</div>
			<div class="service-text" style="align-content: space-evenly;">
				<h3>ホームページ制作</h3>
				<p>ホームページ制作は、お客様の情報を効果的に伝える使いやすいウェブサイトを提供します。</p>
			</div>

		</div>

		<div class="service-item">
			<div class="service-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/services3.png" alt="about-images">
			</div>
			<div class="service-text" style="align-content: space-evenly;">
				<h3>アプリ開発</h3>
				<p>アプリ開発は、スマートフォンやタブレット向けの使いやすいアプリを設計・開発するプロセスです。私たちはお客様のニーズに合わせ、便利で魅力的なアプリを提供し、日常やビジネスの効率向上をサポートします。</p>
			</div>
		</div>

	</div>
</section>

<div class="container">
	<div class="column-list">
		<div class="column blog">
			<h2>BLOG</h2>

			<div class="item">
				<div class="date">2022年1月25日</div>
				<div class="tags">
					<span>Laravel</span><span>Docker</span><span>MYSQL</span><span>SSH</span>
				</div>
				<p>Dockerで構築するLaravel開発環境（前編）</p>
			</div>

			<div class="item">
				<div class="date">2022年11月8日</div>
				<div class="tags">
					<span>MAC</span><span>OS</span><span>Update</span><span>SSH</span>
				</div>
				<p>macOS Venturaへのアップデートに伴うSSH接続エラーについて</p>
			</div>

			<div class="item">
				<div class="date">2022年1月23日</div>
				<div class="tags">
					<span>Laravel</span><span>Composer</span><span>NPM</span><span>SSL</span>
				</div>
				<p>CentOS Stream9 LAMP構築から色々含めて</p>
			</div>
		</div>

		<div class="column news">
			<h2>NEWS</h2>

			<div class="item">
				<div class="date">2025年12月8日</div>
				<p>年末年始休業のお知らせ</p>
			</div>

			<div class="item">
				<div class="date">2024年8月2日</div>
				<p>2024年 夏季休業のお知らせ</p>
			</div>

			<div class="item">
				<div class="date">2022年1月1日</div>
				<p>新年明けましておめでとうございます。</p>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>