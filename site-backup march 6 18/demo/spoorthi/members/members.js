
$(document).ready(function () {
  //Menu Item
  
  $('#overviewMenu .menuItem').click(function () {
    if (!$(this).hasClass('active')) {
      //var checkboxes = ['#opt-mockup', '#opt-web', '#opt-prog', '#opt-comp', '#opt-data'];
      $('#overviewMenu  .active').removeClass('active');
      $(this).addClass('active');
      $('td').off('click').parent().removeClass('editRow');
      $('.storyCMS-outbox, .storyCMS-popout-list, #prevSectionBox, #sectionBox').empty();
      $('#storyCMS-popout').removeClass('storyCMS-active');
      $('#table-options-results').removeClass('table-options-active');
      
      if ($(this).hasClass('editMmbr')) {
        $(document).scrollTop(5);
      	     
      	$('#filterContainer').css('left', '-100%');
      	$("#filterToggle, #addCSV, #downloadCSV").addClass('hiddenCircle');
        $('#overviewWindows').css('left', '-100%');
        $('#storyForm').attr('action', 'add.php');
        $('#addMmbr').text('Add Member');
        
      } else {
      	$('#filterContainer').css('left', '0');
      	$('#filterToggle, #addCSV, #downloadCSV').removeClass('hiddenCircle');
        $('#overviewWindows').css('left', '0');
        
        if ($(this).hasClass('editMmbr')) {
          alert('Please select the member you wish to edit');
          $('td').each(function () {
          	$(this).parent().addClass('editRow');
          	$(this).on('click', function() {
  			$('td').off('click').parent().removeClass('editRow');
  			$('#filterContainer').css('left', '-100%');
      			$("#filterToggle, #addCSV, #downloadCSV").addClass('hiddenCircle');
      			$('#storyForm').attr('action', 'updateMmbr.php');
      			$('#editMmbr').text('Update Member');
        		$('#overviewWindows').css('left', '-100%');
        		$(document).scrollTop(5);
        		
        		    		        		
		});
          });
        
      
   
  
	}}}
  });
});