    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-app.js";
    import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-database.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-analytics.js";
    import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/9.23.0/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
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
    const analytics = getAnalytics(app);
    const database = getDatabase(app); 
    const auth = getAuth();

    signup.addEventListener('click',(e)=>{

      let name = document.getElementById('signup-name').value; 
      let email = document.getElementById('signup-email').value; 
      let password = document.getElementById('signup-password').value; 

      createUserWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;
        set(ref(database,"users/"+user.uid),{
          name: name, 
          email: email
        })

        alert('User Created')
        // ...
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        // ..
        alert(errorMessage); 
      });
    })

    login.addEventListener('click',(e)=>{

      let email = document.getElementById('login-email').value; 
      let password = document.getElementById('login-password').value;       

      const auth = getAuth();
      signInWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
          // Signed in 
          const user = userCredential.user;
          const timestamp = new Date(); 
          update(ref(database,"users/"+user.uid),{
            last_login: timestamp
          })
          alert('User Logged In');
          // ...
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          alert(errorMessage); 
        });
    })

    // const user = auth.currentUser;
    // onAuthStateChanged(auth, (user) => {
    //   if (user) {
    //     // User is signed in, see docs for a list of available properties
    //     // https://firebase.google.com/docs/reference/js/auth.user
    //     const uid = user.uid;
    //     // ...
    //   } else {
    //     // User is signed out
    //     // ...
    //   }
    // });

    // logout.addEventListener('click',(e)=>{
    //   signOut(auth).then(() => {
    //     // Sign-out successful.
    //     alert("User Logged Out")
    //   }).catch((error) => {
    //     // An error happened.
    //     alert(error); 
    //   });
    // })

