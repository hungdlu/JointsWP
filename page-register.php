<?php
/*
Template Name: Custom Page Example
page_id=2676
*/
?>

<?php get_header(); ?>

<div id="content">
	<div id="inner-content" class="row clearfix">

		<div id="main" class="medium-8 columns first clearfix" role="main">


		<?php 
			if(isset($_POST['apply'])){

				/// SETUP - NEED TO BE CHANGED
				$token = '1c564a1addaf1c3c6f50e7101d8432ad';
				$domainname = 'http://localhost/aulms';

				$uFname		= $_REQUEST['Fname'];
				$uLname		= $_REQUEST['Lname'];
				$uID		= $_REQUEST['uid'];
				$ufaculty	= $_REQUEST['ufaculty'];

				$serverurl = $domainname . '/webservice/soap/server.php'. '?wsdl=1&wstoken=' . $token;

				//check if this email had applied before 
				$functionname = 'core_user_get_users_by_field';

				$client = new SoapClient($serverurl);
				try {
					$resp = $client->__soapCall($functionname, array('username', array($uID)));
				} catch (Exception $e) {
				}

				if (count($resp)>0)
				{
					//Inform existing user in the moodle
				?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">	
							<h2 class="entry-title single-title" itemprop="headline">Oops!</h2>				
						</header> <!-- end article header -->
						
						<section class="entry-content clearfix" itemprop="articleBody">
							<p>
								We found that you had registered already! <br/><br/>

								If you forgot and want to reset password, please follow <a href='http://wdb.elearning.au.edu/aulms/login/forgot_password.php'>this link</a>
								<br /> <br/>
								You also can <a href='mailto:admin@elearning.au.edu'>contact webmaster</a> if you have any trouble with login. 
								<br /> <br/>
								Thank you and enjoy learning!
								<br />
								Graduate School of eLearning - Assumption University
							</p>
						</section> <!-- end article section -->

					</article> <!-- end article -->

				<?php

				}
				else
				{
					//if not then create user in the moodles

					function passGen()
					{
						$alpha = "abcdefghijklmnopqrstuvwxyz";
						$alpha_upper = strtoupper($alpha);
						$numeric = "0123456789";
						$special = ".-+=_,!@$#*%<>[]{}";
						$chars = "";
						
						$length = 3;
						
						$pw = '';

						//get random 
						$len = strlen($alpha);	
						for ($i=0;$i<$length;$i++)
							$pw .= substr($alpha, rand(0, $len-1), 1);

						$len = strlen($alpha_upper);	
						for ($i=0;$i<$length;$i++)
							$pw .= substr($alpha_upper, rand(0, $len-1), 1);

						$len = strlen($numeric);	
						for ($i=0;$i<$length;$i++)
							$pw .= substr($numeric, rand(0, $len-1), 1);

						$len = strlen($special);	
						for ($i=0;$i<$length;$i++)
							$pw .= substr($special, rand(0, $len-1), 1);
						
						// the finished password
						$pw = str_shuffle($pw);

						return $pw;
					}

					$functionname = 'core_user_create_users';

					/// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION
					$user1 = new stdClass();
					$user1->username = $uID;
					$user1->password = passGen();
					$user1->firstname = $uFname;
					$user1->lastname = $uLname;
					$user1->email = $uID.'@au.edu';
					$user1->auth = 'manual';
					$user1->idnumber = $uID;
					$user1->lang = 'en';
					$user1->theme = 'standard';
					$user1->timezone = '+7';
					$user1->mailformat = 0;
					$user1->description = 'Self registration via GSeL Website!';
					$user1->city = 'Bangkok';
					$user1->country = 'TH';
					$params = array($user1);

					////Do the main soap call
					$client = new SoapClient($serverurl);
					try {
						$resp = $client->__soapCall($functionname, array($params));
					} catch (Exception $e) 
					{					
					}

					//Inform Adding Student Successful

					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">	
							<h2 class="entry-title single-title" itemprop="headline">Congratulations</h2>				
						</header> <!-- end article header -->
						
						<section class="entry-content clearfix" itemprop="articleBody">
							<p>
								An account was created for you and Login Information has been emailed to your address (<b><?php echo $uID.'@au.edu'; ?> </b>)
								<br /> <br/>
								Please check your email and login with provided password then update your personal information details.
								<br /> <br/>
								Thank you and enjoy learning!
								<br />
								Graduate School of eLearning - Assumption University
							</p>
						</section> <!-- end article section -->

					</article> <!-- end article -->
					
					<?php

					//Email to User

					$to = $uID.'@au.edu';
					$subject = 'Welcome to AU eLearning Program!';

					$message = '<h2>Congratulations!</h2>';
					$message .= 'Dear '.$uFname.' '.$uLname.',<br /><br />';				
					$message .= 'You have successfully created an account in AU eLearning System.<br />';
					$message .= 'This is a totally free program for AU Students. To access the system, you need information below: <br /> <br />';
					$message .= '&nbsp;&nbsp; Username: <b>'.$uID.'</b><br />';
					$message .= '&nbsp;&nbsp; Password: <b>'.$user1->password.'</b><br />';
					$message .= '&nbsp;&nbsp; Address to login: <a href="http://wdb.elearning.au.edu/aulms">wdb.elearning.au.edu/aulms</a> <br /><br />';
					$message .= 'Enjoy learning! <br /><br />';
					$message .= 'Assumption University - eLearning System';

					$headers[] = 'From: GSeL - Assumption Universityy <noreply@elearning.au.edu>';
					$headers[] = 'BCc: admin@elearning.au.edu';
					$headers[] = 'Content-type: text/html';

					wp_mail( $to, $subject, $message, $headers );
				}//end if of apply
			}
			else
			{
		?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'partials/loop', 'page' ); ?>

				<?php endwhile; else : ?>

					<?php get_template_part( 'partials/missing', 'content' ); ?>

				<?php endif; ?>

				<form data-abide action="" method="POST">
					<div class="row collapse">
						<label>First name <small>required</small></label>
						<input name="Fname" type="text" required placeholder="First name" pattern="[a-zA-Z]+"/>
						<small class="error">First name is required and must be a string!</small>
					</div>

					<div class="row collapse">
						<label>Last name <small>required</small></label>
						<input name="Lname" type="text" required placeholder="Last name" pattern="[a-zA-Z]+"/>
						<small class="error">Last name is required and must be a string!</small>
					</div>

					<div class="row collapse">
						<label><span data-tooltip data-options="disable_for_touch:true" class="has-tip" title="Password to access to LMS will be sent to this address!">ID <small>required</small></span></label>
						<div class="small-6 columns">
							<input name="uid" type="text" required pattern="^([ugpUGP]{1})([0-9]{7})$" placeholder="E.g. u5671234" />
							<small class="error">ID is not correct!</small>
						</div>
						<div class="small-6 columns">
							<span class="postfix">@au.edu</span>
						</div>
					</div>

					<div class="row collapse">
						<label>Faculty <small>required</small></label>
						<select name="ufaculty" required data-invalid>
							<option value>Select faculty</option>
							<option value="smsm">Martin de Tours School of Management</option>
							<option value="sarts">School of Arts</option>
							<option value="slaw">School of Laws</option>
							<option value="sbiotech">School of Biotechnology</option>
							<option value="sscitech">School of Science and Technology</option>
							<option value="seng">School of Biotechnology</option>
							<option value="snurse">School of Nursing Science</option>
							<option value="sca">Albert Laurence of Communication Arts</option>
							<option value="sarch">Monfort Del Rosario School of Architecture and Design</option>
							<option value="smusic">School of Music</option>
							<option value="gBus">Graduate School of Business</option>
							<option value="gPsy">Graduate School of Psychology</option>
							<option value="gEdu">Graduate School of Education</option>
							<option value="gPhi">Graduate School of Philosophy & Religion</option>
							<option value="gEng">Graduate School of English</option>
							<option value="gGSeL">Graduate School of eLearning (GSeL)</option>
						</select>
						<small class="error">Faculty is required!</small>
					</div>

					<div class="row">	
						<div class="text-center">
							<button name="apply" type="submit">Submit</button>
						</div>
					</div>
				</form>
		<?php 
			}
		?>

		</div> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
