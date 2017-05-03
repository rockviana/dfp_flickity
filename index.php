<!doctype html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Touch, responsive, flickable carousels">
  <meta name="viewport" content="width=device-width">

  <title>Flickity</title>

    <link rel="stylesheet" href="http://flickity.metafizzy.co/css/flickity-docs.css" media="screen">

    <!-- DFP HEADER- START -->
	<script type="text/javascript">
	var googletag = googletag || {};
	googletag.cmd = googletag.cmd || [];
	</script>

	<script type="text/javascript" src="https://www.googletagservices.com/tag/js/gpt.js" async></script>

	<script type='text/javascript'>
	var indexformats = 0;
	var slotdfp = {};
	googletag.cmd.push(function(){
	        
		slotdfp['banner-1'] = googletag.defineOutOfPageSlot('/1038086/development','banner-1').setTargeting('formato',['slider']).setTargeting('pos',[(++indexformats).toString()]).addService(googletag.pubads());

		slotdfp['banner-2'] = googletag.defineOutOfPageSlot('/1038086/development','banner-2').setTargeting('formato',['slider']).setTargeting('pos',[(++indexformats).toString()]).addService(googletag.pubads());
		
		slotdfp['banner-3'] = googletag.defineOutOfPageSlot('/1038086/development','banner-3').setTargeting('formato',['slider']).setTargeting('pos',[(++indexformats).toString()]).addService(googletag.pubads());

		slotdfp['banner-4'] = googletag.defineOutOfPageSlot('/1038086/development','banner-4').setTargeting('formato',['slider']).setTargeting('pos',[(++indexformats).toString()]).addService(googletag.pubads());


	    googletag.pubads().setTargeting("testeab", (function(){return Math.trunc(Math.random()*10)+1})().toString());
	    googletag.pubads().setTargeting("width", screen.width.toString());
	    googletag.pubads().setTargeting("height", screen.width.toString());
	    googletag.pubads().setTargeting("reload", (window.performance?window.performance.navigation.type:2).toString() );
	    googletag.pubads().enableSingleRequest();
	    googletag.pubads().collapseEmptyDivs();
	    googletag.pubads().enableAsyncRendering();
	    googletag.enableServices();
	});
	</script>
	<!-- DFP HEADER- END -->


</head>
<body class="page--index">

	<nav class="site-nav">
	  <div class="container">
	    <ul class="site-nav__list">
	      <li class="site-nav__item site-nav__item--homepage"><a href="http://flickity.metafizzy.co/.">Flickity</a></li>
	      <li class="site-nav__item site-nav__item--style"><a href="http://flickity.metafizzy.co/style.html">Style</a></li>
	      <li class="site-nav__item site-nav__item--options"><a href="http://flickity.metafizzy.co/options.html">Options</a></li>
	      <li class="site-nav__item site-nav__item--api"><a href="http://flickity.metafizzy.co/api.html">API</a></li>
	      <li class="site-nav__item site-nav__item--events"><a href="http://flickity.metafizzy.co/events.html">Events</a></li>
	      <li class="site-nav__item site-nav__item--extras"><a href="http://flickity.metafizzy.co/extras.html">Extras</a></li>
	      <li class="site-nav__item site-nav__item--license"><a href="http://flickity.metafizzy.co/license.html">License</a></li>
	    </ul>
	  </div>
	</nav>

  <div class="hero-carousel" data-flickity="" data-js="hero-carousel">
    <div class="hero-carousel__cell hero-carousel__cell--1" id='banner-1'>
		<script type="text/javascript">
			googletag.cmd.push(function() { googletag.display('banner-1'); });
		</script>
    </div>
    <div class="hero-carousel__cell hero-carousel__cell--2" id='banner-2'>
		<script type="text/javascript">
			googletag.cmd.push(function() { googletag.display('banner-2'); });
		</script>
    </div>
    <div class="hero-carousel__cell hero-carousel__cell--3" id='banner-3'>
		<script type="text/javascript">
			googletag.cmd.push(function() { googletag.display('banner-3'); });
		</script>
    </div>
    <div class="hero-carousel__cell hero-carousel__cell--4" id='banner-4'>
		<script type="text/javascript">
			googletag.cmd.push(function() { googletag.display('banner-4'); });
		</script>
    </div>
  </div>

