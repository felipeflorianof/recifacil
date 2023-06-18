import React from "react"
import { Helmet } from "react-helmet"
import "../../styles/SupportStyles.css"


function Support(){
    return (
      <div>
        <Helmet>Recifácil - Suporte</Helmet>
        <div class="support_container">
          <h1>Entre em contato conosco</h1>
          {/* <p>Não temos suporte para esse site, mexa no código fonte e se vire para resolver</p> */}
          <div class="contato">
            <div class="azul">
              <img src="./img/link.png"/>
            </div>
            <div class="verde">
              <img src="./img/zap.png"/>
              {/* <p>(81) 98422-6586</p> */}
            </div>
            <div class="preto">
              <img src="./img/git.png"/>
            </div>
            <div class="cinza">
              <img src="./img/gmail.png" alt="gmail"/>
            </div>
          </div>
        </div>
      </div>
    );
}

export default Support