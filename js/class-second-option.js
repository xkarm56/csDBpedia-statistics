$('#select-class').on('change', function(e) {
      let selector = $(this).val();
      $("#choose-stats > option").hide();
      $("#choose-stats > option").filter(function(){return $(this).data('pub') == selector}).show();
});
