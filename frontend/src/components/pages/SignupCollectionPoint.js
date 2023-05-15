import React, { useState } from "react";
import { Helmet } from "react-helmet";
import "../../styles/SignupCollectionPointStyles.css";
import axios from "axios";

function SignupCollectionPoint() {
  //Armazenando os valores do campo de entrada
  const [nomeCooperativa, setNomeCooperativa] = useState("");
  const [cnpj, setCnpj] = useState("");
  const [email, setEmail] = useState("");
  const [senha, setSenha] = useState("");
  const [repetirsenha, setRepetirSenha] = useState("");
  const [telefone, setTelefone] = useState("");
  const [cep, setCep] = useState("");
  const [rua, setRua] = useState("");
  const [cidade, setCidade] = useState("");
  const [estado, setEstado] = useState("");
  const [complemento, setComplemento] = useState("");
  const [materiaisReciclaveis, setMateriaisReciclaveis] = useState([]);

  //Enviando os dados para o Back-End

  function handleSubmit(event) {
    event.preventDefault();

    const dadosColetor = {
      nomeCooperativa,
      cnpj,
      email,
      senha,
      repetirsenha,
      telefone,
      cep,
      rua,
      cidade,
      estado,
      complemento,
      materiaisReciclaveis,
    };

    axios.post("http://127.0.0.1:8000/api/Collectionpoint", dadosColetor) // <-- Substitua '' pelo caminho real para o endpoint da API
      .then((resposta) => {
        console.log(resposta);
      })
      .catch((erro) => {
        console.log(erro);
      });
 

  //<------------------------------------------------------------------>
}

return (
  <div className="cadastro-container">
    <Helmet>
      <title>Recifácil - Cadastro Ponto de Coleta</title>
    </Helmet>
    <div className="cadastro-box">
      <h2> Cadastro Coletor</h2>
      <form onSubmit={handleSubmit}>
        <div className="coluna1">
          <label>Nome da cooperativa</label>
          <input
            type="text"
            id="nome-cooperativa"
            value={nomeCooperativa}
            onChange={(event) => setNomeCooperativa(event.target.value)}
            required
          /> 

          <label>CNPJ</label>
          <input
            type="text"
            id="cnpj"
            value={cnpj}
            onChange={(event) => setCnpj(event.target.value)}
            required
          />

          <label>Email</label>
          <input
            type="email"
            id="email"
            required
            value={email}
            onChange={(event) => setEmail(event.target.value)}
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          />

          <label>Telefone</label>
          <input
            type="text"
            id="telefone"
            value={telefone}
            onChange={(event) => setTelefone(event.target.value)}
            pattern="\(\d{2}\) \d{4,5}-\d{4}"
            required
          />

          <label>Senha</label>
          <input
            type="password"
            id="senha"
            value={senha}
            onChange={(event) => setSenha(event.target.value)}
            required
          />

          <label>Repetir senha</label>
          <input
            type="password"
            id="repetir-senha"
            value={repetirsenha}
            onChange={(event) => setRepetirSenha(event.target.value)}
            required
          />
        </div>
        <div className="coluna2">
          <label>CEP</label>
          <input
            type="text"
            id="cep"
            value={cep}
            onChange={(event) => setCep(event.target.value)}
            required
          />

          <label>Rua</label>
          <input
            type="text"
            id="rua"
            value={rua}
            onChange={(event) => setRua(event.target.value)}
            required
          />

          <label>Cidade</label>
          <input
            type="text"
            id="cidade"
            value={cidade}
            onChange={(event) => setCidade(event.target.value)}
            required
          />

          <label>Estado</label>
          <input
            type="text"
            id="estado"
            value={estado}
            onChange={(event) => setEstado(event.target.value)}
            required
          />

          <label>Complemento</label>
          <input
            type="text"
            id="complemento"
            value={complemento}
            onChange={(event) => setComplemento(event.target.value)}
            required
          />
        </div>

        <div className="material-container">
          <label> Materiais Recicláveis</label>
          <div className="material">
            <input
              type="checkbox"
              id="papel"
              value="papel"
              checked={materiaisReciclaveis.includes("papel")}
              onChange={(event) =>
                setMateriaisReciclaveis((prevState) =>
                  event.target.checked
                    ? [...prevState, event.target.value]
                    : prevState.filter((valor) => valor !== event.target.value)
                )
              }
            />
            <label htmlFor="papel">Papel</label>
            <input
              type="checkbox"
              id="plastico"
              value="plastico"
              checked={materiaisReciclaveis.includes("plastico")}
              onChange={(event) =>
                setMateriaisReciclaveis((prevState) =>
                  event.target.checked
                    ? [...prevState, event.target.value]
                    : prevState.filter((valor) => valor !== event.target.value)
                )
              }
            />
            <label htmlFor="plastico">Plástico</label>
            <input
              type="checkbox"
              id="vidro"
              value="vidro"
              checked={materiaisReciclaveis.includes("vidro")}
              onChange={(event) =>
                setMateriaisReciclaveis((prevState) =>
                  event.target.checked
                    ? [...prevState, event.target.value]
                    : prevState.filter((valor) => valor !== event.target.value)
                )
              }
            />
            <label htmlFor="vidro">Vidro</label>
            <input
              type="checkbox"
              id="metal"
              value="metal"
              checked={materiaisReciclaveis.includes("metal")}
              onChange={(event) =>
                setMateriaisReciclaveis((prevState) =>
                  event.target.checked
                    ? [...prevState, event.target.value]
                    : prevState.filter((valor) => valor !== event.target.value)
                )
              }
            />
            <label htmlFor="metal">Metal</label>
          </div>
        </div>
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </div>
);
      }
export default SignupCollectionPoint;
//Onde fica o style do footer?