$(document).ready(function(){
    var base_url = $("meta[name=url]").attr("content");
    var token = $("meta[name=csrf-token]").attr("content");
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": token
        },
    });
})
