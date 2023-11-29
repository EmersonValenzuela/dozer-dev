<script src="<?php echo base_url() . 'assets/frontend/default/js/vendor/modernizr-3.5.0.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/vendor/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/bootstrap.min.js'; ?>"></script>

<script src="<?php echo base_url('assets/backend/js/vendor/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/js/vendor/dataTables.bootstrap4.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/js/vendor/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/backend/js/vendor/responsive.bootstrap4.min.js'); ?>"></script>

<?php if ($page_name == "home" || $page_name == "instructor_page") : ?>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/slick.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/jquery.webui-popover.min.js'; ?>"></script>
<?php endif; ?>

<?php if ($page_name == "user_profile") : ?>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/tinymce.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/edit_profile.js'; ?>"></script>
<?php endif; ?>

<script src="<?php echo base_url() . 'assets/frontend/default/js/main.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/global/toastr/toastr.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/jquery.form.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/jQuery.tagify.js'; ?>"></script>

<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != "") : ?>

	<script type="text/javascript">
		toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
	</script>

<?php endif; ?>

<?php if ($this->session->flashdata('error_message') != "") : ?>

	<script type="text/javascript">
		toastr.error('<?php echo $this->session->flashdata("error_message"); ?>');
	</script>

<?php endif; ?>

<?php if ($this->session->flashdata('info_message') != "") : ?>

	<script type="text/javascript">
		toastr.info('<?php echo $this->session->flashdata("info_message"); ?>');
	</script>

<?php endif; ?>
<script type="text/javascript">
	$(function() {
		$('[data-bs-toggle="tooltip"]').tooltip()
	});
	if ($('.tagify').height()) {
		$('.tagify').tagify();
	}
</script>

