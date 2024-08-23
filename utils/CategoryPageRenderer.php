<?php
// Incluimos la clase responsable de renderizar individualmente las categorías.

/**
 * Clase CategoryPageRenderer
 * Esta clase se encarga de manejar y renderizar todas las categorías de un conjunto de datos.
 */
require_once("CategoryRenderer.php");

class CategoryPageRenderer{

    /**
     * @var array $categories Almacena todas las categorías que serán renderizadas.
     */
    private $categories;

    /**
     * Constructor de la clase CategoryPageRenderer.
     * Carga las categorías desde un archivo de datos externo.
     */
    public function __construct()
    {
        // Carga las categorías desde un archivo PHP externo ubicado en la carpeta de datos.
        $this->categories= require_once __DIR__ .'/../data/categories.php';
    }

    /**
     * Renderiza el HTML para todas las categorías cargadas.
     *
     * @return string HTML generado para todas las categorías.
     */
    public function renderCategories()
    {
        // Inicializa una cadena vacía para acumular el HTML de todas las categorías.
        $categoriesHTML= '';
        // Itera sobre el array de categorías, generando el HTML para cada una usando la clase CategoryRenderer.
        foreach ($this->categories as $category) {
            $categoriesHTML .=CategoryRenderer::generateHTML($category);
        }
        return $categoriesHTML;
    }
}