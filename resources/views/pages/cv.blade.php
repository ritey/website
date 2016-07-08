@extends('layouts.master')

@section('metas')

<title>David Wright - London Based Laravel Web Developer</title>
<meta name="description" content="David Wright PHP Laravel developer in London, UK. With over 10 years of web development experience and still plenty of passion for learning web technologies. Freelance Larvel Developer London.">

@endsection


@section('head')
 <link href="{{ route('cv') }}" rel="canonical" />
@endsection

@section('content')

<section class="module-small">

	<div class="container">

		<div class="row">

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">David Wright</h4>

				<p>Thanks for checking out my development abilities. I'll assume if you're reading this you might be interested in what I could offer you or your company.</p>

				<p>I've developed websites and web applications since completing university over 12 years ago, in a wide range of areas spanning educational applications for students, to a national donation platform.</p>

				<p>Typical of the <strong>modern developer</strong>, I've experienced many different languages and development methodologies which has assisted in a wide range of understanding and expertise, however, my primary focus is as a <strong>PHP developer</strong> typically using the <strong>Laravel</strong> framework.</p>

			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Senior Developer</h4>

				<p>Over the years I've worked in various sized teams, on my own, and currently heading up a <strong>technical development</strong> team for a digital agency based in <strong>London</strong>. My work has typically been in the commercial space, however, I've also released some open source libraries on behalf of the company employing me and also on a personal level.</p>

				<p>I have a keen interest in motorsport, entrepreneurial activities and the evolving world of technology and I have complete respect for web designers <em>(I'm not a designer and the themes/designs in the projects I've worked on are not my work).</em></p>

			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Recent Projects</h2>

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a rel="nofollow" target="_blank" href="http://pitchy.io" target="_blank">
							<img src="/assets/images/logos/pitchy-logo.png" alt="Pitchy">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a rel="nofollow" target="_blank" href="https://www.nationalfundingscheme.org" target="_blank">
							<img src="assets/images/logos/donate-logo-black.png" alt="DONATE">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a rel="nofollow" target="_blank" href="http://www.doblotto.com" target="_blank">
							<img src="assets/images/logos/doblotto-logo.png" alt="Doblotto">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a rel="nofollow" target="_blank" href="http://www.nuffieldresearchplacements.org" target="_blank">
							<img src="assets/images/logos/nuffield-logo.png" alt="Nuffield Research Placements">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

			</div>

		</div>

	</div>

</section>

<section class="module-small bg-light">

	<div class="container">

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h4 class="module-title font-alt">Skills</h4>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-6 col-sm-offset-3">

				<div class="row">

					<div class="col-sm-6">

						<h5 class="font-alt">Technologies</h5>
						<ul>
							<li><a rel="nofollow" target="_blank" href="http://www.php.net">PHP5+ and 7 Development</a>
								<ul>
									<li>Laravel Framework</li>
									<li>Symfony Framework</li>
								</ul>
							</li>
							<li>Database development
								<ul>
									<li><a rel="nofollow" target="_blank" href="http://www.mysql.com/">MySQL</a> / <a rel="nofollow" target="_blank" href="https://mariadb.org/">MariaDB</a>
										<ul>
											<li>HAProxy balancing</li>
											<li>Clustering</li>
										</ul>
									</li>
									<li>MSSQL
										<ul>
											<li>Stored Procedures</li>
											<li>Replication</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>Javascript
								<ul>
									<li>ReactJS</li>
									<li>JQuery</li>
									<li>Backbone</li>
								</ul>
							</li>
							<li>Caching
								<ul>
									<li>Varnish</li>
									<li>Redis</li>
									<li>Memcache</li>
								</ul>
							</li>
							<li>Testing
								<ul>
									<li>Unit testing using <a rel="nofollow" target="_blank" href="https://github.com/sebastianbergmann/phpunit/">PHP Unit</a></li>
									<li><a rel="nofollow" target="_blank" href="http://www.seleniumhq.org/">Selenium</a> scripting</li>
								</ul>
							<li>Continuous Integration  <a rel="nofollow" target="_blank" href="http://jenkins-ci.org/">Jenkins</a> and <a rel="nofollow" target="_blank" href="https://travis-ci.org/">Travis</a></li>
							<li>Payment portal integration - <a rel="nofollow" target="_blank" ref="http://www.sagepay.com/">SagePay</a>, <a rel="nofollow" target="_blank" href="http://www.paypoint.co.uk/">PayPoint</a>, <a rel="nofollow" target="_blank" href="https://stripe.com/">Stripe</a>, <a rel="nofollow" target="_blank" href="http://www.paypal.co.uk/uk">PayPal</a> and <a rel="nofollow" target="_blank" href="http://checkout.google.com/sell/">Google Checkout</a></li>
						</ul>

					</div>

					<div class="col-sm-6">
						<h5 class="font-alt">Personal</h5>
						<ul>
							<li>Systems analysis and engineering</li>
							<li>Database design and development</li>
							<li>Web accessibility &amp; DDA compliance standards
								<ul>
									<li>Web content accessibility guidelines</li>
									<li>Web standards</li>
								</ul>
							</li>
							<li>Knowledge of <a rel="nofollow" target="_blank" href="https://www.pcisecuritystandards.org/">PCI</a> procedures and methods</li>
							<li>Effective communicator</li>
							<li>Reliable</li>
							<li>Leader</li>
							<li>Team player</li>
						</ul>
					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<section class="module-small">

	<div class="container">

		<div class="row">

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Github repositories</h4>

					<ul>
						<li><a rel="nofollow" target="_blank" href="https://github.com/ritey/base-laravel-react" target="_blank">Laravel + ReactJS Base</a> - Latest Laravel project with ReactJS and webpack configured ready for a new project.</li>
						<li><a rel="nofollow" target="_blank" href="https://github.com/ritey/website" target="_blank">This website</a> - Code base for this website, in Laravel using simple routes, and blade templates.</li>
					</ul>


			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Scripts</h4>

				<ul>
					<li><a rel="nofollow" target="_blank" href="http://github.com/ritey/booter" target="_blank">Booter</a> - Simple script to setup a Linux server, useful for when Puppet isn't really required.</li>
				</ul>

			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Tools</h4>

				<ul>
					<li>Sublime 3 + Coda 2</li>
					<li>Virtualbox</li>
					<li><a rel="nofollow" target="_blank" href="http://git-scm.com/">Git</a> / <a rel="nofollow" target="_blank" href="https://github.com/">GitHub</a> / SourceTree</li>
					<li>MySQL Workbench / Sequel Pro</li>
					<li>Docker</li>
					<li>Gulp</li>
					<li>SASS</li>
					<li>Slack / Trello</li>
				</ul>

			</div>

		</div>

	</div>

