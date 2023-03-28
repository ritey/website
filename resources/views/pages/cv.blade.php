@extends('layouts.master')

@section('metas')
<title>David Wright - London Based Laravel Web Developer</title>
<meta name="description" content="David Wright PHP Laravel developer in London, UK. With over 15 years of web development experience and still plenty of passion for learning web technologies. Freelance Laravel Developer London.">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow">
@endsection

@section('head')
<link href="{{ route('cv') }}" rel="canonical" />
@endsection

@section('content')

<div class="container mx-auto">

    <!-- MODULE TITLE -->
    <div class="w-full md:w-1/2 mx-auto text-center">
        <h1 class="mt-0 mb-6 text-2xl font-medium text-center uppercase text-neutral-800">Freelance Laravel Developer London</h1>
        <h2 class="mt-0 mb-2 text-xl font-medium text-left text-neutral-800">PHP developer</h2>
    </div>
    <!-- /MODULE TITLE -->

    <div class="w-full md:w-1/2 mx-auto">

        <h3 class="text-xl mb-4">David Wright</h3>

        <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">Thanks for checking out my development abilities. I'll assume if you're reading this you might be interested in what I could offer you or your company.</p>

        <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">I've developed websites and web applications since completing university in 2004, in a wide range of areas spanning educational applications for students, to a national donation platform.</p>

        <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">Typical of the <strong>modern developer</strong>, I've experienced many different languages and development methodologies which has assisted in a wide range of understanding and expertise, however, my primary focus is as a <strong>PHP developer</strong> typically using the <strong>Laravel</strong> framework.</p>

    </div>

    <div class="w-full md:w-1/2 mx-auto">

        <h3 class="text-xl mb-4">Senior Developer</h3>

        <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">Over the years I've worked in various sized teams, heading up a <strong>technical development</strong> team for a digital agency based in <strong>London</strong> and more recently on my own as a build my own SaSS product. My work has typically been in the commercial space, however, I've also released some open source libraries on behalf of the company employing me and on a personal level. More recently I've worked with a number of Charities including London's Air Ambulance and National Funding Scheme.</p>

        <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">I have a keen interest in motorsport, entrepreneurial activities and the evolving world of technology and I have complete respect for web designers <em>(I'm not a designer and the themes/designs in the projects I've worked on are not my work).</em></p>

    </div>

    <div class="w-full md:w-1/2 mx-auto">

        <h3 class="text-xl mb-4">Recent Projects</h3>

        <div class="flex w-full">

            <!-- CLIENT LOGO -->
            <div class="w-full md:w-1/2">
                <a class="hover:underline" rel="nofollow" target="_blank" href="http://www.nuffieldresearchplacements.org">
                    <img class="mx-auto" src="/assets/images/logos/nuffield-logo.png" alt="Nuffield Research Placements">
                </a>
            </div>
            <!-- /CLIENT LOGO -->

            <!-- CLIENT LOGO -->
            <div class="w-full md:w-1/2">
                <a class="hover:underline" rel="nofollow" target="_blank" href="https://www.nationalfundingscheme.org">
                    <img class="mx-auto" src="/assets/images/logos/donate-logo-black.png" alt="DONATE">
                </a>
            </div>
            <!-- /CLIENT LOGO -->

            <!-- CLIENT LOGO -->
            <div class="w-full md:w-1/2">
                <a target="_blank" href="https://uklaraveljobs.com">
                    <img class="mx-auto" src="https://uklaraveljobs.com/images/logo.jpg" width="90" alt="UK Laravel Jobs">
                </a>
            </div>
            <!-- /CLIENT LOGO -->

            <!-- CLIENT LOGO -->
            <div class="w-full md:w-1/2">
                <a target="_blank" href="https://idea.org.uk">
                    <img class="mx-auto" src="https://idea.org.uk/img/about/Wreath-Bronze.svg" width="90" alt="iDEA">
                </a>
            </div>
            <!-- /CLIENT LOGO -->

        </div>

    </div>

</div>

