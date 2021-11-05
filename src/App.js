import Routes from "./Routes";
import './App.css'
import UserProvider from "./context/UserContext";

function App() {
  return (
    <UserProvider>
      <Routes></Routes>
    </UserProvider>
  );
}

export default App;
