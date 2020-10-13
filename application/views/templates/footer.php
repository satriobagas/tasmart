<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul class="nav">
				<li class="nav-item">
					<!-- <a class="nav-link" href="https://www.themekita.com">
						ThemeKita
					</a> -->
				</li>
			</ul>
		</nav>
		<div class="copyright ml-auto">
			2020, Modify by <a href="https://www.themekita.com">TeamTA</a>
		</div>
	</div>
</footer>
</div>

<!-- End Custom template -->

</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url() . 'assets/js/core/jquery.3.2.1.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/core/popper.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/core/bootstrap.min.js' ?>"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url() . 'assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js' ?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url() . 'assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js' ?>"></script>

<!-- Datatables -->
<script src="<?php echo base_url() . 'assets/js/plugin/datatables/datatables.min.js' ?>"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo base_url() . 'assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js' ?>"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url() . 'assets/js/plugin/sweetalert/sweetalert.min.js' ?>"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url() . 'assets/js/atlantis.min.js' ?>"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>


<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . 'assets/js/setting-demo.js' ?>"></script>
<!-- <script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script> -->

<style>
	.removeRow {
		background-color: #FF0000;
		color: #FFFFFF;
	}
</style>

<script>
	var link_id = [];
	var firebaseConfig = {
		apiKey: "AIzaSyCYAXXLIn5ZEhmx3KVsFL7pFnfqTuZB4rw",
		authDomain: "smartclassroom-4b92b.firebaseapp.com",
		databaseURL: "https://smartclassroom-4b92b.firebaseio.com",
		projectId: "smartclassroom-4b92b",
		storageBucket: "smartclassroom-4b92b.appspot.com",
		messagingSenderId: "509182997010",
		appId: "1:509182997010:web:2f8198bc41e88a61a79ecb",
		measurementId: "G-4JNH28EZ04"
	};
	// Initialize Firebase

	firebase.initializeApp(firebaseConfig);

	$(document).ready(function() {
		link = window.location.href
		id_link = link.split("/")[3];
		if (id_link == "home") {
			get_device();
			setInterval(get_device, 3000);
		} else if (id_link == "telkom") {
			telkom_device();
			setInterval(telkom_device, 3000);
		} else if (id_link == "history") {
			tampil_history();
			setInterval(tampil_history, 10000);
		} else {
			get_device();
			setInterval(get_device, 3000);
		}

		var database = firebase.database();
		var auto;
		var errorl1;
		var errorl2;
		var errorp;
		var errorac1;
		var errorac2;

		database.ref().on("value", function(snap) {
			auto = snap.val().auto;
			if (auto == 1) {
				$('#auto').attr("checked", "");
			} else {
				$('#auto').removeAttr("checked");
			}

		});

		function get_device() {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('home/data_device') ?>",
				dataType: "json",
				success: function(data) {
					lampu1 = data[0].lampu1;
					lampu2 = data[0].lampu2;
					projector = data[0].projector;
					ac1 = data[0].ac1;
					ac2 = data[0].ac2;
					suhu = data[0].suhu;
					kelembapan = data[0].kelembapan;
					occupancy = data[0].occupancy;
					waktu = data[0].waktu;

					//console.log(data);
					$('#tgl').html(waktu);
					$('#suhu').html(suhu);
					$('#humidity').html(kelembapan);
					if (lampu1 == 1) {
						$('#indikator1').attr("checked", "");
						$('#lamp1on').addClass("active");
						$('#lamp1off').removeClass("active");
					} else {
						$('#indikator1').removeAttr("checked");
						$('#lamp1off').addClass("active");
						$('#lamp1on').removeClass("active");
					}
					if (lampu2 == 1) {
						$('#indikator2').attr("checked", "");
						$('#lamp2on').addClass("active");
						$('#lamp2off').removeClass("active");
					} else {
						$('#indikator2').removeAttr("checked");
						$('#lamp2off').addClass("active");
						$('#lamp2on').removeClass("active");
					}
					if (projector == 1) {
						$('#indikator3').attr("checked", "");
						$('#projector1').addClass("active");
						$('#projector0').removeClass("active");
					} else {
						$('#indikator3').removeAttr("checked");
						$('#projector0').addClass("active");
						$('#projector1').removeClass("active");
					}
					if (ac1 == 1) {
						$('#indikator4').attr("checked", "");
						$('#ac1on').addClass("active");
						$('#ac1off').removeClass("active");
					} else {
						$('#indikator4').removeAttr("checked");
						$('#ac1off').addClass("active");
						$('#ac1on').removeClass("active");
					}
					if (ac2 == 1) {
						$('#indikator5').attr("checked", "");
						$('#ac2on').addClass("active");
						$('#ac2off').removeClass("active");
					} else {
						$('#indikator5').removeAttr("checked");
						$('#ac2off').addClass("active");
						$('#ac2on').removeClass("active");
					}
					if (occupancy == 1) {
						$('#occupancy').attr("checked", "");
					} else {
						$('#occupancy').removeAttr("checked");
					}
				}
			});
		}
		$('#lamp1on').on('click', function() {
			/* $('#indikator1').attr("checked", ""); */
			$('#lamp1on').addClass("active");
			$('#lamp1off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu1");
			firebaseRef.set(1);
			lampu1 = 1;
			/* $.ajax({
				type: "POST",
				url: "<?php echo base_url('home/update_lampu1') ?>",
				dataType: "JSON",
				data: {
					lampu1: lampu1,
				},
				success: function(data) {
					console.log(lampu1);
					$('[name="lamp1on"]').val("1");
					get_device();
				}
			}); */
		});
		$('#lamp1off').on('click', function() {
			/* $('#indikator1').removeAttr("checked"); */
			$('#lamp1off').addClass("active");
			$('#lamp1on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu1");
			firebaseRef.set(0);
			lampu1 = 0;
			/* $.ajax({

				type: "POST",
				url: "<?php echo base_url('home/update_lampu1') ?>",
				dataType: "JSON",
				data: {
					lampu1: lampu1,
				},
				success: function(data) {
					console.log(lampu1);

					$('[name="lamp1off"]').val("0");
					get_device();
				}
			}); */

		});

		$('#lamp2on').on('click', function() {
			/* $('#indikator2').attr("checked", ""); */
			$('#lamp2on').addClass("active");
			$('#lamp2off').removeClass("active");
			var lamp2on = 1;
			/* $.ajax({
				type: "POST",
				url: "<?php echo base_url('home/update_lampu2') ?>",
				dataType: "JSON",
				data: {
					lampu2: lamp2on,
				},
				success: function(data) {
					$('[name="lamp2on"]').val("");
					get_device();
				}
			}); */
		});
		$('#lamp2off').on('click', function() {
			/* $('#indikator2').removeAttr("checked"); */
			$('#lamp2off').addClass("active");
			$('#lamp2on').removeClass("active");
			var lamp2off = 0;
			/* $.ajax({

				type: "POST",
				url: "<?php echo base_url('home/update_lampu2') ?>",
				dataType: "JSON",
				data: {
					lampu2: lamp2off,
				},
				success: function(data) {
					$('[name="lamp2off"]').val("");
					get_device();
				}
			}); */

		});

		$('#projector1').on('click', function() {
			/* $('#indikator3').attr("checked", ""); */
			$('#projector1').addClass("active");
			$('#projector0').removeClass("active");
			var projector1 = 1;
			/* $.ajax({
				type: "POST",
				url: "<?php echo base_url('home/update_projector') ?>",
				dataType: "JSON",
				data: {
					projector: projector1,
				},
				success: function(data) {
					$('[name="projector1"]').val("");
					get_device();
				}
			}); */
		});
		$('#projector0').on('click', function() {
			/* $('#indikator3').removeAttr("checked"); */
			$('#projector0').addClass("active");
			$('#projector1').removeClass("active");
			var projector0 = 0;
			/* $.ajax({

				type: "POST",
				url: "<?php echo base_url('home/update_projector') ?>",
				dataType: "JSON",
				data: {
					projector: projector0,
				},
				success: function(data) {
					$('[name="projector0"]').val("");
					get_device();
				}
			}); */

		});

		$('#ac1on').on('click', function() {
			/* $('#indikator4').attr("checked", ""); */
			$('#ac1on').addClass("active");
			$('#ac1off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac1");
			firebaseRef.set(1);
			ac1 = 1;
			/* $.ajax({
				type: "POST",
				url: "<?php echo base_url('home/update_ac1') ?>",
				dataType: "JSON",
				data: {
					ac1: ac1,
				},
				success: function(data) {
					$('[name="ac1on"]').val("");
					get_device();
				}
			}); */
		});
		$('#ac1off').on('click', function() {
			/* $('#indikator4').removeAttr("checked"); */
			$('#ac1off').addClass("active");
			$('#ac1on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac1");
			firebaseRef.set(0);
			ac1 = 0;
			/* $.ajax({

				type: "POST",
				url: "<?php echo base_url('home/update_ac1') ?>",
				dataType: "JSON",
				data: {
					ac1: ac1,
				},
				success: function(data) {
					$('[name="ac1off"]').val("");
					get_device();
				}
			}); */

		});

		$('#ac2on').on('click', function() {
			/* $('#indikator5').attr("checked", ""); */
			$('#ac2on').addClass("active");
			$('#ac2off').removeClass("active");
			var ac2on = 1;
			/* $.ajax({
				type: "POST",
				url: "<?php echo base_url('home/update_ac2') ?>",
				dataType: "JSON",
				data: {
					ac2: ac2on,
				},
				success: function(data) {
					$('[name="ac2on"]').val("");
					get_device();
				}
			}); */
		});
		$('#ac2off').on('click', function() {
			/* $('#indikator5').removeAttr("checked"); */
			$('#ac2off').addClass("active");
			$('#ac2on').removeClass("active");
			var ac2off = 0;
			/* $.ajax({

				type: "POST",
				url: "<?php echo base_url('home/update_ac2') ?>",
				dataType: "JSON",
				data: {
					ac2: ac2off,
				},
				success: function(data) {
					$('[name="ac2off"]').val("");
					get_device();
				}
			});
 */
		});

		function telkom_device() {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('telkom/data_device') ?>",
				dataType: "json",
				success: function(data1, a, b) {
					data1.forEach(data => {
						//console.log(data)
					});
					link_id = ["telkom"];
					lampu1 = data1[0].lampu1;
					lampu2 = data1[0].lampu2;
					//projector = data1[0].projector;
					ac1 = data1[0].ac1;
					ac2 = data1[0].ac2;
					suhu = data1[0].suhu;
					kelembapan = data1[0].kelembapan;
					occupancy = data1[0].occupancy;
					waktu = data1[0].waktu;

					database.ref().on("value", function(snap) {
						projector = snap.val().projector;
						setTimeout(function() {
							if (projector == 1) {
								$('#indikator3').attr("checked", "");
								$('#projector1').addClass("active");
								$('#projector0').removeClass("active");
							} else {
								$('#indikator3').removeAttr("checked");
								$('#projector0').addClass("active");
								$('#projector1').removeClass("active");
							}
						}, 4500);
					});

					$('#suhu').html(suhu);
					$('#humidity').html(kelembapan);
					$('#tgl').html(waktu);
					if (lampu1 == 1) {
						$('#indikator1').attr("checked", "");
						$('#lamp1on').addClass("active");
						$('#lamp1off').removeClass("active");
					} else {
						$('#indikator1').removeAttr("checked");
						$('#lamp1off').addClass("active");
						$('#lamp1on').removeClass("active");
					}
					if (lampu2 == 1) {
						$('#indikator2').attr("checked", "");
						$('#lamp2on').addClass("active");
						$('#lamp2off').removeClass("active");
					} else {
						$('#indikator2').removeAttr("checked");
						$('#lamp2off').addClass("active");
						$('#lamp2on').removeClass("active");
					}
					/* if (projector == 1) {
						$('#indikator3').attr("checked", "");
						$('#projector1').addClass("active");
						$('#projector0').removeClass("active");
					} else {
						$('#indikator3').removeAttr("checked");
						$('#projector0').addClass("active");
						$('#projector1').removeClass("active");
					} */
					if (ac1 == 1) {
						$('#indikator4').attr("checked", "");
						$('#ac1on').addClass("active");
						$('#ac1off').removeClass("active");
					} else {
						$('#indikator4').removeAttr("checked");
						$('#ac1off').addClass("active");
						$('#ac1on').removeClass("active");
					}
					if (ac2 == 1) {
						$('#indikator5').attr("checked", "");
						$('#ac2on').addClass("active");
						$('#ac2off').removeClass("active");
					} else {
						$('#indikator5').removeAttr("checked");
						$('#ac2off').addClass("active");
						$('#ac2on').removeClass("active");
					}
					if (occupancy == 1) {
						$('#occupancy').attr("checked", "");
					} else {
						$('#occupancy').removeAttr("checked");
					}

				}
			});

		}
		$('#lamp1on').on('click', function() {
			/* $('#indikator1').attr("checked", ""); */
			$('#lamp1on').addClass("active");
			$('#lamp1off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu1");
			firebaseRef.set(1);
			lampu1 = 1;
			setTimeout(function() {
				database.ref().on("value", function(snap) {
					errorl1 = snap.val().errorl1;
					console.log(errorl1);
					if (errorl1 == 1) {
						$.notify({
							icon: "flaticon-error",
							title: "Error",
							message: "Lampu 1 mengalami masalah, silahkan cek!"
						}, {
							type: "danger",
							placement: {
								from: "bottom",
								align: "right"
							},
							time: 1000
						});
					} else {

					}
				});
			}, 15000);
		});
		$('#lamp1off').on('click', function() {
			/* $('#indikator1').removeAttr("checked"); */
			$('#lamp1off').addClass("active");
			$('#lamp1on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu1");
			firebaseRef.set(0);
			lampu1 = 0;

		});

		$('#lamp2on').on('click', function() {
			/* $('#indikator2').attr("checked", ""); */
			$('#lamp2on').addClass("active");
			$('#lamp2off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu2");
			firebaseRef.set(1);
			lampu2 = 1;
			setTimeout(function() {
				database.ref().on("value", function(snap) {
					errorl2 = snap.val().errorl2;
					console.log(errorl2);
					if (errorl2 == 1) {
						$.notify({
							icon: "flaticon-error",
							title: "Error",
							message: "Lampu 2 mengalami masalah, silahkan cek!"
						}, {
							type: "danger",
							placement: {
								from: "bottom",
								align: "right"
							},
							time: 1000
						});
					} else {

					}
				});
			}, 15000);
		});
		$('#lamp2off').on('click', function() {
			/* $('#indikator2').removeAttr("checked"); */
			$('#lamp2off').addClass("active");
			$('#lamp2on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu2");
			firebaseRef.set(0);
			lampu2 = 0;
		});

		$('#projector1').on('click', function() {
			/* $('#indikator3').attr("checked", ""); */
			$('#projector1').addClass("active");
			$('#projector0').removeClass("active");
			var firebaseRef = firebase.database().ref().child("projector");
			firebaseRef.set(1);
			projector = 1;
			/* setTimeout(function() {
				database.ref().on("value", function(snap) {
					errorp = snap.val().errorp;
					if (errorp == 1) {
						$.notify({
							icon: "flaticon-error",
							title: "Error",
							message: "Projector mengalami masalah, silahkan cek!"
						}, {
							type: "danger",
							placement: {
								from: "bottom",
								align: "right"
							},
							time: 1000
						});
					} else {

					}
				});
			}, 15000); */
		});
		$('#projector0').on('click', function() {
			/* $('#indikator3').removeAttr("checked"); */
			$('#projector0').addClass("active");
			$('#projector1').removeClass("active");
			var firebaseRef = firebase.database().ref().child("projector");
			firebaseRef.set(0);
			projector = 0;

		});

		$('#ac1on').on('click', function() {
			/* $('#indikator4').attr("checked", ""); */
			$('#ac1on').addClass("active");
			$('#ac1off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac1");
			firebaseRef.set(1);
			ac1 = 1;
			setTimeout(function() {
				database.ref().on("value", function(snap) {
					errorac1 = snap.val().errorac1;
					if (errorac1 == 1) {
						$.notify({
							icon: "flaticon-error",
							title: "Error",
							message: "AC 1 mengalami masalah, silahkan cek!"
						}, {
							type: "danger",
							placement: {
								from: "bottom",
								align: "right"
							},
							time: 1000
						});
					} else {

					}
				});
			}, 15000);
		});
		$('#ac1off').on('click', function() {
			/* $('#indikator4').removeAttr("checked"); */
			$('#ac1off').addClass("active");
			$('#ac1on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac1");
			firebaseRef.set(0);
			ac1 = 0;
		});

		$('#ac2on').on('click', function() {
			/* $('#indikator5').attr("checked", ""); */
			$('#ac2on').addClass("active");
			$('#ac2off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac2");
			firebaseRef.set(1);
			ac2 = 1;
			setTimeout(function() {
				database.ref().on("value", function(snap) {
					errorac2 = snap.val().errorac2;
					if (errorac2 == 1) {
						$.notify({
							icon: "flaticon-error",
							title: "Error",
							message: "AC 2 mengalami masalah, silahkan cek!"
						}, {
							type: "danger",
							placement: {
								from: "bottom",
								align: "right"
							},
							time: 1000
						});
					} else {

					}
				});
			}, 15000);
		});
		$('#ac2off').on('click', function() {
			/* $('#indikator5').removeAttr("checked"); */
			$('#ac2off').addClass("active");
			$('#ac2on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac2");
			firebaseRef.set(0);
			ac2 = 0;
		});

		$('#autoOn').on('click', function() {
			$('#auto').attr("checked", "");
			var firebaseRef = firebase.database().ref().child("auto");
			firebaseRef.set(1);
			auto = 1;
		});

		$('#autoOff').on('click', function() {
			$('#auto').removeAttr("checked");
			var firebaseRef = firebase.database().ref().child("auto");
			firebaseRef.set(0);
			auto = 0;
		});


		$('.delete_checkbox').click(function() {
			if ($(this).is(':checked')) {
				$(this).closest('tr').addClass('removeRow');
			} else {
				$(this).closest('tr').removeClass('removeRow');
			}
		});

		$('#delete_all').click(function() {

			var checkbox = $('.delete_checkbox:checked');
			if (checkbox.length > 0) {
				var checkbox_value = [];
				$(checkbox).each(function() {
					checkbox_value.push($(this).val());
				});
				$.ajax({
					url: "<?php echo base_url('history/delete_data') ?>",
					method: "POST",
					data: {
						checkbox_value: checkbox_value
					},
					success: function() {
						$('.removeRow').fadeOut(1500);

					}
				})

				swal("Deleted!", "Item has deleted!", {
					icon: "error",
					buttons: {
						confirm: {
							className: 'btn btn-danger'
						}
					},
				}).then(function() {
					location.reload();
				});

			} else {
				alert('Select atleast one records');
			}
		});

		function tampil_history() {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('history/device_history') ?>",
				async: true,
				dataType: "json",
				success: function(data) {
					var html = "";
					var i;
					for (i = 0; i < data.length; ++i) {
						html +=
							"<tr>" +
							"<td>" +
							i +
							"</td>" +
							"<td>" +
							data[i].id +
							"</td>" +
							"<td>" +
							data[i].waktu +
							"</td>" +
							"<td>" +
							data[i].lampu1 +
							"</td>" +
							"<td>" +
							data[i].lampu2 +
							"</td>" +
							"<td>" +
							data[i].ac1 +
							"</td>" +
							"<td>" +
							data[i].ac2 +
							"</td>" +
							"<td>" +
							data[i].projector +
							"</td>" +
							"<td>" +
							data[i].suhu +
							"</td>" +
							"<td>" +
							data[i].kelembapan +
							"</td>" +
							"<td>" +
							data[i].occupancy +
							"</td>" +
							"<td>" +
							'<input class="ml-md-auto form-check-input delete_checkbox" name="chkbox[]" type="checkbox" value="' +
							data[i].no +
							'">' +
							"</td>" +
							"</tr>";
					}
					$("#device_data").html(html);
					if ($.fn.dataTable.isDataTable('#device-row')) {
						table = $('#device-row').DataTable({
							"destroy": true,
							"pageLength": 2000,
							"ordering": false
						});
					} else {
						table = $('#device-row').DataTable({
							"pageLength": 2000,
							paging: true,
							"ordering": false
						});
					}
				}
			});
		}

	});
</script>

<script>
	$(document).ready(function() {

		tampil_data_user();

		function tampil_data_user() {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('add_user/data_user') ?>",
				async: true,
				dataType: "json",
				success: function(data) {

					var html = "";
					var i;
					for (i = 0; i < data.length; i++) {
						html +=
							"<tr>" +
							"<td>" +
							data[i].username +
							"</td>" +
							"<td>" +
							data[i].id_grup +
							"</td>" +
							"<td>" +
							data[i].name +
							"</td>" +
							"<td>" +
							data[i].email +
							"</td>" +
							"<td>" +
							data[i].tlp +
							"</td>" +
							"<td>" +
							data[i].last_login +
							"</td>" +
							"<td>" +
							'<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="' +
							data[i].username +
							'"><i class="fa fa-edit"></i></a>' +
							'<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="' +
							data[i].username +
							'"><i class="fa fa-times"></i></a>' +
							"</td>" +
							"</tr>";
					}


					$("#show_data").html(html); // aku sholat sek okeee
					/* table = $(".add-row").DataTable({
						"pageLength": 5,
						"processing": true,
						"serverSide": true
					}); */
					if ($.fn.dataTable.isDataTable('.add-row')) {
						table = $('.add-row').DataTable({
							"destroy": true,
							"pageLength": 5,
							"processing": true,
							"ordering": false

						});
					} else {
						table = $('.add-row').DataTable({
							paging: true,
							"pageLength": 5,
							"processing": true,
							"ordering": false
						});
					}

				}
			});
		}

		//GET UPDATE
		$('#show_data').on('click', '.item_edit', function() {
			var id = $(this).attr('data');

			$.ajax({
				type: "GET",
				url: "<?php echo base_url('add_user/get_user') ?>",
				dataType: "JSON",
				data: {
					username: id
				},
				success: function(data) {
					$.each(data, function(username, pass, id_grup, name, email, tlp) {
						$('#editModal').modal('show');
						$('[name="username_edit"]').val(data.username);
						$('[name="pass_edit"]').val(data.pass);
						$('[name="id_grup_edit"]').val(data.id_grup);
						$('[name="name_edit"]').val(data.name);
						$('[name="email_edit"]').val(data.email);
						$('[name="tlp_edit"]').val(data.tlp);
					});

				}
			});
			return false;
		});

		//GET HAPUS
		$('#show_data').on('click', '.item_hapus', function() {
			var username = $(this).attr('data');
			$('#delModal').modal('show');
			$('[name="kode"]').val(username);
		});

		//Simpan Barang
		$('#btn_simpan').on('click', function() {
			var username = $('#username').val();
			var pass = $('#pass').val();
			var id_grup = $('#id_grup').val();
			var name = $('#name').val();
			var email = $('#email').val();
			var tlp = $('#tlp').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('add_user/simpan_user') ?>",
				dataType: "JSON",
				data: {
					username: username,
					pass: pass,
					id_grup: id_grup,
					name: name,
					email: email,
					tlp: tlp
				},
				success: function(data) {
					$('[name="username"]').val("");
					$('[name="pass"]').val("");
					$('[name="id_grup"]').val("");
					$('[name="name"]').val("");
					$('[name="email"]').val("");
					$('[name="tlp"]').val("");
					$('#addModal').modal('hide');

					window.location.href = 'add_user';
					tampil_data_user();

				}
			});
			return false;
		});

		//Update user
		$('#btn_update').on('click', function() {

			var username = $('#username2').val();
			var pass = $('#pass2').val();
			var id_grup = $('#id_grup2').val();
			var name = $('#name2').val();
			var email = $('#email2').val();
			var tlp = $('#tlp2').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('add_user/update_user') ?>",
				dataType: "JSON",
				data: {
					username: username,
					pass: pass,
					id_grup: id_grup,
					name: name,
					email: email,
					tlp: tlp
				},
				success: function(data) {
					$('[name="username_edit"]').val("");
					$('[name="pass_edit"]').val("");
					$('[name="id_grup_edit"]').val("");
					$('[name="name_edit"]').val("");
					$('[name="email_edit"]').val("");
					$('[name="tlp_edit"]').val("");
					$('#editModal').modal('hide');
					window.location.href = 'add_user';
					tampil_data_user();

				}
			});
			return false;
		});

		//Hapus Barang
		$('#btn_hapus').on('click', function() {
			var kode = $('#textkode').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('add_user/hapus_user') ?>",
				dataType: "JSON",
				data: {
					username: kode
				},
				success: function(data) {
					$('#delModal').modal('hide');

					window.location.href = 'add_user';
					tampil_data_user();
				}
			});
			return false;
		});

	});
	<?= $this->session->flashdata('message'); ?>
