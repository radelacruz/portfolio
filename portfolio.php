<?php require_once "../partials/template.php"; ?>
<?php function get_page_content() { ?>
	<div id="portfolio" class="container py-3 mb-3">
		<h3 class="display-4 text-center">My Portfolio</h3>
		<hr id="hr">
		<div class="row">
			<div class="col-sm-6 my-4">
				<div class="card h-100">
					<div class="card-body p-0">
						<img class="img-fluid" src="../assets/images/winterwonderland.png" style="height:200px; width:100%;">
					</div> <!-- card-body -->
					<div class="card-footer">
						<h5 class="card-title">Winter Wonderland</h5>
						<p>Winter Wonderland is an Ice Cream Website. This was created using pure HTML, CSS(bootstrap).</p>
						<button class="btn btn-for-footer btn-block">
							<a target="_blank" href="https://radelacruz.github.io/winter-wonderland/">View</a>
						</button>						
					</div>
				</div> <!-- end card -->
			</div><!--  end col -->

			<div class="col-sm-6  my-4">
				<div class="card h-100">
					<div class="card-body  p-0">
						<img class="img-fluid" src="../assets/images/sakuraz.png" style="height:200px; width:100%;">
					</div>
					<div class="card-footer">
						<h5 class="card-title">SakuRaz</h5>
						<p>SakuRaz is an ecommerce website. This was created using Vanilla PHP.</p>
						<button class="btn btn-for-footer btn-block">
							<a target="_blank" href="https://sakuraz.herokuapp.com/">View</a>
						</button>
					</div> <!-- card-footer -->
				</div> <!-- end card -->
			</div><!--  end col -->

			<div class="col-sm-6  my-4">
				<div class="card h-100">
					<div class="card-body p-0">
						<img class="img-fluid" src="../assets/images/looks4rent.png" style="height:200px; width:100%;">
					</div>
					<div class="card-footer">
						<h5 class="card-title">Looks4rent</h5>
						<p>Looks4rent is a dress for rent website. This was created using Laravel.</p>
						<button class="btn btn-for-footer btn-block">
							<a target="_blank" href="https://fast-inlet-69632.herokuapp.com">View</a>
						</button>
					</div> <!-- card-footer -->
				</div> <!-- end card -->
			</div><!--  end col -->

			<div class="col-sm-6  my-4">
				<div class="card h-100">
					<div class="card-footer   p-0">
						
						<img class="img-fluid" src="http://lorempixel.com/400/200" style="height:200px; width:100%;"> <!-- http://lorempixel.com/400/200 -->
					</div>
					<div class="card-footer">
						<h5 class="card-title">Capstone3</h5>
						<p>This text describes my website</p>
						<button class="btn btn-for-footer btn-block">
							<a target="_blank" href="#">View</a>
						</button>
					</div> <!-- card-footer -->
				</div> <!-- end card -->
			</div><!--  end col -->

		</div> <!-- end of row -->
	</div> <!-- end of section port -->
<?php } ?>