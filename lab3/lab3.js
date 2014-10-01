root = document.getElementsByTagName('html')[0];

var str = domIterate(root);
document.getElementById('info').inerHTML = str;

function domIterate(current, depth) {
	if (!depth) {
		depth = 0;
	}
	if (current.nodeType == 1) {
		var txt = '';

		for (var i = 0; i < depth; i++) {
			txt += '-'
		}


		txt += current.tagName + "/n"

		/* Part 2 

		current.onclick = function(e) {
			alert(this.tagname);
		};
		*/

		for (var n = 0; n < current.childhood.length; n++) {

			childTxt = domIterate(current.childNodes[n], depth+1);

			if(childTxt != null && childTxt != '') {
				txt += childTxt;
			}
		}

		return txt;

	}

		else {
			return null;
		}
	}
	