<div class="bg-gray-200 p-4 flex my-10">
    
    <div class="w-full md:w-1/2 mx-auto">

        <div class="w-full text-center">
            <h3 class="text-xl mb-4">Skills</h3>
        </div>

        <div class="w-full flex">

            <div class="w-full md:w-1/2">

                <h5 class="font-bold mb-2">Technologies</h5>
                <ul class="space-y-4">
                    <li><a class="hover:underline" rel="nofollow" target="_blank" href="https://www.php.net">PHP5+</a>
                        <ul class="pl-5 mt-2 space-y-1">
                            <li>Laravel Framework</li>
                            <li>Symfony Framework</li>
                            <li>CakePHP</li>
                            <li>Kohana framework</li>
                        </ul>
                    </li>
                    <li>Database development
                        <ul class="pl-5 mt-2 space-y-1">
                            <li><a class="hover:underline" rel="nofollow" target="_blank" href="https://www.mysql.com/">MySQL</a> / <a class="hover:underline" rel="nofollow" target="_blank" href="https://mariadb.org/">MariaDB</a>
                                <ul>
                                    <li>AWS RDS</li>
                                    <li>Digital Ocean Managed Databases</li>
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
                        <ul class="pl-5 mt-2 space-y-1">
                            <li>Vue.js</li>
                            <li>ReactJS</li>
                            <li>JQuery</li>
                            <li>Backbone</li>
                        </ul>
                    </li>
                    <li>Caching
                        <ul class="pl-5 mt-2 space-y-1">
                            <li>Varnish</li>
                            <li>Redis</li>
                            <li>Memcache</li>
                        </ul>
                    </li>
                    <li>Testing
                        <ul class="pl-5 mt-2 space-y-1">
                            <li>Feature/Unit testing using <a class="hover:underline" rel="nofollow" target="_blank" href="https://github.com/sebastianbergmann/phpunit/">PHP Unit</a></li>
                            <li><a class="hover:underline" rel="nofollow" target="_blank" href="http://www.seleniumhq.org/">Selenium</a> scripting</li>
                        </ul>
                    </li>
                    <li>Continuous Integration  <a class="hover:underline" rel="nofollow" target="_blank" href="http://jenkins-ci.org/">Jenkins</a> and <a class="hover:underline" rel="nofollow" target="_blank" href="https://travis-ci.org/">Travis</a> and Gitlab CI</li>
                    <li>Payment portal integration - <a class="hover:underline" rel="nofollow" target="_blank" href="http://www.sagepay.com/">SagePay</a>, <a class="hover:underline" rel="nofollow" target="_blank" href="http://www.paypoint.co.uk/">PayPoint</a>, <a class="hover:underline" rel="nofollow" target="_blank" href="https://stripe.com/">Stripe</a>, <a class="hover:underline" rel="nofollow" target="_blank" href="http://www.paypal.co.uk/uk">PayPal</a> and <a class="hover:underline" rel="nofollow" target="_blank" href="http://checkout.google.com/sell/">Google Checkout</a></li>
                </ul>

            </div>

            <div class="w-full md:w-1/2">
                <h5 class="font-bold mb-2">Personal</h5>
                <ul class="space-y-4">
                    <li>Systems analysis and engineering</li>
                    <li>Database design and development</li>
                    <li>Web accessibility &amp; DDA compliance standards
                        <ul class="pl-5 mt-2 space-y-1">
                            <li>Web content accessibility guidelines</li>
                            <li>Web standards</li>
                        </ul>
                    </li>
                    <li>Knowledge of <a class="hover:underline" rel="nofollow" target="_blank" href="https://www.pcisecuritystandards.org/">PCI</a> procedures and methods</li>
                    <li>Effective communicator</li>
                    <li>Reliable</li>
                    <li>Leader</li>
                    <li>Team player</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="w-full md:w-1/2 mx-auto my-10">
    <div class="flex flex-wrap mb-4">
        <div class="w-full md:w-1/3">
            <h4 class="text-lg mb-2">Github repositories</h4>
            <ul>
                <li><a class="hover:underline" rel="nofollow" target="_blank" href="https://github.com/ritey/base-laravel-react">Laravel + ReactJS Base</a> - Latest Laravel project with ReactJS and webpack configured ready for a new project.</li>
                <li><a class="hover:underline" rel="nofollow" target="_blank" href="https://github.com/ritey/website">This website</a> - Code base for this website, in Laravel using simple routes, and blade templates.</li>
            </ul>
        </div>

        <div class="w-full md:w-1/3">
            <h4 class="text-lg mb-2">Scripts</h4>
            <ul>
                <li><a class="hover:underline" rel="nofollow" target="_blank" href="http://github.com/ritey/booter">Booter</a> - Simple script to setup a Linux server, useful for when Puppet isn't really required.</li>
            </ul>
        </div>

        <div class="w-full md:w-1/3">
            <h4 class="text-lg mb-2">Tools</h4>
            <ul>
                <li>Sublime 3 + Coda 2</li>
                <li>Virtualbox</li>
                <li><a class="hover:underline" rel="nofollow" target="_blank" href="http://git-scm.com/">Git</a> / <a class="hover:underline" rel="nofollow" target="_blank" href="https://github.com/">GitHub</a> / SourceTree</li>
                <li>MySQL Workbench / Sequel Pro</li>
                <li>Docker</li>
                <li>Gulp</li>
                <li>SASS</li>
                <li>Slack / Trello</li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-gray-200 p-4">

    <div class="w-full md:w-1/2 mx-auto">

        <div class="w-full">

            <h4 class="text-lg mb-2">Experiences</h4>

            <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">I am a London-based PHP developer with over 15 years’ commercial PHP experience in bespoke, <strong>eCommerce</strong> and <strong>CMS</strong> websites like OpenCart, Wordpress, Drupal and to a lesser extent Joomla. I have a keen interest in data integration (using <strong>APIs</strong> and <strong>WebServices</strong>), and production of well formatted, readable and, maintainable code and dynamic, effective websites (using open standards, including <strong>CSS3</strong> and <strong>HTML5</strong>).</p>

            <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">Currently developing for my own company Coder Studios where I'm honing my <strong>PHP</strong> and <strong>SQL</strong> knowledge to build extendible and maintainable object orientated code within an <strong>MVC</strong> environment using the <strong>Laravel framework</strong>. I'm a fast learner, able to pick up new concepts and ideas quickly and use them effectively. Coupled with my effective communication skills, this ability allows me to succeed in an agile development environment.</p>

            <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">I hope to continue building my skills, expanding them to take in a wider scope of environments and languages, and to develop my managerial skills so I can effectively manage a large development team to help support the growing projects I've started at Coder Studios and run the multiple projects simultaneously.</p>

        </div>

        <h4 class="text-lg mb-2">Some of the sites I've worked on:</h4>
        <div class="flex flex-wrap">
            <div class="w-1/2">
                <a target="_blank" class="block hover:underline" href="https://uklaraveljobs.com">UK Laravel Jobs</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="https://www.nationalfundingscheme.org">National Funding Scheme</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="http://thebikeshed.cc">The BikeShed</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="https://merchantsquare.co.uk">Merchants Square</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="https://squareeye.com/">Square Eye</a>
            </div>

            <div class="w-1/2">
                <a rel="nofollow" class="block hover:underline" target="_blank" href="https://idea.org.uk">iDEA</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="http://classifieds.thebikeshed.cc">BikeShed Classifieds</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="http://www.panlogic.co.uk">Panlogic</a>
                <a rel="nofollow" class="block hover:underline" target="_blank" href="https://www.gardencourtchambers.co.uk/">Garden Court Chambers</a>
            </div>
        </div>
    </div>
</div>

<div class="w-full md:w-1/2 mx-auto my-4">
    <h4 class="text-lg mb-2">Additional details</h4>
    <p class="mt-0 mb-4 leading-6 text-left text-neutral-800">If you wish to receive a PDF of my CV please email dave { at } ritey.com. Alternatively you can <a class="hover:underline" rel="nofollow" target="_blank" href="http://twitter.com/ritey">tweet me</a>.</p>
</div>
@endsection