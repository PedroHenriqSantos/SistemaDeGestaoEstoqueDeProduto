
$(".addImageButton").click(function()  {
    $(".inputFile").click();
});


$(".addImageButton").click(function()  {
    $(".inputFile").click();
});
$(".star").click(function()  {
    const checkBoxPrev = $(this).prevAll('input[name="estrela"]');
    const checkBoxNext = $(this).nextAll('input[name="estrela"]');
    $(this).attr("checked", true);
    $(this).prev().css("color", "#CC7200");
    checkBoxPrev.each(function(index){
        $(this).attr("checked", true);
        $(this).prev().css("color", "#CC7200");
    });
    checkBoxNext.each(function(index){
        $(this).removeAttr("checked");
        $(this).prev().css("color", "#FFAB40");

    });
    const countStarAvaliation = $('input[checked="checked"]').length;
    console.log($("#rate_avaliation"));
    console.log(countStarAvaliation);
    $("#rate_avaliation").attr('value',countStarAvaliation);
});
$('.addQuantity').on('click',function(e){
    e.preventDefault();
    let value = $(this).siblings(".quantityCart").val();
    let intValue = parseInt(value);
    $(this).siblings(".quantityCart").val(intValue + 1); 
});

$('.minimusQuantity').on('click',function(e){
    e.preventDefault();
    let value = $(this).siblings(".quantityCart").val();
    let intValue = parseInt(value);
    if(intValue - 1 <= 0){
        return;
    }
    $(this).siblings(".quantityCart").val(intValue - 1); 
});

