<?php

/* ERBundle:Membre:chercher.html.twig */
class __TwigTemplate_edfdd5668587613f003620814ba7ceecd6e68e1256b8b5fab289576da6c16704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:chercher.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tab' => array($this, 'block_tab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::dream.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d49c3fe93ae547b4fd7fdf61a78ad031bb39df9648725759b631f62dbcfc4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d49c3fe93ae547b4fd7fdf61a78ad031bb39df9648725759b631f62dbcfc4c4->enter($__internal_0d49c3fe93ae547b4fd7fdf61a78ad031bb39df9648725759b631f62dbcfc4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d49c3fe93ae547b4fd7fdf61a78ad031bb39df9648725759b631f62dbcfc4c4->leave($__internal_0d49c3fe93ae547b4fd7fdf61a78ad031bb39df9648725759b631f62dbcfc4c4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_787880a232e4b777524990b590b27d48c1727984025b330266b5d639511102f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787880a232e4b777524990b590b27d48c1727984025b330266b5d639511102f2->enter($__internal_787880a232e4b777524990b590b27d48c1727984025b330266b5d639511102f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "             
                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"> 
                                <h3>Liste de toutes les membres</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1));
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >                                        
                                        <i class=\"glyphicon glyphicon-lock\"></i>
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                            href=\"#tabaides\" 
                                            data-toggle=\"tab\"
                                            onclick=\"return false;\"
                                            style=\"font-size: 15px;\" 
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 58
        $this->displayBlock('tab', $context, $blocks);
        // line 338
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_787880a232e4b777524990b590b27d48c1727984025b330266b5d639511102f2->leave($__internal_787880a232e4b777524990b590b27d48c1727984025b330266b5d639511102f2_prof);

    }

    // line 58
    public function block_tab($context, array $blocks = array())
    {
        $__internal_41112a8a9239ef6e9c041f50b759f9176e3a74b387c1449d6dcde8344cf73851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41112a8a9239ef6e9c041f50b759f9176e3a74b387c1449d6dcde8344cf73851->enter($__internal_41112a8a9239ef6e9c041f50b759f9176e3a74b387c1449d6dcde8344cf73851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        echo "                                   
                                        <div 
                                            class=\"table-responsive\" 
                                        >

                                            <div class=\"row\" style=\"margin-top: 10px;\">
                                                <div class=\"col-md-8\">
                                                    <form>
                                                        <div class=\"typeahead__container\">
                                                            <div class=\"typeahead__field\">

                                                                <span class=\"typeahead__query\">
                                                                    <input 
                                                                        class=\"js-typeahead\"
                                                                        name=\"q\"
                                                                        type=\"search\"
                                                                        autofocus
                                                                        autocomplete=\"off\"
                                                                        placeholder=\"Rechercher des membres\"
                                                                        style=\"font-size: 15px;\"
                                                                    >
                                                                </span>
                                                                <span class=\"typeahead__button\">
                                                                    <button 
                                                                        type=\"submit\" 
                                                                        style=\"height: 100%;font-size: 14px;\"
                                                                        onclick=\"return false;\" 
                                                                        >
                                                                        <span class=\"typeahead__search-icon\"></span>
                                                                    </button>
                                                                </span>                          
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid #24691c; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #318407c9;\">
                                                        <i class=\"fa fa-users\"></i>
                                                        ";
        // line 96
        echo twig_escape_filter($this->env, ($context["TotalMembres"] ?? $this->getContext($context, "TotalMembres")), "html", null, true);
        echo " Enregistrements
                                                    </div>
                                                </div>
                                            </div>

                                            <table 
                                                class=\"table table-striped\"
                                                style=\"border-right: 1px solid #dddddd; border-left: 1px solid #dddddd; border-bottom: 1px solid #dddddd;\"    
                                            >
                                            <tr class=\"row\">
                                                <td 
                                                    class=\"col-md-3\" 
                                                    style=\"padding-bottom: 0px; padding-top: 0px;\"
                                                >
                                                    <a 
                                                        href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1, "trie" => "nom", "ordre" => "ASC")), "html", null, true);
        // line 120
        echo "\"
                                                        style=\"display: block; width: 5px;\"
                                                        title=\"Trier par ordre croissant\" 
                                                    >
                                                        <img 
                                                            src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/fleche_croissant.png"), "html", null, true);
        echo "\" alt=\"Trier par ordre croissant\">
                                                    </a>
                                                    <a 
                                                        href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1, "trie" => "nom", "ordre" => "DESC")), "html", null, true);
        // line 137
        echo "\"
                                                        title=\"Trier par ordre décroissant\" 
                                                    >
                                                        <img 
                                                            src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/fleche_decroissant.png"), "html", null, true);
        echo "\" alt=\"Trier par ordre décroissant\"
                                                        >
                                                    </a>
                                                    <span 
                                                        style=\"color: black; position: relative; top: -8px;left: 8px;\"
                                                    >
                                                        <b>Nom</b>
                                                    </span>
                                                </td>
                                                <td 
                                                    class=\"col-md-3\" 
                                                    style=\"padding-bottom: 0px; padding-top: 0px;\"
                                                >
                                                    <a 
                                                        href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1, "trie" => "prenom", "ordre" => "ASC")), "html", null, true);
        // line 164
        echo "\"
                                                        style=\"display: block; width: 5px;\"
                                                        title=\"Trier par ordre croissant\" 
                                                    >
                                                        <img 
                                                            src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/fleche_croissant.png"), "html", null, true);
        echo "\" alt=\"Trier par ordre croissant\">
                                                    </a>
                                                    <a 
                                                        href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1, "trie" => "prenom", "ordre" => "DESC")), "html", null, true);
        // line 181
        echo "\"
                                                        title=\"Trier par ordre décroissant\" 
                                                    >
                                                        <img 
                                                            src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/fleche_decroissant.png"), "html", null, true);
        echo "\" alt=\"Trier par ordre décroissant\"
                                                        >
                                                    </a>
                                                    <span 
                                                        style=\"color: black; position: relative; top: -8px;left: 8px;\"
                                                    >
                                                        <b>Prenom</b>
                                                    </span>
                                                </td>
                                                <td 
                                                    class=\"col-md-3\" 
                                                    style=\"padding-bottom: 0px; padding-top: 0px;\"
                                                >
                                                    <a 
                                                        href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1, "trie" => "fonction", "ordre" => "ASC")), "html", null, true);
        // line 208
        echo "\"
                                                        style=\"display: block; width: 5px;\"
                                                        title=\"Trier par ordre croissant\" 
                                                    >
                                                        <img 
                                                            src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/fleche_croissant.png"), "html", null, true);
        echo "\" alt=\"Trier par ordre croissant\">
                                                    </a>
                                                    <a 
                                                        href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche", array("page" => 1, "trie" => "fonction", "ordre" => "DESC")), "html", null, true);
        // line 225
        echo "\"
                                                        title=\"Trier par ordre décroissant\" 
                                                    >
                                                        <img 
                                                            src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/fleche_decroissant.png"), "html", null, true);
        echo "\" alt=\"Trier par ordre décroissant\"
                                                        >
                                                    </a>
                                                    <span 
                                                        style=\"color: black; position: relative; top: -8px;left: 8px;\"
                                                    >
                                                        <b>Fonction</b>
                                                    </span>
                                                </td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
                                            </tr>
                                            <script type=\"text/javascript\">
                                                var datas = [];
                                                ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataSearch"] ?? $this->getContext($context, "dataSearch")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 243
            echo "                                                    datas.push(\"";
            echo twig_escape_filter($this->env, $context["s"], "html", null, true);
            echo "\");
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                                            </script>
                                            ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Membres"] ?? $this->getContext($context, "Membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["Membre"]) {
            // line 247
            echo "                                                <tr class=\"row\">
                                                    <td class=\"col-md-3\">";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "fonction", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"col-md-3\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <a 
                                                                    href=\"
                                                                    ";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_modifier", array("id" => $this->getAttribute(            // line 259
$context["Membre"], "id", array()))), "html", null, true);
            // line 261
            echo "\" 
                                                                    class=\"btn btn-sm btn-primary\">
                                                                    <i class=\"fa fa-pencil\"></i> 
                                                                    Modifier
                                                                </a>  
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <button 
                                                                    class=\"btn btn-sm btn-danger\"
                                                                    data-toggle=\"modal\" data-target=\"#modalSuppression";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\"
                                                                >
                                                                  Supprimer
                                                                </button>
                                                                <!-- <a 
                                                                    href=\"
                                                                    ";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 279
