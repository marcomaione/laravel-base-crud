require('./bootstrap');






function checkDelete() {

    return confirm("continuare con l'operazione?");
}

window.checkDelete = checkDelete;

/*
function ConfermaInvio() {
var annulla = window.confirm(" Interrompere l'esecuzione?");
if (annulla) {
return annulla;
}
else {
window.alert("elemento eliminato");
}
}
/*