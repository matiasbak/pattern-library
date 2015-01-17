<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pattern Library</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?= site_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/demo.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/bower_components/fontawesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/bower_components/animate.css/animate.min.css') ?>">
	<style>
		body {
			padding-bottom: 500px;
		}
	</style>
</head>
<body>
	<!-- The Grid System -->
	<section>
		<div class="container">
			<h1>The Grid System</h1>
			<hr>
			<div class="row">
				<div class="col-12"><div class="demo-col">.col-12</div></div>
			</div>

			<div class="row">
				<div class="col-6"><div class="demo-col">.col-6</div></div>
				<div class="col-6"><div class="demo-col">.col-6</div></div>
			</div>

			<div class="row">
				<div class="col-4"><div class="demo-col">.col-4</div></div>
				<div class="col-4"><div class="demo-col">.col-4</div></div>
				<div class="col-4"><div class="demo-col">.col-4</div></div>
			</div>

			<div class="row">
				<div class="col-3"><div class="demo-col">.col-3</div></div>
				<div class="col-3"><div class="demo-col">.col-3</div></div>
				<div class="col-3"><div class="demo-col">.col-3</div></div>
				<div class="col-3"><div class="demo-col">.col-3</div></div>
			</div>

			<div class="row">
				<div class="col-7"><div class="demo-col">.col-7</div></div>
				<div class="col-5"><div class="demo-col">.col-5</div></div>
			</div>

			<div class="row">
				<div class="col-8"><div class="demo-col">.col-8</div></div>
				<div class="col-4"><div class="demo-col">.col-4</div></div>
			</div>

			<div class="row">
				<div class="col-9"><div class="demo-col">.col-9</div></div>
				<div class="col-3"><div class="demo-col">.col-3</div></div>
			</div>

			<div class="row">
				<div class="col-10"><div class="demo-col">.col-10</div></div>
				<div class="col-2"><div class="demo-col">.col-2</div></div>
			</div>

			<div class="row">
				<div class="col-11"><div class="demo-col">.col-11</div></div>
				<div class="col-1"><div class="demo-col">.col-1</div></div>
			</div>

		</div>
	</section>

	<!-- Typography -->
	<section>
		<div class="container">
			<h1>Typography</h1>
			<hr>
			<div class="row">
				<div class="col-half">
					<h1>Heading 1</h1>
					<h2>Heading 2</h2>
					<h3>Heading 3</h3>
					<h4>Heading 4</h4>
					<h5>Heading 5</h5>
					<h6>Heading 6</h6>

				</div>
				<div class="col-half">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quos cupiditate quae nam aspernatur rem nisi obcaecati cumque adipisci officiis delectus laboriosam, <a href="#">cum dicta facilis</a> illo asperiores rerum nemo qui, sed tenetur reprehenderit non labore repudiandae ipsum? Culpa, obcaecati. <strong>Nobis quae</strong> rem facere obcaecati magni, dignissimos impedit ab eius sapiente eaque cum quod esse labore fuga veritatis <del>ipsam rerum</del> optio libero laboriosam unde architecto nostrum nihil quo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, tempora. Deserunt voluptates facilis officia officiis, <em>asperiores quasi</em>, voluptatum. Vero odio eos perferendis a alias ullam cupiditate deserunt qui, illum quisquam accusantium, in harum ab ut quia consequatur. Pariatur, nam. Nemo atque maiores, laboriosam.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quos cupiditate quae nam aspernatur rem nisi obcaecati cumque adipisci officiis delectus laboriosam, <a href="#">cum dicta facilis</a> illo asperiores rerum nemo qui, sed tenetur reprehenderit non labore repudiandae ipsum? Culpa, obcaecati. <strong>Nobis quae</strong> rem facere obcaecati magni, dignissimos impedit ab eius sapiente eaque cum quod esse labore fuga veritatis <del>ipsam rerum</del> optio libero laboriosam unde architecto nostrum nihil quo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, tempora. Deserunt voluptates facilis officia officiis, <em>asperiores quasi</em>, voluptatum. Vero odio eos perferendis a alias ullam cupiditate deserunt qui, illum quisquam accusantium, in harum ab ut quia consequatur. Pariatur, nam. Nemo atque maiores, laboriosam.</p>
