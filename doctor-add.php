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
									<h1 class="m-0">Add Doctor</h1>
								</div>
							</div>
						</div>

						<form class="container-fluid page__container">
							<div class="card card-form">
								<div class="row card-form__body card-body">

									<h4 class="col-12 border-bottom-2 pb-2 mb-3">Professional Details</h4>
									<div class="form-group col-md-3">
										<label>Name</label>
										<input type="text" name="name" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Professional Degree</label>
										<select data-toggle="select" class="form-control" name="prof_degree">
											<option selected>Please Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Specialization</label>
										<select data-toggle="select" class="form-control" name="specialization">
											<option selected>Please Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Organization / Hospital</label>
										<select data-toggle="select" class="form-control" name="org">
											<option selected>Please Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Email</label>
										<input type="email" name="email" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Contact No.</label>
										<input type="text" name="contact_no" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label>Address</label>
										<textarea class="form-control" rows="3" name="address"></textarea>
									</div>

								</div>
							</div>

							<div class="card card-form">
								<div class="row card-form__body card-body">

									<h4 class="col-12 border-bottom-2 pb-2 mb-3">Personal Details</h4>
									<div class="form-group col-md-3">
										<label>Age</label>
										<input type="text" name="age" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>Gender</label>
										<select data-toggle="select" class="form-control" name="gender">
											<option selected>Please Select</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Marital Status</label>
										<select data-toggle="select" class="form-control" name="marital_status">
											<option selected>Please Select</option>
											<option value="Married">Married</option>
											<option value="Unmarried">Unmarried</option>
											<option value="Other">Other</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label>Family Details</label>
										<textarea class="form-control" rows="3" name="family_details"></textarea>
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
				document.getElementById("doctor").classList.add("active", "open");
			})();
		</script>

	</body>
</html>
