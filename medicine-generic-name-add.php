<!DOCTYPE html>
<html lang="en" dir="ltr">

	<?php include './shared/head.html'; ?>

	<body class="layout-default">
		<div class="preloader"></div>

		<!-- Header Layout -->
		<div class="mdk-header-layout js-mdk-header-layout">
			<!-- Header -->
			<?php include './shared/header.html'; ?>
			<!-- // END Header -->

			<!-- Header Layout Content -->
			<div class="mdk-header-layout__content">
				<div
					class="mdk-drawer-layout js-mdk-drawer-layout"
					data-push
					data-responsive-width="992px"
				>
					<div class="mdk-drawer-layout__content page">
						<div class="container-fluid page__heading-container">
							<div class="page__heading d-flex align-items-end">
								<div class="flex">
									<h1 class="m-0">Add Generic Name</h1>
								</div>
							</div>
						</div>

						<form class="container-fluid page__container">
							<div class="card card-form">
								<div class="row card-form__body card-body">

									<div class="form-group col-md-3">
										<label>Drug Name</label>
										<input type="text" name="drug_name" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Strength</label>
										<input type="text" name="strength" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label>Others</label>
										<textarea class="form-control" rows="3" name="others"></textarea>
									</div>

								</div>
							</div>

							<div class="card card-form">
								<div class="row card-form__body card-body flex justify-content-center">

									<button type="button" class="btn btn-danger mx-2">Cancel</button>
									<button type="submit" class="btn btn-success mx-2">Save</button>

								</div>
							</div>
						</form>
					</div>
					<!-- // END drawer-layout__content -->

					<?php include './shared/drawer.html'; ?>
				</div>
				<!-- // END drawer-layout -->
			</div>
			<!-- // END header-layout__content -->
		</div>
		<!-- // END header-layout -->

		<?php include './shared/scripts.html'; ?>

		<script>
			(function() {
				document.getElementById("medicine").classList.add("active", "open");
				document.getElementById("generic_name").classList.add("active");
			})();
		</script>

	</body>
</html>
