/*
	
@package gsc

*/
	

jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('#load-more-stories').click(function(e){
     e.preventDefault();
    var current = $('#load-more-stories').data('current');
   
    var button = $(this), 
        data = {  
        'action': 'loadmore',
        'page' : $(this).data('current'),
        'nonce' : ajax_var.check_nonce
      }; 

      $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_var.url,
        data: data,
        success: function(data){
            var $data = $(data);
            if($data.length){
                $("#stories-container").append($data);
                button.attr("disabled",false);
                $('#load-more-stories').data('current' , current++);
                 
            } else{
                button.attr("disabled",true); 
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log('error')
        }

    });
    return false;

  });

  $('#load-more-posts').click(function(e){
    e.preventDefault();
    var current = $('#load-more-posts').data('current');
  
    var button = $(this), 
       data = {  
       'action': 'loadmoreposts',
       'page' : $(this).data('current'),
       'nonce' : ajax_var.check_nonce
     }; 

     $.ajax({
       type: "POST",
       dataType: "html",
       url: ajax_var.url,
       data: data,
       success: function(data){
           var $data = $(data);
           if($data.length){
               $("#blog-container").append($data);
               button.attr("disabled",false);
               $('#load-more-posts').data('current' , current++);
                
           } else{
               button.attr("disabled",true); 
           }
       },
       error : function(jqXHR, textStatus, errorThrown) {
           console.log('error')
       }

   });
   return false;

 });

 $('#load-more-faqs').click(function(e){
    e.preventDefault();
    var current = $('#load-more-faqs').data('current');
  
    var button = $(this), 
       data = {  
       'action': 'loadmorefaqs',
       'page' : $(this).data('current'),
       'nonce' : ajax_var.check_nonce
     }; 

     $.ajax({
       type: "POST",
       dataType: "html",
       url: ajax_var.url,
       data: data,
       success: function(data){
           var $data = $(data);
           if($data.length){
               $("#faq-container").append($data);
               button.attr("disabled",false);
               $('#load-more-faqs').data('current' , current++);
                
           } else{
               button.attr("disabled",true); 
           }
       },
       error : function(jqXHR, textStatus, errorThrown) {
           console.log('error')
       }

   });
   return false;

 });
});