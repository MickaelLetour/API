$(function(){
    console.log("i enter");
    $.ajax({
        type: "GET",
        url: "http://api.test/Admin/country.php",
        dataType : "json",
        success : function(response){
            console.log("ok");
        }
    })
    .done(function(json){
        console.log(json);
        for(let option of json){
        $('#country').append(`
        <option>${option.name}</option>
        `)  
        }    
    })
});
