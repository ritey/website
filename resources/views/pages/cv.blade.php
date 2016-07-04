@extends('layouts.master')

@section('content')

<section class="module-small">

	<div class="container">

		<div class="row">

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">David Wright</h4>

				<p>Thanks for checking out my development abilities. I'll assume if you're reading this you might be interested in what I could offer you or your company.</p>

				<p>I've worked developing websites since completing university over 12 years ago, in a wide range of areas spanning educational applications for students, to a national donation platform.</p>

				<p>Typical of the modern developer, I've experienced many different languages and development methodologies which has assisted in a wide range of understanding and expertise, however, my primary focus is as a PHP developer typically using the Laravel framework.</p>

			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Senior Developer</h4>

				<p>Over the years I've worked in various sized teams, on my own, and currently heading up a technical development team for a digital agency based in London. My work has typically been in the commercial space, however, I've also released some open source libraries on behalf of the company employing me and also on a personal level.</p>

				<p>I have a keen interest in motorsport, entrepreneurial activities and the evolving world of technology and I have complete respect for web designers (I'm not a designer and the themes/designs in the projects I've worked on are not my work).</p>

			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Recent Projects</h2>

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a href="http://pitchy.io" target="_blank">
							<img src="/assets/images/logos/pitchy-logo.png" alt="Pitchy">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a href="https://www.nationalfundingscheme.org" target="_blank">
							<img src="assets/images/logos/donate-logo-black.png" alt="DONATE">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a href="http://www.doblotto.com" target="_blank">
							<img src="assets/images/logos/doblotto-logo.png" alt="Doblotto">
						</a>
					</div>
					<!-- /CLIENT LOGO -->

					<!-- CLIENT LOGO -->
					<div class="col-sm-6 col-xs-12 client-item">
						<a href="http://www.nuffieldresearchplacements.org" target="_blank">
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
				<h2 class="module-title font-alt">Skills</h2>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-6 col-sm-offset-3">

				<div class="row">

					<div class="col-sm-6">

						<h5 class="font-alt">Technologies</h5>
						<ul>
							<li>PHP Development
								<ul>
									<li>Laravel Framework</li>
									<li>Symfony Framework</li>
								</ul>
							</li>
							<li>Database development
								<ul>
									<li>MySQL / MariaDB
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
						<li><a href="https://github.com/ritey/base-laravel-react" target="_blank">Laravel + ReactJS Base</a> - Latest Laravel project with ReactJS and webpack configured ready for a new project.</li>
						<li><a href="https://github.com/ritey/website" target="_blank">This website</a> - Code base for this website, in Laravel using simple routes, and blade templates.</li>
					</ul>


			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Scripts</h4>

					<ul>
						<li><a href="http://github.com/ritey/booter" target="_blank">Booter</a> - Simple script to setup a Linux server, useful for when Puppet isn't really required.</li>
					</ul>

			</div>

			<div class="col-sm-4">

				<h4 class="font-alt m-t-0 m-b-20">Tools</h4>

				<ul>
					<li>Sublime 3 + Coda 2</li>
					<li>Virtualbox</li>
					<li>Git / SourceTree</li>
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

@endsection