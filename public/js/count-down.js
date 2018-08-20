/**
 * Created by Dell on 28/08/2017.
 */

function countdown() {
	"use strict";
	var now = new Date();
	var enventDate = new Date(2019, 3, 	25);
	var currentTime = now.getTime();
	var eventTime = enventDate.getTime();
	var remTime = eventTime - currentTime;
	console.log()
	// var s = Math.floor(remTime / 1000);
	// var m = Math.floor(s / 60);
	// var h = Math.floor(m / 60);
	// var d = Math.floor(h / 24);
	var d = Math.floor(remTime/(24*60*60*1000));
    var hourDir = Math.floor(remTime/(60*60*1000));
    let lft1 =  (remTime/(24*60*60*1000)) - d;
    var h = Math.floor((lft1)*24);
    var m = Math.floor(((lft1*24)-h)*60);
    var s = Math.floor((((lft1*24)-h)*60-m)*60)>=10 ? Math.floor((((lft1*24)-h)*60-m)*60) : "0" + Math.floor((((lft1*24)-h)*60-m)*60);
	h %= 24;
	m %= 60;
	s %= 60;
	h = (h < 10) ? "0" + h : h;
	m = (m < 10) ? "0" + m : m;
	s = (s < 10) ? "0" + s : s;
	if (d <= 0) {
		if (s <= 0 || m <= 0 || h <= 0 || d<0) {
			document.querySelector('.show-text').innerHTML = '<h1>The Show Begins!!</h1>';
			document.querySelector('.all-count').style.display="none";
		} else {
			document.getElementById("days").textContent = d;
			document.getElementById("days").style.color='red';
			// document.getElementById("days").textContent=d;
			document.getElementById("days").innerText = d;

			document.getElementById("hour").textContent = h;
			document.getElementById("hour").style.color='red';
			document.getElementById("minutes").textContent = m;
			document.getElementById("minutes").style.color='red';
			document.getElementById("second").textContent = s;
			document.getElementById("second").style.color='red';
		}
	}else{
		document.getElementById("days").textContent = d;
			// document.getElementById("days").textContent=d;
			document.getElementById("days").innerText = d;

			document.getElementById("hour").textContent = h;
			document.getElementById("minutes").textContent = m;
			document.getElementById("second").textContent = s;
	}
	setTimeout(countdown, 1000);
}
countdown();