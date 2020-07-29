$(document).ready(function () {
    $("#español").click(function (e) {
        e.preventDefault();
        location.href ="index.php?m=index";
        
    });    
    $("#nahuatl").click(function (e) {
        e.preventDefault();
        location.href ="index.php?m=index_nahuatl";
    }); 
});