<div class="main">
  <div class="container">

      <div class="duo">
        <div class="duo__cell">
          <a class="big-link big-link--fill" href="https://unpkg.com/flickity@2/dist/flickity.css">
            <svg class="big-link__icon" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewbox="0 0 200 200">
              <path d="M122 50V10c0-3.2 2-6.2 5-7.4 3-1.2 6.3-.6 8.6 1.7l40 40c2.3 2.3 3 5.7 1.7 8.7-1.2 3-4.2 5-7.4 5h-40c-4.4 0-8-3.6-8-8zm56 21v109c0 10-8 18-18 18H40c-10 0-18-8-18-18V20c0-10 8-18 18-18h69v48c0 11.6 9.4 21 21 21h48zM79.5 99.7c0-.2-.4-.6-.5-.7-2-2-4.3-3.4-6.8-4.4-9.8-3.8-22-1-28 8-6 8.5-5.3 21.2 1.7 29 7 7.5 19.6 9.2 28.7 4.6l3.2-2c.2-.4 1.5-1.2 1.4-1.6 0-.2-.6-.6-.8-.8l-1.3-1.3c-1.6-1.6-3-3.2-4.7-4.7-3 3.5-8.3 4.6-12.6 3.4-8.3-2.4-10.5-13.2-7.3-20.3 1.6-3.7 4.8-6.4 8.8-7 3.8-.5 8.3 1 10.6 4l6-5 1-1c.3 0 .5-.2.5-.3zm15 3.5c1.2-1.4 3.3-2 5-2 4-.6 8.2 1.2 10.7 4.5 1.4-1.3 3-2.5 4.3-3.8l2.3-2.2.4-.3c0-.2-.8-1-1-1l-1-1c-3.3-2.7-7.5-4-11.6-4.4-4.3-.3-9 .2-12.7 2.2-3.5 1.8-6.2 5-7 8.8-.7 4 0 8 3 10.7 3.2 3 7.6 3.7 11.7 4.8 2.7.7 7 1.5 7.7 5 .7 4.5-4.2 6-8 5.8-3.8-.3-7.5-2.3-10-5.4l-4.2 4-2.3 2-.6.6c0 .4 1.7 1.6 2 2 6.6 5.3 17 6.6 24.8 3.6 3.7-1.4 6.8-4 8-7.8 1.4-3.7 1.3-8.3-1-11.6-2.6-3.5-6.8-5-10.8-6-2-.6-4-1-6-1.7-1.5-.4-3-.8-4-2-.8-1.5-.7-3.5.2-4.8zm39.3 2.5c0-1.7.7-3 2.2-3.6 1.4-.6 3-1 4.8-1 2 0 3.8.5 5.5 1.4 1.7 1 3 2 4 3.3l7-6.2c-1.7-2.2-4-4-7-5s-6-1.6-9.2-1.6c-2 0-4.2.2-6.2.7-2 .5-4 1.4-5.5 2.5-1.6 1-3 2.5-4 4.3-1 1.7-1.4 3.8-1.4 6.2 0 2 .3 3.8 1 5 .7 1.5 1.7 2.6 3 3.6 1 1 2.5 1.7 4 2.2 1.5.6 3 1 4.7 1.4 3.3.7 5.8 1.5 7.4 2.2 1.7.8 2.6 2 2.6 4 0 1-.2 1.7-.6 2.3-.4.7-1 1.2-1.7 1.6-.7.5-1.4.8-2.2 1l-2.3.3c-2.3 0-4.5-.5-6.4-1.5-2-1-3.5-2.3-4.7-4l-7 6.8c2 2.3 4.6 4 7.8 5.3 3.2 1 6.4 1.7 9.8 1.7 2.3 0 4.6-.3 6.8-.8 2.2-.6 4-1.4 5.8-2.6 1.6-1 3-2.6 4-4.5 1-2 1.5-4.2 1.5-6.8 0-2-.4-4-1.3-5.4-.8-1.5-2-2.7-3.3-3.7-1.4-1-3-1.7-4.5-2.3-1.7-.6-3.3-1-5-1.4-3-.7-5.3-1.4-7-2-1.6-.8-2.4-2-2.4-3.6z"/>
            </svg>
            Download <b>flickity.&#x200B;css</b>
          </a>
        </div>
        <div class="duo__cell">
          <a class="big-link big-link--fill" href="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">
            <svg class="big-link__icon" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewbox="0 0 200 200">
              <path class="st0" d="M177.4 53.1c-1.2 3-4.2 4.9-7.4 4.9h-40c-4.4 0-8-3.6-8-8V10c0-3.2 1.9-6.2 4.9-7.4 3-1.2 6.4-.6 8.7 1.7l40 40c2.3 2.3 3 5.8 1.8 8.8zM178 71v109c0 9.9-8.1 18-18 18H40c-9.9 0-18-8.1-18-18V20c0-9.9 8.1-18 18-18h69v48c0 11.6 9.4 21 21 21h48zm-90.1 47.5V94.8H77.1v45.8c0 1.9 0 3.9-.5 5.7-1.1 3.9-4.8 4.6-8.3 3.7l-.9 9.2c4.6 1 10.1.9 14.2-1.8 4.7-3.1 5.9-8.6 6.3-13.9.4-8.4 0-16.8 0-25zm1.6-38.4c0-8.4-13.9-8.5-13.9 0s13.9 8.4 13.9 0zm19.1 24.7c1-2.8 5.1-3.3 7.7-3.1 3.3.3 6.5 2 8.5 4.6l7-6.2c-4.7-6-13.9-7.5-21-6.1-6.6 1.3-12.2 5.7-12.4 12.8-.1 3.2.8 6.3 3.3 8.5 2.5 2.3 5.8 3.3 9 4.1 2.7.7 5.8 1.2 8.3 2.6 2.4 1.3 2.9 4.7 1 6.7-2.2 2.4-6.3 2.4-9.2 1.7-3-.7-5.8-2.6-7.7-5-2.4 2.2-4.7 4.4-7.1 6.7 5.4 5.9 14 7.9 21.7 6.9 6.3-.8 12.5-4.1 13.7-10.9.6-3.2.4-6.6-1.5-9.4-1.8-2.7-4.8-4.4-7.8-5.5-3.3-1.1-6.7-1.7-10-2.8-2.5-.9-4.6-2.6-3.5-5.6z"/>
            </svg>
            Download <b>flickity.pkgd.min.js</b>
          </a>
        </div>
      </div>
      
      <div class="duo">
          <div class="duo__cell">
            <a class="big-link big-link--stroke" href="http://flickity.metafizzy.co/flickity-docs.zip">
              <svg class="big-link__icon" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewbox="0 0 200 200">
                <path d="M20 30c-6.7 0-13 2.2-18 6v-6c0-9.9 8.1-18 18-18h60c9.9 0 18 8.1 18 18H20zm160 12H20c-9.9 0-18 8.1-18 18v110c0 9.9 8.1 18 18 18h160c9.9 0 18-8.1 18-18V60c0-9.9-8.1-18-18-18zM43.3 130.7l23.3-25H44.4V97h35.1v9.5l-23.4 24.8h24.5v8.8H43.3v-9.4zm45.4-48.3c0-8.5 13.9-8.4 13.9 0s-13.9 8.5-13.9 0zM90.3 97h10.8v43.2H90.3V97zm34.2 0v6c1.1-.5 2.2-2.4 3.2-3.3 1.5-1.3 3.4-2.2 5.2-2.9 4.3-1.5 9.2-1.5 13.4-.1 8.8 3 13.9 11.6 14.2 20.6.3 9.1-3.8 18.3-12.4 22.2-3.9 1.8-8.6 2.3-12.8 1.5-2.2-.4-4.2-1.2-6.1-2.4-1.8-1.2-2.9-3-4.5-4.2v27.4h-10.8V97h10.6zm25.2 21.5c0-7-4.6-13.6-12-13.8-7.7-.2-13.1 6.7-13.1 14 0 7.1 5.3 13.8 12.7 13.9 7.7-.1 12.4-6.9 12.4-14.1z"/>
              </svg>
              Download these <b>docs</b>
            </a>
          </div>
        <div class="duo__cell">
          <a class="big-link big-link--stroke" href="https://github.com/metafizzy/flickity">
            <svg class="big-link__icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
              <path d="M256 0C115 0 0 115 0 256c0 113 73 209 175 243 13 2 18-5 18-12v-48c-64 12-81-16-86-30-3-7-15-30-26-36-9-5-22-17 0-17 20 0 35 19 39 26 23 39 60 28 75 21 2-17 9-28 16-34-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-33 3-68 0 0 21-7 70 26 20-6 42-9 64-9s43 3 64 9c49-33 70-26 70-26 14 35 5 61 3 68 16 18 26 41 26 69 0 98-60 120-117 126 9 8 17 23 17 47v70c0 7 5 15 18 12 100-33 173-129 173-242C512 115 397 0 256 0z"/>
            </svg>
            Flickity on <b>GitHub</b>
          </a>
        </div>
      </div>

    <ul class="page-nav" data-js="page-nav">
