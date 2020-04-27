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
									<h1 class="m-0">Add Brand Name</h1>
								</div>
							</div>
						</div>

						<form class="container-fluid page__container">
							<div class="card card-form">
								<div class="row card-form__body card-body">

									<div class="form-group col-md-3">
										<label>Generic Name</label>
										<select data-toggle="select" class="form-control" name="generic_name">
											<option selected>Please Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Usages</label>
										<select data-toggle="select" class="form-control" name="usages">
											<option selected>Please Select</option>
											<option value="Tablet">Tablet</option>
											<option value="Capsule">Capsule</option>
											<option value="Syrup">Syrup</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Brand Name</label>
										<input type="text" name="brand_name" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Company Name</label>
										<input type="text" name="company_name" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Pack Size</label>
										<input type="text" name="pack_size" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Price</label>
										<input type="text" name="price" class="form-control">
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
				document.getElementById("brand_name").classList.add("active");
			})();
		</script>

	</body>
</html>
