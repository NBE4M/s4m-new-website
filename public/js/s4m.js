
$.ajaxSetup({ headers: { 'csrftoken' : 'QK1LbTS65W2hkRoXezyWAxyRVl1GTp4npliKYAKU' } });

   $(document).ready(function() {
    src = "{{ url('autoComplete') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
       
    });
});


  function imgError(image) {
    
    image.onerror = "";
    image.src = "https://storage.googleapis.com/news-photos/default-story.jpg";
    return true;
}
 


    $(function(){
        $("#btn-search").click(function(){
        $(".error").hide();
        var hasError = false;
        var searchVal = $("#search_text").val();
        if(searchVal == '') {
            $("#bgsbox").after('<span class="error">Please enter a search term.</span>');
            hasError = true;
        } 
        if(hasError == true) {return false;}
    });
});

    //newsTicker js home-->

            var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 4000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });

 //newsTicker js home-->
  
//newsTicker js story-->

            var nt_example2 = $('#nt-example2').newsTicker({
                row_height: 180,
                max_rows: 3,
                duration: 4000,
                prevButton: $('#nt-example2-prev'),
                nextButton: $('#nt-example2-next')
            });

  //newsTicker js story-->
  
//home page video section js-->
  
  $(".video-thumb").click(function() {
          $('.video-thumb > img').removeClass("active");
          $(this).children('img').addClass("active");
        });

        $('div.video-thumb').click(function() {
          $('.video-iframe iframe').attr('src', ($(this).children('iframe').attr('src').replace('iframe')));
        });

//home page video section js-->
  
  //story left fix js-->
 
    $('.leftSidebar, .content, .rightSidebar')
        .theiaStickySidebar({
            additionalMarginTop: 30
        });
   
///story left fix js-->
 