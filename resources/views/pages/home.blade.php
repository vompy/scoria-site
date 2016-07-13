@extends('layouts.master')
@section('content')
<div class="hero">
	<div class="hero-content">       
</div>
</div>
<section class="cd-section cd-placeholder-2">
	<div class="cd-container">
		<h2>Our Mission</h2>
		<p>Our team is prototyping a system to aid astronauts studying geology on Mars. We took a human-centered approach to locate breakdowns within this problem space by combining secondary and primary research methods with experiential exercises and participatory design.</p>
	</div> <!-- cd-container -->
</section>
<div class="cards">
	<div class="card">
		<a href="/research">
			<div class="card-image">
				<img src="/images/homepage/research.jpg">
			</div>
			<div class="card-header">
				<h4>Research</h4>
			</div>
			<div class="card-copy">
				<p>To gain a foundational understanding of our problem space, we exposed ourselves to as much information about relevant about the space mission operations as possible.</p>
			</div>
		</a>
	</div>

	<div class="card">
		<a href="/ideation">
			<div class="card-image">
				<img src="/images/homepage/ideation.jpg">
			</div>
			<div class="card-header">
				<h4>Ideation</h4>
			</div>
			<div class="card-copy">
				<p>We collaborated, developed and iterated to create a prototype that brings form to one or more of our identified opportunity spaces.</p>
			</div>
		</a>
	</div>

	<div class="card">
		<a href="/fieldbook">
			<div class="card-image">
				<img src="/images/homepage/fieldbook.jpg">
			</div>
			<div class="card-header">
				<h4>Fieldbook</h4>
			</div>
			<div class="card-copy">
				<p>After narrowing down to one idea, we prototyped and tested our solution to deliver a working prototype to our client.</p>
			</div>
		</div>
	</a>
</div>
<section id="cd-timeline" class="cd-timeline cd-container">
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture icon-homepage-1">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Project Scoping</h2>
			<p>We met with our client to define the goals for our project. Afterwards, we decided on the scope of the project and created a project timeline.</p>
			<!-- <a href="#0" class="cd-read-more">Read more</a> -->
			<span class="cd-date">January</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture icon-homepage-2">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Literature Review</h2>
			<p>Team members read scientific papers of past NASA research on the following areas: the history of Apollo surface missions, Earth-based analog missions, planetary geology, and various designs and prototypes of procedural aids (including cuff checklists, cue cards, and digital devices). We used this secondary research to answer our initial questions about the domain. </p>
			<!-- <a href="#0" class="cd-read-more">Read more</a> -->
			<span class="cd-date">February</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture icon-homepage-3">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Core Research</h2>
			<p>We took a two-step approach: field and domain research. We observed our clients running a practice traverse. Then, in order to build empathy for our users, we conducted our own traverse. We wanted to physicaly and emotional experience of an analog mission. </p>
			<!-- <a href="#0" class="cd-read-more">Read more</a> -->
			<span class="cd-date">February-April</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture icon-homepage-4">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Research Synthesis</h2>
			<p>We utilized two main synthesis methodologies: modeling and affinity diagramming. Modeling the users’ emotional and logistical journeys during a traverse enabled us to visualize pain points and breakdowns. eanwhile, the affinity process empowered us to synthesize data across all of our research by having us deconstruct the data into single units of information and reconstruct the units into meaningful groups.</p>
			<!-- <a href="#0" class="cd-read-more">Read more</a> -->
			<span class="cd-date">April</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture icon-homepage-5">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Iterative Prototyping</h2>
			<p>We created many low-fidelity designs and tested them with users and our client. Then we narrowed down to a few ideas and tested them again. After we decided on one idea, we continued to refine our solution by prototying and testing rapidly.</p>
			<!-- <a href="#0" class="cd-read-more">Read more</a> -->
			<span class="cd-date">May-July</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture icon-homepage-6">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Ship</h2>
			<p>At the end of our project we delivered our solution to our clients.</p>
			<span class="cd-date">August</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->
</section> <!-- cd-timeline -->
<section class="cd-section goto-research">
	<div class="cd-container">
		<h2>Dive into our Process</h2>
		<a class="next-section__link" href="/research"><button class="btn btn-4 btn-4a">Research</button></a>
	</div> <!-- cd-container -->
</section>

@stop