<li class="page-nav__item page-nav__item--h2"><a href="#install">Install</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#download">Download</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#cdn">CDN</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#package-managers">Package managers</a></li>
<li class="page-nav__item page-nav__item--h2"><a href="#license">License</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#commercial-license">Commercial license</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#open-source-license">Open source license</a></li>
<li class="page-nav__item page-nav__item--h2"><a href="#getting-started">Getting started</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#initialize-with-jquery">Initialize with jQuery</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#initialize-with-vanilla-javascript">Initialize with vanilla JavaScript</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#initialize-with-html">Initialize with HTML</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#next">Next</a></li>
<li class="page-nav__item page-nav__item--h2"><a href="#feature-showcase">Feature showcase</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#wraparound">wrapAround</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#freescroll">freeScroll</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#groupcells">groupCells</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#autoplay">autoPlay</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#lazyload">lazyLoad</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#parallax">Parallax</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#images">Images</a></li>
<li class="page-nav__item page-nav__item--h3"><a href="#view-all-options">View all options</a></li>
<li class="page-nav__item page-nav__item--h2"><a href="#flickity-in-use">Flickity in use</a></li>
<li class="page-nav__item page-nav__item--h2"><a href="#people-like-flickity">People like Flickity</a></li>
</ul>



<h2 id="install">Install</h2>


<h3 id="download">Download</h3>

<ul>
  <li>
    CSS:
    <ul>
      <li><a href="https://unpkg.com/flickity@2/dist/flickity.min.css">flickity.min.css</a> minified, or</li>
      <li><a href="https://unpkg.com/flickity@2/dist/flickity.css">flickity.css</a> un-minified</li>
    </ul>
  </li>
  <li>
    JavaScript:
    <ul>
      <li><a href="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">flickity.pkgd.min.js</a> minified, or</li>
      <li><a href="https://unpkg.com/flickity@2/dist/flickity.pkgd.js">flickity.pkgd.js</a> un-minified</li>
    </ul>
  </li>
</ul>


<h3 id="cdn">CDN</h3>

<p>Link directly to Flickity files on <a href="https://unpkg.com/">unpkg</a>.</p>

<pre><code class="html"><span class="tag">&lt;<span class="title">link</span> <span class="attribute">rel</span>=<span class="value">&quot;stylesheet&quot;</span> <span class="attribute">href</span>=<span class="value">&quot;https://unpkg.com/flickity@2/dist/flickity.min.css&quot;</span>&gt;</span>
<span class="comment">&lt;!-- or --&gt;</span>
<span class="tag">&lt;<span class="title">link</span> <span class="attribute">rel</span>=<span class="value">&quot;stylesheet&quot;</span> <span class="attribute">href</span>=<span class="value">&quot;https://unpkg.com/flickity@2/dist/flickity.css&quot;</span>&gt;</span>
</code></pre>

<pre><code class="html"><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">&quot;https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js&quot;</span>&gt;</span><span class="undefined"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="comment">&lt;!-- or --&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">&quot;https://unpkg.com/flickity@2/dist/flickity.pkgd.js&quot;</span>&gt;</span><span class="undefined"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
</code></pre>


<h3 id="package-managers">Package managers</h3>

<p>Install with Bower: <code>bower install flickity --save</code></p>

<p>Install with npm: <code>npm install flickity</code></p>


<h2 id="license">License</h2>


<h3 id="commercial-license">Commercial license</h3>

<p>If you want to use Flickity to develop commercial sites, themes, projects, and applications, the Commercial license is the appropriate license. With this option, your source code is kept proprietary. <a href="http://flickity.metafizzy.co/license.html">Read more about Flickity commercial licensing</a>.</p>

<p>Once purchased, you&#x2019;ll receive a commercial license PDF and be all set to use Flickity in your commercial applications.</p>

<div class="buy-button-trio">
    <a class="buy-button" href="https://gum.co/flickity-dev">
      <span class="buy-button__project">Flickity Commercial</span>
      <span class="buy-button__title">Developer</span>
      <span class="buy-button__license">License</span>
      <span class="buy-button__for">for 1 developer</span>
      <span class="buy-button__price">
        <span class="buy-button__price__dollar">$</span><span class="buy-button__price__value">25</span>
      </span>
    </a>

    <a class="buy-button" href="https://gum.co/flickity-team">
      <span class="buy-button__project">Flickity Commercial</span>
      <span class="buy-button__title">Team</span>
      <span class="buy-button__license">License</span>
      <span class="buy-button__for">for up to 8 developers</span>
      <span class="buy-button__price">
        <span class="buy-button__price__dollar">$</span><span class="buy-button__price__value">110</span>
      </span>
    </a>

    <a class="buy-button" href="https://gum.co/flickity-org">
      <span class="buy-button__project">Flickity Commercial</span>
      <span class="buy-button__title">Organization</span>
      <span class="buy-button__license">License</span>
      <span class="buy-button__for">for Unlimited developers</span>
      <span class="buy-button__price">
        <span class="buy-button__price__dollar">$</span><span class="buy-button__price__value">320</span>
      </span>
    </a>
</div>


<h3 id="open-source-license">Open source license</h3>

<p>If you are creating an open source application under a license compatible with the <a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU GPL license v3</a>, you may use Flickity under the terms of the GPLv3. <a href="http://flickity.metafizzy.co/license.html">Read more about Flickity open source licensing</a>.</p>

<h2 id="getting-started">Getting started</h2>

<p>Include the Flickity <code>.css</code> and <code>.js</code> files in your site.</p>

<pre><code class="html"><span class="tag">&lt;<span class="title">link</span> <span class="attribute">rel</span>=<span class="value">&quot;stylesheet&quot;</span> <span class="attribute">href</span>=<span class="value">&quot;/path/to/flickity.css&quot;</span> <span class="attribute">media</span>=<span class="value">&quot;screen&quot;</span>&gt;</span>
</code></pre>

<pre><code class="html"><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">&quot;/path/to/flickity.pkgd.min.js&quot;</span>&gt;</span><span class="undefined"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
</code></pre>

<p>Flickity works on a container carousel element with a group of cell elements.</p>

<pre><code class="html"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">&quot;main-carousel&quot;</span>&gt;</span>
  <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">&quot;carousel-cell&quot;</span>&gt;</span>...<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">&quot;carousel-cell&quot;</span>&gt;</span>...<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">&quot;carousel-cell&quot;</span>&gt;</span>...<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  ...
<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
</code></pre>

<p>There are several ways to initialize Flickity.</p>


<h3 id="initialize-with-jquery">Initialize with jQuery</h3>

<p>You can use Flickity as a jQuery plugin: <code>$(<span class="string">&apos;selector&apos;</span>).flickity()</code>.</p>

<pre><code class="js">$(<span class="string">&apos;.main-carousel&apos;</span>).flickity({
  <span class="comment">// options</span>
  cellAlign: <span class="string">&apos;left&apos;</span>,
  contain: <span class="literal">true</span>
});
</code></pre>


<h3 id="initialize-with-vanilla-javascript">Initialize with vanilla JavaScript</h3>

