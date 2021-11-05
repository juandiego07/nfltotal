import { initializeApp } from "firebase/app";
import {
  getFirestore,
  addDoc,
  collection,
  getDocs,
  query,
  getDoc,
  doc,
  setDoc,
} from "firebase/firestore";
// import { getAnalytics } from "firebase/analytics";

const firebaseConfig = {
  apiKey: "AIzaSyCOYhYl55QxhCZBYB6uXra55e8BfoJl6bo",
  authDomain: "nfltotal-24da3.firebaseapp.com",
  projectId: "nfltotal-24da3",
  storageBucket: "nfltotal-24da3.appspot.com",
  messagingSenderId: "524785488288",
  appId: "1:524785488288:web:971b8688e9c69e70c194c5",
  measurementId: "G-1W11PCR82K",
};

// const app =
initializeApp(firebaseConfig);
const dataBase = getFirestore();
// const analytics = getAnalytics(app);

export async function saveData(nameColletion, data) {
  try {
    const response = await addDoc(collection(dataBase, nameColletion), data);
    return response;
  } catch (e) {
    throw new Error(e);
  }
}

export async function getData(nameColletion) {
  try {
    const documents = await getDocs(query(collection(dataBase, nameColletion)));
    const response = documents.docs.map((doc) => {
      const data = {
        id: doc.id,
        ...doc.data(),
      };
      return data;
    });
    return response;
  } catch (e) {
    throw new Error(e);
  }
}

export async function getDocument(idDoc, nameColletion) {
  try {
    const response = await getDoc(doc(dataBase, nameColletion, idDoc));
    const data = {
      id: response.id,
      ...response.data(),
    };
    return data;
  } catch (e) {}
}

export async function updateDocument(idDoc, nameColletion, data) {
  try {
    const response = await setDoc(doc(dataBase, nameColletion, idDoc), data);
    return response;
  } catch (error) {}
}
