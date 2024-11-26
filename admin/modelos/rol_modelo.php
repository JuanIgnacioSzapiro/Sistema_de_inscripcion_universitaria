<?php
class Rol
{
    protected int $id;
    protected string $nombre_de_rol;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
    }

    /**
     * Summary of crear
     ** $rol = Rol::crear()->setNombreDeRol("Admin");
     * @return Rol
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

    public function getNombreDeRol(): string
    {
        return $this->nombre_de_rol;
    }

    // Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNombreDeRol(string $nombre_de_rol): void
    {
        $this->nombre_de_rol = $nombre_de_rol;
    }

    public function set_desde_array(array $data): void
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'nombre_de_rol':
                    $this->setNombreDeRol((string) $value);
                    break;
            }
        }
    }

    public function get_como_array()
    {
        return [
            'nombre_de_rol' => $this->getNombreDeRol(),
        ];
    }
}