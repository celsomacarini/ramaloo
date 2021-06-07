<?php
class Contato {

	private $pdo;

	public function __construct() {
		$this->pdo = new PDO("mysql:dbname=ramal;host=localhost", "root", "");
	}

	public function adicionar($nome = '', $setor ='', $ramal ='', $rota ='', $empresarial ='', $celular ='', $residencial ='', $email ='') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_administrativo (nome, setor, ramal, rota, empresarial, celular, residencial, email) VALUES (:nome, :setor, :ramal, :rota, :empresarial, :celular, :residencial, :email)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':setor', $setor);
			$sql->bindValue(':ramal', $ramal);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':empresarial', $empresarial);
			$sql->bindValue(':celular', $celular);
			$sql->bindValue(':residencial', $residencial);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

		public function adicionarRepresentante($regiao = '', $empresa ='', $contato_adv ='',  $celular ='', $escritorio ='', $rota ='', $email ='', $endereco ='') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_representante (regiao, empresa, contato_adv, celular, escritorio, rota, email, endereco) VALUES (:regiao, :empresa, :contato_adv, :celular, :escritorio, :rota, :email, :endereco)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':regiao', $regiao);
			$sql->bindValue(':empresa', $empresa);
			$sql->bindValue(':contato_adv', $contato_adv);
			$sql->bindValue(':celular', $celular);
			$sql->bindValue(':escritorio', $escritorio);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':endereco', $endereco);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}
		public function adicionartecnico($nome = '', $regiao ='', $empresarial ='',  $rota ='', $email ='', $endereco ='', $bairro ='', $cep ='', $cidade = '', $pais = '') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_tecnico (nome, regiao, empresarial, rota, email, endereco, bairro, cep, cidade, pais) VALUES (:nome, :regiao, :empresarial, :rota, :email, :endereco, :bairro, :cep, :cidade, :pais)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':regiao', $regiao);
			$sql->bindValue(':empresarial', $empresarial);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cep', $cep);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':pais', $pais);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function adicionarvendedor($nome = '', $regiao ='', $telefone ='',  $rota ='', $email ='', $endereco = '', $bairro ='', $cep ='', $cidade ='' ) {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_vendedor (nome, regiao, telefone, rota, email, endereco, bairro, cep, cidade) VALUES (:nome, :regiao, :telefone,:rota, :email, :endereco, :bairro, :cep, :cidade)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':regiao', $regiao);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cep', $cep);
			$sql->bindValue(':cidade', $cidade);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function adicionarloja($cidade = '', $estado ='', $endereco ='', $nome ='',  $telefone ='', $atendimento = '', $email = '') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_loja (cidade, estado, endereco, nome, telefone, atendimento, email) VALUES (:cidade, :estado, :endereco, :nome, :telefone, :atendimento, :email)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':estado', $estado);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':atendimento', $atendimento);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function adicionarfranquia($cidade = '', $estado ='', $endereco ='', $nome ='',  $telefone ='', $atendimento = '', $email = '') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_franquia (cidade, estado, endereco, nome, telefone, atendimento, email) VALUES (:cidade, :estado, :endereco, :nome, :telefone, :atendimento, :email)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':estado', $estado);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':atendimento', $atendimento);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function adicionarmotorista($nome = '', $telefone ='', $placa ='') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_motorista (nome, telefone, placa) VALUES (:nome, :telefone, :placa)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':placa', $placa);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function adicionarInstalador($cidade = '', $uf ='', $quantidade_instalador ='', $portas ='', $rodape ='', $piso_vinilico ='', $esquadrias ='', $papeldeparede ='', $forro ='') {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO ramal_instalador (cidade, uf, quantidade_instalador, portas, rodape, piso_vinilico, esquadrias, papeldeparede, forro) VALUES (:cidade, :uf, :quantidade_instalador, :portas, :rodape, :piso_vinilico, :esquadrias, :papeldeparede, :forro)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':uf', $uf);
			$sql->bindValue(':quantidade_instalador', $quantidade_instalador);
			$sql->bindValue(':portas', $portas);
			$sql->bindValue('rodape', $rodape);
			$sql->bindValue(':piso_vinilico', $piso_vinilico);
			$sql->bindValue(':esquadrias', $esquadrias);
			$sql->bindValue('papeldeparede', $papeldeparede);
			$sql->bindValue('forro', $forro);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}



	public function editar($nome, $setor, $ramal, $rota, $empresarial, $celular, $residencial, $email, $id) {		
			$sql = "UPDATE ramal_administrativo SET nome = :nome, setor = :setor, ramal = :ramal, rota = :rota, empresarial = :empresarial, celular = :celular, residencial = :residencial, email = :email  WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':setor', $setor);
			$sql->bindValue(':ramal', $ramal);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':empresarial', $empresarial);
			$sql->bindValue(':celular', $celular);
			$sql->bindValue(':residencial', $residencial);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function editartecnico($nome, $regiao, $empresarial, $rota, $email, $endereco, $bairro, $cep, $cidade, $id) {		
			$sql = "UPDATE ramal_tecnico SET nome = :nome, regiao = :regiao, rota = :rota, empresarial = :empresarial, email = :email, endereco = :endereco, bairro = :bairro, cep = :cep, cidade = :cidade WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':regiao', $regiao);
			$sql->bindValue(':empresarial', $empresarial);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cep', $cep);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function editarvendedor($nome, $regiao, $telefone, $rota, $email, $endereco, $bairro, $cep, $cidade, $id) {		
			$sql = "UPDATE ramal_vendedor SET nome = :nome, regiao = :regiao, telefone = :telefone, rota = :rota, email = :email, endereco = :endereco, bairro = :bairro,  cep = :cep, cidade = :cidade WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':regiao', $regiao);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':bairro', $bairro);
			$sql->bindValue(':cep', $cep);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function editarloja($cidade, $estado, $endereco, $nome, $telefone, $atendimento, $email, $id) {		
			$sql = "UPDATE ramal_loja SET cidade = :cidade, estado = :estado, endereco = :endereco, nome = :nome, telefone = :telefone, atendimento = :atendimento, email = :email WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':estado', $estado);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue('telefone', $telefone);
			$sql->bindValue('atendimento', $atendimento);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function editarfranquia($cidade, $estado, $endereco, $nome, $telefone, $atendimento, $email, $id) {		
			$sql = "UPDATE ramal_franquia SET cidade = :cidade, estado = :estado, endereco = :endereco, nome = :nome, telefone = :telefone, atendimento = :atendimento, email = :email WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':estado', $estado);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue('telefone', $telefone);
			$sql->bindValue('atendimento', $atendimento);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}
	
	public function editarrepresentante($regiao, $empresa, $contato_adv, $celular, $escritorio, $rota, $email, $endereco, $id) {		
			$sql = "UPDATE ramal_representante SET regiao = :regiao, empresa = :empresa, contato_adv = :contato_adv, celular = :celular, escritorio = :escritorio, rota = :rota, email = :email, endereco = :endereco WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':regiao', $regiao);
			$sql->bindValue(':empresa', $empresa);
			$sql->bindValue(':contato_adv', $contato_adv);
			$sql->bindValue(':celular', $celular);
			$sql->bindValue(':escritorio', $escritorio);
			$sql->bindValue(':rota', $rota);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':endereco', $endereco);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function editarmotorista($nome, $telefone, $placa, $id) {		
			$sql = "UPDATE ramal_motorista SET nome = :nome, telefone = :telefone, placa = :placa WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':placa', $placa);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function editarInstalador($cidade, $uf, $quantidade_instalador, $especialidade, $id) {		
			$sql = "UPDATE ramal_instalador SET cidade = :cidade, uf = :uf, quantidade_instalador = :quantidade_instalador, especialidade = :especialidade  WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':cidade', $cidade);
			$sql->bindValue(':uf', $uf);
			$sql->bindValue(':quantidade_instalador', $quantidade_instalador);
			$sql->bindValue(':especialidade', $especialidade);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function getInfo($id) {
		$sql = "SELECT * FROM ramal_administrativo WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInfovendedor($id) {
		$sql = "SELECT * FROM ramal_vendedor WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInfotecnico($id) {
		$sql = "SELECT * FROM ramal_tecnico WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInfoloja($id) {
		$sql = "SELECT * FROM ramal_loja WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInfofranquia($id) {
		$sql = "SELECT * FROM ramal_franquia WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInforepresentante($id) {
		$sql = "SELECT * FROM ramal_representante WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInfomotorista($id) {
		$sql = "SELECT * FROM ramal_motorista WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getInfoinstalador($id) {
		$sql = "SELECT * FROM ramal_instalador WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array();
		}
	}

	public function getAll() {
		$sql = "SELECT * FROM ramal_administrativo ORDER BY nome ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function getAllclientes() {
		$sql = "SELECT * FROM ramal_vendedor ORDER BY nome ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function getAllrepresentante() {
		$sql = "SELECT * FROM ramal_representante ORDER BY regiao ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}
	public function getAllLoja() {
		$sql = "SELECT * FROM ramal_loja ORDER BY cidade ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function getAllFranquia() {
		$sql = "SELECT * FROM ramal_franquia ORDER BY cidade ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function getAlltecnico() {
		$sql = "SELECT * FROM ramal_tecnico ORDER BY nome ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function getAllmotorista() {
		$sql = "SELECT * FROM ramal_motorista ORDER BY nome ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function getAllInstalador() {
		$sql = "SELECT * FROM ramal_instalador ORDER BY cidade ASC";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

	public function excluir($email) {
		if($this->existeEmail($email)) {
			$sql = "DELETE FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}
	public function excluirPorId($id) {
			$sql = "DELETE FROM ramal_administrativo WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function excluirPorIdvendedor($id) {
			$sql = "DELETE FROM ramal_vendedor WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function excluirPorIdrepresentante($id) {
			$sql = "DELETE FROM ramal_representante WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}
	public function excluirPorIdtecnico($id) {
			$sql = "DELETE FROM ramal_tecnico WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}
	public function excluirPorIdloja($id) {
			$sql = "DELETE FROM ramal_loja WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}
	public function excluirPorIdfranquia($id) {
			$sql = "DELETE FROM ramal_franquia WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}	

	public function excluirPorIdmotorista($id) {
			$sql = "DELETE FROM ramal_motorista WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	public function excluirPorIdinstalador($id) {
			$sql = "DELETE FROM ramal_instalador WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	private function existeEmail($email) {
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

}











