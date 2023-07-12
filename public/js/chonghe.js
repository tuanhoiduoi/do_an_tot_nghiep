
function chonghe(e){
    var arr=[];
    var sum=0;
    $('#chair input:checked').each(function(index,input){
        var ghe=$(input);
        arr.push(ghe.data('ten'));
        sum+= +(ghe.data('gia'));
    });
    $('#lst-ghe').text(arr.join(', '));
    $('#thanh-tien').text(sum.toLocaleString('vi',{style:'currency',currency:'VND'}));

    //  lay gia so tien truyen
    var inputElement = document.getElementsByName("total")[0];
    inputElement.value = sum;

}
$(function(){
    $('#chair').on('input','input',chonghe);
});

