<?php
class CategoryRenderer {

    /*
    Archivo css: public/css/shared/interactiveCards.css
    */
    public static function generateHTML($category):string{
        return "<div class=\"col\">
            <a href=\"vistas/categorias/{$category['title']}.php\" class=\"card-link\">
                <div class=\"image-container\">
                    <img class=\"lazyLoad\" id=\"imagen_{$category['id']}\" src=\"public/imagenes/categoria/BACKUP/{$category['image']}\" alt=\"{$category['name']}\">
                     <div class=\"overlay__card\">
                            <h2 class=\"card-title\">{$category['name']}</h2>
                        </div>
                </div>
            </a>
        </div>";
    }
}