$context["Membre"], "id", array()))), "html", null, true);
            // line 281
            echo "\" 
                                                                    class=\"btn btn-sm btn-danger\">
                                                                    <i class=\"fa fa-pencil\"></i> 
                                                                    Supprimer
                                                                </a> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div 
                                                    class=\"modal fade in\" 
                                                    id=\"modalSuppression";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\" 
                                                    tabindex=\"-1\" 
                                                    role=\"dialog\" 
                                                    aria-labelledby=\"modalSuppression";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "id", array()), "html", null, true);
            echo "\" 
                                                    aria-hidden=\"false\"
                                                >
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                                <h2 
                                                                    class=\"modal-title\" 
                                                                    id=\"myModalLabel\"
                                                                    style=\"color: #fff;\"
                                                                >
                                                                    Attention!
                                                                </h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <h4>Voulez vous vraiment supprimer le membre <b>";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</b> ?</h3>
                                                            </div>
                                                            <div class=\"modal-footer\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                                <a 
                                                                    href=\"
                                                                    ";
            // line 317
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_supprimer", array("id" => $this->getAttribute(            // line 320
$context["Membre"], "id", array()))), "html", null, true);
            // line 322
            echo "\"
                                                                    class=\"btn btn-danger\"
                                                                >
                                                                    Supprimer
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "                                            </table>
                                            <div class=\"text-center\">
                                                ";
        // line 334
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["Membres"] ?? $this->getContext($context, "Membres")));
        echo "
                                            </div>
                                        </div>
                                    ";
        
        $__internal_41112a8a9239ef6e9c041f50b759f9176e3a74b387c1449d6dcde8344cf73851->leave($__internal_41112a8a9239ef6e9c041f50b759f9176e3a74b387c1449d6dcde8344cf73851_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:chercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 334,  434 => 332,  419 => 322,  417 => 320,  416 => 317,  405 => 311,  386 => 295,  380 => 292,  367 => 281,  365 => 279,  364 => 276,  355 => 270,  344 => 261,  342 => 259,  341 => 256,  332 => 250,  328 => 249,  324 => 248,  321 => 247,  317 => 246,  314 => 245,  305 => 243,  301 => 242,  285 => 229,  279 => 225,  277 => 216,  271 => 213,  264 => 208,  262 => 199,  245 => 185,  239 => 181,  237 => 172,  231 => 169,  224 => 164,  222 => 155,  205 => 141,  199 => 137,  197 => 128,  191 => 125,  184 => 120,  182 => 111,  164 => 96,  119 => 58,  108 => 338,  106 => 58,  80 => 35,  66 => 24,  52 => 13,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::dream.html.twig' %}

                {% block content %}             
                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"> 
                                <h3>Liste de toutes les membres</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_ajout') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_cherche', {'page': 1}) }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >
                                        <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_admin') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                            style=\"font-size: 15px;\" 
                                        >                                        
                                        <i class=\"glyphicon glyphicon-lock\"></i>
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                            href=\"#tabaides\" 
                                            data-toggle=\"tab\"
                                            onclick=\"return false;\"
                                            style=\"font-size: 15px;\" 
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    {% block tab %}                                   
                                        <div 
                                            class=\"table-responsive\" 
                                        >

                                            <div class=\"row\" style=\"margin-top: 10px;\">
                                                <div class=\"col-md-8\">
                                                    <form>
                                                        <div class=\"typeahead__container\">
                                                            <div class=\"typeahead__field\">

                                                                <span class=\"typeahead__query\">
                                                                    <input 
                                                                        class=\"js-typeahead\"
                                                                        name=\"q\"
                                                                        type=\"search\"
                                                                        autofocus
                                                                        autocomplete=\"off\"
                                                                        placeholder=\"Rechercher des membres\"
                                                                        style=\"font-size: 15px;\"
                                                                    >
                                                                </span>
                                                                <span class=\"typeahead__button\">
                                                                    <button 
                                                                        type=\"submit\" 
                                                                        style=\"height: 100%;font-size: 14px;\"
                                                                        onclick=\"return false;\" 
                                                                        >
                                                                        <span class=\"typeahead__search-icon\"></span>
                                                                    </button>
                                                                </span>                          
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <div style=\"margin-bottom: 5px; width: 300px; border: 1px solid #24691c; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #318407c9;\">
                                                        <i class=\"fa fa-users\"></i>
                                                        {{ TotalMembres }} Enregistrements
                                                    </div>
                                                </div>
                                            </div>

                                            <table 
                                                class=\"table table-striped\"
                                                style=\"border-right: 1px solid #dddddd; border-left: 1px solid #dddddd; border-bottom: 1px solid #dddddd;\"    
                                            >
                                            <tr class=\"row\">
                                                <td 
                                                    class=\"col-md-3\" 
                                                    style=\"padding-bottom: 0px; padding-top: 0px;\"
                                                >
                                                    <a 
                                                        href=\"{{ 
                                                            path(
                                                                'er_cherche', 
                                                                {
                                                                    'page': 1, 
                                                                    'trie': 'nom', 
                                                                    'ordre': 'ASC'
                                                                }
                                                            ) 
                                                        }}\"
                                                        style=\"display: block; width: 5px;\"
                                                        title=\"Trier par ordre croissant\" 
                                                    >
                                                        <img 
                                                            src=\"{{ asset('images/icons/fleche_croissant.png') }}\" alt=\"Trier par ordre croissant\">
                                                    </a>
                                                    <a 
                                                        href=\"{{ 
                                                            path(
                                                                'er_cherche', 
                                                                {
                                                                    'page': 1, 
                                                                    'trie': 'nom', 
                                                                    'ordre': 'DESC'
                                                                }
                                                            ) 
                                                        }}\"
                                                        title=\"Trier par ordre décroissant\" 
                                                    >
                                                        <img 
                                                            src=\"{{ asset('images/icons/fleche_decroissant.png') }}\" alt=\"Trier par ordre décroissant\"
                                                        >
                                                    </a>
                                                    <span 
                                                        style=\"color: black; position: relative; top: -8px;left: 8px;\"
                                                    >
                                                        <b>Nom</b>
                                                    </span>
                                                </td>
                                                <td 
                                                    class=\"col-md-3\" 
                                                    style=\"padding-bottom: 0px; padding-top: 0px;\"
                                                >
                                                    <a 
                                                        href=\"{{ 
                                                            path(
                                                                'er_cherche', 
                                                                {
                                                                    'page': 1, 
                                                                    'trie': 'prenom', 
                                                                    'ordre': 'ASC'
                                                                }
                                                            ) 
                                                        }}\"
                                                        style=\"display: block; width: 5px;\"
                                                        title=\"Trier par ordre croissant\" 
                                                    >
                                                        <img 
                                                            src=\"{{ asset('images/icons/fleche_croissant.png') }}\" alt=\"Trier par ordre croissant\">
                                                    </a>
                                                    <a 
                                                        href=\"{{ 
                                                            path(
                                                                'er_cherche', 
                                                                {
                                                                    'page': 1, 
                                                                    'trie': 'prenom', 
                                                                    'ordre': 'DESC'
                                                                }
                                                            ) 
                                                        }}\"
                                                        title=\"Trier par ordre décroissant\" 
                                                    >
                                                        <img 
                                                            src=\"{{ asset('images/icons/fleche_decroissant.png') }}\" alt=\"Trier par ordre décroissant\"
                                                        >
                                                    </a>
                                                    <span 
                                                        style=\"color: black; position: relative; top: -8px;left: 8px;\"
                                                    >
                                                        <b>Prenom</b>
                                                    </span>
                                                </td>
                                                <td 
                                                    class=\"col-md-3\" 
                                                    style=\"padding-bottom: 0px; padding-top: 0px;\"
                                                >
                                                    <a 
                                                        href=\"{{ 
                                                            path(
                                                                'er_cherche', 
                                                                {
                                                                    'page': 1, 
                                                                    'trie': 'fonction', 
                                                                    'ordre': 'ASC'
                                                                }
                                                            ) 
                                                        }}\"
                                                        style=\"display: block; width: 5px;\"
                                                        title=\"Trier par ordre croissant\" 
                                                    >
                                                        <img 
                                                            src=\"{{ asset('images/icons/fleche_croissant.png') }}\" alt=\"Trier par ordre croissant\">
                                                    </a>
                                                    <a 
                                                        href=\"{{ 
                                                            path(
                                                                'er_cherche', 
                                                                {
                                                                    'page': 1, 
                                                                    'trie': 'fonction', 
                                                                    'ordre': 'DESC'
                                                                }
                                                            ) 
                                                        }}\"
                                                        title=\"Trier par ordre décroissant\" 
                                                    >
                                                        <img 
                                                            src=\"{{ asset('images/icons/fleche_decroissant.png') }}\" alt=\"Trier par ordre décroissant\"
                                                        >
                                                    </a>
                                                    <span 
                                                        style=\"color: black; position: relative; top: -8px;left: 8px;\"
                                                    >
                                                        <b>Fonction</b>
                                                    </span>
                                                </td>
                                                <td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
                                            </tr>
                                            <script type=\"text/javascript\">
                                                var datas = [];
                                                {% for s in dataSearch %}
                                                    datas.push(\"{{s}}\");
                                                {% endfor %}
                                            </script>
                                            {% for Membre in Membres %}
                                                <tr class=\"row\">
                                                    <td class=\"col-md-3\">{{ Membre.nom }}</td>
                                                    <td class=\"col-md-3\">{{ Membre.prenom }}</td>
                                                    <td class=\"col-md-3\">{{ Membre.fonction }}</td>
                                                    <td class=\"col-md-3\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <a 
                                                                    href=\"
                                                                    {{ 
                                                                        path(
                                                                            'er_modifier',
                                                                            { 'id': Membre.id }
                                                                        ) 
                                                                    }}\" 
                                                                    class=\"btn btn-sm btn-primary\">
                                                                    <i class=\"fa fa-pencil\"></i> 
                                                                    Modifier
                                                                </a>  
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <button 
                                                                    class=\"btn btn-sm btn-danger\"
                                                                    data-toggle=\"modal\" data-target=\"#modalSuppression{{Membre.id}}\"
                                                                >
                                                                  Supprimer
                                                                </button>
                                                                <!-- <a 
                                                                    href=\"
                                                                    {{ 
                                                                        path(
                                                                            'er_supprimer',
                                                                            { 'id': Membre.id }
                                                                        ) 
                                                                    }}\" 
                                                                    class=\"btn btn-sm btn-danger\">
                                                                    <i class=\"fa fa-pencil\"></i> 
                                                                    Supprimer
                                                                </a> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div 
                                                    class=\"modal fade in\" 
                                                    id=\"modalSuppression{{Membre.id}}\" 
                                                    tabindex=\"-1\" 
                                                    role=\"dialog\" 
                                                    aria-labelledby=\"modalSuppression{{Membre.id}}\" 
                                                    aria-hidden=\"false\"
                                                >
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                                <h2 
                                                                    class=\"modal-title\" 
                                                                    id=\"myModalLabel\"
                                                                    style=\"color: #fff;\"
                                                                >
                                                                    Attention!
                                                                </h2>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <h4>Voulez vous vraiment supprimer le membre <b>{{Membre.nom}} {{Membre.prenom}}</b> ?</h3>
                                                            </div>
                                                            <div class=\"modal-footer\" style=\"background: #ef150a;\">
                                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                                <a 
                                                                    href=\"
                                                                    {{ 
                                                                        path(
                                                                            'er_supprimer',
                                                                            { 'id': Membre.id }
                                                                        ) 
                                                                    }}\"
                                                                    class=\"btn btn-danger\"
                                                                >
                                                                    Supprimer
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            {% endfor %}
                                            </table>
                                            <div class=\"text-center\">
                                                {{ knp_pagination_render(Membres) }}
                                            </div>
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}", "ERBundle:Membre:chercher.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/chercher.html.twig");
    }
}
