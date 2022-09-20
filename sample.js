
const user=document.querySelector('#fname');
user.addEventListener('keyup',function (){
    const u_ok=document.querySelector('.u_ok');
    const u_remove=document.querySelector('.u_remove');
    if(user.value.length === 0 || user.value.length<=8){
        user.style.border='1px solid green';
        u_ok.style.display='block';
        u_remove.style.display='none';
        return false;
    }
    else{
        user.style.border='1px solid red';
        u_ok.style.display='none';
        u_remove.style.display='block';
    }
})

const email=document.querySelector('#email');
email.addEventListener('keyup',function (){
    const  e_ok=document.querySelector('.e_ok');
    const e_remove=document.querySelector('.e_remove');
    if(email.value.length===0 || email.value.length<10){
        email.style.border='1px solid green';
        e_ok.style.display='block';
        e_remove.style.display='none';
        return false;
    }
    else{
        email.style.border='1px solid red';
        e_ok.style.display='none';
        e_remove.style.display='block';
    }
    checkEmail();
})


const psw=document.querySelector('#psw');
psw.addEventListener('keyup',function (){
    const  p_ok=document.querySelector('.p_ok');
    const p_remove=document.querySelector('.p_remove');
    if(psw.value.length===0 || psw.value.length<12){
        psw.style.border='1px solid green';
        p_ok.style.display='block';
        p_remove.style.display='none';
        return false;
    }
    else{
        psw.style.border='1px solid red';
        p_ok.style.display='none';
        p_remove.style.display='block';
    }
})

const cpsw=document.querySelector('#cpsw');
cpsw.addEventListener('keyup',function (){
    const  cp_ok=document.querySelector('.cp_ok');
    const cp_remove=document.querySelector('.cp_remove');
    if(cpsw.value.length===0 || cpsw.value.length<12){
        cpsw.style.border='1px solid green';
        cp_ok.style.display='block';
        cp_remove.style.display='none';
        return false;
    }
    else{
        cpsw.style.border='1px solid red';
        cp_ok.style.display='none';
        cp_remove.style.display='block';
    }
})


const pno=document.querySelector('#pno');
pno.addEventListener('keyup',function (){
    const  pno_ok=document.querySelector('.pno_ok');
    const pno_remove=document.querySelector('.pno_remove');
    if(pno.value.length===0 || pno.value.length<=10){
        pno.style.border='1px solid green';
        pno_ok.style.display='block';
        pno_remove.style.display='none';
        return false;
    }
    else{
        pno.style.border='1px solid red';
        pno_ok.style.display='none';
        pno_remove.style.display='block';
    }
})


function myFunction() {
    if(document.getElementById('fname').value  && document.getElementById('lname').value && document.getElementById('email').value && document.getElementById('pno').value && document.getElementById('psw').value && document.getElementById('cpsw').value ) {
        alert("Registration successfully ");
    }
}
