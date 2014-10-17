jQuery(document).ready(function() {
    
  jQuery('.children').hide();



    jQuery(".page_item_has_children > a").click(function(){
      event.preventDefault();
     

      jQuery('.children').toggle();
      
        });
        
        
    
        
        
        

});