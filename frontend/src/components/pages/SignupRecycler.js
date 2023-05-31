import React, { useState } from "react";
import axios from "axios";
import "../../styles/SignupRecyclerStyles.css"

function SignupRecycler() {
  const [nomeCompleto, setNomeCompleto] = useState("");
  const [cpf, setCpf] = useState("");
  const [email, setEmail] = useState("");
  const [senha, setSenha] = useState("");
  const [repetirsenha, setRepetirSenha] = useState("");
  const [telefone, setTelefone] = useState("");
  const [dataNascimento, setDataNascimento] = useState("");
  const [genero, setGenero] = useState("");
  const [cep, setCep] = useState("");
  const [rua, setRua] = useState("");
  const [cidade, setCidade] = useState("");
  const [estado, setEstado] = useState("");
  const [complemento, setComplemento] = useState("");
  const [materiaisReciclaveis, setMateriaisReciclaveis] = useState([]);

  const handleCheckbox = (event) => {
    const { checked, value } = event.target;
    if (checked) {
      setMateriaisReciclaveis([...materiaisReciclaveis, value]);
    } else {
      setMateriaisReciclaveis(
        materiaisReciclaveis.filter((material) => material !== value)
      );
    }
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    const dadosReciclador = {
      nomeCompleto,
      cpf,
      email,
      senha,
      telefone,
      dataNascimento,
      genero,
      cep,
      rua,
      cidade,
      estado,
      complemento,
      materiaisReciclaveis,
    };

    axios
      .post("/api/recicladores", dadosReciclador) //<--- Caminho Ficticio
      .then((resposta) => {
        console.log(resposta);
      })
      .catch((erro) => {
        console.log(erro);
      });
  };

  return (
    <div className="cadastro-container">
      <div className="cadastro-box">
        <h2>Cadastro Reciclador</h2>
        <form onSubmit={handleSubmit}>
          <div className="coluna1">

          <label>Nome Completo:</label>
          <input
            type="text"
            id="nome-completo"
            value={nomeCompleto}
            onChange={(event) => setNomeCompleto(event.target.value)}
            required
          />

          <label>CPF</label>
          <input
            type="text"
            id="cpf"
            value={cpf}
            onChange={(event) => setCpf(event.target.value)}
            pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
            required
          />

          <label>Email</label>
          <input
            type="text"
            id="Email"
            required
            value={email}
            onChange={(event) => setEmail(event.target.value)}
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          />

          <label>Senha</label>
          <input
            type="password"
            id="senha"
            value={senha}
            onChange={(event) => setSenha(event.target.value)}
            required
          />

          <label>Repetir Senha</label>
          <input
            type="password"
            id="repetir-senha"
            value={repetirsenha}
            onChange={(event) => setRepetirSenha(event.target.value)}
            required
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

          <label>Data de Nascimento</label>
          <input
            type="date"
            id="data-nascimento"
            value={dataNascimento}
            onChange={(event) => setDataNascimento(event.target.value)}
            required
          />
        </div>

        <div className="coluna2">

          <label>Gênero</label>
          <select

            id="genero"
            value={genero}
            onChange={(event) => setGenero(event.target.value)}
          >
            <option value="masculino"> Masculino</option>
            <option value="feminino"> Feminino</option>
            <option value="prefiro não dizer"> Prefiro não dizer</option>
          </select>

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
        <button class="cadastrar" type="submit" >Cadastrar</button>
        </form>
      </div>
    </div>
  );
}

export default SignupRecycler;
