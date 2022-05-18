
$(".addImageButton").click(function()  {
    $(".inputFile").click();
});



$('.addQuantity').on('click',function(e){
    e.preventDefault();
    let value = $(this).siblings("input").val();
    let intValue = parseInt(value);
    $(this).siblings("input").val(intValue + 1); 
});

$('.minimusQuantity').on('click',function(e){
    e.preventDefault();
    let value = $(this).siblings("input").val();
    let intValue = parseInt(value);
    if(intValue - 1 <= 0){
        return;
    }
    $(this).siblings("input").val(intValue - 1); 
});

