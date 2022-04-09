function showview(view){
    $.ajax({
        data: {},
        url: "data/view/"+view+"/"+view+".php",
        type: "POST",
        dataType: 'html'
    }).done(function(data){
        $("#pageView").html(data);
    })
    
}


