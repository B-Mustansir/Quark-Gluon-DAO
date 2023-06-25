import { initializeApp } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-app.js";
import { GoogleAuthProvider, getAuth, signInWithPopup, signInWithRedirect, getRedirectResult } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyB1A3z_sYQw3KgGV4RuITVOK2Y3d38NbKU",
    authDomain: "gluon-dao.firebaseapp.com",
    databaseURL: "https://gluon-dao-default-rtdb.firebaseio.com",
    projectId: "gluon-dao",
    storageBucket: "gluon-dao.appspot.com",
    messagingSenderId: "934199833554",
    appId: "1:934199833554:web:2757b60c42c661d0f0ce0b",
    measurementId: "G-QJ9RCSCPBZ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth();
const provider = new GoogleAuthProvider();

let login = document.getElementById("login-google"); 
login.addEventListener('click',(e)=>{
    signInWithPopup(auth, provider)
    .then((result) => {
        // This gives you a Google Access Token. You can use it to access the Google API.
        const credential = GoogleAuthProvider.credentialFromResult(result);
        const token = credential.accessToken;
        // The signed-in user info.
        const user = result.user;
        alert("Hello " + user.displayName); 
        // IdP data available using getAdditionalUserInfo(result)
        // ...
    }).catch((error) => {
        // Handle Errors here.
        const errorCode = error.code;
        const errorMessage = error.message;
        // The email of the user's account used.
        const email = error.customData.email;
        // The AuthCredential type that was used.
        const credential = GoogleAuthProvider.credentialFromError(error);
        // ...
        alert(errorMessage); 
    });
})