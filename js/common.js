

$(document).ready(function(){

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });


    ymaps.ready(init);
            var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [59.931751, 30.353319],
                zoom: 17
            }); 
            
            myPlacemark = new ymaps.Placemark([59.931751, 30.353319], {
                hintContent: 'IphoneTrade!',
                balloonContent: 'IphoneTrade!'
            },
            {
            }
        );
            myMap.controls.add('mapTools');
            myMap.geoObjects.add(myPlacemark);
        }




     $('.dfboxgigs a').on('click', function(e){
          e.preventDefault();
          var price = $(this).attr('price');
          $(this).parents('.dfboxgigs')
          .find('.dfactivelink')
          .removeClass('dfactivelink');

          $(this).addClass('dfactivelink');
          $(this).parents('.dftelephoneblock')
                  .find('.dfboxprice')
                  .find('.dfbigprice')
                  .text(price);

         $(this).parents('.dftelephoneblock')
              .find('.dfboxprice2')
              .find('.dfbigprice2')
              .text(price);      
        });

        $('.dfboxcolors a').on('click',function(evt) { 
          evt.preventDefault();     
          var getcolor = $(this).attr('color'); 
          var imgPath = $(this).attr('href');         
          var oldImage = $('.dforiginimg img');              
          var newImage = $('<img src="' + imgPath +'" color="' + getcolor + '">' );
          $(this).parents('.dftelephoneblock').find('.dforiginimg').html(newImage);                  
        });
 });


