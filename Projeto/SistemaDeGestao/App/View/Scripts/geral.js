
$(".addImageButton").click(function()  {
    $(".inputFile").click();
});

$(".addQuantity").click((e) => {
    e.preventDefault();
    let value = $(this).siblings("input").val();
    console.log($(this).html());
    //let intValue = parseInt();
    //$(this).siblings(".quantityCart").val(intValue + 1);
});
$(".minimusQuantity").click( (e) => {
    e.preventDefault();
    let value = $(this).siblings(".quantityCart").val();
    
    let intValue = parseInt(value);
    if(intValue - 1 <= 0){
        return;
    }
    $(".quantityCart").val(value - 1);
});