<p>You can use Flickity with vanilla JS: <code><span class="keyword">new</span> Flickity( elem )</code>. The <code>Flickity()</code> constructor accepts two arguments: the carousel element and an options object.</p>

<pre><code class="js"><span class="keyword">var</span> elem = <span class="built_in">document</span>.querySelector(<span class="string">&apos;.main-carousel&apos;</span>);
<span class="keyword">var</span> <span class="flickity_var">flkty</span> = <span class="keyword">new</span> <span class="flickity_keyword">Flickity</span>( elem, {
  <span class="comment">// options</span>
  cellAlign: <span class="string">&apos;left&apos;</span>,
  contain: <span class="literal">true</span>
});

<span class="comment">// element argument can be a selector string</span>
<span class="comment">//   for an individual element</span>
<span class="keyword">var</span> <span class="flickity_var">flkty</span> = <span class="keyword">new</span> <span class="flickity_keyword">Flickity</span>( <span class="string">&apos;.main-carousel&apos;</span>, {
  <span class="comment">// options</span>
});
</code></pre>


<h3 id="initialize-with-html">Initialize with HTML</h3>

<p>You can initialize Flickity in HTML, without writing any JavaScript. Add <code>data-flickity</code> attribute to the carousel element. <a href="http://flickity.metafizzy.co/options.html">Options</a> can be set in its value.</p>


<pre><code class="html"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">&quot;main-carousel&quot;</span> <span class="attribute">data-flickity</span>=<span class="value">&apos;{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;contain&quot;: true }&apos;</span>&gt;</span>
</code></pre>

<div class="call-out">
  <p>Options set in HTML must be valid JSON. Keys need to be quoted, for example <code>&quot;cellAlign&quot;:</code>. Note that the attribute value uses single quotes <code>&apos;</code>, but the JSON entities use double-quotes <code>&quot;</code>.</p>
</div>


<h3 id="next">Next</h3>

<ul>
  <li><a href="http://flickity.metafizzy.co/style.html">Style</a></li>
  <li><a href="http://flickity.metafizzy.co/options.html">Options</a></li>
  <li><a href="http://flickity.metafizzy.co/api.html">API</a></li>
</ul>


<h2 id="feature-showcase">Feature showcase</h2>


<div class="duo">
  <div class="duo__cell">
    <h3 id="wraparound"><a href="http://flickity.metafizzy.co/options.html#wraparound">wrapAround</a></h3>
    <div class="carousel" data-flickity="{ &quot;wrapAround&quot;: true }">
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/myXdej">Edit this demo on CodePen</a>
    </p>
    <p>Wrap-around the end back to the beginning for infinite scrolling.</p>
  </div>
  <div class="duo__cell">
    <h3 id="freescroll"><a href="http://flickity.metafizzy.co/options.html#freescroll">freeScroll</a></h3>
    <div class="carousel" data-flickity="{ &quot;freeScroll&quot;: true }">
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/bNLGNZ">Edit this demo on CodePen</a>
    </p>
    <p>Freely flick and scroll content without alignment.</p>
  </div>
</div>

<div class="duo">
  <div class="duo__cell">
    <h3 id="groupcells"><a href="http://flickity.metafizzy.co/options.html#groupcells">groupCells</a></h3>
    <div class="carousel carousel--show-several carousel--selected-cell" data-flickity="{ &quot;groupCells&quot;: true }">
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>

      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>

      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>

      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/XKZXyv">Edit this demo on CodePen</a>
    </p>
    <p>Groups cells together to act as individual slides.</p>
  </div>
  <div class="duo__cell">
    <h3 id="autoplay"><a href="http://flickity.metafizzy.co/options.html#autoplay">autoPlay</a></h3>
    <div class="carousel" data-flickity="{ &quot;autoPlay&quot;: true }">
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/RNQwaB">Edit this demo on CodePen</a>
    </p>
    <p>Automatically advance to the next cell.</p>
  </div>
</div>

<div class="duo">
  <div class="duo__cell">
    <h3 id="lazyload"><a href="http://flickity.metafizzy.co/options.html#lazyload">lazyLoad</a></h3>
    <div class="carousel carousel--lazyload-cells carousel--not-counting" data-flickity="{ &quot;lazyLoad&quot;: true }">
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/9xYjgCk.jpg" alt="tulip">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/8lEJtbg.jpg" alt="grapes">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/ERMbVdn.jpg" alt="raspberries">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/lBKi66i.jpg" alt="wolf">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/4O7U1Ob.jpg" alt="sea">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/4ifgQaR.jpg" alt="green beads">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/qKhkOKC.jpg" alt="gulls">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/LFelADP.jpg" alt="touch">
      </div>
      <div class="carousel-cell">
        <img class="carousel-cell__lazy-image" data-flickity-lazyload="http://i.imgur.com/OZmQIVL.jpg" alt="van">
      </div>
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/vOeGzL">Edit this demo on CodePen</a>
    </p>
    <p>Load cell images when selected.</p>
  </div>
  <div class="example__demo duo__cell" data-js="keyhole">
    <h3 id="parallax"><a href="http://flickity.metafizzy.co/events.html#scroll">Parallax</a></h3>
    <div class="carousel">
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/bwy74ok.jpg" alt="orange tree">
      </div>
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/aboaFoB.jpg" alt="freedom tower">
      </div>
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/LkmcILl.jpg" alt="drizzle">
      </div>
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/q9zO6tw.jpg" alt="cat nose">
      </div>
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/r8p3Xgq.jpg" alt="contrail">
      </div>
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/hODreXI.jpg" alt="sunset">
      </div>
      <div class="keyhole-cell">
        <img src="http://i.imgur.com/UORFJ3w.jpg" alt="planes">
      </div>
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/jAGWRQ">Edit this demo</a>
        or <a href="http://codepen.io/desandro/pen/qNPbgb">vanilla JS demo</a> on CodePen
    </p>
    <p>Parallax effects on scroll event.</p>
  </div>
</div>

<h3 id="images">Images</h3>

<p>Flickity makes beautiful image galleries.</p>

<div class="example">
  <div class="example__demo">
    <div class="carousel carousel--images-demo" data-flickity="{ &quot;imagesLoaded&quot;: true, &quot;percentPosition&quot;: false }">
      <!-- images from unsplash.com -->
      <img src="http://i.imgur.com/bwy74ok.jpg" alt="orange tree">
      <img src="http://i.imgur.com/bAZWoqx.jpg" alt="submerged">
      <img src="http://i.imgur.com/PgmEBSB.jpg" alt="look-out">
      <img src="http://i.imgur.com/aboaFoB.jpg" alt="freedom tower">
      <img src="http://i.imgur.com/LkmcILl.jpg" alt="drizzle">
      <img src="http://i.imgur.com/q9zO6tw.jpg" alt="cat nose">
      <img src="http://i.imgur.com/r8p3Xgq.jpg" alt="contrail">
      <img src="http://i.imgur.com/hODreXI.jpg" alt="sunset">
      <img src="http://i.imgur.com/UORFJ3w.jpg" alt="formation">
    </div>
    <p class="edit-demo">
        <a href="http://codepen.io/desandro/pen/GgQREP">Edit this demo on CodePen</a>
    </p>
  </div>
