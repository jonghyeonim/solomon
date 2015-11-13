wbtn = document.getElementById('white_btn');
wbtn.addEventLister('click', function(){
	document.getElementById('target').className='white';
})

bbtn = document.getElementById('black_btn');
bbtn.addEventLister('click', function(){
	document.getElementById('target').className='black';
})

