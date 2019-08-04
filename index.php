<!DOCTYPE html>
<html lang="ar" class="no-js" dir="rtl">

<head>
	<title>taberk</title>
	<meta charset="utf-8">
	<meta name="taberk" content="اكاديمية تبارك التعلمية للتعليم الالكتروني">
	<!-- app icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">اضف عنوانك</h2>  
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="ضع عنوانك  " class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">اضف المزيد </button></td>  
                                    </tr>
                                    <tr>  
                                         <td><input type="text" name="phone" placeholder="رقم الهاتف   " class="form-control name_list" /></td>  
                                         <td>
                                    </tr>  
                                    <tr>  
                                         <td><input type="text" name="note" placeholder="الملحظة   " class="form-control name_list" /></td>  
                                         <td>
                                    </tr>                                                                            
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="ارسال" />  
                          </div>  
                     </form>  
                </div>  
           </div>

           <div class="container">
           	<div id="load-address"></div>
           </div>


		<script src="js/jquery-3.4.0.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="js/mainjs.js"></script>
</body>

</html>