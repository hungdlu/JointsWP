<div class="large-12 columns show-for-medium-up" style="padding:0px!important;">
	<div class="contain-to-grid sticky">
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
				<?php joints_main_nav(); ?>
				<ul class="right">
					<!-- Button -->
					<li class="has-form show-for-medium-up">
						<a href="#" data-reveal-id="myModalLogin" data-reveal class="button">Login</a>
					</li>
				</ul>
			</section>
		</nav>
	</div>
</div>

<div id="myModalLogin" class="reveal-modal" data-reveal>
	<h2 class="text-center">Login to LMS</h2>
	<form data-abide action="http://ews.elearning.au.edu/ba/login/index.php" method="POST">
		<div class="row">
			<label>Username <small>required</small></label>
			<input name='username' id='username' type="text" required placeholder="Username"/>
			<small class="error">Username cannot empty!</small>
		</div>

		<div class="row">
			<label>Password</label>
			<input type="password" id="password" placeholder="Password">
		</div>

		<div class="row">
			<label>Program <small>required</small></label>
			<select id="degreeProgram" onChange="this.form.action=this.options[this.selectedIndex].value;">
				<option value='http://ews.elearning.au.edu/ba/login/index.php'>M.S. (Management)</option>
				<option value='http://ews.elearning.au.edu/it/login/index.php'>M.S. (ICT)</option>
				<option value='http://ews.elearning.au.edu/medtt/login/index.php'>M.Ed. (Teaching and Technology)</option>
				<option value='http://ews.elearning.au.edu/phdelm/login/index.php'>Ph.D. (eLearning Methodology)</option>
				<option value='http://ews.elearning.au.edu/phdtt/login/index.php'>Ph.D. (Teaching and Technology)</option>
			</select>
		</div>

		<div class="row">	
			<div class="text-center">
				<button name="apply" type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>