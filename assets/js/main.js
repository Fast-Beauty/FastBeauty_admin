const tbodyId = "tbody";
const firebaseUser = new FirebaseUser(tbodyId);

function getDataUser() {
    firebaseUser.getDataUsers().then((result) => {
    });
}

window.addEventListener('load', (e) => {
    getDataUser();
});