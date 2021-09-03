console.log($('.day'));
$('.day td').click(function(){
console.log(this);
    $('#overlay').removeClass('hidden');
})
$('#overlay').click(function(){
    $('#overlay').addClass('hidden');
})

$.ajax({
    url:"/rest",
    success:function(data){
        console.log(data);
        
    }
});