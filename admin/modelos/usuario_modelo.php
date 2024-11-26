<?php
class Usuario
{
    protected int $id;
    protected string $nombre_de_usuario;
    protected string $clave;
    protected string $nombre;
    protected string $apellido;
    protected string $dni;
    protected string $mail;
    protected string $numero_de_celular;
    protected bool $activo;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
    }

    /**
     * Summary of create
     ** $usuario = Usuario::create()->setNombreDeUsuario("John")->setClave("Doe");
     * @return Usuario
     */
    public static function crear()
    {
        return new self();
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNombreDeUsuario(): string
    {
        return $this->nombre_de_usuario;
    }

    public function getClave(): string
    {
        return $this->clave;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getDni(): string
    {
        return $this->dni;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function getNumeroDeCelular(): string
    {
        return $this->numero_de_celular;
    }

    public function isActivo(): bool
    {
        return $this->activo;
    }

    // Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNombreDeUsuario(string $nombre_de_usuario): void
    {
        $this->nombre_de_usuario = $nombre_de_usuario;
    }

    public function setClave(string $clave): void
    {
        $this->clave = wp_hash_password($clave);
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function setDni(string $dni): void
    {
        $this->dni = $dni;
    }

    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    public function setNumeroDeCelular(string $numero_de_celular): void
    {
        $this->numero_de_celular = $numero_de_celular;
    }

    public function setActivo(bool $activo): void
    {
        $this->activo = $activo;
    }

    public function set_desde_array($data): void
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'nombre_de_usuario':
                    $this->setNombreDeUsuario((string) $value);
                    break;
                case 'clave':
                    $this->setClave((string) $value);
                    break;
                case 'nombre':
                    $this->setNombre((string) $value);
                    break;
                case 'apellido':
                    $this->setApellido((string) $value);
                    break;
                case 'dni':
                    $this->setDni((string) $value);
                    break;
                case 'mail':
                    $this->setMail((string) $value);
                    break;
                case 'numero_de_celular':
                    $this->setNumeroDeCelular((string) $value);
                    break;
                case 'activo':
                    $this->setActivo((bool) $value);
                    break;
            }
        }
    }

    public function get_como_array()
    {
        return [
            'nombre_de_usuario' => $this->getNombreDeUsuario(),
            'clave' => $this->getClave(),
            'nombre' => $this->getNombre(),
            'apellido' => $this->getApellido(),
            'dni' => $this->getDni(),
            'mail' => $this->getMail(),
            'numero_de_celular' => $this->getNumeroDeCelular(),
            'activo' => $this->isActivo(),
        ];
    }
}