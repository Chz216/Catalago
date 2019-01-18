var smImg = document.getElementById('img-small');
var photo = smImg.getElementsByTagName('img');

for (var i= 0; i <photo.length; i++) {
	var imagen = photo[i];
	imagen.onclick = function(){
		var bgImg = document.getElementById('img-full').
		getElementsByTagName('img')[0];
		var source = this.src;
		bgImg.src = source;
	}
}
