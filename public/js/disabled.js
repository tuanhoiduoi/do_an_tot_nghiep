var ves = $ves
// <?php
//     echo json_encode($ves);
//     ?>;
ves.forEach(function(ve) {
    var ghe = document.getElementById('chair_id'+ve.ghe.id);
    if(ghe){
        ghe.disabled = true;
    }
});