</div>


<h3 id="view-all-options"><a href="http://flickity.metafizzy.co/options.html">View all options</a></h3>


<h2 id="flickity-in-use">Flickity in use</h2>

<p>We&#x2019;d love to see how you use Flickity! Tweet <a href="https://twitter.com/metafizzyco">@metafizzyco</a> or email <a href="http://flickity.metafizzy.co/mailto:yo@metafizzy.co">yo@metafizzy.co</a> to share your work and possibly get it featured here.</p>

<div class="in-use-carousel" data-flickity="{ &quot;lazyLoad&quot;: 1, &quot;wrapAround&quot;: true, &quot;groupCells&quot;: true }">
    <a class="in-use-carousel__item" href="http://www.janegoodall.org.nz/">
      <p class="in-use-carousel__item__title">The Jane Goodall Institute New Zealand</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/ndBOIk4.jpg" alt="The Jane Goodall Institute New Zealand">
    </a>
    <a class="in-use-carousel__item" href="http://fender.com/">
      <p class="in-use-carousel__item__title">Fender</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/ELBs58r.jpg" alt="Fender">
    </a>
    <a class="in-use-carousel__item" href="https://www.sxsw.com">
      <p class="in-use-carousel__item__title">SXSW Conference</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/l8hfIml.jpg" alt="SXSW Conference">
    </a>
    <a class="in-use-carousel__item" href="https://boutique.sessun.com/en/">
      <p class="in-use-carousel__item__title">sess&#xFA;n</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/NyuuOvd.jpg" alt="sess&#xFA;n">
    </a>
    <a class="in-use-carousel__item" href="https://www.customink.com/products/styles/next-level-tri-blend-t-shirt/186900">
      <p class="in-use-carousel__item__title">CustomInk</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/qz1Q91n.jpg" alt="CustomInk">
    </a>
    <a class="in-use-carousel__item" href="http://www.thefieldmag.com/photo/devils-peak-fire-lookout-mt-hood-oregon-film-photo">
      <p class="in-use-carousel__item__title">The Field</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/YUwdxEL.jpg" alt="The Field">
    </a>
    <a class="in-use-carousel__item" href="http://www.engadget.com/2016/01/05/canon-new-powershot-vixia-cameras">
      <p class="in-use-carousel__item__title">Engadget</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/qkXOEOj.jpg" alt="Engadget">
    </a>
    <a class="in-use-carousel__item" href="https://yeezysupply.com/">
      <p class="in-use-carousel__item__title">yeezysupply.com</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/AA3Qzww.jpg" alt="yeezysupply.com">
    </a>
    <a class="in-use-carousel__item" href="http://thesoundofsilence.org/wedokidoki/">
      <p class="in-use-carousel__item__title">We Doki Doki</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/GtANoGG.jpg" alt="We Doki Doki">
    </a>
    <a class="in-use-carousel__item" href="https://www.artsy.net/show/maison-gerard-maison-gerard-and-the-indianapolis-museum-of-art-celebrate-ayala-serfaty">
      <p class="in-use-carousel__item__title">Artsy</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/yKhaKAp.jpg" alt="Artsy">
    </a>
    <a class="in-use-carousel__item" href="http://tympanus.net/Development/PhotographyWebsiteConcept/">
      <p class="in-use-carousel__item__title">Codrops Photography Website Concept</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/KwkBANB.jpg" alt="Codrops Photography Website Concept">
    </a>
    <a class="in-use-carousel__item" href="https://cottonbureau.com/products/fizzy-bear">
      <p class="in-use-carousel__item__title">Cotton Bureau</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/jGFnPzd.jpg" alt="Cotton Bureau">
    </a>
    <a class="in-use-carousel__item" href="http://district-theme-demo.myshopify.com/">
      <p class="in-use-carousel__item__title">District Shopify theme</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/msauCzq.jpg" alt="District Shopify theme">
    </a>
    <a class="in-use-carousel__item" href="http://vibrantmedia.com/">
      <p class="in-use-carousel__item__title">Vibrant Media</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/bzZ7g7P.jpg" alt="Vibrant Media">
    </a>
    <a class="in-use-carousel__item" href="http://www.ey.com/">
      <p class="in-use-carousel__item__title">Ernst &amp; Young</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/y7SDvBy.jpg" alt="Ernst &amp; Young">
    </a>
    <a class="in-use-carousel__item" href="http://tonyhornecker.com/work/homes-project/the-palafito.php">
      <p class="in-use-carousel__item__title">Tony Hornecker</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/ZevmGsl.jpg" alt="Tony Hornecker">
    </a>
    <a class="in-use-carousel__item" href="http://rabbithole.agency">
      <p class="in-use-carousel__item__title">Rabbit Hole</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/CEJarzI.jpg" alt="Rabbit Hole">
    </a>
    <a class="in-use-carousel__item" href="http://www.rookiemag.com/">
      <p class="in-use-carousel__item__title">Rookie</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/dkTEqLp.jpg" alt="Rookie">
    </a>
    <a class="in-use-carousel__item" href="http://dannyryan.uk/">
      <p class="in-use-carousel__item__title">Danny Ryan</p>
      <img class="in-use-carousel__item__image" data-flickity-lazyload="http://i.imgur.com/BStlPGb.png" alt="Danny Ryan">
    </a>
</div>



  <h2 id="people-like-flickity">People like Flickity</h2>

  <p>
    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/metafizzyco/timelines/657278156794109953" data-widget-id="657284386929418241">People like Flickity</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </p>


  </div>
</div>

<nav class="site-nav">
  <div class="container">
    <ul class="site-nav__list">
      <li class="site-nav__item site-nav__item--homepage"><a href="http://flickity.metafizzy.co/.">Flickity</a></li>
      <li class="site-nav__item site-nav__item--style"><a href="http://flickity.metafizzy.co/style.html">Style</a></li>
      <li class="site-nav__item site-nav__item--options"><a href="http://flickity.metafizzy.co/options.html">Options</a></li>
      <li class="site-nav__item site-nav__item--api"><a href="http://flickity.metafizzy.co/api.html">API</a></li>
      <li class="site-nav__item site-nav__item--events"><a href="http://flickity.metafizzy.co/events.html">Events</a></li>
      <li class="site-nav__item site-nav__item--extras"><a href="http://flickity.metafizzy.co/extras.html">Extras</a></li>
      <li class="site-nav__item site-nav__item--license"><a href="http://flickity.metafizzy.co/license.html">License</a></li>
    </ul>
  </div>
