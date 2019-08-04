$(document).ready(function (e) {
    //e.preventDefault();
         var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="ضع عنوانك  " class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn waves-effect waves-light red btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){
            console.log($('#add_name').serialize()) ;           
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      }); 


      setInterval(function(){
        $('#load-address').load('fetchdata.php').fadeIn();
      },1000)

})