</script>
<script>
	$(document).ready(function() {

		profil();

		function profil() {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('profil/data_user1') ?>",
				async: true,
				dataType: "json",
				success: function(data) {
					console.log(data.username)
					$.each(data, function(username, pass, id_grup, name, email, tlp) {
						$('[name="username1"]').val(data.username);
						$('[name="pass1"]').val(data.pass);
						$('[name="id_grup1"]').val(data.id_grup);
						$('[name="name1"]').val(data.name);
						$('[name="email1"]').val(data.email);
						$('[name="tlp1"]').val(data.tlp);
						$('#username1').html(data.username);
						$('#id_grup1').html(data.id_grup);
						$('#name1').html(data.name);
						$('#email1').html(data.email);
						$('#tlp1').html(data.tlp);
					});

				}
			});

			var id
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('profil/get_user1') ?>",
				dataType: "JSON",
				data: {
					username: id
				},
				success: function(data) {
					$.each(data, function(username, pass, id_grup, name, email, tlp) {

						$('[name="username_edit1"]').val(data.username);
						$('[name="pass_edit1"]').val(data.pass);
						$('[name="id_grup_edit1"]').val(data.id_grup);
						$('[name="name_edit1"]').val(data.name);
						$('[name="email_edit1"]').val(data.email);
						$('[name="tlp_edit1"]').val(data.tlp);
					});

				}
			});

			$('#btn_update1').on('click', function() {

				var username = $('#username3').val();
				var pass = $('#pass3').val();
				var id_grup = $('#id_grup3').val();
				var name = $('#name3').val();
				var email = $('#email3').val();
				var tlp = $('#tlp3').val();
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('profil/update_user1') ?>",
					dataType: "JSON",
					data: {
						username: username,
						pass: pass,
						id_grup: id_grup,
						name: name,
						email: email,
						tlp: tlp
					},
					success: function(data) {
						$('[name="username_edit1"]').val("");
						$('[name="pass_edit1"]').val("");
						$('[name="id_grup_edit1"]').val("");
						$('[name="name_edit1"]').val("");
						$('[name="email_edit1"]').val("");
						$('[name="tlp_edit1"]').val("");
						$('#editModal').modal('hide');
						window.location.href = 'profil';
						profil();

					}
				});
				return false;
			});

		}

	});
</script>
</body>

</html>