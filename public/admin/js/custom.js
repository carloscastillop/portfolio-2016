$(document).ready(function() {




    function agregarTodos(id, estado){
        var token        = $("input[name=_token]").val();
        var idUsuario    = $("#idUsuario").val();
        var randomnumber = Math.random(); 
        var laUrl        = '/usuario/add-todos-usuario';
        var flag         = 0;
        if(isNaN(id)){ laUrl= '/usuario/add-todos-propios-usuario'; flag=1; }
        $('.miListaCheckbox').prop('disabled', true);
        $('.deseoPriceInput').prop('disabled', true);
        $.ajax({
            url: laUrl,                         
            data : {                                
                'id'            : id,
                'idUsuario'     : idUsuario,
                '_token'        : token,
                'estado'        : estado,   
                'randomnumber'  : randomnumber
            },
            type: 'POST',
            dataType: 'json',                                                
            beforeSend: function(xhr){
                xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
            },
            success: function(response){
                if(response.success){
                    if(flag==1){
                        location.reload();
                    }    
                    $('.miListaCheckbox').prop('disabled', false);
                    $('.deseoPriceInput').prop('disabled', false);    
                }  
                //console.log(response.resumen); 
                if(response.resumen){
                    response.resumen.forEach(function(entry) {
                        if(estado==1){
                            $('#deseo-'+entry).prop('checked', true);    
                        }else{
                            $('#deseo-'+entry).prop('checked', false);
                        }
                        
                    });
                }
                                                       
            },
            error: function(response){
            }
        });//ajax
    }

    function miListaCheckboxFunction( id, idUsuario){
        
        var token   = $("input[name=_token]").val();
        var price   = 0;
        var valor   = 0;
        price       = $('#deseo-price-'+id).val();

        if ($('#deseo-'+id).is(":checked")){
            valor = 1;    
        }else{
            
        }

        var randomnumber= Math.random(); 
        if(!isNaN(parseFloat(price)) && isFinite(price)){ 

        }else{
            price=0;
        }
            $.ajax({
                url: '/usuario/add-deseo-usuario',                         
                data : {                                
                    'id'            : id,
                    'idUsuario'     : idUsuario,
                    '_token'        : token,
                    'valor'         : valor,
                    'price'         : price,
                    'randomnumber'  : randomnumber
                },
                type: 'POST',
                dataType: 'json',                                                
                beforeSend: function(xhr){
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                },
                success: function(response){
                    if(response.success){
                        if(response.active ==0 && response.price ==0){
                            $('#deseo-'+id).prop('checked', false); 
                            //$('#tr-'+id).find("td").fadeOut(1000, function(){ $(this).parent().remove();});
                            if($('.tablaMisDeseos').length){
                                $('#tr-'+id).find("td").fadeOut(500, function(){ $(this).parent().remove();});
                            }
                        } 
                        if(response.active ==0 && response.price ==1){
                            //$('#deseo-'+id).prop('checked', false); 
                            $('#deseo-price-'+id).parent().addClass('has-error'); 
                            alertify.error("El precio del deseo no puede ser 0");

                        } 
                        if(response.active ==1){
                            $('#deseo-price-'+id).parent().addClass('has-success');
                            //$('#tr-'+id).addClass('success');
                            setTimeout(function () { 
                                //$('#tr-'+id).removeClass('success');
                                $('#deseo-price-'+id).parent().addClass('has-success');
                            }, 2000);
                            if($('.esPapelera').length){
                                $('#tr-'+id).find("td").fadeOut(1000, function(){ $(this).parent().remove();});
                            }

                        }
                    }   
                                                           
                },
                error: function(response){
                }
            });//ajax

    }

    function url_novios(){
        var idurl       = $('#url_noviosInput').val();
        var randomnumber= Math.random();
        var token       = $('form input[name="_token"]').val();
        var id          = $('#idUsuario').val();
        
        $.ajax({
            url: '/usuario/get-url-user',                         
            data : {                                
                'nombre'        : idurl,
                'id'            : id,
                '_token'        : token,
                'randomnumber'  : randomnumber
            },
            type: 'POST',
            dataType: 'json',                                                
            beforeSend: function(xhr){
                xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
            },
            success: function(response){
                $('#url_noviosInput').val(response.url);
                $('a.getUrlEyeLink').attr('href', '/lista/'+response.url);
                if(response.success){
                    $('#helpblockrespuesta').html('<i aria-hidden="true" class="fa fa-thumbs-up"></i> URL ok');
                    $('#url_noviosContainer').removeClass('has-error');
                    $('#url_noviosContainer').addClass('has-success');
                    $('div.getUrlEye').fadeIn();
                }else{
                    $("#url_noviosInput").focus();
                    $('#helpblockrespuesta').html('<i aria-hidden="true" class="fa fa-warning"></i> Ups!! URL en uso, intenta con otra.');
                    $('#url_noviosContainer').removeClass('has-success');
                    $('#url_noviosContainer').addClass('has-error');
                    
                    $('div.getUrlEye').fadeOut();
                }

            },
            error: function(response){
                alertify.error("Error inesperado");
                $('#url_noviosContainer').removeClass('has-success');
                $('#url_noviosContainer').addClass('has-error');
            }
        });//ajax 

        
    }

    function cambiaPaisesRegistro(){
        var pais = $("select[name=pais]").find(':selected').val();
        var fono = $("select[name=pais]").find(':selected').attr('paisfono');

        $('#pais_fono').html(fono);

        if(pais > 0){
            if(pais==1){
                $('.banco_tipocuentaContainer').fadeIn();
            }else{
                $('.banco_tipocuentaContainer').fadeOut();
            }
            var randomnumber= Math.random();
            $.ajax({
                url: '/get-bancos',                         
                data : {                                
                    'pais'          : pais,
                    'randomnumber'  : randomnumber
                },
                type: 'POST',
                dataType: 'json',                                                
                beforeSend: function(xhr){
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                },
                success: function(response){
                    if(response.success){
                        var combo = '<option value="BB">Selecciona banco</option>';
                        jQuery.each(response.msg, function(i, val) {
                            combo = combo + '<option value="'+val["id"]+'">'+val["name"]+'</option>';
                        });
                        $("select[name=banco_nombre]").find('option').remove().end().append(combo).prop('disabled', false);
                    }
                },
                error: function(response){
                }
            });//ajax 
        }
    }
    
	$(".btnConfirmar").click(function(e){
		e.preventDefault();
		var id	= $(this).attr("id");
		id		= id.split("-"); 
		id		= id[1];
		alertify.confirm("Seguro deseas eliminar?", function (e) {
		    if (e) {
		        alertify.log("Eliminar item");
		        $( "#delete-prod-"+id).submit();
		    } else {
		        // user clicked "cancel"
		    }
		});

	});
	
	$('*[data-toggle="tooltip"]').tooltip();	

	$(".btnEliminarPDF").click(function(e){
		e.preventDefault();
		var id	= $(this).attr("id");
		id		= id.split("-"); 
		id		= id[1];
		$.ajax({
            type: "POST",
            url : "/backend/productos/delete-pdf",
            data : {                                
                    'id'                : id
                   },
            success : function(data){
                $(".pdfContainer").remove();
                
            }
        });
	});

    $(".btnEliminarImagen").click(function(e){
        e.preventDefault();
        var id  = $(this).attr("id");
        id      = id.split("-"); 
        id      = id[1];
        $.ajax({
            type: "POST",
            url : "/backend/productos/delete-image",
            data : {                                
                    'id'                : id
                   },
            success : function(data){
                $(".fotoContainer").remove();
                
            }
        });
    });

	
	$("select[name='tipo_id']").on('change', function() {
	  	tipoProducto();
	});

	function tipoProducto(){
		var valor=$("select[name='tipo_id']").val();
	  	if(valor==2 || valor==3){
	  		$(".lasCategorias").fadeOut();
	  		$("input:checkbox[name='categorias[]']").prop('checked', false);
	  	}else{
	  		$(".lasCategorias").fadeIn();
	  	}
	}
	tipoProducto();

	/*Formulario registro*/
    if($(".verPass").length){
        
        $( ".verPass" )
	      .mouseup(function() {
	        $(".verPassInput").attr("type","password");
	    })
	      .mousedown(function() {
	        $(".verPassInput").attr("type","text");
	    });
    }


    $('body').on('click', '.editarComunaBtn', function(e){
        e.preventDefault();
        e.preventDefault;
        var idprod      = $(this).attr("id");
        idprod          = idprod.split("-");
        var id          = idprod[1]; //id comuna
        var tramoA		= $('#tramoA-'+id).val();
        var tramoB		= $('#tramoB-'+id).val();
        var randomnumber= Math.random();
        $("#comunaBtn-"+id).prop('disabled', true);
        $("#comunaBtn-"+id).fadeOut();
        
        $.ajax({
            url: 'regiones/comunas-tramos',                         
            data : {                                
                'id'            : id,
                'tramoA'        : tramoA,
                'tramoB'        : tramoB,
                'randomnumber'  : randomnumber
            },
            type: 'POST',
            dataType: 'json',                                                
            beforeSend: function(xhr){
                xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
            },
            success: function(response){
                if(response.success){
                    $("#comunaBtn-"+id).prop('disabled', false);
                	$("#comunaBtn-"+id).fadeIn();
                	$("#tramoB-"+id).addClass("ok");
                	$("#tramoA-"+id).addClass("ok");
                }else{
                	$("#comunaBtn-"+id).prop('disabled', false);
                	$("#comunaBtn-"+id).fadeIn();
                }
            },
            error: function(response){
                $("#comunaBtn-"+id).prop('disabled', false);
                $("#comunaBtn-"+id).fadeIn();
            }
        });//ajax 
        
    });


    $('body').on('click', '.editarLimiteTramoBtn', function(e){
        e.preventDefault();
        var id      		= $("#limiteTramoInput").val();
        var randomnumber	= Math.random();
        $(this).prop('disabled', true);
        $(this).fadeOut();
        
        $.ajax({
            url: 'regiones/limite-tramos',                         
            data : {                                
                'id'            : id,
                'randomnumber'  : randomnumber
            },
            type: 'POST',
            dataType: 'json',                                                
            beforeSend: function(xhr){
                xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
            },
            success: function(response){
                if(response.success){
                    $(".editarLimiteTramoBtn").prop('disabled', false);
                	$(".editarLimiteTramoBtn").fadeIn();
                	$("#limiteTramo").addClass("ok");
                	$("#editarLimiteTramoSpan").html(response.msg.valor);
                }else{
                	$(".editarLimiteTramoBtn").prop('disabled', false);
                	$(".editarLimiteTramoBtn").fadeIn();
                }
            },
            error: function(response){
                $(".editarLimiteTramoBtn").prop('disabled', false);
                $(".editarLimiteTramoBtn").fadeIn();
            }
        });//ajax 
        
    });


    $('select[name=estado_compra]').change(function(){
        mensajeAlUsuario();
    });

    function mensajeAlUsuario(){
        var proceso = $('select[name=estado_compra]').val();
        if(proceso==3){
            $('#mensajeAlUsuario').fadeIn();
        }else{
            $('#mensajeAlUsuario').fadeOut();
        }
    }

    mensajeAlUsuario();

    if($(".dataTablesTabla").length){
	    $('.dataTablesTabla').DataTable({
                "order": [[ 0, "desc" ]],
	            responsive: true,
	            "iDisplayLength": 50
	    });
        alertify.log('iniciando tabla');
	}

    $('.fechaFormat').mask("00/00/0000", {clearIfNotMatch: true, placeholder: "DD/MM/AAAA"});
    $('.movilFormat').mask('0 0000 0000');


    if($("#short_description").length){
        init_contadorTa("short_description","short_descriptionMsg", 160);
    }

    if($("form#checkoutForm #mensajeTarjeta").length){
        init_contadorTa("mensajeTarjeta","mensajeSMStxtareaCont", 160);
    }

    $('select[name=estado_compra]').change(function(){
        mensajeAlUsuario();
    });

    function mensajeAlUsuario(){
        var proceso = $('select[name=estado_compra]').val();
        if(proceso==3){
            $('#mensajeAlUsuario').fadeIn();
        }else{
            $('#mensajeAlUsuario').fadeOut();
        }
    }


    $('.btnStart').fadeIn();

    $('.btnClick').click(function(){
        $(this).attr("disabled","disabled");
        //console.log('click');
    });


    /////////////////////
    ///REGISTRO usuarios
    /////////////////////

    if($("#registroForm").length){
        cambiaPaisesRegistro();
        $("select[name=pais]").change(function(event){
            cambiaPaisesRegistro();
        });
    }


    /////////////////////
    ///PERFIL usuarios
    /////////////////////
    
    if($("#perfilForm").length){
        $("select[name=pais]").change(function(event){
            cambiaPaisesRegistro();
        });

        $('.btnFondo').click(function(){
            var id      = $(this).attr('id');
            id          = id.split("-")[1];
            var fondo   = $(this).attr('attr-image');
            var url     = '/uploads/backgrounds/';
            $('#fondoGrupoNovios .btn').removeClass('active');
            $('.cardheader').css('background-image', 'url(' + url+fondo + ')');
            $("#fondos_page_id").val(id);
            $(this).addClass('active');
        });

        $('#url_noviosInput').keyup(function(){
            $('#helpblockrespuesta').html('<i class="fa fa-cog fa-spin fa-fw margin-bottom"></i>');
            var idurl       = $('#url_noviosInput').val();
            $('#url_noviosContainer').removeClass('has-error');
            $('#url_noviosContainer').removeClass('has-success');
            delay(function(){    
                url_novios();
            }, 2000, $('#url_noviosInput').attr("id") );
        });

        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        url_novios();

        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();


        $("#imageUserProfileForm").change(function(){
            readURL(this);
        });
        
        

        if(window.location.hash == '#photo') {
            $('#modalSubirFoto').modal('show');
          //alertify.log("Lista de novios desactivada "+window.location.hash); 
        }

        $('.cambiaAvatar')  .mouseover(function() {
            $('.ActualUploadAvatar').hide();
            $('.uploadAvatar').show();
          })
          .mouseout(function() {
            $('.ActualUploadAvatar').show();
            $('.uploadAvatar').hide();
          });

    }////FIN PERFIL NOVIOS


    /////////////////////
    ///MI LISTA
    /////////////////////
    ///
    if($(".miListaContainer").length){
       

        

        $('.miListaCheckbox').change(function(){
            var id      = $(this).attr('id');
            id          = id.split("-")[1];
            idUsuario   = $('#idUsuario').val();
            miListaCheckboxFunction( id, idUsuario );
        });

        $('.deseoPriceInput').keyup(function(){
            var id      = $(this).attr('id');
            id          = id.split("-")[2];
            idUsuario   = $('#idUsuario').val();
            if ($(this).is(":checked")){   
            }else{
                $('#deseo-'+id).prop('checked', true);   
            }
             
            delay(function(){
                var valor = 0;
                miListaCheckboxFunction( id, idUsuario );
            }, 3000, id );
        });

        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        $('.agregarTodosCheckbox').change(function(){
            var id      = $(this).attr('id'); //categoria deseos
            id          = id.split("-")[1];
            if ($(this).is(":checked")){  
                agregarTodos(id, 1); 
            }else{
                agregarTodos(id, 0);   
            }
            
        });
        $('.miListaCheckboxActiva').change(function(){

            var token        = $("input[name=_token]").val();
            var randomnumber = Math.random(); 
            $(this).prop('disabled', true);

            $.ajax({
                url: '/usuario/activar-lista',                         
                data : {                                
                    '_token'        : token,  
                    'randomnumber'  : randomnumber
                },
                type: 'POST',
                dataType: 'json',                                                
                beforeSend: function(xhr){
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                },
                success: function(response){
                    if(response.success){
                        $('.miListaCheckboxActiva').prop('disabled', false);
                        if(response.activo==1){
                            alertify.log("Lista de novios activa");
                            $('.miListaCheckboxActiva').prop('checked', true);
                        }else{
                            alertify.log("Lista de novios desactivada"); 
                            $('.miListaCheckboxActiva').prop('checked', false);
                        }
                    }                                      
                },
                error: function(response){
                }
            });//ajax

            
        });

        $(document.body).on('show.bs.modal', "#modalDeseoPersonalizadoEditar", function (event){    
          var button    = $(event.relatedTarget); // Button that triggered the modal
          //console.log(event.relatedTarget);
          var id        = button.data('id');
          
          var nombre    = $('#deseoProp-'+id).attr('data-nombre');
          var precio    = $('#deseoProp-'+id).attr('data-precio');
          
          
          
          var modal = $(this)
          modal.find('.modal-title').text('Editar deseo: ' + nombre)
          modal.find('.modal-body input#name').val(nombre);
          modal.find('.modal-body input#price').val(precio);
          $('#editarDeseoForm input#id-deseo').val(id);
          $('#modalDeseoPersonalizadoEditar .modal-footer, #modalDeseoPersonalizadoEditar .modal-header button.close').fadeIn();
        });


        $(document.body).on('click', "#btnDeseoPersonalizadoEditar", function (e){
            e.preventDefault();

            var token        = $("input[name=_token]").val();
            var nombre       = $("#modalDeseoPersonalizadoEditar input#name.form-control").val();
            var precio       = $("#modalDeseoPersonalizadoEditar input#price.form-control").val();
            var id           = $("#editarDeseoForm input#id-deseo").val();
            var idUsuario    = $("#idUsuario").val();
            var randomnumber = Math.random(); 
            var errores      = 0;
            if(nombre.length < 2){
                errores++;
                $("#modalDeseoPersonalizadoEditar input#name.form-control").parent().addClass('has-error');
            }
            if( (parseInt(precio) < 1) || (parseInt(precio) > 9999999) || (precio.length ==0) ) {
                errores++;
                $("#modalDeseoPersonalizadoEditar input#price.form-control").parent().addClass('has-error');
                
            }
            if(isNaN(id)){
                errores++;
            }

            if(errores > 0){
                

            }else{

                $.ajax({
                    url: '/usuario/mi-deseo-edit-usuario',                         
                    data : {                                
                        '_token'        : token,
                        'id'            : id,
                        'idUsuario'     : idUsuario,
                        'nombre'        : nombre,
                        'precio'        : precio,  
                        'randomnumber'  : randomnumber
                    },
                    type: 'POST',
                    dataType: 'json',                                                
                    beforeSend: function(xhr){
                        xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                        $('#modalDeseoPersonalizadoEditar .modal-footer, #modalDeseoPersonalizadoEditar .modal-header button.close').fadeOut();
                    },
                    success: function(response){
                        if(response.success){
                            $('tr#tr-'+id+' td h6.deseoNombre a').html('<i class="fa fa-edit" aria-hidden="true"></i> '+nombre);
                            $('tr#tr-'+id+' td h6.deseoNombre a').attr('data-nombre', nombre);
                            $('tr#tr-'+id+' td h6.deseoNombre a').attr('data-precio', precio);
                            $('input#deseo-price-'+id+'.form-control.input-md.deseoPriceInput').val(precio);
                            $('#modalDeseoPersonalizadoEditar').modal('hide');
                        }else{
                            $('#modalDeseoPersonalizadoEditar .modal-footer, #modalDeseoPersonalizadoEditar .modal-header button.close').fadeIn();
                        }                                      
                    },
                    error: function(response){
                        $('#modalDeseoPersonalizadoEditar').modal('hide');
                        alertify.error('Ha ocurrido un error, inténtalo nuevamente');
                    }
                });//ajax

                
                
            }

            
        });

    }///FIN MI LISTA

    ////pago
    
    var confirmaBtn=0;
    $('.confirmarPagoBtnA').attr('disabled', false);
    $('.confirmarPagoBtnA').click(function(e){
        e.preventDefault();
        
        if(confirmaBtn==0){
            confirmaBtn++;
            $(this).attr('disabled', true);
            $('.confirmarPagoBtnA').hide();
            $('.confirmarPagoBtn').fadeIn();
        }
        
    });

    /////DEVOLVER PAGO
    if($('.devolverPagoContainer').length){
        var confirmaBtn=0;
        $('.confirmarPagoBtnA').click(function(e){
            e.preventDefault();
            
            if(confirmaBtn==0){
                confirmaBtn++;
                $(this).attr('disabled', true);
                $('.confirmarPagoBtnA').hide();
                $('.confirmarPagoBtn').fadeIn();
            }
            
        });
    }


    ///// BTN CONFIRMAR ACTIVAR/INACTIVAR LISTA DE DESEOS DE UN USUARIO 
    if($('.miListaContainer').length){
        var confirmaBtn=0;
        $('#actualizaLista').attr('disabled', false);
        $('#actualizaLista').click(function(e){
            e.preventDefault();
            
            if(confirmaBtn==0){
                confirmaBtn++;
                $(this).attr('disabled', true);
                $('#actualizaLista').hide();
                $('#actualizaListaConfirm').fadeIn();
            }
            
        });
    }


    ///// MODAL VER EXPERIENCIA 
    $(".btnVerExperiencia").click(function(e){
        e.preventDefault();
        var id      = $(this).attr("id");
        id          = id.split("-")[1];
        var estrellas = $('#expEstrellas-'+id).val();
        var estrellasHtml = '';

        for( i=0; i < estrellas; i++ ){
            estrellasHtml = estrellasHtml + '<i aria-hidden="true" class="fa fa-star-o"></i>';
        }
        $('#experienciaId').val(id);
        $('#expNombre').html( $('#expNombre-'+id).val());
        $('#expEstrellas').html(estrellasHtml);
        $('#expDescription').html( $('#expDescription-'+id).val());

    });

    $('#modalExperiencias').on('hidden.bs.modal', function (e) {
        $('#expNombre').html("");
        $('#expEstrellas').html("");
        $('#expDescription').html("");
        $('#experienciaId').val('');
    });

    


    $('.fechaFormat').mask("00/00/0000", {clearIfNotMatch: true, placeholder: "DD/MM/AAAA"});
    $('.movilFormat').mask('0 0000 0000');
    $('.horaFormat').mask('00:00', {clearIfNotMatch: true, placeholder: "HH:MM"});

    if($('.skillsFormCreate').length){
        if($('.alert.alert-danger').length){
        }else{
            $("select[name='category']").prop('selectedIndex',0);
        }
    }
    function skillImage(){
        var valor=$("select[name='category']").val();
        if(valor==1){ // Web development
            $("#skillFormGroup").fadeIn();
            $("#skillOtherFormGroup").hide();
        }else if(valor==2){
            $("#skillFormGroup").hide();
            $("#skillOtherFormGroup").fadeIn();
        }else{
            $("#skillFormGroup").hide();
            $("#skillOtherFormGroup").hide();
        }
    }
    function getNameImageUploaded(){
        var laImg = $('.croppedImg').attr('src');
        alertify.log('laImg: '+laImg);
    }
    
    ///SKILLS images

    if($('.skillsForm').length || $('.skillsFormEdit').length){
        $("select[name='category']").on('change', function() {
            skillImage();
        });
        var eyeCandy = $('#yourId');
        var croppedOptions = {
            modal:true,
            uploadUrl: '/backend/skills/image',
            cropUrl: '/backend/skills/imagecrop',
            outputUrlId:'myPhoto',
            loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onAfterImgUpload:   function(){ getNameImageUploaded(); },
            onError:        function(errormsg){ alertify.error('onError:'+errormsg)},
            uploadData:{
                "_token": $("input[name='_token']").val(),
            },
            cropData:{
                'width' : eyeCandy.width(),
                'height': eyeCandy.height(),
                "_token": $("input[name='_token']").val(),
            }
        };
        var cropperBox = new Croppic('yourId', croppedOptions);

        
        $("#resetUpload").click(function(){
            cropperBox.reset(); 
        });
        
    }

    $("#showImageSkillBtn").click(function(){
        $('#showImageSkill').hide();
        $('#showImageSkillNew').fadeIn();
    });


    ////PROJECT IMAGES
    if($('.projectsForm').length || $('.projectsFormEdit').length){
        var eyeCandy = $('#yourId');
        var croppedOptions = {
            modal:true,
            uploadUrl: '/backend/projects/image',
            cropUrl: '/backend/projects/imagecrop',
            outputUrlId:'myPhoto',
            loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onAfterImgUpload:   function(){ getNameImageUploaded(); },
            onError:        function(errormsg){ alertify.error('onError:'+errormsg)},
            uploadData:{
                "_token": $("input[name='_token']").val(),
            },
            cropData:{
                'width' : eyeCandy.width(),
                'height': eyeCandy.height(),
                "_token": $("input[name='_token']").val(),
            }
        };
        var cropperBox = new Croppic('yourId', croppedOptions);

        
        $("#resetUpload").click(function(){
            cropperBox.reset(); 
        });
        
    }
    
});



function init_contadorTa(idtextarea, idcontador, max){
        //console.log("init contador");
        updateContadorTa(idtextarea, idcontador, max);
        $("#"+idtextarea).keyup(function(){
            updateContadorTa(idtextarea, idcontador, max);
        });  
        $("#"+idtextarea).change(function(){
            updateContadorTa(idtextarea, idcontador, max);
        });
        $("#"+idtextarea).focus(function(){
            updateContadorTa(idtextarea, idcontador, max);
        });
    }

    function updateContadorTa(idtextarea, idcontador,max) {
        var contador = $("#"+idcontador);
        var ta = $("#"+idtextarea);
        contador.html("0/"+max);
        var largo = ta.val().length;
        var eachLine = ta.val().split('\n');
        var largo = largo + eachLine.length;
        contador.html(largo+"/"+max);
        if(parseInt(largo)>max) {
            ta.val(ta.val().substring(0,max-1));
            contador.html(max+"/"+max); 
        }
    }
