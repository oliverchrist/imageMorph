$(document).ready(function(){
    $('.box').click(function(){
        for(index=0; index<indexCount; index++){
            $(this).find('.idx' + index).each(function(){
                var pos = $(this).position();
                var curX = pos.left + 100;
                //console.log(curX); 
                //var curY = $(this).css('top') + 100;
                $(this).css('left',curX);
                //$(this).css('top',curY);
            });
        }
        alert('fertig');
    });
});