</section>

<section class="module-small bg-light">

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<h4 class="font-alt m-t-0 m-b-20">Experiences</h4>

				<p>I am a London-based PHP developer with over 10 years’ commercial PHP experience in bespoke, <strong>eCommerce</strong> and <strong>CMS</strong> websites like OpenCart, Wordpress, Drupal and to a lesser extent Joomla. I have a keen interest in data integration (using <strong>APIs</strong> and <strong>WebServices</strong>), and production of well formatted, readable and, maintainable code and dynamic, effective websites (using open standards, including <strong>CSS3</strong> and <strong>HTML5</strong>).</p>

				<p>Currently employed as a <strong>PHP</strong> developer and Head of Technical Development at <strong>Panlogic Ltd</strong> in Richmond, where I honed my PHP knowledge to build extendible and maintainable object orientated code within an <strong>MVC</strong> environment using the <strong>Laravel framework</strong>. I'm a quick learner, able to pick up new concepts and ideas quickly and use them effectively. Coupled with my effective communication skills, this ability allows me to succeed in an agile development environment.</p>

				<p>I hope to continue building my skills, expanding them to take in a wider scope of environments and languages, and to develop my managerial skills so I can effectively manage a large development team with multiple simultaneous projects.</p>

			</div>

		</div>

		<div class="row">

			<div class="col-sm-12 col-md-6">

				<h4 class="font-alt m-t-0 m-b-20">Sites I've worked on</h4>

				<ul>
					<li><a target="_blank" href="http://www.doblotto.com">Doblotto</a></li>
					<li><a target="_blank" href="https://pitchy.io">Pitchy.io</a></li>
					<li><a target="_blank" href="https://www.nationalfundingscheme.org">National Funding Scheme</a></li>
					<li><a target="_blank" href="http://www.rnib.org">RNIB</a></li>
					<li><a target="_blank" href="http://www.itf-oecd.org">ITF</a></li>
				</ul>

			</div>

			<div class="col-sm-12 col-md-6">

				<ul>
					<li><a target="_blank" href="http://www.nuffieldresearchplacements.org.uk">Nuffield Research Placements</a></li>
					<li><a target="_blank" href="http://www.panlogic.co.uk">Panlogic</a></li>
					<li><a target="_blank" href="http://www.plsa.co.uk">PLSA</a></li>
					<li><a target="_blank" href="http://www.rusi.org">RUSI</a></li>
				</ul>

			</div>

		</div>

	</div>

</section>

<section class="module-small">

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<h4 class="font-alt m-t-0 m-b-20">Additional details</h4>

				<p>If you wish to receive a PDF of my CV please email dave { at } ritey.com. Alternatively you can <a rel="nofollow" target="_blank" href="http://twitter.com/ritey">tweet me</a>.</p>

			</div>

		</div>

	</div>

</section>

@endsection