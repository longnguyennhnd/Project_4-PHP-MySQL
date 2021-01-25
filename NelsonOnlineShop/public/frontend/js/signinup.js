const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

// function KTMK(mk) {
// 	rg = /[^~*&()^!@#]{1,20}/;
// 	tim = mk.match(rg);
// 	if (tim == mk)
// 		return true;
// 	else
// 		return false;

// }
// function KTEmail(Email){
// 	var dong = /[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z0-9]+/;
// 	var KT = Email.match(dong);
// 	if(KT==Email)
// 		return true;
// 	else
// 		return false;
// }
// var email = document.getElementById("textEmail");
// var mk = document.getElementById("textMK");
// tb= document.getElementsByClassName("thongbao")[0],
// document.getElementById("sub").addEventListener('click',function(){
// 	if(KTEmail(email.value)==false || email.value=="")
// 	{
// 		alert("Vui lòng nhập đúng định dạng Email");
// 		email.style.border = '2px solid red';
// 		tb.style.opacity = '1';
	
// 	}
// 	if(KTMK(mk.value)==false || email.value=="")
// 	{
// 		alert("Vui lòng nhập đúng định dạng mật khẩu");
// 		mk.style.border = '2px solid red';
// 	}
	
// 	if(KTEmail(email.value)==true && KTMK(mk.value)==true)
// 	{
// 		alert("Đăng nhập thành công!");
// 	}
// })