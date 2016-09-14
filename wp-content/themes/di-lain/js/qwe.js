$(document).ready(function(){

	
	$('.clickpup').click(function(e){		
		 /*подключаем стандартные действия ссылки - чтоб не было решетки*/
		
	});

	$('.clickpup').click(function(e){
		var id = $(this).data('id');
		e.preventDefault();
		$.ajax({
			url:'http://wordpress/wp-content/themes/di-lain/test.php',
			data:{id:id},
			type : "POST",
			success:function(data){
				$('#popup1').html(data);
			}
		})
		$('#mask , #popup1').show();
	});
	$('#mask').click(function (){
	 	$('#mask , #popup1').hide();
	});
});

