<?php
/*
 * Plugin Name:       Plugin Sistema de Ingreso a Carreras INSPT
 * Plugin URI:        The home page of the plugin, which should be a unique URL, preferably on your own website. This must be unique to your plugin. You cannot use a WordPress.org URL here.Example: https://example.com/plugins/the-basics/
 * Description:       Sistema de inscripción a carreras del Instituto Nacional Superior del Profesorado Técnico
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Juan Ignacio Szapiro
 * Author URI:        https://github.com/JuanIgnacioSzapiro
 * License:           GPL v2 or later
 * License URI:       A link to the full text of the license. Example: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       plugin-sistema-de-ingreso-a-carreras-INSPT
 */

// archivo de activacion
require_once dirname(__FILE__) . "/activar.php";

// archivo de desactivacion
require_once dirname(__FILE__) . "/desactivar.php";

// archivo de desinstalación
require_once dirname(__FILE__) . "/desinstalar.php";

// archivo indice MODIFICAR/REEMPLAZAR
require_once dirname(__FILE__) . "/public/inicio_de_sesion/inicio_sesion.php";


// On activation, plugins can run a routine to add rewrite rules, add custom database tables, or set default option values.
register_activation_hook(__FILE__, 'activar_plugin');

// On deactivation, plugins can run a routine to remove temporary data such as cache and temp files and directories
//register_deactivation_hook(__FILE__, 'desactivar_plugin');
register_deactivation_hook(__FILE__, 'desinstalar_plugin');

// When your plugin is uninstalled, you’ll want to clear out any plugin options and/or settings specific to the plugin, and/or other database entities such as tables.
//register_uninstall_hook(__FILE__,'desinstalar_plugin');

/*
This table illustrates the differences between deactivation and uninstall.
Scenario                 | Deactivation Hook | Uninstall Hook
-------------------------|-------------------|----------------   
Flush Cache/Temp         |       Yes         |       No
-------------------------|-------------------|----------------
Flush Permalinks         |       Yes         |       No
-------------------------|-------------------|----------------
Remove Options from      |       No          |       Yes
{$wpdb->prefix}_options  |                   |
-------------------------|-------------------|----------------
Remove Tables from wpdb  |       No          |       Yes
*/

function mi_indice_redireccionamiento()
{
    if (is_front_page()) {
        echo do_shortcode('[mi_indice_shotcode]');
        exit; // End script to prevent the default theme template from loading
    }
}
add_action('template_redirect', 'mi_indice_redireccionamiento');
