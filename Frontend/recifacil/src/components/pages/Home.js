import React, { useState } from "react";
import { Helmet } from "react-helmet";
import "../../styles/homeStyles.css";

function Home() {
  const [showMenu, setShowMenu] = useState(false);

  const toggleMenu = () => {
    setShowMenu(!showMenu);
  };

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
          <ul className={`menu ${showMenu ? "show" : ""}`}>
            <li>
              <a href="#">Login</a>
            </li>
            <li>
              <a href="#">Cadastro</a>
            </li>
            <li>
              <a href="#">Sobre</a>
            </li>
            <li>
              <a href="#">Suporte</a>
            </li>
          </ul>
          <button className="menu-icon" onClick={toggleMenu}>
            <span></span>
            <span></span>
            <span></span>
          </button>
        </nav>
      </header>
    </div>
  );
}

export default Home;
