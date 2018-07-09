<?php

/* ERBundle:Membre:chercher.html.twig */
class __TwigTemplate_15c820c94e0e5ddfd494d0468c6f3e21a7bfd80c28bc5503d533c4dd853b3992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::membre.html.twig", "ERBundle:Membre:chercher.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::membre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b895cb35483df797d42c0f02b5daa321825974bda4d2dc82d3031405c4cffdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b895cb35483df797d42c0f02b5daa321825974bda4d2dc82d3031405c4cffdc->enter($__internal_5b895cb35483df797d42c0f02b5daa321825974bda4d2dc82d3031405c4cffdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:chercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b895cb35483df797d42c0f02b5daa321825974bda4d2dc82d3031405c4cffdc->leave($__internal_5b895cb35483df797d42c0f02b5daa321825974bda4d2dc82d3031405c4cffdc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce1bfc22f243b0664b5f628f057e5a7f5fb7937157eae52bf07113eabd9417d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1bfc22f243b0664b5f628f057e5a7f5fb7937157eae52bf07113eabd9417d2->enter($__internal_ce1bfc22f243b0664b5f628f057e5a7f5fb7937157eae52bf07113eabd9417d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t\t<style type=\"text/css\">
\t\t\ttd {
\t\t\t\tborder: none !important;
\t\t\t\tcolor: white !important;
\t\t\t}
\t\t</style>\t
\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; background: #757272; margin-top: 10px;\"
\t\t>

\t\t\t<div 
\t\t\t\tclass=\"col-md-12\" style=\"padding-right: 0px;\" 
\t\t\t>
\t\t\t\t<div style=\"margin-bottom: 5px; width: 300px; border: 1px solid white; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #151105c9;\">
\t\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, ($context["TotalMembres"] ?? $this->getContext($context, "TotalMembres")), "html", null, true);
        echo " Enregistrements
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-12\" style=\"margin-bottom: 5px;\">
\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img 
\t\t\t\t\t\t\t\tsrc=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/Loupe-icon.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important; float: right; width: 13%;\" 
\t\t\t\t\t\t\t>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5\" style=\"padding-left: 0px;\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\t\tname=\"rechercher\"
\t\t\t\t\t\t\t\tplaceholder=\"Rechercher une donnée (nom, prénom, fonction, région, ...)\"
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1\" style=\"padding-left: 0px;\">
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\ttype=\"submit\" 
\t\t\t\t\t\t\t\tclass=\"btn btn-success\"  
\t\t\t\t\t\t\t\tvalue=\"Rechercher\"
\t\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"col-md-12\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Nom</b></span></td>
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Prenom</b></span></td>
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Fonction</b></span></td>
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Membres"] ?? $this->getContext($context, "Membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["Membre"]) {
            // line 62
            echo "\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t<td class=\"col-md-3\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"col-md-3\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"col-md-3\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["Membre"], "fonction", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-warning\">Modifier</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>\t
\t";
        
        $__internal_ce1bfc22f243b0664b5f628f057e5a7f5fb7937157eae52bf07113eabd9417d2->leave($__internal_ce1bfc22f243b0664b5f628f057e5a7f5fb7937157eae52bf07113eabd9417d2_prof);

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
        return array (  139 => 78,  120 => 65,  116 => 64,  112 => 63,  109 => 62,  105 => 61,  69 => 28,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::membre.html.twig' %}

\t{% block content %}
\t\t<style type=\"text/css\">
\t\t\ttd {
\t\t\t\tborder: none !important;
\t\t\t\tcolor: white !important;
\t\t\t}
\t\t</style>\t
\t\t<div 
\t\t\tclass=\"row\" 
\t\t\tstyle=\"border: 1px solid black; margin-top: 10px; background: #757272; margin-top: 10px;\"
\t\t>

\t\t\t<div 
\t\t\t\tclass=\"col-md-12\" style=\"padding-right: 0px;\" 
\t\t\t>
\t\t\t\t<div style=\"margin-bottom: 5px; width: 300px; border: 1px solid white; float: right; padding-bottom: 2px; padding-top: 2px; text-align: center; color: white; margin-top: 5px; background: #151105c9;\">
\t\t\t\t\t{{ TotalMembres }} Enregistrements
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-12\" style=\"margin-bottom: 5px;\">
\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img 
\t\t\t\t\t\t\t\tsrc=\"{{ asset('images/icons/Loupe-icon.png') }}\"
\t\t\t\t\t\t\t\tstyle=\"vertical-align: text-top !important; float: right; width: 13%;\" 
\t\t\t\t\t\t\t>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5\" style=\"padding-left: 0px;\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\t\tname=\"rechercher\"
\t\t\t\t\t\t\t\tplaceholder=\"Rechercher une donnée (nom, prénom, fonction, région, ...)\"
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1\" style=\"padding-left: 0px;\">
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\ttype=\"submit\" 
\t\t\t\t\t\t\t\tclass=\"btn btn-success\"  
\t\t\t\t\t\t\t\tvalue=\"Rechercher\"
\t\t\t\t\t\t\t>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"col-md-12\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Nom</b></span></td>
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Prenom</b></span></td>
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Fonction</b></span></td>
\t\t\t\t\t<td class=\"col-md-3\"><span style=\"color: black;\"><b>Action</b></span></td>
\t\t\t\t</tr>
\t\t\t\t{% for Membre in Membres %}
\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t<td class=\"col-md-3\">{{ Membre.nom }}</td>
\t\t\t\t\t\t<td class=\"col-md-3\">{{ Membre.prenom }}</td>
\t\t\t\t\t\t<td class=\"col-md-3\">{{ Membre.fonction }}</td>
\t\t\t\t\t\t<td class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-warning\">Modifier</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>\t
\t{% endblock %}", "ERBundle:Membre:chercher.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/chercher.html.twig");
    }
}
