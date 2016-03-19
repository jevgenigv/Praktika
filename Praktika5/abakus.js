window.onload = function(){
    var beads = document.getElementsByClassName('bead');
    for(var i = 0; i<beads.length; i++) {

        var currentEl = beads[i];
        currentEl.onclick = function changePosition() {
            if(this.style.cssFloat=='left'){
                this.style.cssFloat='right';
            } else {
                this.style.cssFloat = 'left';
            }
        }
    }
}