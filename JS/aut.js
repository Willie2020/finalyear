
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js";
    import { getFirestore, setDoc, addDoc, doc, collection } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-firestore.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyDXjdhGZnqlTlVSnEqDFhhmaXWJ1mKmuj8",
      authDomain: "afterclass-crud.firebaseapp.com",
      projectId: "afterclass-crud",
      storageBucket: "afterclass-crud.appspot.com",
      messagingSenderId: "620401253595",
      appId: "1:620401253595:web:e70a2e831c43c7e66a80fe",
      measurementId: "G-WK5PP9PELZ"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    // Initialize Cloud Firestore and get a reference to the service
   
   