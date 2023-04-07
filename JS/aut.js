
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js";
    import { getFirestore, setDoc, addDoc, doc, collection } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-firestore.js";
  
    const firebaseConfig = {
      apiKey: "AIzaSyDXjdhGZnqlTlVSnEqDFhhmaXWJ1mKmuj8",
      authDomain: "afterclass-crud.firebaseapp.com",
      projectId: "afterclass-crud",
      storageBucket: "afterclass-crud.appspot.com",
      messagingSenderId: "620401253595",
      appId: "1:620401253595:web:e70a2e831c43c7e66a80fe",
      measurementId: "G-WK5PP9PELZ"
    };
  
    const app = initializeApp(firebaseConfig);   
   