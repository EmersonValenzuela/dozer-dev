<script src="<?php echo base_url() . 'assets/frontend/default/js/vendor/modernizr-3.5.0.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/vendor/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/bootstrap.min.js'; ?>"></script>

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
</script>