$(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var blood_group = $('#blood_group').val(); 
           var phone = $('#phone').val();  
           var age = $('#age').val(); 
           var place = $('#place').val(); 
           /*if(name == '' || blood_group == '' || phone == '' || age == '' || place == '')  
            {  
                $('#error_message').html("");  
           }  */
           //else  
           //{  
                $('#error_message').html('');  
                $.ajax({  
                     url:"register.html",  
                     method:"POST",  
                     data:{name:name, blood_group:blood_group, phone:phone, age:age, place:place},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html("Data Uploaded");  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 9000);  
                     }  
                });  
           //}  
      });  
 });  
 