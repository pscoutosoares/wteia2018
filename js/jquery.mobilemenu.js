function mobilemenu($nav, $opt){

    var local =  window.location.pathname;
    var pathArray = window.location.pathname.split( '/' );
    var size  = pathArray.length;
    var target = pathArray[size-1];

    $opt.each(function(){
        if($(this).val() == target){
            $(this).attr('selected','selected');
            return false;
        }
    });
}