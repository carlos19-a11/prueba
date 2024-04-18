$(document).ready(function(){
		
	const formatter = new Intl.NumberFormat('en-US', {
	  style: 'currency',
	  currency: 'USD',
	  minimumFractionDigits: 0
	})		
		
  $("form[name='pform']").validate({
    rules: {
		pf_numero: {
			required: true,
			digits: true
		} 
    },
	errorPlacement: function ( error, element ) {
		error.insertAfter( element.parent() );
	},    
    submitHandler: function(form) {
		grecaptcha.ready(function() {
			grecaptcha.execute('6LfODKUhAAAAAAb2NGE9t6sggMoqJnnbHAfLDEPQ', {action: 'list'}).then(function(token) {
				var data = $("form[name='pform']").serializeArray();
				data.push({name: "token", value: token});
				var request = $.ajax({
					type: "POST",
					url: "list.php",
					data: $.param(data),
					beforeSend: function(){
						$.LoadingOverlay("show");
					},			
				});
				request.done(function( transport ) {
						if(transport){
								transport.ValorFact = Math.trunc(transport.ValorFact);
								transport.SaldoFact = Math.trunc(transport.SaldoFact);
								$("#myContent").load( "list.html", function() {
								var info = '<tr><td>'+transport.Numfactura+'</td>'+
										   '<td>'+transport.FechaEmision+'</td>'+
										   '<td>'+transport.FechaVencimiento+'</td>'+
										   '<td>'+formatter.format(transport.ValorFact)+'</td>'+
										   '<td>'+formatter.format(transport.SaldoFact)+'</td>'+
										   '<td class="text-center custom-control custom-checkbox">'+
										   '<input class="custom-control-input" type="checkbox" id="chktot" name="chktot" value="'+transport.SaldoFact+'" checked>'+
										   '<label class="custom-control-label" for="chktot"></label>'+
										   '</td>'+
										   '<td><input type="text" id="pagpar" name="pagpar" maxlength="9"></td>';						
								$('#myTable').prepend(info);							
								$('#lastLog').html(transport.LastLogin);
								$('#nomUsuario').html(transport.Nombre);
								$('#valTotal').html(formatter.format(transport.SaldoFact));
								$('#valPago').val(transport.SaldoFact);
								
								var cleave = new Cleave('#pagpar', {
									numeral: true,
									numeralThousandsGroupStyle: 'thousand',
									numeralDecimalScale: 0
								});
															
								$('#pagpar').on('input', function() {
									$( "#chktot" ).prop( "checked", false );
									$('#valTotal').html(formatter.format(cleave.getRawValue()));
									$('#valPago').val(cleave.getRawValue()).trigger('change');						
								});
								
								$("#chktot").change(function() {
									if(this.checked) {
										$('#pagpar').val('');	
										$('#valTotal').html(formatter.format($(this).val()));
										$('#valPago').val($(this).val()).trigger('change');
									}
									else{
										$('#valTotal').html(formatter.format(0));
										$('#valPago').val(0).trigger('change');
									}
								});
								
								$("#valPago").change(function() { 
									if($('#valPago').val()>transport.SaldoFact) $("#avisoExe").show();
									else $("#avisoExe").hide();
								});
								
								$("#btnPagar").click(function() {
								  performPayment();
								});
								
								$("#btnSalir").click(function() {
								  logOut();
								});								

								$.LoadingOverlay("hide");	
							});				
						}else{
							$.when($.LoadingOverlay("hide")).done(
								setTimeout(function(){
									Swal.fire({
										type: 'error',	
										title: 'Verifica los datos ingresados y vuelve a intentarlo',
										showConfirmButton: false,
										timer: 1500,
										heightAuto: false
									})	
								}, 450)				
							);													
						}
				});
				request.fail(function( jqXHR, textStatus ) {
					$.when($.LoadingOverlay("hide")).done(
						setTimeout(function(){
							Swal.fire({
								type: 'error',	
								title: "Request failed: " + textStatus,
								showConfirmButton: false,
								timer: 1500,
								heightAuto: false
							})	
						}, 450)				
					);								
				});									
			});
		});     	
    },
    highlight: function(element) {
        $(element).parent().addClass("field-error");
    },
    unhighlight: function(element) {
        $(element).parent().removeClass("field-error");
    }    
  });
  
});

function performPayment(){
	if($('#valPago').val()>0){
		grecaptcha.ready(function() {
			grecaptcha.execute('6LfODKUhAAAAAAb2NGE9t6sggMoqJnnbHAfLDEPQ', {action: 'invoice'}).then(function(token) {
				var data = [{name: "amount", value: $('#valPago').val()},{name: "token", value: token}];	
				var request = $.ajax({
					type: "POST",
					url: "invoice.php",
					data: $.param(data),
					beforeSend: function(){
						$.LoadingOverlay("show");
					},				
				});
				request.done(function( transport ) {
					if(transport){
						$.each(transport,function (key,value){
							$('#'+key).val(value);
						});
						$("#checkoutForm").submit();
					}else{
						$.when($.LoadingOverlay("hide")).done(
							setTimeout(function(){
								Swal.fire({
									type: 'info',	
									title: 'Cerrar sesión',
									text: "Tu sesión ha expirado",
									confirmButtonText: 'Aceptar',
									heightAuto: false
								}).then((result) => {
									window.location.href = 'index.html';
								})	
							}, 450)				
						);															
					}
				});
				request.fail(function( jqXHR, textStatus ) {
					$.when($.LoadingOverlay("hide")).done(
						setTimeout(function(){
							Swal.fire({
								type: 'error',	
								title: "Request failed: " + textStatus,
								showConfirmButton: false,
								timer: 1500,
								heightAuto: false
							})	
						}, 450)				
					);
				});								
			});
		});		
	}
	else{
		Swal.fire({
			type: 'error',	
			title: 'Error al intentar pagar',
			text: "El valor a pagar debe ser mayor que cero",
			confirmButtonText: 'Aceptar',
			heightAuto: false
		})			
	}
}

function logOut(){
	Swal.fire({
	  title: 'Cerrar sesión',
	  text: "¿Estás seguro de cerrar la sesión actual?",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Cerrar sesión',
	  cancelButtonText: 'Cancelar',
	  heightAuto: false
	}).then((result) => {
	  if (result.value) {
		$.ajax({
			url: 'logout.php',
			beforeSend: function(){
				$.LoadingOverlay("show");
			},
			complete: function(){
				$.LoadingOverlay("hide");
				window.location.href = 'index.html';
			}
		});
	  }
	})
}