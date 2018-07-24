var ContactForm = function () {

    return {
        
        //Contact Form
        initContactForm: function () {
	        // Validation
	        $("#sky-form3").validate({
	            // Rules for form validation
	            rules:
	            {
	                nama_p:
	                {
	                    required: true
	                },
	                nama_cu:
	                {
	                    required: true
	                },
	                no_telp:
	                {
	                	required:true,
	                	number: true,
	                	rangelength: [10, 12]
	                },
	                email_cu:
	                {
	                    required: true,
	                    email: true
	                },
	                pesan_cu:
	                {
	                    required: true,
	                    minlength: 40
	                }
	            },
	                                
	            // Messages for form validation
	            messages:
	            {
	                nama_p:
	                {
	                    required: 'Silahkan isikan Nama Perusahaan Anda',
	                },
	                nama_cu:
	                {
	                    required: 'Silahkan isikan Nama Lengkap Anda',
	                },
	                no_telp:
	                {
	                	required: 'Silahkan isi nomer handphone Anda',
	                	number : 'Tolong masukan nomor yang valid'
	                },
	                email_cu:
	                {
	                    required: 'Silahkan isi email Anda',
	                    email: 'Tolong masukan email yang valid'
	                },
	                pesan_cu:
	                {
	                    required: 'Silahkan isikan Pesan Anda',
	                    minlength:'Masukan minimal 40 karakter'
	                },
	            },
	                                
	            // Ajax form submition                  
	            submitHandler: function(form)
	            {
	                $(form).ajaxSubmit(
	                {
	                    beforeSend: function()
	                    {
	                        $('#sky-form3 button[type="submit"]').attr('disabled', true);
	                    },
	                 	error: function()
	                 	{
	                 		alert('Opps ! Email Anda sudah terdaftar');
	                 		location.reload();
	                 	},
	                    success: function()
	                    {
	                        location.reload();
	                    }
	                });
	            },
	            
	            // Do not change code below
	            errorPlacement: function(error, element)
	            {
	                error.insertAfter(element.parent());
	            }
	        });
        }

    };
    
}();