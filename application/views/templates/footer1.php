<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="https://www.themekita.com">
						ThemeKita
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright ml-auto">
			2020, Modify with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">TeamTA</a>
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

<!-- Chart JS -->
<!-- <script src="<?php echo base_url() . 'assets/js/plugin/chart.js/chart.min.js' ?>"></script> -->

<!-- jQuery Sparkline -->
<!-- <script src="<?php echo base_url() . 'assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js' ?>"></script> -->

<!-- Chart Circle -->
<!-- <script src="<?php echo base_url() . 'assets/js/plugin/chart-circle/circles.min.js' ?>"></script> -->
<!-- Bootstrap Notify -->
<script src="<?php echo base_url() . 'assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js' ?>"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url() . 'assets/js/plugin/sweetalert/sweetalert.min.js' ?>"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url() . 'assets/js/atlantis.min.js' ?>"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . 'assets/js/setting-demo.js' ?>"></script>
<!-- <script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script> -->

<script>
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
	firebase.analytics();

	$(document).ready(function() {
		get_device();
		var database = firebase.database(); // Iki fungsi get data firebase?
		var lampu1;
		var ac1;
		var suhu;
		var kelembapan;

		database.ref().on("value", function(snap) {
			lampu1 = snap.val().lampu1;
			ac1 = snap.val().ac1;

			/* $.ajax({
				type: "POST",
				url: "<?php echo base_url('home/update_temp') ?>",
				dataType: "JSON",
				data: {
					suhu: suhu,
					kelembapan: kelembapan,
				},
				success: function(data) {
					console.log(kelembapan);
					$('#suhu').html(suhu);
					$('#humidity').html(kelembapan);
				}
			}); */

			if (lampu1 == 1) {
				$("#indikator1").attr("checked", "");
				$("#lamp1on").addClass("active");
				$("#lamp1off").removeClass("active");
			} else {
				$("#indikator1").removeAttr("checked");
				$("#lamp1off").addClass("active");
				$("#lamp1on").removeClass("active");
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
		});

		setInterval(get_device, 50000);

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
					console.log(data[0]);
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
			$('#indikator1').attr("checked", "");
			$('#lamp1on').addClass("active");
			$('#lamp1off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu1");
			firebaseRef.set(1);
			lampu1 = 1;
			$.ajax({
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
			});
		});
		$('#lamp1off').on('click', function() {
			$('#indikator1').removeAttr("checked");
			$('#lamp1off').addClass("active");
			$('#lamp1on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("lampu1");
			firebaseRef.set(0);
			lampu1 = 0;
			$.ajax({

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
			});

		});

		$('#lamp2on').on('click', function() {
			$('#indikator2').attr("checked", "");
			$('#lamp2on').addClass("active");
			$('#lamp2off').removeClass("active");
			var lamp2on = 1;
			$.ajax({
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
			});
		});
		$('#lamp2off').on('click', function() {
			$('#indikator2').removeAttr("checked");
			$('#lamp2off').addClass("active");
			$('#lamp2on').removeClass("active");
			var lamp2off = 0;
			$.ajax({

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
			});

		});

		$('#projector1').on('click', function() {
			$('#indikator3').attr("checked", "");
			$('#projector1').addClass("active");
			$('#projector0').removeClass("active");
			var projector1 = 1;
			$.ajax({
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
			});
		});
		$('#projector0').on('click', function() {
			$('#indikator3').removeAttr("checked");
			$('#projector0').addClass("active");
			$('#projector1').removeClass("active");
			var projector0 = 0;
			$.ajax({

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
			});

		});

		$('#ac1on').on('click', function() {
			$('#indikator4').attr("checked", "");
			$('#ac1on').addClass("active");
			$('#ac1off').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac1");
			firebaseRef.set(1);
			ac1 = 1;
			$.ajax({
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
			});
		});
		$('#ac1off').on('click', function() {
			$('#indikator4').removeAttr("checked");
			$('#ac1off').addClass("active");
			$('#ac1on').removeClass("active");
			var firebaseRef = firebase.database().ref().child("ac1");
			firebaseRef.set(1);
			ac1 = 0;
			$.ajax({

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
			});

		});

		$('#ac2on').on('click', function() {
			$('#indikator5').attr("checked", "");
			$('#ac2on').addClass("active");
			$('#ac2off').removeClass("active");
			var ac2on = 1;
			$.ajax({
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
			});
		});
		$('#ac2off').on('click', function() {
			$('#indikator5').removeAttr("checked");
			$('#ac2off').addClass("active");
			$('#ac2on').removeClass("active");
			var ac2off = 0;
			$.ajax({

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

		});

	});
</script>

<script>
	$(document).ready(function() {
		tampil_history();
		setInterval(tampil_history, 10000);

		function tampil_history() {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('home/data_device') ?>",
				async: true,
				dataType: "json",
				success: function(data) {
					var html = "";
					var i;
					for (i = 0; i < data.length; i++) {
						html +=
							"<tr>" +
							"<td>" +
							data[i].id +
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
							"</tr>";
					}
					$("#device_data").html(html);
				}
			});
		}
	});
</script>

<script>
	$(document).ready(function() {

		tampil_data_user();

		$("#add-row").DataTable({
			"pageLength": 5,
		});

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
					$("#show_data").html(html);
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
					tampil_data_user();
				}
			});
			return false;
		});

		/* var action =
			'<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

		$("#addRowButton").click(function() {
			$("#add-row")
				.dataTable()
				.fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
			$("#addRowModal").modal("hide");
		}); */
		<?= $this->session->flashdata('message'); ?>
	});
</script>
</body>

</html>