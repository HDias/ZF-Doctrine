<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255, nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="setor", type="string", length=255, nullable=false)
     */
    private $setor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_create", type="datetime", nullable=true)
     */
    private $datCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="navegador", type="string", length=255, nullable=true)
     */
    private $navegador;

    /**
     * @var string
     *
     * @ORM\Column(name="dispositivo", type="string", length=255, nullable=true)
     */
    private $dispositivo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return string
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param string $setor
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    /**
     * @return \DateTime
     */
    public function getDatCreate()
    {
        return $this->datCreate;
    }

    /**
     * @param \DateTime $datCreate
     */
    public function setDatCreate($datCreate)
    {
        $this->datCreate = $datCreate;
    }

    /**
     * @return string
     */
    public function getNavegador()
    {
        return $this->navegador;
    }

    /**
     * @param string $navegador
     */
    public function setNavegador($navegador)
    {
        $this->navegador = $navegador;
    }

    /**
     * @return string
     */
    public function getDispositivo()
    {
        return $this->dispositivo;
    }

    /**
     * @param string $dispositivo
     */
    public function setDispositivo($dispositivo)
    {
        $this->dispositivo = $dispositivo;
    }
}
