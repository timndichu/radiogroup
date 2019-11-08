//signup
const config =
    {
        apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
        authDomain: 'phpbase-3ffca.firebaseapp.com',
        projectId: 'phpbase-3ffca'
    };


 const loginForm = document.querySelector('#login-form');

loginForm.addEventListener('submit', (e) => {
 e.preventDefault();

    const email = loginForm['email'].value;
    const password = loginForm['password'].value;

    console.log(email, password);
    firebase.initializeApp(config);
    firebase.auth().signInWithEmailAndPassword(email, password)
        .then(cred => {
        console.log(cred.user);
            window.location = './formpage.php';
        }).catch(
        function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // ...
            console.log(errorMessage, errorCode);
        }
    )
    ;
    // firebase.auth().onAuthStateChanged(user => {
    //     if(user) {
    //         //After successful login, user will be redirected to home.html
    //     }
    // });

});

//logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) =>{
    e.preventDefault();
    firebase.auth().signOut().then(()=>{
        console.log('user signed out')
    })
});