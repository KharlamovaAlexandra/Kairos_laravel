let pass = document.getElementById("upd_pass")
let inf = document.getElementById("upd_inf")
let a_inf = document.getElementById("a_upd_inf")
let a_pass = document.getElementById("a_upd_pass")

function updPass() {
    if(pass.classList.contains('deactive')){
        pass.classList.remove('deactive');
    }
    pass.classList.add('active');
    inf.classList.add('deactive');
    inf.classList.remove('active');
    if(a_pass.classList.contains('a_deact')){
        a_pass.classList.remove('a_deact')
    }
    a_pass.classList.add('a_act');
    a_inf.classList.add('a_deact');
    a_inf.classList.remove('a_act')



}
function updInf() {
    if(inf.classList.contains('deactive')){
        inf.classList.remove('deactive');
    }
    inf.classList.add('active');
    pass.classList.add('deactive');
    pass.classList.remove('active');
    if(a_inf.classList.contains('a_deact')){
        a_inf.classList.remove('a_deact')
    }
    a_inf.classList.add('a_act');
    a_pass.classList.add('a_deact');
    a_pass.classList.remove('act');
}


