$(document).ready(function(){	
	$.ajax({
	    type : 'POST',
	    url  : '../../../conn/data2/cartProcess/cartProcess.php/?autoReviewFromHomeAdmin',
	    success :  function(response){      
	    }
	});
});