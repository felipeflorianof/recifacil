import React, { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars } from "@fortawesome/free-solid-svg-icons";

function Navigation() {
  const [showMenu, setShowMenu] = useState(false);
  const [showSignupOptions, setShowSignupOptions] = useState(false);

  const toggleMenu = () => {
    setShowMenu(!showMenu);
  };

  const toggleSignupOptions = () => {
    setShowSignupOptions(!showSignupOptions);
  };

  return (
    <nav>
    
      <FontAwesomeIcon
        icon={faBars}
        className="menu-icon"
        onClick={toggleMenu}
      />
      <ul className={`menu ${showMenu ? "show" : ""}`}>
        <li>
          <a href="/">Início</a>
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
    </nav>
  );
}

export default Navigation;
