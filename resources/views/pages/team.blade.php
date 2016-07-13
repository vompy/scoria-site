@extends('layouts.master')
@section('content')
<main>
	<div class="hero">
		<div class="hero-content team">       
	</div>
	<section class="cd-section cd-placeholder-1">
		<div class="cd-container">
			<h2>Who we are</h2>
			<p>Team Scoria is a group of four students in the Masters of Human-Computer Interaction program within the School of Computer Science at Carnegie Mellon University. We have a wide variety of backgrounds, coming into the program with experience in the fields of embedded engineering, information design, environmental journalism, and education. </p>
		</div> <!-- cd-container -->
	</section>
	<section id="cd-team" class="cd-section">
		<div class="cd-container">
			<h2>Team Scoria</h2>
			<ul>
				<li>
					<a href="#0" data-type="member-1">
						<figure>
							<img src="images/team/nick.jpg" alt="Team member 1">
							<div class="cd-img-overlay"><span>View Bio</span></div>
						</figure>

						<div class="cd-member-info">
							Nick Murphy <span>Project Coordinator</span>
						</div> <!-- cd-member-info -->
					</a>
				</li>

				<li>
					<a href="#0" data-type="member-2">
						<figure>
							<img src="images/team/paige.jpg" alt="Team member 1">
							<div class="cd-img-overlay"><span>View Bio</span></div>
						</figure>

						<div class="cd-member-info">
							Paige Pritchard <span>Research Lead</span>
						</div> <!-- cd-member-info -->
					</a>
				</li>

				<li>
					<a href="#0" data-type="member-3">
						<figure>
							<img src="images/team/shilpa.jpg" alt="Team member 1">
							<div class="cd-img-overlay"><span>View Bio</span></div>
						</figure>

						<div class="cd-member-info">
							Shilpa Sarode <span>Technical Lead</span>
						</div> <!-- cd-member-info -->
					</a>
				</li>
				<li>
					<a href="#0" data-type="member-4">
						<figure>
							<img src="images/team/loui.jpg" alt="Team member 1">
							<div class="cd-img-overlay"><span>View Bio</span></div>
						</figure>

						<div class="cd-member-info">
							Loui Vongphrachanh <span>Design Lead</span>
						</div> <!-- cd-member-info -->
					</a>
				</li>
			</ul>
		</div> <!-- cd-container -->
	</section> <!-- cd-team -->

	<div class="cd-overlay"></div>
</main>

<div class="cd-member-bio member-1">
	<div class="cd-member-bio-pict">
		<img src="images/team/nick.jpg" alt="Member Bio image">
	</div> <!-- cd-member-bio-pict -->

	<div class="cd-bio-content">
		<h1>Meet Nick Murphy</h1>
		<p>Nick graduated from the University of Kentucky with degrees in biology and mathematics. He is currently leveraging his technical and creative skills as he aspires to become an HCI professional. As a former middle school teacher and a fanatic of all things code and design, Nick is extremely passionate about using technology as a tool in education and social justice.</p>
	</div> <!-- cd-bio-content -->
</div> <!-- cd-member-bio -->

<div class="cd-member-bio member-2">
	<div class="cd-member-bio-pict">
		<img src="images/team/paige.jpg" alt="Member Bio image">
	</div> <!-- cd-member-bio-pict -->

	<div class="cd-bio-content">
		<h1>Meet Paige Pritchard</h1>
		<p>Paige graduated with a Bachelor’s of Journalism from the University of Missouri in 2012. She comes to CMU after three years of working in print journalism, digital media development, and a quick stint as an ice cream maker. Her interests include a newfound passion for creative coding, a long-running affectation for movies,</p>
	</div> <!-- cd-bio-content -->
</div> <!-- cd-member-bio -->

<div class="cd-member-bio member-3">
	<div class="cd-member-bio-pict">
		<img src="images/team/shilpa.jpg" alt="Member Bio image">
	</div> <!-- cd-member-bio-pict -->

	<div class="cd-bio-content">
		<h1>Meet Shilpa Sarode</h1>
		<p>Shilpa earned her bachelor's degree in electrical engineering from the University of Pennsylvania in 2012. After graduating, she worked for three years as an embedded engineer and UX designer at the smart building company Lutron Electronics. Her interests include neuroscience, working on cutting-edge technology, and a love for board games.</p>
	</div> <!-- cd-bio-content -->
</div> <!-- cd-member-bio -->
<div class="cd-member-bio member-4">
	<div class="cd-member-bio-pict">
		<img src="images/team/loui.jpg" alt="Member Bio image">
	</div> <!-- cd-member-bio-pict -->

	<div class="cd-bio-content">
		<h1>Meet Loui Vongphrachanh</h1>
		<p>Loui graduated from the University of Michigan with a degree in informatics, which studies the science of computer information and information processing. Before attending CMU, Loui worked as a UX Generalist for various tech startups in San Francisco. In her free time Loui enjoys hiking, playing with her dog Sadie, and reading design books and novels.</p>
	</div> <!-- cd-bio-content -->
</div> <!-- cd-member-bio -->
	<a href="#0" class="cd-member-bio-close">Close</a> <!-- close the author bio section -->
@stop