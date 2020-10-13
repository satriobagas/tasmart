		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2"><b>IoT</b> Smart Classroom Dashboard</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-4 ml-auto mr-auto">
							<div class="card card-stats card-round">
								<div class="card-body mb-5" style="margin-top: 30px">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center" style="font-size: 5rem">
												<i class="fas fa-thermometer-quarter"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category" style="font-size:15px">Suhu dan Kelembapan</p>
												<h4 class="card-title" style="font-size: 27px"><b id="suhu"></b>&deg; C, <b id="humidity"></b>%</h4>
												<p class="card-category" style="font-size:13px" id="tgl"></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 ml-auto mr-auto">
							<div class="card">
								<div class="card-header">
									<div class="card-title pt-1 ml-2">Air Conditioner1
										<div class="selectgroup selectgroup-secondary selectgroup-pills">
											<label class="selectgroup-item">
												<input type="checkbox" id="indikator4" disabled="disabled" class="selectgroup-input">
												<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-snowflake"></i></span>
											</label>
										</div>
									</div>
									<!-- <div class="card-category">Kondisi Menyala</div> -->
								</div>
								<div class="card-body pb-0 pt-0">
									<!-- <div class="mb-4">
										<h1><b>27&deg;</b></h1>
									</div> -->
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-0">
										<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
											<li class="nav-item">
												<a class="nav-link" id="ac1on" data-toggle="pill" role="tab" aria-controls="pills-home-icon" aria-selected="true">
													<i class="fas fa-thermometer-quarter"></i>
													AC On
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="ac1off" data-toggle="pill" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
													<i class="fas fa-thermometer-three-quarters"></i>
													AC Off
												</a>
											</li>
										</ul>
									</div>
									<!-- <div class="pull-in">
										<canvas id="dailySalesChart"></canvas>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 ml-auto mr-auto">
							<div class="card">
								<div class="card-header">
									<div class="card-title pt-1 ml-2">Air Conditioner2
										<div class="selectgroup selectgroup-secondary selectgroup-pills">
											<label class="selectgroup-item">
												<input type="checkbox" id="indikator5" disabled="disabled" class="selectgroup-input">
												<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-snowflake"></i></span>
											</label>
										</div>
									</div>
									<!-- <div class="card-category">Kondisi Menyala</div> -->
								</div>
								<div class="card-body pb-0 pt-0">
									<!-- <div class="mb-4">
										<h1><b>23&deg;</b></h1>
									</div> -->
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-0">
										<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
											<li class="nav-item">
												<a class="nav-link" id="ac2on" data-toggle="pill" role="tab" aria-controls="pills-home-icon">
													<i class="fas fa-thermometer-quarter"></i>
													AC On
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="ac2off" data-toggle="pill" role="tab" aria-controls="pills-profile-icon">
													<i class="fas fa-thermometer-three-quarters"></i>
													AC Off
												</a>
											</li>
										</ul>
									</div>
									<!-- <div class="pull-in">
										<canvas id="dailySalesChart1"></canvas>
									</div> -->
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mb-5">
						<div class="col-md-3 pl-md-0">
							<div class="card-pricing2 card-primary">
								<div class="pricing-header pb-4">
									<h3 class="fw-bold">Projector</h3>
								</div>
								<div class="price-value">
									<div class="value">
										<span class="currency"></span>
										<span class="amount">
											<div class="selectgroup selectgroup-secondary selectgroup-pills ml-1 mt-2">
												<label class="selectgroup-item">
													<input type="checkbox" id="indikator3" disabled="disabled" class="selectgroup-input">
													<span class="selectgroup-button selectgroup-button-icon pt-4 pb-4 pl-4 pr-4"><i class="flaticon-idea"></i></span>
												</label>
											</div>
										</span>
										<span class="month"></span>
									</div>
								</div>
								<div class="d-flex flex-wrap justify-content-around pb-2 pt-5">
									<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="projector1" name="projector1" data-toggle="pill" role="tab" aria-controls="pills-home-icon" aria-selected="true">
												<i class="flaticon-idea"></i>
												On
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="projector0" name="projector0" data-toggle="pill" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
												<i class="flaticon-power"></i>
												Off
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 pl-md-0 pr-md-0">
							<div class="card-pricing2 card-secondary">
								<div class="pricing-header pb-4">
									<h3 class="fw-bold">Lampu1</h3>
								</div>
								<div class="price-value">
									<div class="value">
										<span class="currency"></span>
										<span class="amount">
											<div class="selectgroup selectgroup-secondary selectgroup-pills ml-1 mt-2">
												<label class="selectgroup-item">
													<input type="checkbox" id="indikator1" name="indikator1" disabled="disabled" class="selectgroup-input">
													<span class="selectgroup-button selectgroup-button-icon pt-4 pb-4 pl-4 pr-4"><i class="flaticon-idea"></i></span>
												</label>
											</div>
										</span>
										<span class="month"></span>
									</div>
								</div>
								<div class="d-flex flex-wrap justify-content-around pb-2 pt-5">
									<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="lamp1on" name="lamp1on" data-toggle="pill" role="tab" aria-controls="pills-home-icon" aria-selected="true">
												<i class="flaticon-idea"></i>
												On
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="lamp1off" name="lamp1off" data-toggle="pill" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
												<i class="flaticon-power"></i>
												Off
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 pr-md-0">
							<div class="card-pricing2 card-primary">
								<div class="pricing-header pb-4">
									<h3 class="fw-bold">Lampu2</h3>
								</div>
								<div class="price-value">
									<div class="value">
										<span class="currency"></span>
										<span class="amount">
											<div class="selectgroup selectgroup-secondary selectgroup-pills ml-1 mt-2">
												<label class="selectgroup-item">
													<input type="checkbox" id="indikator2" name="indikator2" disabled="disabled" class="selectgroup-input">
													<span class="selectgroup-button selectgroup-button-icon pt-4 pb-4 pl-4 pr-4"><i class="flaticon-idea"></i></span>
												</label>
											</div>
										</span>
										<span class="month"></span>
									</div>
								</div>
								<div class="d-flex flex-wrap justify-content-around pb-2 pt-5">
									<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="lamp2on" name="lamp2on" data-toggle="pill" role="tab" aria-controls="pills-home-icon" aria-selected="true">
												<i class="flaticon-idea"></i>
												On
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="lamp2off" name="lamp2off" data-toggle="pill" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
												<i class="flaticon-power"></i>
												Off
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mb-5">
						<div class="col-md-3 pl-md-0">
							<div class="pb-5 card-pricing2 card-primary">
								<div class="pricing-header">
									<h3 class="fw-bold">Occupancy</h3>
								</div>
								<div class="price-value">
									<div class="value">
										<span class="currency"></span>
										<span class="amount">
											<div class="selectgroup selectgroup-secondary selectgroup-pills ml-1 mt-2">
												<label class="selectgroup-item">
													<input type="checkbox" id="occupancy" class="selectgroup-input">
													<span class="selectgroup-button selectgroup-button-icon pt-4 pb-4 pl-4 pr-4"><i class="flaticon-user-6"></i></span>
												</label>
											</div>
										</span>
										<span class="month"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>