
const user=document.querySelector('#user');
user.addEventListener('keyup',function (){
    const s_ok=document.querySelector('.s_ok');
    const s_remove=document.querySelector('.s_remove');
    if(user.value.length === 0 || user.value.length<=10){
        user.style.border='1px solid green';
        s_ok.style.display='block';
        s_remove.style.display='none';
        return false;
    }
    else{
        user.style.border='1px solid red';
        s_ok.style.display='none';
        s_remove.style.display='block';
    }
})

const pass=document.querySelector('#pass');
pass.addEventListener('keyup',function (){
    const  np_ok=document.querySelector('.np_ok');
    const np_remove=document.querySelector('.np_remove');
    if(pass.value.length===0 || pass.value.length<12){
        pass.style.border='1px solid green';
        np_ok.style.display='block';
        np_remove.style.display='none';
        return false;
    }
    else{
        pass.style.border='1px solid red';
        np_ok.style.display='none';
        np_remove.style.display='block';
    }
})

const cpass=document.querySelector('#cpass');
cpass.addEventListener('keyup',function (){
    const  cp_ok=document.querySelector('.cp_ok');
    const cp_remove=document.querySelector('.cp_remove');
    if(cpass.value.length===0 || cpass.value.length<12){
        cpass.style.border='1px solid green';
        cp_ok.style.display='block';
        cp_remove.style.display='none';
        return false;
    }
    else{
        cpass.style.border='1px solid red';
        cp_ok.style.display='none';
        cp_remove.style.display='block';
    }
})

function myFunction() {
    if(document.getElementById('user').value  && document.getElementById('pass').value && document.getElementById('cpass').value ) {
        alert("reset successfully ");
    }
}
