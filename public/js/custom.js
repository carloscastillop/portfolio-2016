
(function(){
    $(window).scroll(function () {
          var top = $(document).scrollTop();
          $('.splash').css({
            'background-position': '0px -'+(top/3).toFixed(2)+'px'
          });
          if(top > 50)
            $('#home > .navbar').removeClass('navbar-transparent');
          else
            $('#home > .navbar').addClass('navbar-transparent');
      });

  $("a[href='#']").click(function(e) {
    e.preventDefault();
  });

  var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function(){
    var html = $(this).parent().html();
    html = cleanSource(html);
    $("#source-modal pre").text(html);
    $("#source-modal").modal();
  });

  $('.bs-component [data-toggle="popover"]').popover();
  $('.bs-component [data-toggle="tooltip"]').tooltip();

  $(".bs-component").hover(function(){
    $(this).append($button);
    $button.show();
  }, function(){
    $button.hide();
  });

  function cleanSource(html) {
    html = html.replace(/×/g, "&times;")
               .replace(/«/g, "&laquo;")
               .replace(/»/g, "&raquo;")
               .replace(/←/g, "&larr;")
               .replace(/→/g, "&rarr;");

    var lines = html.split(/\n/);

    lines.shift();
    lines.splice(-1, 1);

    var indentSize = lines[0].length - lines[0].trim().length,
        re = new RegExp(" {" + indentSize + "}");

    lines = lines.map(function(line){
      if (line.match(re)) {
        line = line.substring(indentSize);
      }

      return line;
    });

    lines = lines.join("\n");

    return lines;
  }

  $("#imagen1Profile").mouseenter(function(){
      $(this).fadeOut();
  });
                     
  $("#imagen2Profile").mouseleave(function(){
      $("#imagen1Profile").fadeIn();
  });

    $('.figure .wp-block-info-over h2 a').mouseenter(function(){
        $(this).parent().parent().parent().parent().addClass('noFiltro');
    }).mouseleave(function(){
        $(this).parent().parent().parent().parent().removeClass('noFiltro');
    });

    $('.btnEye').mouseenter(function(){
        $(this).parent().addClass('btnEyeOver');
    }).mouseleave(function(){
        $(this).parent().removeClass('btnEyeOver');
    });

    $("#smsInput").val("");
    $("#smsInput").keyup(function() {

        console.log($("#smsInput").val().length);
        if($("#smsInput").val().length > 0) {
            // Enable submit button
            $('#recaptchaContainer').fadeIn();
        } else {
            $('#recaptchaContainer').fadeOut();
        }
    });

    $('.eachPortfolio').mouseenter(function(){
        $(this).addClass('eachPortfolioHover');
    }).mouseleave(function(){
        $(this).removeClass('eachPortfolioHover');
    });

    $('.eachPortfolio').click(function(){
        id = $(this).attr("id");
        id = id.split('-')[1]
        console.log(id);
        $('#myModal').modal({
          backdrop: false
        });
        $('.single-item').slick();
    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        $('.single-item').slick('unslick');
    });

    $('[data-toggle="tooltip"]').tooltip()
    
    $('.btnClick').click(function(e){
        $(this).attr('disabled', true);
    });
    
    $('.navbar-toggle').click(function(){
        if($(".navbar-collapse.collapse.in").length){
          $('.modal-menu-mobile').attr('style','display:none');
        }else{
          $('.modal-menu-mobile').attr('style','display:block');
        }
    });

})();
$( document ).ready(function() {
    $("body").removeClass("loading");
    $(".fancybox").fancybox({
      openEffect  : 'none',
      closeEffect : 'none'
    });

    $(".btnStar").fadeIn();

});


