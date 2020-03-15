
$(document).delegate(".openEditForm","click", function(e) {
	
    e.preventDefault();

    var id = $(this).data('id');
    var name = $(this).data('name');

    if(id)
    {
		$('#editForm').find('input[name="name"]').val(name);
		$('#editForm').find('input[name="hidden_key"]').val(id);

		$('#editModal').modal('show');
    }
	else
	{
		alert("Please Try Again ");
		
	}
	return false;
});

$(document).delegate(".openDelePopup","click", function(e) {
	
    e.preventDefault();

    var id = $(this).data('id');

    if(id)
    {
		$('#delForm').find('input[name="hidden_key"]').val(id);

		$('#DeleteMOdal').modal('show');
    }
	else
	{
		alert("Please Try Again ");
		
	}
	return false;
});

    jQuery('#editForm').submit(function(event){
        event.preventDefault();
        valid =  true;
		
		if(!$(this).find('input[name="name"]').val())
		{
			valid = false;
			var msg = "Please Fill Required Fields";
		}
		
		if(!$(this).find('input[name="hidden_key"]').val() )
		{
			valid = false;
			var msg = "Error! Try Again";
		}
		
		
		
        if(valid)
        {
           $.ajax({
                url: 'http://localhost/sadizameen/City/update',
                type: 'POST',
                dataType: 'json',
                data: $("#editForm").serialize(), 
                success: function(response, textStatus, xhr) {
					alert(response.message);
                    if(response.status) 
					{
                        $("#editForm")[0].reset();
						location.reload();
						$('#editModal').modal('hide');
					}
               }
            });

        }
		else
		{
			alert(msg);
		}

		return false;

    });


    jQuery('#delForm').submit(function(event){
        event.preventDefault();
        valid =  true;
		
		if(!$(this).find('input[name="hidden_key"]').val() )
		{
			valid = false;
			var msg = "Error! Try Again";
		}
		
		
		
        if(valid)
        {
           $.ajax({
                url: 'http://localhost/sadizameen/City/destroy',
                type: 'POST',
                dataType: 'json',
                data: $("#delForm").serialize(), 
                success: function(response, textStatus, xhr) {
					alert(response.message);
                    if(response.status) 
					{
                        $("#delForm")[0].reset();
						location.reload();
						$('#DeleteMOdal').modal('hide');
					}
               }
            });

        }
		else
		{
			alert(msg);
		}

		return false;

    });

