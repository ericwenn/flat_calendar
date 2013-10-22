<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href="http://www.ericwenn.se/css/basic.css" rel="stylesheet">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@ericwenn">
	<meta name="twitter:creator" content="@ericwenn">
	<meta name="twitter:title" content="Flatmin Calendar Widget - Eric Wennerberg">
	<meta name="twitter:description" content="A flat & responsive calendar widget. This widget is a part of Eric Wennerbergs Flatmin Framework but works just as good in this standalone download. ">
	<title>Flatmin Calendar Widget - Eric Wennerberg</title>
	<link href="c.css" rel="stylesheet">

</head>
<script type="text/javascript">
	var i=0;
	var scriptArray = ["http://code.jquery.com/jquery-2.0.3.min.js","http://ericwenn.se/js/basic.js","calendar.js","https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"];
	function dJSol() {
		d(i);
	}
	function d(i) {
		var element = document.createElement("script");
		element.src = scriptArray[i];
		document.body.appendChild(element);
		element.onload = function() {
			i++;
			if(i<scriptArray.length) {
				d(i);
			}
		}
	}
	 if (window.addEventListener)
	 window.addEventListener("load", dJSol, false);
	 else if (window.attachEvent)
	 window.attachEvent("onload", dJSol);
	 else window.onload = dJSol;
</script>
<style>

