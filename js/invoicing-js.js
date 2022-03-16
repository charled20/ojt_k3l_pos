
                
        $('button').click(function() {
        var fetched_id =$(this).data('id');

        $.ajax({
                type: "POST",
                url: "inv-sub/invoice-subpage.php",
                data: {fetched_id :fetched_id},
                success: function (data) {
                    $('#modal_body_title').html(data); 
                    $('#modal_body_content').html(data);                    
                    $('#exampleModal').modal('show');  
                    }        
                });

        });
