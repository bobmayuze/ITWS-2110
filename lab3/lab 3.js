    root = document.getElementsByTagName('html')[0];

    var str = domIterate(root); 
    document.getElementById('info').innerHTML = str;

    function domIterate(current, depth) {
      if (!depth) {
        depth = 0;  
      }
    
      if (current.nodeType == 1) {
        var txt = '';

        for (var i = 0; i < depth; i++) {
          txt += '-';
        }

        txt += current.tagName + "\n";

        current.onclick = function(e) {
          alert(this.tagName);
        };


        for (var n = 0; n < current.childNodes.length; n++) {
          childTxt = domIterate(current.childNodes[n], depth+1);

          if (childTxt != null && childTxt != '') {
            txt += childTxt;
          }
        }
        return txt;
      }

      else {
        return null;
      }
    }
    function favoriteQuote() {
      var itm=document.getElementById("mylist").lastChild;
      var cln=itm.cloneNode(true);
      document.getElementById("mylist2").appendChild(cln)
      }
      window.onload = favoriteQuote;