.color {
	height:5em;
	width:20%;
	display:inline-block;
	margin-left:6.6%;
}
.color:first-child {
	margin-left:0;
}
.color-inset {
	height:50%;
	padding:.5em;
	text-align:center;
	color:white;
}
</style>
<?php
mysql_connect("mysql.u0056300.fsdata.se", "u0056300", "mimmsan123") or die(mysql_error());
mysql_select_db("u0056300_e") or die(mysql_error());
mysql_set_charset('utf8');
$url = "http://ericwenn.se/frameworks/flatmin/calendar/";
$result = mysql_query("SELECT * FROM E_PLAYGROUND WHERE http='$url'");
$row = mysql_fetch_array($result);
$version = $row['version'];
$dllink = $row['download'];
?>
<body>
<?php
include('/home/u/u0056300/www/ericwenn/php/header.php');
?>
<section id="content">
	<section class="wrapper-40">
		<h1>Flatmin responsive calendar</h1>
		<p>This widget is a part of Flatmin Responsive Framework by <a href="http://www.ericwenn.se" class="inline-style"><span data-text="Eric Wennerberg">Eric Wennerberg</span></a></p>
		<div opn="share" class="share-bar">
		<div class="g-plus" data-action="share" data-annotation="bubble"></div><a href="https://twitter.com/ericwenn" class="twitter-follow-button" data-show-count="false">Follow @ericwenn</a><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ericwenn.se/frameworks/flatmin/calendar/" data-via="ericwenn" data-text="A flat, responsive and awesome calendar widget" data-lang="en">Tweet</a>
		</div>
	</section>

	<div class="box calendar wrapperclear-50" data-color="red" opn="demo" style="height:20em";>
		<div data-role="day" data-day="20131010">
			<div data-role="event" data-name="This is an event" data-start="9.00" data-end="9.30" data-location="The Web"></div>
			<div data-role="event" data-name="This is also an event" data-start="10.00" data-end="11.00" data-location="At Home"></div>
		</div>
		<div data-role="day" data-day="20131015">
			<div data-role="event" data-name="This is an event" data-start="9.00" data-end="9.30" data-location="The Web"></div>
			<div data-role="event" data-name="This is also an event" data-start="10.00" data-end="11.00" data-location="At Home"></div>
		</div>
		<div data-role="day" data-day="20131016">
			<div data-role="event" data-name="This is an event" data-start="9.00" data-end="9.30" data-location="The Web"></div>
			<div data-role="event" data-name="This is also an event" data-start="10.00" data-end="11.00" data-location="At Home"></div>
		</div>
		<div data-role="day" data-day="20131020">
			<div data-role="event" data-name="This is an event" data-start="9.00" data-end="9.30" data-location="The Web"></div>
			<div data-role="event" data-name="This is also an event" data-start="10.00" data-end="11.00" data-location="At Home"></div>
		</div>
		<div data-role="day" data-day="20131110">
			<div data-role="event" data-name="This is an event" data-start="9.00" data-end="9.30" data-location="The Web"></div>
			<div data-role="event" data-name="This is also an event" data-start="10.00" data-end="11.00" data-location="At Home"></div>
		</div>
	</div>
	<h2 class="wrapperhl">Link to script</h2>
	<pre class="wrapper-40" opn="scriptlink"><code class="prettyprint">&lt;link href=&quot;http://www.ericwenn.se/frameworks/flatmin/calendar/c.css&quot; rel=&quot;stylesheet&quot;&gt;<br/>&lt;script src=&quot;http://www.ericwenn.se/frameworks/flatmin/calendar/calendar.js&quot;&gt;&lt;/script&gt;</code></pre>
	<section class="wrapper-40" opn="download">
		<a href="<?php echo $dllink; ?>" class="nostyle"><button class="downloadbutton" data-version="<?php echo $version; ?>" data-product="Flatmin Calendar"><span>Download v<?php echo $version; ?></span></button></a>
		<p>If you like this plugin and want to follow the development, follow me on twitter<p>
		<a href="https://twitter.com/ericwenn" class="twitter-follow-button" data-show-count="false">Follow @ericwenn</a>
	</section>
	<h2 class="wrapperhl">Changelogs</h2>
	<section class="wrapper-40" opn="changelogs">
		<h3>v1.2.0</h3>
		<ul>
			<li><h5>Abandon Flexbox</h5><p>Replaced the shiny flexbox properties with crossbrowser compatibilities.</p></li>
		</ul>
		<h3>v1.1.5</h3>
		<ul>
			<li><h5>Javascript init</h5><p>The plugin can now be called with JS only. Check out documentation for how.</p></li>
		</ul>
		<h3>v1.1.0</h3>
		<ul>
			<li><h5>Flexbox</h5><p>The plugin is now harnessing the full power of flexbox. But dont worry its compatible with old browsers aswell.</p></li>
			<li><h5>Dateformat</h5><p>In this version you must use the format YYYYMMDD, example 20130101. This is in order to fix problems with some months. Thanks to <a class="inline-style" href="http://webfro.gs/">web frogs</a> for pointing this out.</p></li>
			<li><h5>Name of days</h5><p>Just as shown in the example above you can now option to show the name of the days. Check out usage section to learn how.</p></li>
			<li><h5>Sass File</h5><p>Included in the zip is a SASS-file in order to make customizations easier.</p></li>
		</ul>
	</section>
	<h2 class="wrapperhl">Features</h2>
	<section class="wrapper-40" opn="features">
		<ul>
			<li><h5>Adaptable</h5><p>The widget will look great, no matter the width of the container.</p></li>
			<li><h5>Color Swatches</h5><p>The css file contains code to change between <a href="#colorswatches">4 color swatches</a>. Its also possible to add your own color with a little css-knowledge.
			<li><h5>Fast Load</h5><p>Months are loaded/unloaded as theyre toggled on/off.</p></li>
			<li><h5>Small Size</h5><p>Combined filesize is ~10kb.
			<li><h5>No Month Range</h5><p>The only limitation is before 1970 (Epoch). Everything else can be displayed. </p></li>
			<li><h5>Events</h5><p>Easily add events with certain properties such as starting time, ending time, location and name.</li>
			<li><h5>Customizable Style</h5><p>Possible to style it with the help of the included css files.</p></li>
		</ul>
	</section>
	<h2 class="wrapperhl">Usage [HTML]</h2>
	<section class="wrapper-40" opn="usageHTML">
		<ul>
			<li><h5>Simple calendar</h5><p><pre><code class="prettyprint"> &lt;div class=&quot;calendar&quot;&gt;&lt;/div&gt; </code></pre><p>This will result in a calendar without any events.</p></p></li>
			<li><h5>Show days</h5><p>In order to show name of the days add the data showdays="true" to the calendar element. Like this:
			<pre><code class="prettyprint"> &lt;div class=&quot;calendar&quot; data-showdays=&quot;true&quot; &gt;&lt;/div&gt; </code></pre></p></li>
			<li><h5>Calendar with events</h5>
			<p>
			<pre><code class="prettyprint">&lt;div class=&quot;calendar&quot;&gt;<br/>	&lt;div data-role=&quot;day&quot; data-day=&quot;20130910&quot;&gt;<br/>		&lt;div data-role=&quot;event&quot; data-name=&quot;This is an event&quot; data-start=&quot;9.00&quot; data-end=&quot;9.30&quot; data-location=&quot;The Web&quot;&gt;&lt;/div&gt;<br/>		&lt;div data-role=&quot;event&quot; data-name=&quot;This is also an event&quot; data-start=&quot;10.00&quot; data-end=&quot;11.00&quot; data-location=&quot;At Home&quot;&gt;&lt;/div&gt;<br/>	&lt;/div&gt;<br/>&lt;/div&gt;</code></pre>
			<p>Within the calendar container you can add events to be processed by the script. Each event must be wrapped in a container together with other events on the same day just as in the example.</p>
			<p>The data-day value should containg leading zeroes.</p>
			<pre><code class="prettyprint">&lt;div data-role=&quot;day&quot; data-day=&quot;201311&quot;&gt;</code></pre>
			<p>This is incorrect and should instead be:</p>
			<pre><code class="prettyprint">&lt;div data-role=&quot;day&quot; data-day=&quot;20130101&quot;&gt;</code></pre>
			</p>
		</ul>
	</section>
	<h2 class="wrapperhl">Usage [JS]</h2>
	<section class="wrapper-40" opn="usageJS">
		<ul>
			<li><h5>Simple Calendar</h5><p><pre><code class="prettyprint"><?php echo htmlspecialchars('$(".calendarExample").calendar();')?></code></pre></p></li>
			<li><h5>Calendar with events</h5><p><pre><code class="prettyprint"><?php echo htmlspecialchars('$(".calendarExample").calendar(array);')?></code></pre></p>
			<p>Where array is, surprisingly, an array containing the events. Example: <pre><code class="prettyprint"><?php echo nl2br(htmlspecialchars('[
				{
					date: "20130915",
					name: "Mulberry Festival",
					start: "9.00",
					end: "9.30",
					location: "London"
				},
				{
					date:"20131014",
					name:"Mulberry Festival",
					start: "9.00",
					end:"10.00",
					location:"Stockholm"
				},
				{
					date: "20131015",
					name:"York",
					start:"10.00",
					end:"11.00",
					location:"York"
				}
			]'))?></code></pre></p>
			<p>The dates should contain leading zeroes.</p></li>
			<li><h5>Options</h5><p>You can pass along an option-object in the scriptcall. Accepted options are color, and showdays. Example: <pre><code class="prettyprint"><?php echo nl2br(htmlspecialchars('{
				color: "red",
				showdays: true,
				}'))?></code></pre></p>
				<p>These options are the default.</p></li>
		</ul>
	</section>
	<h2 class="wrapperhl">Color Swatches</h2>
	<section class="wrapper-40" id="colorswatches" opn="colorswatches">
		<div class="color"><div class="color-inset" style="background:#E74C3C;">red</div><div class="color-inset" style="background-color: #C0392B;"></div></div><div class="color"><div class="color-inset" style="background:#3498DB;">blue</div><div class="color-inset" style="background-color: #2980B9;"></div></div><div class="color"><div class="color-inset" style="background:#2ECC71;">green</div><div class="color-inset" style="background-color: #27AE60;"></div></div><div class="color"><div class="color-inset" style="background:#F1C40F;">yellow</div><div class="color-inset" style="background-color: #F39C12;"></div></div>
	</section>	
	<pre class="wrapper-40"><code class="prettyprint"> &lt;div class=&quot;calendar&quot; data-color=&quot;red&quot; &gt;&lt;/div&gt; </code></pre>
	<section class="wrapper-40">	
		<p>This will result in a red calendar, like the one on the top of this page. The color is set to red by default.</p>
	</section>
	<section class="wrapper-40">
		<a href="<?php echo $dllink; ?>" class="nostyle"><button class="downloadbutton" data-version="<?php echo $version; ?>" data-product="Flatmin Calendar"><span>Download v<?php echo $version; ?></span></button></a>
	</section>
</section>
</body>
</html>