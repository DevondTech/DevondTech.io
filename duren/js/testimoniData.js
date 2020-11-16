$(document).ready(function(){
  $.ajax({
      type: 'POST',
      url: '../conn/data2/testimoni/testimoniCall.php?selectData',
      contentType: 'application/json; charset=utf-8',
        dataType: 'json',
      success: function(selectData) { 
      const DataYoutube = jQuery.parseJSON(selectData);
      /*console.log(DataYoutube);*/
      var nama_lengkap = DataYoutube[0].nama_lengkap; 
      var link_youtube = DataYoutube[0].link_youtube; 
      var toDoItems = DataYoutube;
      var parsed = "";
        var nHTML = '';
        toDoItems.forEach(function(item, index, array) {
          nHTML += '<div class="paddingBottomCardMinTablet col-lg-4 col-md-6 col-sm-12" >'+'<a style="color: white">'+'<div class="cardAdvantagesColor">'+'<div class="content-text-advantages" >'+'<div class="col20-card-top">'+'<iframe class="wVideo" height="240" src="https://www.youtube.com/embed/'+item.link_youtube+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>'+'</iframe>'+'</div>'+'<div class="advantages-text-bold" style="font-size: 16px;font-family: Verdana, Arial, Helvetica, sans-serif;">Testimoni '+item.nama_lengkap+'</div>'+'</div>'+'</div>'+'</a>'+'</div>';
        });

        document.getElementById("printDataYoutube").innerHTML =  nHTML;
    }
  });
});