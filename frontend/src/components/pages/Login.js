import React, { useState } from "react";
import Navigation from "../Navbar";
import { Helmet } from "react-helmet";
import "../../styles/loginStyles.css";
import {
  AiOutlineEye as EyeIcon,
  AiOutlineEyeInvisible as EyeInvisibleIcon,
} from "react-icons/ai";
import { faDirections } from "@fortawesome/free-solid-svg-icons";

const LoginBox = () => {
  const [showPassword, setShowPassword] = useState(false);

  const handleShowPassword = () => {
    setShowPassword(!showPassword);
  };

  return (
    <div className="login-container">
      <Navigation className="nav"></Navigation>
      <div className="login-box">
        <Helmet>
          <title>Recifácil - Login</title>
        </Helmet>
        <div className="login-box__header">
          <h1>Login</h1>
        </div>
        <form className="login-box__form">
          <input
            type="text"
            placeholder="Usuário"
            className="login-box__form__input"
          />
          <input
            type={showPassword ? "text" : "password"}
            placeholder="Senha"
            className="login-box__form__input"
          />
          <div className="login-box__form__icon" onClick={handleShowPassword}>
            {showPassword ? <EyeInvisibleIcon /> : <EyeIcon />}
          </div>

          <button type="submit" className="login-box__form__button">
            Login
          </button>
        </form>
        <div className="login-box__footer">
          <p>Não tem uma conta?</p>
          <p> <a href="SignupRecycler">Cadastre-se como Recilador</a></p>
          <p> <a href="SignupCollectionPoint">Cadastre-se como Ponto de Coleta</a></p>
        </div>
      </div>
    </div>
  );
};

export default LoginBox;