</nav>

<footer class="site-footer">

  <div class="container">

    <p class="site-footer__copy">Metafizzy makes delightful UI libraries &amp; logos</p>

    <div class="showcase">
    
      <ul class="showcase-item-list">
          <li class="showcase-item">
            <a class="showcase-item__link" href="http://isotope.metafizzy.co">
              <div class="showcase-item__image">
                  <svg class="isotope-illo" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 350 350" width="100" height="100">
                    <path class="isotope-illo__color1" fill="#6C6" d="M80 170H30c-6 0-10-5-10-10v-50c0-6 5-10 10-10h50c6 0 10 5 10 10v50C90 166 86 170 80 170z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M80 90H30c-6 0-10-5-10-10V30c0-6 5-10 10-10h50c6 0 10 5 10 10v50C90 86 86 90 80 90z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M160 90h-50c-6 0-10-5-10-10V30c0-6 5-10 10-10h50c6 0 10 5 10 10v50C170 86 166 90 160 90z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M240 90h-50c-6 0-10-5-10-10V30c0-6 5-10 10-10h50c6 0 10 5 10 10v50C250 86 246 90 240 90z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M320 90h-50c-6 0-10-5-10-10V30c0-6 5-10 10-10h50c6 0 10 5 10 10v50C330 86 326 90 320 90z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M155 165h-40c-6 0-10-5-10-10v-40c0-6 5-10 10-10h40c6 0 10 5 10 10v40 C165 161 161 165 155 165z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M230 160h-30c-6 0-10-5-10-10v-30c0-6 5-10 10-10h30c6 0 10 5 10 10v30 C240 156 236 160 230 160z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M305 155h-20c-6 0-10-5-10-10v-20c0-6 5-10 10-10h20c6 0 10 5 10 10v20 C315 151 311 155 305 155z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M65 235H45c-6 0-10-5-10-10v-20c0-6 5-10 10-10h20c6 0 10 5 10 10v20C75 231 71 235 65 235z"/>
                    <path class="isotope-illo__color1" fill="#6C6" d="M140 230h-10c-6 0-10-5-10-10v-10c0-6 5-10 10-10h10c6 0 10 5 10 10v10 C150 226 146 230 140 230z"/>
                    <path class="isotope-illo__color2" fill="#19F" d="M305 235h-20c-6 0-10-5-10-10v-20c0-6 5-10 10-10h20c6 0 10 5 10 10v20 C315 231 311 235 305 235z"/>
                    <path class="isotope-illo__color2" fill="#19F" d="M65 315H45c-6 0-10-5-10-10v-20c0-6 5-10 10-10h20c6 0 10 5 10 10v20C75 311 71 315 65 315z"/>
                    <path class="isotope-illo__color2" fill="#19F" d="M150 320h-30c-6 0-10-5-10-10v-30c0-6 5-10 10-10h30c6 0 10 5 10 10v30 C160 316 156 320 150 320z"/>
                    <path class="isotope-illo__color2" fill="#19F" d="M220 230h-10c-6 0-10-5-10-10v-10c0-6 5-10 10-10h10c6 0 10 5 10 10v10 C230 226 226 230 220 230z"/>
                    <path class="isotope-illo__color2" fill="#19F" d="M235 325h-40c-6 0-10-5-10-10v-40c0-6 5-10 10-10h40c6 0 10 5 10 10v40 C245 321 241 325 235 325z"/>
                    <path class="isotope-illo__color2" fill="#19F" d="M320 330h-50c-6 0-10-5-10-10v-50c0-6 5-10 10-10h50c6 0 10 5 10 10v50 C330 326 326 330 320 330z"/>
                  </svg>
              </div>
              <div class="showcase-item__text">
                <h3 class="showcase-item__title">Isotope</h3>
                <p class="showcase-item__description">Filter &amp; sort magical layouts</p>
              </div>
            </a>
          </li>
    
    
          <li class="showcase-item">
            <a class="showcase-item__link" href="http://packery.metafizzy.co">
              <div class="showcase-item__image">
                  <svg class="packery-illo" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 700 700" width="100" height="100">
                    <path class="packery-illo__item" fill="#C09" d="M172 180H48c-4 0-8-4-8-8V48c0-4 4-8 8-8h124c4 0 8 4 8 8v124C180 176 176 180 172 180z"/>
                    <path class="packery-illo__item" fill="#C09" d="M172 340H48c-4 0-8-4-8-8V208c0-4 4-8 8-8h124c4 0 8 4 8 8v124C180 336 176 340 172 340z"/>
                    <path class="packery-illo__item" fill="#C09" d="M492 660H368c-4 0-8-4-8-8V528c0-4 4-8 8-8h124c4 0 8 4 8 8v124C500 656 496 660 492 660z"/>
                    <path class="packery-illo__item" fill="#C09" d="M652 660H528c-4 0-8-4-8-8V528c0-4 4-8 8-8h124c4 0 8 4 8 8v124C660 656 656 660 652 660z"/>
                    <path class="packery-illo__item" fill="#C09" d="M652 500H368c-4 0-8-4-8-8V368c0-4 4-8 8-8h284c4 0 8 4 8 8v124C660 496 656 500 652 500z"/>
                    <path class="packery-illo__item" fill="#C09" d="M332 660H48c-4 0-8-4-8-8V368c0-4 4-8 8-8h284c4 0 8 4 8 8v284C340 656 336 660 332 660z"/>
                    <path class="packery-illo__item" fill="#C09" d="M652 340H528c-4 0-8-4-8-8V48c0-4 4-8 8-8h124c4 0 8 4 8 8v284C660 336 656 340 652 340z"/>
                    <path class="packery-illo__draggie" fill="#EA0" d="M572 440H288c-4 0-8-4-8-8V148c0-4 4-8 8-8h284c4 0 8 4 8 8v284C580 436 576 440 572 440z"/>
                    <g>
                      <path class="packery-illo__hand" fill="white" d="M530 250c-11 0-20 9-20 20v-10c0-11-9-20-20-20s-20 9-20 20c0-11-9-20-20-20s-20 9-20 20c0-11-9-20-20-20
                        s-20 9-20 20v20c-17 0-30 13-30 30c0 11 6 20 14 25l19 35c10 18 30 30 51 30h28
                        c43 0 78-35 78-78V270C550 259 541 250 530 250z"/>
                      <line class="packery-illo__hand-line" stroke="#EA0" fill="none" stroke-width="16" stroke-linecap="round" x1="430" y1="300" x2="430" y2="340"/>
                      <line class="packery-illo__hand-line" stroke="#EA0" fill="none" stroke-width="16" stroke-linecap="round" x1="470" y1="300" x2="470" y2="340"/>
                      <line class="packery-illo__hand-line" stroke="#EA0" fill="none" stroke-width="16" stroke-linecap="round" x1="510" y1="300" x2="510" y2="340"/>
                    </g>
                  </svg>
              </div>
              <div class="showcase-item__text">
                <h3 class="showcase-item__title">Packery</h3>
                <p class="showcase-item__description">Gapless, draggable grid layouts</p>
              </div>
            </a>
          </li>
    
          <li class="showcase-item">
            <a class="showcase-item__link" href="http://huebee.buzz">
              <div class="showcase-item__image">
                  <svg class="huebee-illo" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200" width="100" height="100">
                    <polygon class="huebee-illo__stripe4" fill="#19F" points="100,170 65,135 135,135 "/>
                    <rect class="huebee-illo__stripe3" fill="#EA0" x="65" y="110" width="70" height="25"/>
                    <rect class="huebee-illo__stripe2" fill="#E62" x="65" y="85" width="70" height="25"/>
                    <polygon class="huebee-illo__stripe1" fill="#C25" points="135,85 65,85 65,70 80,55 120,55 135,70 "/>
                    <path class="huebee-illo__line" stroke="#333" fill="none" stroke-width="15" d="M140 90c0-22-18-40-39-40C78 50 60 68 60 91V110c0 14 5 27 15 37
                      l25 25l25-25c10-10 15-23 15-37V90z"/>
                    <path class="huebee-illo__line" stroke="#333" fill="none" stroke-width="15" d="M60 74v50c0 11-9 21-21 21h0c-18 0-27-22-15-35L60 74z"/>
                    <path class="huebee-illo__line" stroke="#333" fill="none" stroke-width="15" d="M140 74v50c0 11 9 21 21 21h0c18 0 27-22 15-35L140 74z"/>
                    <line class="huebee-illo__line huebee-illo__antenna" stroke="#333" fill="none" stroke-width="15" stroke-linecap="round" x1="60" y1="30" x2="80" y2="50"/>
                    <line class="huebee-illo__line huebee-illo__antenna" stroke="#333" fill="none" stroke-width="15" stroke-linecap="round" x1="140" y1="30" x2="120" y2="50"/>
                  </svg>
              </div>
              <div class="showcase-item__text">
                <h3 class="showcase-item__title">Huebee</h3>
                <p class="showcase-item__description">One-click color picker</p>
              </div>
            </a>
          </li>
    
          <li class="showcase-item">
            <a class="showcase-item__link" href="http://logo.pizza">
              <div class="showcase-item__image">
                  <svg class="logo-pizza-illo" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 700 700" width="100" height="100">
                    <path class="logo-pizza-illo__outline" fill="#C25" d="M513 91c-9-0-17 5-21 12l-80 160c-3 5-6 10-11 15l-47 47
                      c-5 5-12-1-9-7l32-64c5-11-2-23-14-23h-0c-121 0-268 70-327 180
                      C-9 497 35 609 196 609c138 0 279-85 327-180v0c5-11-2-23-14-23h-77c-13 0-19-15-10-24
                      l81-81c5-5 11-8 18-8l0 0c13 0 19 15 10 24L494 354c-6 6-6 14 0 20c3 3 6 4 10 4
                      c4 0 7-1 10-4l80-80h53c9 0 17-5 21-13C707 190 656 97 513 91z M334 281l-59 117
                      c-2 5-7 8-13 8H97c-4 0-6-4-3-7c49-64 143-114 236-124C333 275 335 278 334 281z
                       M70 441c2-4 6-7 10-7h168c4 0 7 4 5 8l-59 118c-2 4-6 6-11 6
                      C106 565 38 521 70 441z M466 441c-49 64-143 114-236 124c-3 0-6-3-4-6l59-117
                      c2-5 7-8 13-8h166C466 434 468 438 466 441z M446 318l-81 81c-5 5-11 8-18 8l0 0
                      c-13 0-19-15-10-24l81-81c5-5 11-8 18-8l0 0C449 294 455 309 446 318z M447 258L506 139
                      c2-4 6-7 11-6c101 7 140 60 114 126c-2 4-6 7-10 7H452C448 266 445 262 447 258z"/>
                    <path class="logo-pizza-illo__slice" fill="#ED0" d="M334 281l-59 117c-2 5-7 8-13 8H97c-4 0-6-4-3-7
                      c49-64 143-114 236-124C333 275 335 278 334 281z"/>
                    <path class="logo-pizza-illo__slice" fill="#ED0" d="M70 441c2-4 6-7 10-7h168c4 0 7 4 5 8l-59 118c-2 4-6 6-11 6
                      C106 565 38 521 70 441z"/>
                    <path class="logo-pizza-illo__slice" fill="#ED0" d="M466 441c-49 64-143 114-236 124c-3 0-6-3-4-6l59-117
                      c2-5 7-8 13-8h166C466 434 468 438 466 441z"/>
                    <path class="logo-pizza-illo__slice" fill="#ED0" d="M447 258L506 139c2-4 6-7 11-6c101 7 140 60 114 126c-2 4-6 7-10 7H452
                      C448 266 445 262 447 258z"/>
                  </svg>
              </div>
              <div class="showcase-item__text">
                <h3 class="showcase-item__title">Logo Pizza</h3>
                <p class="showcase-item__description">Hot &amp; ready logos for sale</p>
              </div>
            </a>
          </li>
    
      </ul> 
    
    </div>

    <p class="site-footer__copy">
      <a href="https://twitter.com/metafizzyco">
        <svg class="twitter-logo" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" width="30" height="30">
          <path d="M512 97c-19 8-39 14-60 16 22-13 38-34 46-58-20 12-43 21-67 25-19-19-46-32-77-32-58 0-117 52-102 129-87-4-165-46-216-110-24 40-19 107 32 140-17 0-33-5-48-13v1c0 51 36 93 84 103-15 4-34 5-47 2 13 42 52 72 98 73-47 36-96 49-155 44 46 30 102 47 161 47 197 0 306-168 299-312 20-15 38-34 52-55z"/>
        </svg>
        Follow @metafizzyco on Twitter for Flickity updates
      </a>
    </p>

    <div class="metafizzy-brand">
      <a class="metafizzy-brand__link" href="http://metafizzy.co">
        <svg class="metafizzy-logo" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 780 1000" width="78" height="100">
          <path class="metafizzy-logo__outline" fill="#333" d="M642 31c-49 0-85 29-102 51C528 55 490 2 415 2
            c-76 0-134 59-137 135c-18 7-62 34-75 43c-20-10-42-16-65-16h0c-68 0-137 53-137 139
            c0 78 67 133 128 135c11 19 26 42 44 69c1-1-74 46-74 46c-29 19-61 53-61 110
            c0 75 62 128 129 128c24 0 48-7 68-20l16-10l-23 66C199 917 267 998 350 998
            c54 0 104-35 122-87l7-20c19-2 37-8 55-18l92-57c25-16 45-39 54-68l46-131
            c19-54 14-125 1-185c8-16 51-112 51-220C779 58 695 31 642 31z"/>
          <clippath id="metafizzy-logo__body">
            <path d="M566 164c-2-34 19-67 54-78c41-13 84 9 97 50c21 67 7 146-13 218
              C688 310 631 222 566 164z M626 314C567 227 500 155 424 156c-14 0-25-13-25-27
              c1-14 13-25 27-25c42 1 71 15 73 16l0 0C489 70 426 33 371 66c-36 22-50 65-36 103
              c-37 11-108 52-132 75c-27-31-73-39-109-17c-41 25-53 78-29 118c20 32 58 47 93 39
              c15 30 44 74 87 138l-119 74c-36 23-48 71-25 107c25 39 74 45 107 25
              c23-14 61-38 61-38c-0-4-1-7-1-11c-2-14 7-27 21-30c14-2 27 7 30 21
              c5 29 1 52-3 62c0 0-22 61-38 111c-18 55 24 103 72 103c30 0 62-17 74-52l60-174
              c3-7 8-13 16-16c25-9 45-27 45-27c11-10 27-9 36 2c10 11 9 27-2 36
              c-1 1-22 20-51 33l-29 84l0 0c3-1 5-3 8-4l92-57c15-9 27-24 33-41l46-131
              C705 521 671 383 626 314z"/>
          </clippath>
          <g clip-path="url(#metafizzy-logo__body)">
            <polygon class="metafizzy-logo__stripe4" fill="#19F" points="1016 544 278 1018 174 837 911 373"/>
            <polygon class="metafizzy-logo__stripe3" fill="#EA0" points="822 435 174 843 85 695 822 232"/>
            <polygon class="metafizzy-logo__stripe2" fill="#E62" points="822 238 85 701 74 469 717 65"/>
            <polygon class="metafizzy-logo__stripe1" fill="#C25" points="717 70 -20 533 -20 299 612 -100"/>
          </g>
          <path class="metafizzy-logo__snout" fill="white" d="M474 373c-44 27-66 73-48 103c18 30 70 33 113 5
            c48-31 66-73 48-103C570 347 519 345 474 373z"/>
          <path class="metafizzy-logo__eyes-nose" fill="#333" d="M383 383c13 21-15 14-36 27s-28 41-40 20c-13-21-6-49 15-62
            C343 355 370 362 383 383z M497 260c-21 13-28 41-15 62c13 21 19-7 40-20s49-6 36-27
            S518 247 497 260z M467 416L467 416c4 6 11 10 18 9l22-2c6-1 12-4 15-9l12-19
            c4-6 4-14 0-20v0c-6-9-18-12-27-7l-34 21C464 395 461 407 467 416z"/>
        </svg>
        <svg class="metafizzy-wordmark" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 300" width="100" height="30">
          <path fill="#333" d="M491 121c3-9 13-39 13-39h-25c-1 2-2 5-3 8c-23-32-63 7-72 41
            c-4 10-12 25-23 25c-13 0 0-35 6-56c0 0 0-0 0-0c4-12 11-36 11-36s18 0 24 0
            c25 0 51 5 71-13l-14-15c-10 8-18 8-27 8c-13 0-48 0-48 0l7-23h-25l-7 23h-29l-6 21
            h29c0 0-4 14-6 19c-7 22-11 49-30 64c-14 10-38 17-53 7c19-8 51-21 51-45
            c0-13-8-29-28-29c-39 0-57 40-57 60c0 25 24 40 49 40c21 0 39-7 54-19c3 9 11 16 24 16
            c13 0 23-5 30-14c7 10 19 16 33 14c11-2 19-7 26-14c4 8 11 14 25 15l6-21
            C477 156 488 131 491 121z M277 132c3-10 13-33 29-29c5 1 6 7 4 12c-4 12-20 20-33 26
            C276 138 276 135 277 132z M443 156c-9 3-14-2-15-11c-3-19 25-60 42-33c0 0-2 8-4 14
            C463 138 454 152 443 156z M251 188l-15 19c-31-18-33-59-24-87c10-31 19-50 19-50
            l-50 65l-23-0c-1-18-4-50-8-65c0 0-9 30-14 45c-13 44-37 119-97 109
            c-18-3-33-16-36-34c-4-23 12-45 30-60l13 17c-14 11-29 33-13 50
            c13 14 31 6 42-5c23-22 29-56 38-86C121 82 135 35 135 35c0 0 0-0 0-0c-0-0-1-1-1-1
            C129 42 119 48 109 47c-11-1-17-11-14-21c3-10 14-18 25-18c15 0 23 1 34 12
            c14 13 23 50 26 80l64-79l23-0l-29 94C231 138 226 174 251 188z M649 48
            c-2 6-11 18-25 18c-14 0-20-11-17-21c3-8 9-14 17-16c-8-9-28-7-38 2
            c-9 8-12 20-15 31c-2 7-7 21-7 21h65l-29 94h-25l23-73h-40c0 0-14 48-22 72
            c-9 27-34 57-65 59L478 212c16-1 29-25 34-41c4-13 18-58 21-68c-6 0-13 0-19 0l6-21
            c5 0 12 0 19 0c4-12 7-24 11-36c8-25 33-45 63-45C642 1 656 22 649 48z M727 82
            h-82l-6 21h47l-62 56l-5 17c39 0 75 9 94-15l-16-14c-11 14-27 10-40 10L721 99L727 82z
             M999 70c0 38-27 89-102 123c-2 6-4 12-6 18c-7 24-23 88-86 88c-22 0-41-12-41-36
            c0-27 23-38 36-46c23-14 50-25 76-36c1-3 2-6 3-9c-4 2-9 3-13 3
            c-14 1-28-4-35-15c-11 8-23 14-35 17c-22 5-57-0-79-0l5-18l61-55h-46l6-21h82
            l-6 17l-64 58c11 0 22 0 33-1c14-1 31-10 41-26c3-5 16-50 16-50l24 0
            c0 0-6 22-11 38c-4 13-8 35 8 35c12 0 23-13 26-23c3-10 15-50 15-50l25 0l-26 85
            c72-42 76-101 64-115c-5 9-15 16-26 14c-11-1-17-11-14-21c3-10 14-18 25-18
            C988 26 999 53 999 70z M867 206c-5 2-10 5-15 7c-14 7-31 13-48 25
            c-10 7-23 19-15 32c6 11 24 9 34 5c13-6 26-19 32-32C860 232 864 219 867 206z"/>
        </svg>
      </a>
    </div>

  </div>

</footer>

  <script src="http://flickity.metafizzy.co/js/flickity-docs.min.js"></script>

  <script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-58739927-1','auto');ga('send','pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>
</html>
