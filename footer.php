<?php
	echo ('<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>A</span>pparel</h2>
							<p>Fashion is a form of ugliness so intolerable that we have to alter it every six months.</p>
						</div>
					</div>
					<br><br>
					<p style="font-size: 14px; float: right; font-weight: bold;">Sign up to our newsletter!</p><br><br>
					<form action="email-marketing.php" method="post" style="float: right;">
						<input type="email" name="email" id="email" placeholder="Email">
						<input type="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2024 Apparel Inc. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>');
?>
