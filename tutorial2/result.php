<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered data-table">  
    <thead>  
      <th>Name</th>  
      <th>Email</th>  
      <th width="200px">Action</th>  
    </thead>  
    <tbody>  
    </tbody>  
  </table>  
<script type="text/javascript">  
     
     $("form").submit(function(e){  
         e.preventDefault();  
         var name = $("input[name='name']").val();  
         var email = $("input[name='email']").val();  
        
         $(".data-table tbody").append("<tr data-name='"+name+"' data-email='"+email+"'><td>"+name+"</td><td>"+email+"</td><td><button class='btn btn-info btn-xs btn-edit'>Edit</button><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");  
       
         $("input[name='name']").val('');  
         $("input[name='email']").val('');  
     });  
      
     $("body").on("click", ".btn-delete", function(){  
         $(this).parents("tr").remove();  
     });  
       
     $("body").on("click", ".btn-edit", function(){  
         var name = $(this).parents("tr").attr('data-name');  
         var email = $(this).parents("tr").attr('data-email');  
       
         $(this).parents("tr").find("td:eq(0)").html('<input name="edit_name" value="'+name+'">');  
         $(this).parents("tr").find("td:eq(1)").html('<input name="edit_email" value="'+email+'">');  
       
         $(this).parents("tr").find("td:eq(2)").prepend("<button class='btn btn-info btn-xs btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>")  
         $(this).hide();  
     });  
      
     $("body").on("click", ".btn-cancel", function(){  
         var name = $(this).parents("tr").attr('data-name');  
         var email = $(this).parents("tr").attr('data-email');  
       
         $(this).parents("tr").find("td:eq(0)").text(name);  
         $(this).parents("tr").find("td:eq(1)").text(email);  
      
         $(this).parents("tr").find(".btn-edit").show();  
         $(this).parents("tr").find(".btn-update").remove();  
         $(this).parents("tr").find(".btn-cancel").remove();  
     });  
      
     $("body").on("click", ".btn-update", function(){  
         var name = $(this).parents("tr").find("input[name='edit_name']").val();  
         var email = $(this).parents("tr").find("input[name='edit_email']").val();  
       
         $(this).parents("tr").find("td:eq(0)").text(name);  
         $(this).parents("tr").find("td:eq(1)").text(email);  
        
         $(this).parents("tr").attr('data-name', name);  
         $(this).parents("tr").attr('data-email', email);  
       
         $(this).parents("tr").find(".btn-edit").show();  
         $(this).parents("tr").find(".btn-cancel").remove();  
         $(this).parents("tr").find(".btn-update").remove();  
     });  
       
 </script>
</body>
</html>
</body>
</html>