
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
                url: 'http://localhost/sadizameen/Location/update',
                type: 'POST',
                dataType: 'json',
                data: $("#editForm").serialize(), 
                success: function(response, textStatus, xhr) {
                    if(response.status) 
					{
                        $("#editForm")[0].reset();
                    }
					alert(response.message);
					$('#editModal').modal('hide');
					location.reload();
                }
            });

        }
		else
		{
			alert(msg);
		}

		return false;

    });

