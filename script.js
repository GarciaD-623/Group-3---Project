

const signinBtn = document.getElementById('signinBtn')
const signupBtn = document.getElementById('signupBtn')
const signinForm = document.getElementById('signin')
const signupForm = document.getElementById('signup')

signinBtn.addEventListener('click',function(){
    signinForm.style.display = "block";
    signupForm.style.display = "none";
})
signupBtn.addEventListener('click',function(){
    signinForm.style.display = "none";
    signupForm.style.display = "block";
})