<pre><code>.demo-col
	background-color: #def0fa
	text-align: center
	padding: 1em 0
	display: block
	border-radius: 3px
</code></pre>
				</div>

			</div> <!-- end row -->
			<div class="row">
				<div class="col-half">
					<h4>Unordered List</h4>
					<ul>
						<li>Item 1</li>
						<li>Item 2</li>
						<li>Item 3</li>
						<li>Item 4</li>
						<li>Item 5</li>
					</ul>
				</div>
				<div class="col-half">
					<h4>Ordered List</h4>
					<ol>
						<li>Item 1</li>
						<li>Item 2</li>
						<li>Item 3</li>
						<li>Item 4</li>
						<li>Item 5</li>
					</ol>
				</div>
			</div>

			<hr>

			<blockquote>
				This is a blockquote.
				<footer><a href="#"> This is the author.</a></footer>
			</blockquote>
		</div>
	</section>
	
	<!-- Button -->
	<section>
		<div class="container">
			<h1>Buttons</h1>
			<hr>
			<div class="row">
				<div class="col-4">
					<h4>Button Styles</h4>

					<p>
						<button class="btn">Default</button>
						<button class="btn-primary">Primary</button>

					</p>
				</div>
				<div class="col-4">
					<h4>Button Sizes</h4>
					<p><button class="btn-small">Small</button></p>
					<p><button class="btn">Default</button></p>
					<p><button class="btn-large">Large</button></p>
				</div>
				<div class="col-4">
					<h4>HTML elements</h4>

					<p><button class="btn">Button</button></p>
					<p><a href="#" class="btn">Anchor</a></p>
					<p><input type="submit" class="btn" value="Submit Input"></p>
					<p><input type="button" class="btn" value="Button Input"></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Forms -->
	<section>
		<div class="container">
			<h1>Forms</h1>
			<hr>

			<form action="" method="">
				<div class="row">
					<div class="col-half">
						<fieldset>
							<legend>Inputs</legend>

							<div class="field-group">
								<label for="demo-input-1">This is a label</label>
								<input type="text" id="demo-input-1" placeholder="This is a text input">

								<p class="help">This is a contextual help for the field above.</p>
							</div>

							<div class="field-group field-error">
								<label for="demo-input-2">Error</label>
								<input type="text" id="demo-input-2" placeholder="This is a text input">

								<p class="help">This is an error message for the field above.</p>
							</div>

							<div class="field-group">
								<label for="demo-textarea">This is a label</label>
								<textarea name="demo-textarea" id="demo-textarea" cols="30" rows="10" placeholder="This is a textarea"></textarea>
							</div>
						</fieldset>
					</div>
					<div class="col-half">
						<fieldset>
							<legend>Radio buttons and checkboxes</legend>

							<div class="field-group"></div>
							<input type="radio" id="demo-radio-1" name="demo-radio">
							<label for="demo-radio-1">Radio 1</label>
							<input type="radio" id="demo-radio-2" name="demo-radio">
							<label for="demo-radio-2">Radio 2</label>
							<input type="radio" id="demo-radio-3" name="demo-radio">
							<label for="demo-radio-3">Radio 3</label>

							<div class="field-group">
								<input type="checkbox" id="demo-checkbox" name="demo-checkbox">
								<label for="demo-checkbox">This is a checkbox</label>
							</div>
						</fieldset>
					</div>
				</div>
			</form>

			<div class="row">
				<div class="col-4">
					<form action="" method="">
						<fieldset>
							<legend>Sign-in Form</legend>

							<div class="field-group">
								<label for="sign-in-username">Username: <span class="required">*</span></label>
								<input type="text" id="sign-in-username" name="sign-in-username">
							</div>

							<div class="field-group">
								<label for="sign-in-password">Password: <span class="required">*</span></label>
								<input type="password" id="sign-in-password" name="sign-in-password">
							</div>
							<div class="field-group">
								<input type="checkbox" id="sign-in-checkbox" name="sign-in-checkbox">
								<label for="sign-in-checkbox">Remember me</label>
							</div>
							<div class="field-group">
								<input type="submit" class="btn" value="Sign In">
							</div>
							<p><em><span class="required">*</span> required fields</em></p>
						</fieldset>
					</form>
				</div>
				<div class="col-4">
					<form action="" method="">
						<fieldset>
							<legend>Sign-up Form</legend>
							<div class="field-group">
								<label for="sign-up-email">Email Address: <span class="required">*</span></label>
								<input type="email" id="sign-up-email" name="sign-up-email">
							</div>
							<div class="field-group">
								<label for="sign-up-name">Username: <span class="required">*</span></label>
								<input type="text" id="sign-up-name" name="sign-up-name">
							</div>
							<div class="field-group">
								<label for="sign-up-pwd">Password: <span class="required">*</span></label>
								<input type="password" id="sign-up-pwd" name="sign-up-pwd">
							</div>
							<div class="field-group">
								<label for="sign-up-confirm-pwd">Confirm Password: <span class="required">*</span></label>
								<input type="password" id="sign-up-confirm-pwd" name="sign-up-confirm-pwd">
							</div>
							<div class="field-group">
								<input type="submit" class="btn" value="Sign Up">
							</div>
							<p><em><span class="required">*</span> required fields</em></p>
						</fieldset>
					</form>

				</div>
				<div class="col-4">
					<form action="" method="">
						<fieldset>
							<legend>Contact Form</legend>
							<div class="field-group">
								<label for="contact-name">Name: <span class="required">*</span></label>
								<input type="text" id="contact-name" name="contact-name">
							</div>
							<div class="field-group">
								<label for="contact-email">Email Address: <span class="required">*</span></label>
								<input type="email" id="contact-email" name="contact-email">
							</div>
							<div class="field-group">
								<label for="contact-website">Website:</label>
								<input type="url" id="contact-website" name="contact-website">
							</div>
							<div class="field-group">
								<label for="contact-textarea">Textarea: <span class="required">*</span></label>
								<textarea type="text" id="contact-textarea" name="contact-textarea" cols="30" rows="10" class="field-fw"></textarea>
							</div>

							<div class="field-group">
								<input type="submit" class="btn" value="Send Message">
							</div>
							<p><em><span class="required">*</span> required fields</em></p>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Icons -->
	<section>
		<div class="container">
			<h1>Icons</h1>

			<hr>

			<div class="row">
				<div class="col-half">
					<h4>Bordered</h4>

					<div class="icon-circle">
						<i class="fa fa-coffee"></i>
					</div>
					<p>Circle</p>

					<div class="icon-rounded">
						<i class="fa fa-coffee"></i>
					</div>
					<p>Rounded</p>

					<div class="icon-square">
						<i class="fa fa-coffee"></i>
					</div>
					<p>Square</p>
				</div>
				<!-- /.col-half -->
				<div class="col-half">
					<h4>Sizes</h4>

					<div class="icon-circle">
						<i class="fa fa-coffee"></i>
					</div>
					<p>Default</p>

					<div class="icon-rounded icon-large">
						<i class="fa fa-coffee"></i>
					</div>
					<p>Large</p>

					<div class="icon-square icon-huge">
						<i class="fa fa-coffee"></i>
					</div>
					<p>Huge</p>
				</div>
				<!-- /.col-half -->
			</div>
			<!-- /.row -->
		</div><!-- /.container -->
	</section>
	

	<!-- Feedback -->
	<section>
		<div class="container">
			<h1>Feedback</h1>
			<hr>

			<div class="row">
				<div class="col-half">
					<div class="alert-information">
						<p><strong>Information</strong></p>
						<p>This is the body of the message</p>
					</div>
					<div class="alert-error">
						<p><strong>Error</strong></p>
						<p>This is the body of the message</p>
					</div>
				</div>
				<!-- /.col-half -->
				<div class="col-half">
					<div class="alert-warning">
						<p><strong>Warning</strong></p>
						<p>This is the body of the message</p>
					</div>
					<div class="alert-success">
						<p><strong>Success</strong></p>
						<p>This is the body of the message</p>
					</div>
				</div>
				<!-- /.col-half -->
			</div>
			<!-- /.row -->
		</div>
	</section>

	<!-- Navigation -->
	<section>
		<div class="container">
			<h1>Navigation</h1>
			<hr>

			<div class="row navbar-container">
				<div class="col-4">
					<a href="#" class="logo"><img src="<?= site_url('assets/images/demo/logo.png') ?>" alt="Demo Logo"></a>
				</div>
				<!-- /.col-4 -->
				<div class="col-8">
					<button class="btn" id="rwd-trigger">Toggle Menu</button>
					<nav>
						<ul class="sf-menu">
							<li><a href="#">Item 1</a></li>
							<li>
								<a href="#">Item 2</a>
								<ul>
									<li><a href="#">Subitem 1</a></li>
									<li><a href="#">Subitem 2</a></li>
									<li><a href="#">Subitem 3</a></li>
									<li><a href="#">Subitem 4</a></li>
								</ul>
							</li>
							<li><a href="#">Item 3</a></li>
							<li><a href="#">Item 4</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.col-8 -->
			</div>
			<!-- /.row navbar-container -->
		</div>
	</section>

	<!-- Animations -->
	<section>
		<div class="container">
			<h1>Animations</h1>
			<hr>
			<div class="row" id="demo-animations">
				<div class="col-2">
					<div class="demo-col">bounce</div>
				</div>
				<div class="col-2">
					<div class="demo-col">flash</div>
				</div>
				<div class="col-2">
					<div class="demo-col">pulse</div>
				</div>
				<div class="col-2">
					<div class="demo-col">rubberBand</div>
				</div>
				<div class="col-2">
					<div class="demo-col">shake</div>
				</div>
				<div class="col-2">
					<div class="demo-col">swing</div>
				</div>
			</div>
			<!-- /#demo-animations.row -->
		</div>
		<!-- /.container -->
	</section>

	<!-- Tabs -->
	<section>
		<div class="container">
			<h1>Tabs</h1>
			<hr>
			<div class="tabs">
				<div class="tabs-links">
					<li class="active"><a href="#tab-1">First</a></li>
					<li><a href="#tab-2">Second</a></li>
					<li><a href="#tab-3">Third</a></li>
				</div>

				<div class="tabs-content">
					<div class="tab active" id="tab-1">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, numquam.</p>
					</div>
					<div class="tab" id="tab-2">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ducimus, voluptates. Nihil perferendis veritatis, iste animi placeat quia asperiores inventore.</p>
					</div>
					<div class="tab" id="tab-3">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis odit, quae obcaecati. Blanditiis ut, quia aut! Blanditiis nihil natus molestiae voluptatibus delectus, molestias praesentium adipisci magnam, omnis suscipit illum perferendis?</p>
					</div>
				</div>
				<!-- /.tabs-content -->
			</div>
			<!-- /.tabs -->
		</div>
		<!-- /.container -->
	</section>

	<!-- Accordions -->
	<section>
		<div class="container">
			<h1>Accordions</h1>

			<hr>

			<div class="accordion">
				<div class="accordion-element">
					<a href="#accordion-element-1" class="accordion-element-title">First</a>

					<div id="accordion-element-1" class="accordion-element-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptas!</p>
					</div>
					<!-- /#accordion-element-1.accordion-element-content -->
				</div>
				<!-- /.accordion-element -->
				<div class="accordion-element">
					<a href="#accordion-element-2" class="accordion-element-title">Second</a>

					<div id="accordion-element-2" class="accordion-element-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, rerum dolorem architecto debitis laborum quae omnis, numquam deleniti sunt.</p>
					</div>
					<!-- /#accordion-element-2.accordion-element-content -->
				</div>
				<!-- /.accordion-element -->
				<div class="accordion-element">
					<a href="#accordion-element-3" class="accordion-element-title">Third</a>

					<div id="accordion-element-3" class="accordion-element-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam eveniet fugit officiis doloribus quibusdam rerum magni ut. Obcaecati, adipisci. Et maiores animi eveniet tempore esse! Magni deserunt recusandae sunt, et?</p>
					</div>
					<!-- /#accordion-element-3.accordion-element-content -->
				</div>
				<!-- /.accordion-element -->
			</div>
			<!-- /.accordion -->
		</div>
		<!-- /.container -->
	</section>

	
	<!-- Carousels -->
	<section>
		<div class="container">
			<h1>Carousels</h1>
			<hr>

			<div class="row">
				<div class="col-6">
					<div class="cycle-slideshow" data-cycle-swipe="true" data-cycle-loader="true" data-cycle-fx="scrollHorz"  data-cycle-caption-template="Slide no. {{slideNum}} of {{slideCount}} - {{cycleTitle}}" data-cycle-paused="true">
						<div class="cycle-caption"></div>

						<div class="cycle-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="cycle-next"><i class="fa fa-chevron-right"></i></div>

						<img src="<?= site_url('assets/images/demo/img-1.jpg') ?>" alt="Slider image 1" data-cycle-title="First Image">
						<img src="<?= site_url('assets/images/demo/img-2.jpg') ?>" alt="Slider image 2" data-cycle-title="Second Image">
						<img src="<?= site_url('assets/images/demo/img-3.jpg') ?>" alt="Slider image 3" data-cycle-title="Third Image">
						<img src="<?= site_url('assets/images/demo/img-4.jpg') ?>" alt="Slider image 4" data-cycle-title="Fourth Image">
					</div>
					<!-- /.cycle-slideshow -->
				</div>
				<!-- /.col-6 -->
				<div class="col-6">
					<div class="cycle-slideshow" data-cycle-swipe="true" data-cycle-loader="true" data-cycle-fx="scrollHorz"  data-cycle-caption-template="Slide no. {{slideNum}} of {{slideCount}} - {{cycleTitle}}" data-cycle-paused="true">
						<div class="cycle-caption"></div>

						<div class="cycle-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="cycle-next"><i class="fa fa-chevron-right"></i></div>

						<img src="<?= site_url('assets/images/demo/img-1.jpg') ?>" alt="Slider image 1" data-cycle-title="First Image">
						<img src="<?= site_url('assets/images/demo/img-2.jpg') ?>" alt="Slider image 2" data-cycle-title="Second Image">
						<img src="<?= site_url('assets/images/demo/img-3.jpg') ?>" alt="Slider image 3" data-cycle-title="Third Image">
						<img src="<?= site_url('assets/images/demo/img-4.jpg') ?>" alt="Slider image 4" data-cycle-title="Fourth Image">
					</div>
					<!-- /.cycle-slideshow -->
				</div>
				<!-- /.col-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>


	<!-- Add Bower Components -->
	<script src="<?= site_url('assets/bower_components/jquery/jquery.min.js') ?>"></script>
	<script src="<?= site_url('assets/bower_components/superfish/dist/js/superfish.min.js') ?>"></script>
	<script src="<?= site_url('assets/bower_components/superfish/dist/js/hoverIntent.js') ?>"></script>
	<script src="<?= site_url('assets/bower_components/jquery-cycle2/build/jquery.cycle2.min.js') ?>"></script>

	<script src="<?= site_url('assets/js/script.js') ?>"></script>
</body>
</html>














