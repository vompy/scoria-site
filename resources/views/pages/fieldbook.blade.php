@extends('layouts.master')
@section('content')
<main class="cd-main-content">
	<div class="cd-fixed-bg fieldbook-bg-1">
	<h1>Fieldbook</h1>
	</div> <!-- cd-fixed-bg -->

	<div class="cd-scrolling-bg cd-color-2">
		<div class="research-container">
			<article class="type-system-geometric">
				<p class="type">Product</p>
				<h1>Fieldbook at a Glance</h1>
				<h2>A two-part web application designed to capture geological observations during a traverse</h2>

				<img src="/images/fieldbook/canvas-overview.png">
				<h4>Fieldbook Canvas</h4>
				<p>This two-way image annotation tool is designed to bring the EV and IV into a shared mental space, equipping them to explore the Martian terrain together by drawing each other’s attention to areas of interest. Canvas also records the conversation associated with each image for later replay by the science team.</p>
				<img src="/images/fieldbook/gallery-overview.png">
				<h4>Fieldbook Gallery</h4>
				<p>The Gallery tool is designed for the science team to quickly parse the incoming images, annotations, and recordings from the EV and IV in order to make quick, informed decisions about sample priorities.</p>
				</div>
			</article>
		</div> <!-- research-container -->
	</div> <!-- cd-scrolling-bg -->

	<div class="cd-fixed-bg fieldbook-bg-2">
		<!-- <h2>Analogous Domains</h2> -->
	</div> <!-- cd-fixed-bg -->

	<div class="cd-scrolling-bg cd-color-3">
		<div class="research-container">
			<article class="type-system-geometric">
				<p class="type">Fieldbook</p>
				<h1>FIELDBOOK CANVAS</h1>
				<h2>Fostering an exploration-focused conversation between the EV and IV</h2>


				<div class="final-interfaces">
					<div class="ev">
						<span class="screen-title">
							EV Interface
						</span>
						<img src="/images/fieldbook/final-interfaces/final-ev.png">
						<span class="image-captions">A samsung galaxy tab s2 was chosen as the device for the ev because of its superior visibility in the sunlight.</span>
					</div>
					<div class="iv">
						<span class="screen-title">
							IV Interface
						</span>
						<img src="/images/fieldbook/final-interfaces/final-iv.png">
						<span class="image-captions">While our web application is accessible on any device, user-testing revealed that most ivs also prefer a large tablet seperate from their multiple desktop monitors.</span>
					</div>
				</div>

				<div class="features">
						<span class="features__title">
							Send Photos
						</span>			
						<div class="features__info">
							<div class="features__icons">
								
								<img src="/images/fieldbook/final-interfaces/camera.png">
							</div>
							<div class="features__details">

								<p>When the EV takes a new photo, a screen capture and audio recording begins. Photos are immediately sent to all active IVs.</p>
							</div>						
						</div>			
					</div>
					<div class="features">
						<span class="features__title">
							Draw Freely and Visibly
						</span>			
						<div class="features__info">
							<div class="features__icons">
								
								<img src="/images/fieldbook/final-interfaces/draw.png">
							</div>
							<div class="features__details">
								<p>The drawing tool allows the EV and IV to make real-time annotations to each other. Annotations are designed with high contrast borders to improve visibility.</p>
							</div>						
						</div>			
					</div>
					<div class="features">
						<span class="features__title">
							Drop Labeled Pins
						</span>			
						<div class="features__info">
							<div class="features__icons">
								
								<img src="/images/fieldbook/final-interfaces/marker.png">
							</div>
							<div class="features__details">
								<p>The pin drop tool can be used to clearly mark a point of interest for sampling. Each pin is labeled so that important decision points can be easily referenced in the future.</p>
							</div>						
						</div>			
					</div>
					<div class="features">
						<span class="features__title">
							Handle Mistakes
						</span>			
						<div class="features__info">
							<div class="features__icons">
								
								<img src="/images/fieldbook/final-interfaces/undo.png">
							</div>
							<div class="features__details">
								<p>Undo and redo buttons allow the EV and IV to move quickly without fear of a mistake.</p>
							</div>						
						</div>			
					</div>
				
			</article>
		</div> <!-- research-container -->
	</div> <!-- cd-scrolling-bg -->

	<div class="cd-fixed-bg fieldbook-bg-3">
		<!-- <h2>Talking To the Users</h2> -->
	</div> <!-- cd-fixed-bg -->

	<div class="cd-scrolling-bg fieldbook-gallery">
		<div class="research-container">
			<article class="type-system-geometric">
				<p class="type">Fieldbook</p>
				<h1>Fieldbook Canvas</h1>
				<h2>Empowering the science team with packaged data</h2>
				<img src="/images/fieldbook/final-interfaces/gallery.png">
				<p>The Gallery tool is designed for the science team to quickly parse the incoming images, annotations, and recordings from the EV and IV in order to make quick, informed decisions about sample priorities.</p>


				<img src="/images/fieldbook/final-interfaces/gallery/Media-Controls.png">
				<h4>Audio Navigation</h4>
				<p>With a single click, the screen capture and audio can be skipped 15 seconds forward or backward to quickly scan for interesting information.</p>

				<img src="/images/fieldbook/final-interfaces/gallery/Audio-Markers.png">
				<h4>Audio Markers</h4>
				<p>Markers on the audio track indicate when annotations were made. Clicking a marker automatically jumps the audio and screen capture to that point.</p>

				<img src="/images/fieldbook/final-interfaces/gallery/Text-Transcription.png">
				<h4>Speech to Text Transcription</h4>
				<p>The audio recording is transcribed, and geological keywords are highlighted for easy scannability.</p>

				<img src="/images/fieldbook/final-interfaces/gallery/Annotated-Photo.png">
				<h4>Photo Annotations</h4>
				<p>The science team receives each photo with its corresponding annotations.</p>
				</div>
			</article>
		</div> <!-- research-container -->
	</div> <!-- cd-scrolling-bg -->

	<div class="cd-fixed-bg fieldbook-bg-4">
	</div> <!-- cd-fixed-bg -->

	<div class="cd-scrolling-bg cd-color-4">
		<div class="research-container">
			<article class="type-system-geometric">
				<p class="type">Fieldbook</p>
				<h1>How Fieldbook Meets Our Research Goals</h1>


				<h4>Streamline the Vocals</h4>
				<p>Annotation tools obsolete voice as a means of communicating metadata such which rock the EV is describing, thus clearing up the voice channel.</p>

				<h4>Capture the Humanity</h4>
				<p>Audio recordings capture scientific descriptions and are packaged with corresponding images and annotations in a digestible format.</p>

				<h4>Create Shared Frames of Reference</h4>
				<p>Real-time annotation on a common image allows the EV and IV to be in lockstep with each other throughout the discovery process.</p>

				<h4>Design for Exploration, Not Execution</h4>
				<p>Parseable audio recordings allow the IV to forego note-taking and instead take part in a real-time, exploration-focused conversation with the EV.</p>
			</article>
		</div> <!-- research-container -->
	</div> <!-- cd-scrolling-bg -->

</main> <!-- cd-main-content -->
@stop