import React, { useState } from "react";
import { Helmet } from "react-helmet";
import "../../styles/homeStyles.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars } from "@fortawesome/free-solid-svg-icons";

function Home() {
  const [showMenu, setShowMenu] = useState(false);
  const [showSignupOptions, setShowSignupOptions] = useState(false);

  const toggleMenu = () => {
    setShowMenu(!showMenu);
  };
  
  const toggleSignupOptions = () => {
    setShowSignupOptions(!showSignupOptions);
  }
 
  return (
    <div>
      <Helmet>
        <title>Recifácil - Home</title>
      </Helmet>
      <header id="topo">
        <nav>
          <a className="logo">
            <img src="./Logotipo_Recifacil.png" alt="Logo Recifácil" />
          </a>
          <FontAwesomeIcon
            icon={faBars}
            className="menu-icon"
            onClick={toggleMenu}
          />
        </nav>
        <ul className={`menu ${showMenu ? "show" : ""}`}>
          <li>
            <a href="Login">Login</a>
          </li>
          <div className="signup-container">
            <li className="signup">
              <a href="#" onClick={toggleSignupOptions}>
                Cadastro
              </a>
              {showSignupOptions && (
                <ul className="signup-menu">
                  <li>
                    <a href="#">Cadastro de Ponto de Coleta</a>
                  </li>
                  <li>
                    <a href="#">Cadastro de Reciclador</a>
                  </li>
                </ul>
              )}
            </li>
          </div>
          <li>
            <a href="About">Sobre</a>
          </li>
          <li>
            <a href="Support">Suporte</a>
          </li>
        </ul>
      </header>
    </div>
  );
}

export default Home;
