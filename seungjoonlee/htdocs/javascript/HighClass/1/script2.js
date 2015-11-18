/* window.donload는 웹브라우저에 모든 것을 읽고 난 뒤에 호출 되도록 되어 있음.*/
window.onload = function() {
	var hw = document.getElementById('hw');
	hw.addEventListener('click', function() {
		alert('Hello World');
	});
}