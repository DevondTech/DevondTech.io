$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../conn/data2/companyProfile/faqCallUser.php?selectData',
    contentType: 'application/json; charset=utf-8',
      dataType: 'json',
    success: function(selectData) { 
      const DataFAQ = jQuery.parseJSON(selectData);
      var faqData = DataFAQ[0].faq; 
      $('#contentFAQ').text(faqData);
    }
  });
});