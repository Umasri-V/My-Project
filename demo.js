
const user=document.querySelector('#user');
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


const pass=document.querySelector('#pass');
pass.addEventListener('keyup',function (){
    const  p_ok=document.querySelector('.p_ok');
    const p_remove=document.querySelector('.p_remove');
    if(pass.value.length===0 || pass.value.length<8){
        pass.style.border='1px solid green';
        p_ok.style.display='block';
        p_remove.style.display='none';
        return false;
    }
    else{
        pass.style.border='1px solid red';
        p_ok.style.display='none';
        p_remove.style.display='block';
    }
})

function myFunction() {
    if(document.getElementById('user').value  && document.getElementById('pass').value ) {
        alert("login successfully ");
    }
}
