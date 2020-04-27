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
									<h1 class="m-0">Appointment</h1>
								</div>
							</div>
						</div>

						<div class="container-fluid page__container">
							<div class="text-right">
								<a href="appointment-add.php" class="btn btn-success mb-2">Add New</a>
							</div>
							<div class="card card-form">

								<div class="row card-form__body card-body">
									<div class="col-12">
										<div class="table-responsive border-bottom">
											<table class="table mb-0 thead-border-top-0">
												<thead>
													<tr>
														<th>Name</th>
														<th>Title</th>
														<th>Description</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Sample Data</td>
														<td>Sample Data</td>
														<td>Sample Data</td>
														<td>
															<button type="submit" class="btn btn-sm btn-success mx-2">Edit</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

							</div>
						</div>
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
				document.getElementById("appointment").classList.add("active", "open");
			})();
		</script>

	</body>
</html>
