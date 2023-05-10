
import './App.css';
import Home from "./components/pages/Home";
import Login from "./components/pages/Login";
import SignupRecycler from "./components/pages/SignupRecycler";
import SignupCollectionPoint from "./components/pages/SignupCollectionPoint"
import About from './components/pages/About'
import Support from './components/pages/Support'
import {Route, Routes} from 'react-router-dom'
import { BrowserRouter as Router } from "react-router-dom";

function App() {
  return (
    <Router>
      <div className="App">
        <Routes>
          <Route exact path="/" element={<Home />} />
          <Route exact path="/login" element={<Login />} />
          <Route exact path="/SignupRecycler" element={<SignupRecycler />} />
          <Route
            exact
            path="/SignupCollectionPoint"
            element={<SignupCollectionPoint />}
          />
          <Route exact path="/about" element={<About />} />
          <Route exact path="/support" element={<Support />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;

