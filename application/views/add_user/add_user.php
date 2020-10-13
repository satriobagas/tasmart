<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Data Tabel User</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">User</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Data Tabel</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">User Tabel</h4>
								<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addModal">
									<i class="fa fa-plus"></i>
									Tambah
								</button>
							</div>
						</div>
						<div class="card-body">
							<!-- Modal add -->
							<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header no-bd">
											<h5 class="modal-title">
												<span class="fw-mediumbold">
													Add</span>
												<span class="fw-light">
													User
												</span>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="username" id="username" type="text" class="form-control" placeholder="Username" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="pass" id="pass" type="password" autocomplete="on" class="form-control" placeholder="Password" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<select class="form-control" name="id_grup" id="id_grup">
																<option value="">Pilih Grup</option>
																<?php

																$grup = array('admin', 'user');
																foreach ($grup as $ig) {
																	if ($ig == $id_grup) $sel = "SELECTED";
																	else $sel = '';
																	echo "<option value=$ig $sel>" . ucfirst($ig) . "</option>";
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="name" id="name" type="text" class="form-control" placeholder="Nama Lengkap" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="email" id="email" type="text" class="form-control" placeholder="Email" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="tlp" id="tlp" type="text" class="form-control" placeholder="Phone Number" required>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer no-bd">
											<button type="button" id="btn_simpan" class="btn btn-primary">Save</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							<!-- Modal Edit -->
							<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header no-bd">
											<h5 class="modal-title">
												<span class="fw-mediumbold">
													Edit</span>
												<span class="fw-light">
													User
												</span>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="username_edit" id="username2" type="text" class="form-control" placeholder="Username" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="pass_edit" id="pass2" type="password" autocomplete="on" class="form-control" placeholder="Password" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<select class="form-control" name="id_grup_edit" id="id_grup2">
																<option value="">Pilih Grup</option>
																<?php

																$grup = array('admin', 'user');
																foreach ($grup as $ig) {
																	if ($ig == $id_grup) $sel = "SELECTED";
																	else $sel = '';
																	echo "<option value=$ig $sel>" . ucfirst($ig) . "</option>";
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="name_edit" id="name2" type="text" class="form-control" placeholder="Nama Lengkap" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="email_edit" id="email2" type="text" class="form-control" placeholder="Email" required>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input name="tlp_edit" id="tlp2" type="text" class="form-control" placeholder="Phone Number" required>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer no-bd">
											<button type="button" id="btn_update" class="btn btn-primary">Update</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							<!-- Modal Delete -->
							<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header no-bd">
											<h5 class="modal-title">
												<span class="fw-mediumbold">
													Hapus</span>
												<span class="fw-light">
													User
												</span>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<input type="hidden" name="kode" id="textkode" value="">
															<div class="alert alert-warning">
																<p>Apakah Anda yakin mau memhapus user ini?</p>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer no-bd">
											<button type="button" id="btn_hapus" class="btn_hapus btn btn-primary">Delete</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<div id="reload">
								<div class="table-responsive">
									<table class="add-row table table-striped table-hover">
										<thead>
											<tr>
												<th>Username</th>
												<th>ID Grup</th>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Last Login</th>
												<th style="width: 60px;">Action</th>
											</tr>
										</thead>
										<tbody id="show_data">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>