<?php
class Habilidad
{
    protected int $id;
    protected bool $puede_ver_subAdministrador;
    protected bool $puede_alta_subAdministrador;
    protected bool $puede_baja_subAdministrador;
    protected bool $puede_modificar_subAdministrador;
    protected bool $puede_aprobar_subAdministrador;
    protected bool $puede_ver_coordinador;
    protected bool $puede_alta_coordinador;
    protected bool $puede_baja_coordinador;
    protected bool $puede_modificar_coordinador;
    protected bool $puede_aprobar_coordinador;
    protected bool $puede_ver_subCoordinador;
    protected bool $puede_alta_subCoordinador;
    protected bool $puede_baja_subCoordinador;
    protected bool $puede_modificar_subCoordinador;
    protected bool $puede_aprobar_subCoordinador;
    protected bool $puede_ver_apoyo;
    protected bool $puede_alta_apoyo;
    protected bool $puede_baja_apoyo;
    protected bool $puede_modificar_apoyo;
    protected bool $puede_aprobar_apoyo;
    protected bool $puede_ver_subApoyo;
    protected bool $puede_alta_subApoyo;
    protected bool $puede_baja_subApoyo;
    protected bool $puede_modificar_subApoyo;
    protected bool $puede_aprobar_subApoyo;
    protected bool $puede_ver_docente;
    protected bool $puede_alta_docente;
    protected bool $puede_baja_docente;
    protected bool $puede_modificar_docente;
    protected bool $puede_aprobar_docente;
    protected bool $puede_ver_preInscripto;
    protected bool $puede_alta_preInscripto;
    protected bool $puede_baja_preInscripto;
    protected bool $puede_modificar_preInscripto;
    protected bool $puede_aprobar_preInscripto;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
    }

    /**
     * Summary of crear
     ** $habilidad = Habilidad::crear()->set...();
     * @return Habilidad
     */
    public static function crear()
    {
        return new self();
    }

    // Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setPuedeVerSubAdministrador(bool $puede_ver_subAdministrador): void
    {
        $this->puede_ver_subAdministrador = $puede_ver_subAdministrador;
    }

    public function setPuedeAltaSubAdministrador(bool $puede_alta_subAdministrador): void
    {
        $this->puede_alta_subAdministrador = $puede_alta_subAdministrador;
    }

    public function setPuedeBajaSubAdministrador(bool $puede_baja_subAdministrador): void
    {
        $this->puede_baja_subAdministrador = $puede_baja_subAdministrador;
    }

    public function setPuedeModificarSubAdministrador(bool $puede_modificar_subAdministrador): void
    {
        $this->puede_modificar_subAdministrador = $puede_modificar_subAdministrador;
    }

    public function setPuedeAprobarSubAdministrador(bool $puede_aprobar_subAdministrador): void
    {
        $this->puede_aprobar_subAdministrador = $puede_aprobar_subAdministrador;
    }

    public function setPuedeVerCoordinador(bool $puede_ver_coordinador): void
    {
        $this->puede_ver_coordinador = $puede_ver_coordinador;
    }

    public function setPuedeAltaCoordinador(bool $puede_alta_coordinador): void
    {
        $this->puede_alta_coordinador = $puede_alta_coordinador;
    }

    public function setPuedeBajaCoordinador(bool $puede_baja_coordinador): void
    {
        $this->puede_baja_coordinador = $puede_baja_coordinador;
    }

    public function setPuedeModificarCoordinador(bool $puede_modificar_coordinador): void
    {
        $this->puede_modificar_coordinador = $puede_modificar_coordinador;
    }

    public function setPuedeAprobarCoordinador(bool $puede_aprobar_coordinador): void
    {
        $this->puede_aprobar_coordinador = $puede_aprobar_coordinador;
    }

    public function setPuedeVerSubCoordinador(bool $puede_ver_subCoordinador): void
    {
        $this->puede_ver_subCoordinador = $puede_ver_subCoordinador;
    }

    public function setPuedeAltaSubCoordinador(bool $puede_alta_subCoordinador): void
    {
        $this->puede_alta_subCoordinador = $puede_alta_subCoordinador;
    }

    public function setPuedeBajaSubCoordinador(bool $puede_baja_subCoordinador): void
    {
        $this->puede_baja_subCoordinador = $puede_baja_subCoordinador;
    }

    public function setPuedeModificarSubCoordinador(bool $puede_modificar_subCoordinador): void
    {
        $this->puede_modificar_subCoordinador = $puede_modificar_subCoordinador;
    }

    public function setPuedeAprobarSubCoordinador(bool $puede_aprobar_subCoordinador): void
    {
        $this->puede_aprobar_subCoordinador = $puede_aprobar_subCoordinador;
    }

    public function setPuedeVerApoyo(bool $puede_ver_apoyo): void
    {
        $this->puede_ver_apoyo = $puede_ver_apoyo;
    }

    public function setPuedeAltaApoyo(bool $puede_alta_apoyo): void
    {
        $this->puede_alta_apoyo = $puede_alta_apoyo;
    }

    public function setPuedeBajaApoyo(bool $puede_baja_apoyo): void
    {
        $this->puede_baja_apoyo = $puede_baja_apoyo;
    }

    public function setPuedeModificarApoyo(bool $puede_modificar_apoyo): void
    {
        $this->puede_modificar_apoyo = $puede_modificar_apoyo;
    }

    public function setPuedeAprobarApoyo(bool $puede_aprobar_apoyo): void
    {
        $this->puede_aprobar_apoyo = $puede_aprobar_apoyo;
    }
    public function setPuedeVerSubApoyo(bool $puede_ver_subApoyo): void
    {
        $this->puede_ver_subApoyo = $puede_ver_subApoyo;
    }

    public function setPuedeAltaSubApoyo(bool $puede_alta_subApoyo): void
    {
        $this->puede_alta_subApoyo = $puede_alta_subApoyo;
    }

    public function setPuedeBajaSubApoyo(bool $puede_baja_subApoyo): void
    {
        $this->puede_baja_subApoyo = $puede_baja_subApoyo;
    }

    public function setPuedeModificarSubApoyo(bool $puede_modificar_subApoyo): void
    {
        $this->puede_modificar_subApoyo = $puede_modificar_subApoyo;
    }

    public function setPuedeAprobarSubApoyo(bool $puede_aprobar_subApoyo): void
    {
        $this->puede_aprobar_subApoyo = $puede_aprobar_subApoyo;
    }

    public function setPuedeVerDocente(bool $puede_ver_docente): void
    {
        $this->puede_ver_docente = $puede_ver_docente;
    }

    public function setPuedeAltaDocente(bool $puede_alta_docente): void
    {
        $this->puede_alta_docente = $puede_alta_docente;
    }

    public function setPuedeBajaDocente(bool $puede_baja_docente): void
    {
        $this->puede_baja_docente = $puede_baja_docente;
    }

    public function setPuedeModificarDocente(bool $puede_modificar_docente): void
    {
        $this->puede_modificar_docente = $puede_modificar_docente;
    }

    public function setPuedeAprobarDocente(bool $puede_aprobar_docente): void
    {
        $this->puede_aprobar_docente = $puede_aprobar_docente;
    }

    public function setPuedeVerPreInscripto(bool $puede_ver_preInscripto): void
    {
        $this->puede_ver_preInscripto = $puede_ver_preInscripto;
    }

    public function setPuedeAltaPreInscripto(bool $puede_alta_preInscripto): void
    {
        $this->puede_alta_preInscripto = $puede_alta_preInscripto;
    }

    public function setPuedeBajaPreInscripto(bool $puede_baja_preInscripto): void
    {
        $this->puede_baja_preInscripto = $puede_baja_preInscripto;
    }

    public function setPuedeModificarPreInscripto(bool $puede_modificar_preInscripto): void
    {
        $this->puede_modificar_preInscripto = $puede_modificar_preInscripto;
    }

    public function setPuedeAprobarPreInscripto(bool $puede_aprobar_preInscripto): void
    {
        $this->puede_aprobar_preInscripto = $puede_aprobar_preInscripto;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPuedeVerSubAdministrador(): bool
    {
        return $this->puede_ver_subAdministrador;
    }

    public function getPuedeAltaSubAdministrador(): bool
    {
        return $this->puede_alta_subAdministrador;
    }

    public function getPuedeBajaSubAdministrador(): bool
    {
        return $this->puede_baja_subAdministrador;
    }

    public function getPuedeModificarSubAdministrador(): bool
    {
        return $this->puede_modificar_subAdministrador;
    }

    public function getPuedeAprobarSubAdministrador(): bool
    {
        return $this->puede_aprobar_subAdministrador;
    }

    public function getPuedeVerCoordinador(): bool
    {
        return $this->puede_ver_coordinador;
    }

    public function getPuedeAltaCoordinador(): bool
    {
        return $this->puede_alta_coordinador;
    }

    public function getPuedeBajaCoordinador(): bool
    {
        return $this->puede_baja_coordinador;
    }

    public function getPuedeModificarCoordinador(): bool
    {
        return $this->puede_modificar_coordinador;
    }

    public function getPuedeAprobarCoordinador(): bool
    {
        return $this->puede_aprobar_coordinador;
    }

    public function getPuedeVerSubCoordinador(): bool
    {
        return $this->puede_ver_subCoordinador;
    }

    public function getPuedeAltaSubCoordinador(): bool
    {
        return $this->puede_alta_subCoordinador;
    }

    public function getPuedeBajaSubCoordinador(): bool
    {
        return $this->puede_baja_subCoordinador;
    }

    public function getPuedeModificarSubCoordinador(): bool
    {
        return $this->puede_modificar_subCoordinador;
    }

    public function getPuedeAprobarSubCoordinador(): bool
    {
        return $this->puede_aprobar_subCoordinador;
    }

    public function getPuedeVerApoyo(): bool
    {
        return $this->puede_ver_apoyo;
    }

    public function getPuedeAltaApoyo(): bool
    {
        return $this->puede_alta_apoyo;
    }

    public function getPuedeBajaApoyo(): bool
    {
        return $this->puede_baja_apoyo;
    }

    public function getPuedeModificarApoyo(): bool
    {
        return $this->puede_modificar_apoyo;
    }

    public function getPuedeAprobarApoyo(): bool
    {
        return $this->puede_aprobar_apoyo;
    }

    public function getPuedeVerSubApoyo(): bool
    {
        return $this->puede_ver_subApoyo;
    }

    public function getPuedeAltaSubApoyo(): bool
    {
        return $this->puede_alta_subApoyo;
    }

    public function getPuedeBajaSubApoyo(): bool
    {
        return $this->puede_baja_subApoyo;
    }

    public function getPuedeModificarSubApoyo(): bool
    {
        return $this->puede_modificar_subApoyo;
    }

    public function getPuedeAprobarSubApoyo(): bool
    {
        return $this->puede_aprobar_subApoyo;
    }

    public function getPuedeVerDocente(): bool
    {
        return $this->puede_ver_docente;
    }

    public function getPuedeAltaDocente(): bool
    {
        return $this->puede_alta_docente;
    }

    public function getPuedeBajaDocente(): bool
    {
        return $this->puede_baja_docente;
    }

    public function getPuedeModificarDocente(): bool
    {
        return $this->puede_modificar_docente;
    }

    public function getPuedeAprobarDocente(): bool
    {
        return $this->puede_aprobar_docente;
    }

    public function getPuedeVerPreInscripto(): bool
    {
        return $this->puede_ver_preInscripto;
    }

    public function getPuedeAltaPreInscripto(): bool
    {
        return $this->puede_alta_preInscripto;
    }

    public function getPuedeBajaPreInscripto(): bool
    {
        return $this->puede_baja_preInscripto;
    }

    public function getPuedeModificarPreInscripto(): bool
    {
        return $this->puede_modificar_preInscripto;
    }

    public function getPuedeAprobarPreInscripto(): bool
    {
        return $this->puede_aprobar_preInscripto;
    }

    /**
     * Summary of set_desde_array
     * if / else if / else is more flexible (hence better), but switch is slightly faster because it just computes the condition once and then checks for the output, while if has to do this every time.
     * @param array $data
     * @return void
     */
    public function set_desde_array(array $data): void
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'puede_ver_subAdministrador':
                    $this->setPuedeVerSubAdministrador((bool) $value);
                    break;
                case 'puede_alta_subAdministrador':
                    $this->setPuedeAltaSubAdministrador((bool) $value);
                    break;
                case 'puede_baja_subAdministrador':
                    $this->setPuedeBajaSubAdministrador((bool) $value);
                    break;
                case 'puede_modificar_subAdministrador':
                    $this->setPuedeModificarSubAdministrador((bool) $value);
                    break;
                case 'puede_aprobar_subAdministrador':
                    $this->setPuedeAprobarSubAdministrador((bool) $value);
                    break;
                case 'puede_ver_coordinador':
                    $this->setPuedeVerCoordinador((bool) $value);
                    break;
                case 'puede_alta_coordinador':
                    $this->setPuedeAltaCoordinador((bool) $value);
                    break;
                case 'puede_baja_coordinador':
                    $this->setPuedeBajaCoordinador((bool) $value);
                    break;
                case 'puede_modificar_coordinador':
                    $this->setPuedeModificarCoordinador((bool) $value);
                    break;
                case 'puede_aprobar_coordinador':
                    $this->setPuedeAprobarCoordinador((bool) $value);
                    break;
                case 'puede_ver_subCoordinador':
                    $this->setPuedeVerSubCoordinador((bool) $value);
                    break;
                case 'puede_alta_subCoordinador':
                    $this->setPuedeAltaSubCoordinador((bool) $value);
                    break;
                case 'puede_baja_subCoordinador':
                    $this->setPuedeBajaSubCoordinador((bool) $value);
                    break;
                case 'puede_modificar_subCoordinador':
                    $this->setPuedeModificarSubCoordinador((bool) $value);
                    break;
                case 'puede_aprobar_subCoordinador':
                    $this->setPuedeAprobarSubCoordinador((bool) $value);
                    break;
                case 'puede_ver_apoyo':
                    $this->setPuedeVerApoyo((bool) $value);
                    break;
                case 'puede_alta_apoyo':
                    $this->setPuedeAltaApoyo((bool) $value);
                    break;
                case 'puede_baja_apoyo':
                    $this->setPuedeBajaApoyo((bool) $value);
                    break;
                case 'puede_modificar_apoyo':
                    $this->setPuedeModificarApoyo((bool) $value);
                    break;
                case 'puede_aprobar_apoyo':
                    $this->setPuedeAprobarApoyo((bool) $value);
                    break;
                case 'puede_ver_subApoyo':
                    $this->setPuedeVerSubApoyo((bool) $value);
                    break;
                case 'puede_alta_subApoyo':
                    $this->setPuedeAltaSubApoyo((bool) $value);
                    break;
                case 'puede_baja_subApoyo':
                    $this->setPuedeBajaSubApoyo((bool) $value);
                    break;
                case 'puede_modificar_subApoyo':
                    $this->setPuedeModificarSubApoyo((bool) $value);
                    break;
                case 'puede_aprobar_subApoyo':
                    $this->setPuedeAprobarSubApoyo((bool) $value);
                    break;
                case 'puede_ver_docente':
                    $this->setPuedeVerDocente((bool) $value);
                    break;
                case 'puede_alta_docente':
                    $this->setPuedeAltaDocente((bool) $value);
                    break;
                case 'puede_baja_docente':
                    $this->setPuedeBajaDocente((bool) $value);
                    break;
                case 'puede_modificar_docente':
                    $this->setPuedeModificarDocente((bool) $value);
                    break;
                case 'puede_aprobar_docente':
                    $this->setPuedeAprobarDocente((bool) $value);
                    break;
                case 'puede_ver_preInscripto':
                    $this->setPuedeVerPreInscripto((bool) $value);
                    break;
                case 'puede_alta_preInscripto':
                    $this->setPuedeAltaPreInscripto((bool) $value);
                    break;
                case 'puede_baja_preInscripto':
                    $this->setPuedeBajaPreInscripto((bool) $value);
                    break;
                case 'puede_modificar_preInscripto':
                    $this->setPuedeModificarPreInscripto((bool) $value);
                    break;
                case 'puede_aprobar_preInscripto':
                    $this->setPuedeAprobarPreInscripto((bool) $value);
                    break;
            }
        }
    }

    public function get_como_array()
    {
        return [
            'puede_ver_subAdministrador' => $this->getPuedeVerSubAdministrador(),
            'puede_alta_subAdministrador' => $this->getPuedeAltaSubAdministrador(),
            'puede_baja_subAdministrador' => $this->getPuedeBajaSubAdministrador(),
            'puede_modificar_subAdministrador' => $this->getPuedeModificarSubAdministrador(),
            'puede_aprobar_subAdministrador' => $this->getPuedeAprobarSubAdministrador(),
            'puede_ver_coordinador' => $this->getPuedeVerCoordinador(),
            'puede_alta_coordinador' => $this->getPuedeAltaCoordinador(),
            'puede_baja_coordinador' => $this->getPuedeBajaCoordinador(),
            'puede_modificar_coordinador' => $this->getPuedeModificarCoordinador(),
            'puede_aprobar_coordinador' => $this->getPuedeAprobarCoordinador(),
            'puede_ver_subCoordinador' => $this->getPuedeVerSubCoordinador(),
            'puede_alta_subCoordinador' => $this->getPuedeAltaSubCoordinador(),
            'puede_baja_subCoordinador' => $this->getPuedeBajaSubCoordinador(),
            'puede_modificar_subCoordinador' => $this->getPuedeModificarSubCoordinador(),
            'puede_aprobar_subCoordinador' => $this->getPuedeAprobarSubCoordinador(),
            'puede_ver_apoyo' => $this->getPuedeVerApoyo(),
            'puede_alta_apoyo' => $this->getPuedeAltaApoyo(),
            'puede_baja_apoyo' => $this->getPuedeBajaApoyo(),
            'puede_modificar_apoyo' => $this->getPuedeModificarApoyo(),
            'puede_aprobar_apoyo' => $this->getPuedeAprobarApoyo(),
            'puede_ver_subApoyo' => $this->getPuedeVerSubApoyo(),
            'puede_alta_subApoyo' => $this->getPuedeAltaSubApoyo(),
            'puede_baja_subApoyo' => $this->getPuedeBajaSubApoyo(),
            'puede_modificar_subApoyo' => $this->getPuedeModificarSubApoyo(),
            'puede_aprobar_subApoyo' => $this->getPuedeAprobarSubApoyo(),
            'puede_ver_docente' => $this->getPuedeVerDocente(),
            'puede_alta_docente' => $this->getPuedeAltaDocente(),
            'puede_baja_docente' => $this->getPuedeBajaDocente(),
            'puede_modificar_docente' => $this->getPuedeModificarDocente(),
            'puede_aprobar_docente' => $this->getPuedeAprobarDocente(),
            'puede_ver_preInscripto' => $this->getPuedeVerPreInscripto(),
            'puede_alta_preInscripto' => $this->getPuedeAltaPreInscripto(),
            'puede_baja_preInscripto' => $this->getPuedeBajaPreInscripto(),
            'puede_modificar_preInscripto' => $this->getPuedeModificarPreInscripto(),
            'puede_aprobar_preInscripto' => $this->getPuedeAprobarPreInscripto(),
        ];
    }
}