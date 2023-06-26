/**/

function taocheckbox(){
    var div=$('#chair');
    var dong=$('#form-them [name="dong"]').val();
    var cot=$('#form-them [name="cot"]').val();
    div.css('--rows',dong);
    div.css('--cols',cot);
    var str='';
    for (let i = 1; i <= dong; i++) {
        for (let j = 1; j <= cot; j++) {
            var name=`${String.fromCharCode(64+i)}${j}`;
            str+=`<input name="ghe[]" type="checkbox" class="btn-check" id="btn-${i}-${j}" value="${name}-${i}-${j}" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btn-${i}-${j}" style="--row:${i};--col:${j}">${name}</label>`

        }
    }
    div.html(str);
}