<script>
	if (document.getElementById("reg_page")) {

		const formulario = document.getElementById('sign_up');
		const number = document.getElementById('number');
		const inputs = document.querySelectorAll("#sign_up input");
		const expresiones = {
			usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
			nombre: /^[a-zA-ZÀ-ÿ{4,40}]$/, // Letras y espacios, pueden llevar acentos.
			password: /^.{4,12}$/, // 4 a 12 digitos.
			correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
			telefono: /^\d{7,14}$/ // 7 a 14 numeros.
		}
		const campos = {
			first_name: false,
			last_name: false,
			number: false,
			email: false,
			password: false
		}
		const validarFormulario = (e) => {
			switch (e.target.id) {
				case "first_name":
					validarCampo(expresiones.nombre, e.target, e.target.id);
					break;
				case "last_name":
					validarCampo(expresiones.nombre, e.target, e.target.id);
					break;
				case "number":
					validarCampo(expresiones.nombre, e.target, e.target.id);
					break;
				case "email":
					validarCampo(expresiones.nombre, e.target, e.target.id);
					break;
				case "password":
					validarCampo(expresiones.nombre, e.target, e.target.id);
					break;
			}

		}

		const validarCampo = (expresion, input, campo) => {
			if (expresion.test(input.value)) {
				document.getElementById(campo).style.borderColor = "red";
				campos[campo] = false;
			} else if (input.value == "") {
				document.getElementById(campo).style.borderColor = "red";
				campos[campo] = false;

			} else {
				document.getElementById(campo).style.borderColor = "green";
				campos[campo] = true;
			}
		}

		inputs.forEach((input) => {
			input.addEventListener('keyup', validarFormulario);
			input.addEventListener('blur', validarFormulario);
		});

		formulario.addEventListener('submit', (e) => {
			e.preventDefault();

			let terminos = document.getElementById('terminos');
			if (terminos.checked) {
				if (campos.first_name && campos.last_name && campos.number && campos.email && campos.password) {
					// RUN
					formulario.setAttribute('action', '<?= base_url('login/register') ?>');
					formulario.setAttribute('method', 'post');
					formulario.submit();
				} else {
					Command: toastr["error"]("Has aceptado las términos y condiciones? ")

				}
			} else {
				document.getElementById('terminos').style = "border-color:red";
				document.getElementById('lbl_trm').style = "color:red";
				Command: toastr["error"]("Falta ingresar datos, porfavor rellenar datos?")
				toastr.options = {
					"closeButton": true,
					"debug": false,
					"newestOnTop": true,
					"progressBar": true,
					"positionClass": "toast-top-right",
					"preventDuplicates": true,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				}

			}

			inputs.forEach((input) => {
				if (input.value == "") {
					document.getElementById(input.id).style = "border-color:red";
				}
			});

		})
		number.addEventListener("input", (e) => {
			number.value = number.value.replace(/[^0-9.-]/g, "");
		});

	}
	$(function() {

		var defaultselectbox = $('#cusSelectbox');
		var numOfOptions = $('#cusSelectbox').children('option').length;

		// hide select tag
		defaultselectbox.addClass('s-hidden');

		// wrapping default selectbox into custom select block
		defaultselectbox.wrap('<div class="cusSelBlock"></div>');

		// creating custom select div
		defaultselectbox.after('<div class="selectLabel"></div>');

		// getting default select box selected value
		$('.selectLabel').text(defaultselectbox.children('option').eq(0).text());

		// appending options to custom un-ordered list tag
		var cusList = $('<ul/>', {
			'class': 'options'
		}).insertAfter($('.selectLabel'));

		// generating custom list items
		for (var i = 0; i < numOfOptions; i++) {
			$('<li/>', {
				text: defaultselectbox.children('option').eq(i).text(),
				rel: defaultselectbox.children('option').eq(i).val()
			}).appendTo(cusList);
		}

		// open-list and close-list items functions
		function openList() {
			for (var i = 0; i < numOfOptions; i++) {
				$('.options').children('li').eq(i).attr('tabindex', i).css(
					'transform', 'translateY(' + (i * 100 + 100) + '%)').css(
					'transition-delay', i * 30 + 'ms');
			}
		}

		function closeList() {
			for (var i = 0; i < numOfOptions; i++) {
				$('.options').children('li').eq(i).css(
					'transform', 'translateY(' + i * 0 + 'px)').css('transition-delay', i * 0 + 'ms');
			}
			$('.options').children('li').eq(1).css('transform', 'translateY(' + 2 + 'px)');
			$('.options').children('li').eq(2).css('transform', 'translateY(' + 4 + 'px)');
		}

		// click event functions
		$('.selectLabel').click(function() {
			$(this).toggleClass('active');
			if ($(this).hasClass('active')) {
				openList();
				focusItems();
			} else {
				closeList();
			}
		});

		$(".options li").on('keypress click', function(e) {
			e.preventDefault();
			$('.options li').siblings().removeClass();
			closeList();
			$('.selectLabel').removeClass('active');
			$('.selectLabel').text($(this).text());
			defaultselectbox.val($(this).text());
			$('.selected-item p span').text($('.selectLabel').text());
		});

	});

	function focusItems() {

		$('.options').on('focus', 'li', function() {
			$this = $(this);
			$this.addClass('active').siblings().removeClass();
		}).on('keydown', 'li', function(e) {
			$this = $(this);
			if (e.keyCode == 40) {
				$this.next().focus();
				return false;
			} else if (e.keyCode == 38) {
				$this.prev().focus();
				return false;
			}
		}).find('li').first().focus();

	}
	const t = $("#data-certificate").DataTable({
		lengthMenu: [10, 25, 50, 75, 100, -1], // Agrega -1 para representar "All"
		language: {
			"searchPlaceholder": "Busca entre los certificados... ",
			"decimal": "",
			"emptyTable": "No hay Certificados",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ Certificados",
			"infoEmpty": "Mostrando 0 to 0 of 0 Certificados",
			"infoFiltered": "(Filtrado de _MAX_ total entradas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin Certificados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},
		columns: [{
				data: "lastname"

			},
			{
				data: "format"
			},
			{
				data: "capacitation"
			},
			{
				data: "institute"
			},
			{
				data: "date"
			},
			{
				data: "link"
			},
		]
	});

	function realizarBusqueda() {
		var filtro = $('#select-search').val();
		var valor = $('#t-search').val();

		// Realiza una solicitud al servidor para obtener datos filtrados
		$.ajax({
			url: 'api/search-certificate', // Reemplaza con la URL correcta de tu servicio
			type: 'GET',
			method: 'POST',
			data: {
				filtro: filtro,
				valor: valor
			},
			dataType: 'json',
			beforeSend: () => {
				$('#cover-spin').show(0)

			}
		}).
		done((data) => {
			let array = data.data;
			// Limpia la tabla
			t.clear();

			// Agrega los nuevos datos a la tabla y personaliza las celdas
			array.forEach(function(item) {
				// Personaliza las celdas según sea necesario
				item.lastname = item.last_name + " " + item.first_name;
				item.format = item.name;
				item.capacitation = item.title;
				item.institute = item.institute;
				item.date = format_date(item.date_certificate);
				item.link = viewPDF(item.code_certificate);

				// Agrega la fila a la tabla
				t.row.add(item);
			});

			// Dibuja la tabla con los datos actualizados
			t.draw();
		}).fail((error) => {
			console.error('Error al realizar la búsqueda:', error.responseText);

		}).always(() => {
			$('#cover-spin').hide(0);

		})
	}

	function viewPDF(link) {
		return `<a href="certificado/${link}" target="_blank" class="btn btn-danger btn-sm">Ver Certificado</a>`;
	}
	$("#btn-search").on('click', function(e) {
		e.preventDefault();
		realizarBusqueda();
	});

	function format_date(i) {
		// Get the current date
		var currentDate = new Date(i);

		// Array with the names of the months
		var monthNames = [
			"Enero", "Febrero", "Marzo", "Abril",
			"Mayo", "Junio", "Julio", "Agosto",
			"Septiembre", "Octubre", "Noviembre", "Diciembre"
		];

		// Get day, month, and year
		var day = currentDate.getDate();
		var month = currentDate.getMonth();
		var year = currentDate.getFullYear();

		// Display the date in the desired format
		return displayedDate = day + "/" + month + "/" + year;
	}
</script>