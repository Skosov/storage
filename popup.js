let closeButtons = document.querySelectorAll(".close");
let popup = document.querySelector(".popup");
let form = document.querySelector('form');
let check_in_btn = document.querySelector('#check-in-btn');
let login_btn = document.querySelector("#login-btn");
let check_in = document.querySelector("#check-in");
let login = document.querySelector('#log-in');


check_in_btn.onclick = function()
{
	ShowPopup();
	ShowCheckIn();
}



login_btn.onclick = function()
{
	ShowPopup();
	ShowLogIn();
}

for (let closeButton of closeButtons)
{  
	closeButton.onclick = function()
	{
		RemovePopup();
	}
}

function ShowPopup()
{
	popup.style.display = "block";
}


function ShowCheckIn()
{
	check_in.style.display = "block";
}


function ShowLogIn()
{
	login.style.display = "block";
}

function RemovePopup()
{
	popup.style.display = "none";
	check_in.style.display = "none";
	login.style.display = "none";
}

